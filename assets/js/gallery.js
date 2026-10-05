/* =============================================================
   gallery.js - Editorial gallery behaviour
   - Scroll reveal (IntersectionObserver)
   - Minimal fullscreen viewer: click, arrows, Esc, swipe
   No carousel logic. Scoped to the Gallery page only.
   ============================================================= */
(function () {
    'use strict';

    var grid = document.getElementById('eg-grid');
    if (!grid) return;

    var items = Array.prototype.slice.call(grid.querySelectorAll('.eg-item'));
    var openers = Array.prototype.slice.call(grid.querySelectorAll('.eg-open'));
    var sources = openers.map(function (btn) {
        return btn.querySelector('img').getAttribute('src');
    });

    /* ── Scroll reveal ───────────────────────────────────── */
    var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!('IntersectionObserver' in window) || reduceMotion) {
        items.forEach(function (el) { el.classList.add('is-visible'); });
    } else {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -6% 0px' });
        items.forEach(function (el) { io.observe(el); });
    }

    /* ── Subtle parallax (selected blocks only) ──────────── */
    var MAX_SHIFT = 22;           // px - hard cap keeps it calm
    var parallaxItems = items.filter(function (el) { return el.hasAttribute('data-parallax'); });
    var ticking = false;

    function clamp(v, lo, hi) { return Math.max(lo, Math.min(hi, v)); }

    function updateParallax() {
        ticking = false;
        var vh = window.innerHeight;
        var enabled = !reduceMotion && window.innerWidth >= 992;

        parallaxItems.forEach(function (el) {
            if (!enabled) {
                el.style.removeProperty('--eg-py');
                el._py = 0;
                return;
            }
            var rect = el.getBoundingClientRect();
            if (rect.bottom < -200 || rect.top > vh + 200) return; // off-screen: skip work
            var current = el._py || 0;
            var center = rect.top + rect.height / 2 - current;     // position without parallax
            var shift = clamp((vh / 2 - center) * parseFloat(el.getAttribute('data-parallax')), -MAX_SHIFT, MAX_SHIFT);
            el._py = shift;
            el.style.setProperty('--eg-py', shift.toFixed(1) + 'px');
        });
    }

    function requestParallax() {
        if (!ticking) {
            ticking = true;
            window.requestAnimationFrame(updateParallax);
        }
    }

    if (parallaxItems.length && !reduceMotion) {
        window.addEventListener('scroll', requestParallax, { passive: true });
        window.addEventListener('resize', requestParallax);
        updateParallax();
    }

    /* ── Fullscreen viewer ───────────────────────────────── */
    var viewer = document.getElementById('eg-viewer');
    var viewerImg = document.getElementById('eg-viewer-img');
    var btnClose = document.getElementById('eg-viewer-close');
    var btnPrev = document.getElementById('eg-viewer-prev');
    var btnNext = document.getElementById('eg-viewer-next');
    if (!viewer || !viewerImg) return;

    var current = 0;
    var lastFocus = null;
    var total = sources.length;

    function show(index) {
        current = (index + total) % total;
        viewerImg.classList.remove('is-ready');
        var src = sources[current];
        var loader = new Image();
        loader.onload = function () {
            if (sources[current] !== src) return;
            viewerImg.src = src;
            viewerImg.alt = openers[current].querySelector('img').alt;
            // next frame so the fade-in transition runs
            requestAnimationFrame(function () { viewerImg.classList.add('is-ready'); });
        };
        loader.src = src;

        // warm the cache for neighbours
        [current - 1, current + 1].forEach(function (i) {
            var n = new Image();
            n.src = sources[(i + total) % total];
        });
    }

    function openViewer(index) {
        lastFocus = document.activeElement;
        viewer.classList.add('is-open');
        viewer.setAttribute('aria-hidden', 'false');
        document.body.classList.add('eg-viewer-lock');
        show(index);
        btnClose.focus();
    }

    function closeViewer() {
        viewer.classList.remove('is-open');
        viewer.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('eg-viewer-lock');
        viewerImg.classList.remove('is-ready');
        if (lastFocus && lastFocus.focus) lastFocus.focus();
    }

    function isOpen() { return viewer.classList.contains('is-open'); }

    openers.forEach(function (btn, i) {
        btn.addEventListener('click', function () { openViewer(i); });
    });

    btnClose.addEventListener('click', closeViewer);
    btnPrev.addEventListener('click', function () { show(current - 1); });
    btnNext.addEventListener('click', function () { show(current + 1); });

    // click on empty backdrop closes
    viewer.addEventListener('click', function (e) {
        if (e.target === viewer || e.target.classList.contains('eg-viewer-stage')) closeViewer();
    });

    // keyboard
    document.addEventListener('keydown', function (e) {
        if (!isOpen()) return;
        if (e.key === 'Escape') {
            closeViewer();
        } else if (e.key === 'ArrowLeft') {
            show(current - 1);
        } else if (e.key === 'ArrowRight') {
            show(current + 1);
        } else if (e.key === 'Tab') {
            // keep focus inside the dialog
            var f = [btnClose, btnPrev, btnNext];
            var idx = f.indexOf(document.activeElement);
            e.preventDefault();
            f[(idx + (e.shiftKey ? -1 : 1) + f.length) % f.length].focus();
        }
    });

    // touch swipe
    var startX = 0, startY = 0, tracking = false;
    viewer.addEventListener('touchstart', function (e) {
        if (e.touches.length !== 1) { tracking = false; return; }
        tracking = true;
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    }, { passive: true });

    viewer.addEventListener('touchend', function (e) {
        if (!tracking) return;
        tracking = false;
        var t = e.changedTouches[0];
        var dx = t.clientX - startX;
        var dy = t.clientY - startY;
        if (Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy) * 1.4) {
            show(dx < 0 ? current + 1 : current - 1);
        }
    }, { passive: true });
})();
