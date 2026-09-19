/**
 * gallery.js - Cinematic Gallery Showcase Controller
 * Intellekt Genie / Intellekt Robotics
 * Lightweight native JavaScript, touch-enabled, keyboard navigation,
 * manual carousel only, accessible lightbox.
 */
(function () {
    'use strict';

    function initGallery() {
        var stage = document.querySelector('.cg-stage');
        if (!stage) return;

        var slides = Array.prototype.slice.call(stage.querySelectorAll('.cg-slide'));
        var thumbs = Array.prototype.slice.call(stage.querySelectorAll('.cg-thumb-item'));
        var prevBtn = stage.querySelector('.cg-nav-prev');
        var nextBtn = stage.querySelector('.cg-nav-next');
        var counterCurrent = stage.querySelector('.cg-counter-current');
        var counterTotal = stage.querySelector('.cg-counter-total');
        var progressBar = stage.querySelector('.cg-progress-bar');
        var thumbsScroll = stage.querySelector('.cg-thumbs-scroll');

        // Lightbox Elements
        var lightbox = document.getElementById('cg-lightbox');
        var lightboxImg = document.getElementById('cg-lightbox-img');
        var lightboxClose = document.getElementById('cg-lightbox-close');
        var lightboxPrev = document.getElementById('cg-lightbox-prev');
        var lightboxNext = document.getElementById('cg-lightbox-next');
        var lightboxCurrent = document.getElementById('cg-lightbox-current');
        var lightboxTotal = document.getElementById('cg-lightbox-total');

        var total = slides.length;
        if (!total) return;

        var currentIndex = 0;

        // Formatter for two-digit numbers (01, 02, etc.)
        function pad(num) {
            return num < 10 ? '0' + num : '' + num;
        }

        // Initialize counters
        if (counterTotal) counterTotal.textContent = pad(total);
        if (lightboxTotal) lightboxTotal.textContent = pad(total);

        // Update progress bar to reflect current position in collection (e.g. slide 1 of 29 = ~3.4%)
        function updateProgress(index) {
            if (progressBar && total > 0) {
                var pct = ((index + 1) / total) * 100;
                progressBar.style.width = pct + '%';
            }
        }

        // Update active slide classes and side previews
        function updateSlides(index) {
            currentIndex = (index + total) % total;

            var prevIndex = (currentIndex - 1 + total) % total;
            var nextIndex = (currentIndex + 1) % total;

            slides.forEach(function (slide, i) {
                slide.classList.remove('is-active', 'is-prev', 'is-next');
                slide.setAttribute('aria-hidden', 'true');

                if (i === currentIndex) {
                    slide.classList.add('is-active');
                    slide.setAttribute('aria-hidden', 'false');
                } else if (i === prevIndex) {
                    slide.classList.add('is-prev');
                } else if (i === nextIndex) {
                    slide.classList.add('is-next');
                }
            });

            // Update Counter
            if (counterCurrent) counterCurrent.textContent = pad(currentIndex + 1);

            // Update Position Progress Bar
            updateProgress(currentIndex);

            // Update Thumbnails
            thumbs.forEach(function (thumb, i) {
                if (i === currentIndex) {
                    thumb.classList.add('is-active');
                    thumb.setAttribute('aria-selected', 'true');
                    // Ensure active thumbnail is scrolled into view smoothly
                    if (thumbsScroll) {
                        var scrollLeft = thumb.offsetLeft - (thumbsScroll.clientWidth / 2) + (thumb.clientWidth / 2);
                        try {
                            thumbsScroll.scrollTo({ left: scrollLeft, behavior: 'smooth' });
                        } catch (err) {
                            thumbsScroll.scrollLeft = scrollLeft;
                        }
                    }
                } else {
                    thumb.classList.remove('is-active');
                    thumb.setAttribute('aria-selected', 'false');
                }
            });

            // Update Lightbox if currently open
            if (lightbox && lightbox.classList.contains('is-open')) {
                updateLightboxImage();
            }
        }

        // ── Navigation Actions ─────────────────────────────────────
        function nextSlide() {
            updateSlides(currentIndex + 1);
        }

        function prevSlide() {
            updateSlides(currentIndex - 1);
        }

        function goToSlide(i) {
            updateSlides(i);
        }

        // ── Button Clicks ──────────────────────────────────────────
        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                prevSlide();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                nextSlide();
            });
        }

        // Side previews clickable
        slides.forEach(function (slide) {
            slide.addEventListener('click', function (e) {
                if (slide.classList.contains('is-prev')) {
                    e.preventDefault();
                    prevSlide();
                } else if (slide.classList.contains('is-next')) {
                    e.preventDefault();
                    nextSlide();
                } else if (slide.classList.contains('is-active')) {
                    // Clicking main active image opens lightbox
                    openLightbox();
                }
            });
        });

        // Thumbnails Clicks
        thumbs.forEach(function (thumb, idx) {
            thumb.addEventListener('click', function () {
                goToSlide(idx);
            });
        });

        // ── Touch & Swipe Support for Mobile ───────────────────────
        var touchStartX = 0;
        var touchEndX = 0;
        var touchStartY = 0;
        var touchEndY = 0;
        var showcaseEl = stage.querySelector('.cg-showcase');

        if (showcaseEl) {
            showcaseEl.addEventListener('touchstart', function (e) {
                touchStartX = e.changedTouches[0].screenX;
                touchStartY = e.changedTouches[0].screenY;
            }, { passive: true });

            showcaseEl.addEventListener('touchend', function (e) {
                touchEndX = e.changedTouches[0].screenX;
                touchEndY = e.changedTouches[0].screenY;
                handleSwipe();
            }, { passive: true });
        }

        function handleSwipe() {
            var diffX = touchEndX - touchStartX;
            var diffY = touchEndY - touchStartY;
            // Ensure horizontal swipe is dominant and above threshold (40px)
            if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 40) {
                if (diffX < 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        }

        // ── Lightbox Implementation ────────────────────────────────
        function updateLightboxImage() {
            if (!lightboxImg) return;
            var activeImg = slides[currentIndex].querySelector('img');
            if (!activeImg) return;

            lightboxImg.src = activeImg.src;
            lightboxImg.alt = activeImg.alt || ('Gallery Image ' + (currentIndex + 1));
            if (lightboxCurrent) lightboxCurrent.textContent = pad(currentIndex + 1);
        }

        function openLightbox() {
            if (!lightbox) return;
            updateLightboxImage();
            lightbox.classList.add('is-open');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden'; // prevent background scrolling
        }

        function closeLightbox() {
            if (!lightbox) return;
            lightbox.classList.remove('is-open');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        if (lightboxClose) {
            lightboxClose.addEventListener('click', closeLightbox);
        }

        if (lightboxPrev) {
            lightboxPrev.addEventListener('click', function (e) {
                e.stopPropagation();
                prevSlide();
            });
        }

        if (lightboxNext) {
            lightboxNext.addEventListener('click', function (e) {
                e.stopPropagation();
                nextSlide();
            });
        }

        // Close lightbox by clicking backdrop (outside image and buttons)
        if (lightbox) {
            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox || e.target.classList.contains('cg-lightbox-content')) {
                    closeLightbox();
                }
            });
        }

        // ── Keyboard Navigation ────────────────────────────────────
        document.addEventListener('keydown', function (e) {
            var isLightboxOpen = lightbox && lightbox.classList.contains('is-open');

            if (e.key === 'Escape' && isLightboxOpen) {
                closeLightbox();
                return;
            }

            // Arrow keys work for both lightbox and main showcase
            if (e.key === 'ArrowRight' || e.key === 'Right') {
                nextSlide();
            } else if (e.key === 'ArrowLeft' || e.key === 'Left') {
                prevSlide();
            }
        });

        // ── Start presentation ─────────────────────────────────────
        updateSlides(0);
    }

    // Initialize reliably whether the script executes before or after DOMContentLoaded.
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initGallery, { once: true });
    } else {
        initGallery();
    }
})();
