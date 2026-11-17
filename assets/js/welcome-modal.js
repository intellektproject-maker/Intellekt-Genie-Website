/**
 * Intellekt Genie - Welcome Slideshow Popup Controller
 * Manages automatic slideshow, session storage persistence, keyboard controls,
 * pause-on-interaction, and responsive display.
 */
(function () {
    'use strict';

    var STORAGE_KEY = 'ig_welcome_slideshow_seen';
    var SLIDE_DURATION = 5000; // 5 seconds per slide

    function initWelcomeModal() {
        // 1. Session Storage check: Only show once per browser session
        try {
            if (sessionStorage.getItem(STORAGE_KEY) === 'true') {
                return;
            }
        } catch (e) {
            // If sessionStorage is restricted (e.g. security sandbox), proceed gracefully
        }

        var modal = document.getElementById('igWelcomeModal');
        if (!modal) return;

        var dialog = document.getElementById('igWelcomeDialog');
        var backdrop = document.getElementById('igWelcomeBackdrop');
        var closeBtn = document.getElementById('igWelcomeClose');
        var skipBtn = document.getElementById('igWelcomeSkip');
        var exploreBtn = document.getElementById('igWelcomeExplore');
        var prevBtn = document.getElementById('igWelcomePrev');
        var nextBtn = document.getElementById('igWelcomeNext');
        var counter = document.getElementById('igWelcomeCounter');
        var timerFill = document.getElementById('igWelcomeTimerFill');
        var slides = modal.querySelectorAll('.ig-welcome-slide');
        var dots = modal.querySelectorAll('.ig-welcome-dot');

        if (!slides.length) return;

        var currentSlide = 0;
        var totalSlides = slides.length;
        var timerId = null;
        var progressIntervalId = null;
        var isPaused = false;
        var progressStep = 0;
        var progressIntervalMs = 50;
        var totalSteps = SLIDE_DURATION / progressIntervalMs;

        // Display modal
        modal.style.display = 'flex';
        // Force reflow for CSS transition
        void modal.offsetWidth;
        modal.classList.add('is-active');

        // Lock background scroll
        var originalDocOverflow = document.documentElement.style.overflow;
        var originalBodyOverflow = document.body.style.overflow;
        document.documentElement.style.overflow = 'hidden';
        document.body.style.overflow = 'hidden';

        function updateSlideUI() {
            slides.forEach(function (slide, idx) {
                if (idx === currentSlide) {
                    slide.classList.add('active');
                    slide.setAttribute('aria-hidden', 'false');
                } else {
                    slide.classList.remove('active');
                    slide.setAttribute('aria-hidden', 'true');
                }
            });

            dots.forEach(function (dot, idx) {
                if (idx === currentSlide) {
                    dot.classList.add('active');
                    dot.setAttribute('aria-selected', 'true');
                } else {
                    dot.classList.remove('active');
                    dot.setAttribute('aria-selected', 'false');
                }
            });

            if (counter) {
                var currentFormatted = ('0' + (currentSlide + 1)).slice(-2);
                var totalFormatted = ('0' + totalSlides).slice(-2);
                counter.textContent = currentFormatted + ' / ' + totalFormatted;
            }

            // Reset progress bar
            resetProgress();
        }

        function resetProgress() {
            progressStep = 0;
            if (timerFill) {
                timerFill.style.width = '0%';
            }
        }

        function goToSlide(index) {
            currentSlide = (index + totalSlides) % totalSlides;
            updateSlideUI();
            restartTimer();
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        function advanceProgress() {
            if (isPaused) return;

            progressStep++;
            if (timerFill) {
                var percentage = Math.min(100, (progressStep / totalSteps) * 100);
                timerFill.style.width = percentage + '%';
            }

            if (progressStep >= totalSteps) {
                nextSlide();
            }
        }

        function startTimer() {
            stopTimer();
            progressIntervalId = setInterval(advanceProgress, progressIntervalMs);
        }

        function stopTimer() {
            if (progressIntervalId) {
                clearInterval(progressIntervalId);
                progressIntervalId = null;
            }
        }

        function restartTimer() {
            stopTimer();
            resetProgress();
            startTimer();
        }

        function pauseTimer() {
            isPaused = true;
        }

        function resumeTimer() {
            isPaused = false;
        }

        function closeModal() {
            // Stop timers immediately
            stopTimer();

            // Record in session storage so it doesn't appear on subsequent page navigation
            try {
                sessionStorage.setItem(STORAGE_KEY, 'true');
            } catch (e) {
                // Ignore storage failure
            }

            // Restore scroll
            document.documentElement.style.overflow = originalDocOverflow;
            document.body.style.overflow = originalBodyOverflow;

            // Animate close
            modal.classList.remove('is-active');

            // Remove keyboard and click listeners
            document.removeEventListener('keydown', handleKeydown);

            setTimeout(function () {
                modal.style.display = 'none';
            }, 300);
        }

        function handleKeydown(event) {
            if (modal.classList.contains('is-active')) {
                if (event.key === 'Escape' || event.key === 'Esc') {
                    event.preventDefault();
                    closeModal();
                } else if (event.key === 'ArrowRight') {
                    event.preventDefault();
                    nextSlide();
                } else if (event.key === 'ArrowLeft') {
                    event.preventDefault();
                    prevSlide();
                }
            }
        }

        // Attach event handlers
        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (skipBtn) skipBtn.addEventListener('click', closeModal);
        if (exploreBtn) exploreBtn.addEventListener('click', closeModal);
        if (backdrop) backdrop.addEventListener('click', closeModal);

        if (nextBtn) nextBtn.addEventListener('click', function (e) {
            e.preventDefault();
            nextSlide();
        });

        if (prevBtn) prevBtn.addEventListener('click', function (e) {
            e.preventDefault();
            prevSlide();
        });

        dots.forEach(function (dot) {
            dot.addEventListener('click', function (e) {
                e.preventDefault();
                var targetIdx = parseInt(dot.getAttribute('data-goto'), 10);
                if (!isNaN(targetIdx)) {
                    goToSlide(targetIdx);
                }
            });
        });

        // Pause automatic advancement on user interaction (hover, focus, touch)
        if (dialog) {
            dialog.addEventListener('mouseenter', pauseTimer);
            dialog.addEventListener('mouseleave', resumeTimer);
            dialog.addEventListener('touchstart', pauseTimer, { passive: true });
            dialog.addEventListener('touchend', resumeTimer, { passive: true });
            dialog.addEventListener('focusin', pauseTimer);
            dialog.addEventListener('focusout', resumeTimer);
        }

        document.addEventListener('keydown', handleKeydown);

        // Initialize state
        updateSlideUI();
        startTimer();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initWelcomeModal);
    } else {
        initWelcomeModal();
    }
})();
