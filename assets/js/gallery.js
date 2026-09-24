/**
 * gallery.js - Reliable Cinematic Gallery Controller
 * Intellekt Genie / Intellekt Robotics
 *
 * Native JavaScript carousel with:
 * - deterministic autoplay
 * - preloading of adjacent images
 * - previous/next controls
 * - thumbnail navigation
 * - keyboard navigation
 * - touch/swipe navigation
 * - lightbox support
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
        var autoSlideTimer = null;
        var autoSlideDelay = 5000;
        var transitionLock = false;
        var isPageVisible = !document.hidden;
        var isLightboxOpen = false;

        function pad(num) {
            return num < 10 ? '0' + num : String(num);
        }

        function preloadImage(index) {
            if (index < 0 || index >= total) return;
            var img = slides[index].querySelector('img');
            if (!img) return;

            var preload = new Image();
            preload.decoding = 'async';
            preload.src = img.currentSrc || img.src;
        }

        function preloadAdjacent(index) {
            preloadImage((index + 1) % total);
            preloadImage((index - 1 + total) % total);
        }

        function updateProgress(index) {
            if (!progressBar || total < 1) return;
            progressBar.style.width = (((index + 1) / total) * 100) + '%';
        }

        function scrollActiveThumbIntoView(index) {
            if (!thumbsScroll || !thumbs[index]) return;

            var thumb = thumbs[index];
            var target = thumb.offsetLeft - (thumbsScroll.clientWidth / 2) + (thumb.offsetWidth / 2);

            if (typeof thumbsScroll.scrollTo === 'function') {
                try {
                    thumbsScroll.scrollTo({ left: target, behavior: 'smooth' });
                    return;
                } catch (e) {
                    // Fall back below.
                }
            }
            thumbsScroll.scrollLeft = target;
        }

        function updateSlides(index) {
            currentIndex = ((index % total) + total) % total;

            var prevIndex = (currentIndex - 1 + total) % total;
            var nextIndex = (currentIndex + 1) % total;

            slides.forEach(function (slide, i) {
                slide.classList.remove('is-active', 'is-prev', 'is-next');

                if (i === currentIndex) {
                    slide.classList.add('is-active');
                    slide.setAttribute('aria-hidden', 'false');
                } else if (i === prevIndex) {
                    slide.classList.add('is-prev');
                    slide.setAttribute('aria-hidden', 'true');
                } else if (i === nextIndex) {
                    slide.classList.add('is-next');
                    slide.setAttribute('aria-hidden', 'true');
                } else {
                    slide.setAttribute('aria-hidden', 'true');
                }
            });

            if (counterCurrent) counterCurrent.textContent = pad(currentIndex + 1);
            updateProgress(currentIndex);

            thumbs.forEach(function (thumb, i) {
                var active = i === currentIndex;
                thumb.classList.toggle('is-active', active);
                thumb.setAttribute('aria-selected', active ? 'true' : 'false');
            });

            scrollActiveThumbIntoView(currentIndex);
            preloadAdjacent(currentIndex);

            if (isLightboxOpen) {
                updateLightboxImage();
            }
        }

        function nextSlide() {
            updateSlides(currentIndex + 1);
        }

        function prevSlide() {
            updateSlides(currentIndex - 1);
        }

        function stopAutoSlide() {
            if (autoSlideTimer !== null) {
                window.clearInterval(autoSlideTimer);
                autoSlideTimer = null;
            }
        }

        function startAutoSlide() {
            stopAutoSlide();

            if (total < 2 || !isPageVisible || isLightboxOpen ||
                window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                return;
            }

            autoSlideTimer = window.setInterval(function () {
                if (!isPageVisible || isLightboxOpen || transitionLock) return;
                nextSlide();
            }, autoSlideDelay);
        }

        function restartAutoSlide() {
            startAutoSlide();
        }

        function openLightbox() {
            if (!lightbox) return;

            stopAutoSlide();
            updateLightboxImage();

            isLightboxOpen = true;
            lightbox.classList.add('is-open');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            if (!lightbox) return;

            isLightboxOpen = false;
            lightbox.classList.remove('is-open');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            startAutoSlide();
        }

        function updateLightboxImage() {
            if (!lightboxImg) return;

            var activeImg = slides[currentIndex] && slides[currentIndex].querySelector('img');
            if (!activeImg) return;

            lightboxImg.src = activeImg.currentSrc || activeImg.src;
            lightboxImg.alt = activeImg.alt || ('Gallery Image ' + (currentIndex + 1));
            if (lightboxCurrent) lightboxCurrent.textContent = pad(currentIndex + 1);
        }

        function manualNavigate(action) {
            if (transitionLock) return;

            transitionLock = true;
            action();

            // Keep rapid clicks from fighting CSS transitions.
            window.setTimeout(function () {
                transitionLock = false;
            }, 700);

            restartAutoSlide();
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                manualNavigate(prevSlide);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                manualNavigate(nextSlide);
            });
        }

        slides.forEach(function (slide) {
            slide.addEventListener('click', function (e) {
                if (slide.classList.contains('is-prev')) {
                    e.preventDefault();
                    manualNavigate(prevSlide);
                } else if (slide.classList.contains('is-next')) {
                    e.preventDefault();
                    manualNavigate(nextSlide);
                } else if (slide.classList.contains('is-active')) {
                    openLightbox();
                }
            });
        });

        thumbs.forEach(function (thumb, idx) {
            thumb.addEventListener('click', function (e) {
                e.preventDefault();
                if (transitionLock) return;

                transitionLock = true;
                updateSlides(idx);
                window.setTimeout(function () {
                    transitionLock = false;
                }, 700);
                restartAutoSlide();
            });
        });

        var touchStartX = 0;
        var touchStartY = 0;
        var showcaseEl = stage.querySelector('.cg-showcase');

        if (showcaseEl) {
            showcaseEl.addEventListener('touchstart', function (e) {
                if (!e.changedTouches.length) return;
                touchStartX = e.changedTouches[0].clientX;
                touchStartY = e.changedTouches[0].clientY;
            }, { passive: true });

            showcaseEl.addEventListener('touchend', function (e) {
                if (!e.changedTouches.length) return;

                var diffX = e.changedTouches[0].clientX - touchStartX;
                var diffY = e.changedTouches[0].clientY - touchStartY;

                if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 45) {
                    manualNavigate(diffX < 0 ? nextSlide : prevSlide);
                }
            }, { passive: true });
        }

        if (lightboxClose) {
            lightboxClose.addEventListener('click', function (e) {
                e.preventDefault();
                closeLightbox();
            });
        }

        if (lightboxPrev) {
            lightboxPrev.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                if (!transitionLock) {
                    transitionLock = true;
                    prevSlide();
                    window.setTimeout(function () { transitionLock = false; }, 700);
                }
            });
        }

        if (lightboxNext) {
            lightboxNext.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                if (!transitionLock) {
                    transitionLock = true;
                    nextSlide();
                    window.setTimeout(function () { transitionLock = false; }, 700);
                }
            });
        }

        if (lightbox) {
            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox || e.target.classList.contains('cg-lightbox-content')) {
                    closeLightbox();
                }
            });
        }

        document.addEventListener('keydown', function (e) {
            var lightboxOpen = isLightboxOpen;

            if (e.key === 'Escape' && lightboxOpen) {
                e.preventDefault();
                closeLightbox();
                return;
            }

            if (e.key === 'ArrowRight' || e.key === 'Right') {
                e.preventDefault();
                if (lightboxOpen) {
                    manualNavigate(nextSlide);
                } else {
                    manualNavigate(nextSlide);
                }
            } else if (e.key === 'ArrowLeft' || e.key === 'Left') {
                e.preventDefault();
                if (lightboxOpen) {
                    manualNavigate(prevSlide);
                } else {
                    manualNavigate(prevSlide);
                }
            }
        });

        document.addEventListener('visibilitychange', function () {
            isPageVisible = !document.hidden;

            if (isPageVisible) {
                startAutoSlide();
            } else {
                stopAutoSlide();
            }
        });

        updateSlides(0);
        startAutoSlide();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initGallery, { once: true });
    } else {
        initGallery();
    }
})();
