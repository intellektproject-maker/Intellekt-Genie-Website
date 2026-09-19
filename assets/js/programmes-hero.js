/**
 * programmes-hero.js
 * Lightweight parallax + reduced-motion for programmes.php hero
 * No heavy frameworks. Uses rAF only when visible.
 */
(function () {
    'use strict';

    var hero     = document.getElementById('programmes-hero');
    var heroBg   = document.getElementById('programmes-hero-bg');
    if (!hero || !heroBg) return;

    /* ── Reduced motion check ─────────────────────────────── */
    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) return;           // bail out – CSS keeps static look

    /* ── Visibility gating with IntersectionObserver ─────── */
    var heroVisible = true;
    if ('IntersectionObserver' in window) {
        heroVisible = false;
        var io = new IntersectionObserver(function (entries) {
            heroVisible = entries[0].isIntersecting;
        }, { threshold: 0.01 });
        io.observe(hero);
    }

    /* ── Parallax ─────────────────────────────────────────── */
    var ticking     = false;
    var lastScrollY = window.scrollY;
    var PARALLAX_FACTOR = 0.25;      // very restrained – 25 % of scroll

    function applyParallax() {
        ticking = false;
        if (!heroVisible) return;

        var heroTop    = hero.getBoundingClientRect().top;
        var heroHeight = hero.offsetHeight;
        var viewH      = window.innerHeight;

        /* Only shift while hero is in view */
        if (heroTop > viewH || heroTop + heroHeight < 0) return;

        var shift = (heroTop) * PARALLAX_FACTOR;
        /* Clamp to avoid over-travel */
        shift = Math.max(-60, Math.min(60, shift));
        heroBg.style.transform = 'translateY(' + shift + 'px)';
    }

    function onScroll() {
        lastScrollY = window.scrollY;
        if (!ticking) {
            ticking = true;
            requestAnimationFrame(applyParallax);
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    /* Trigger once immediately */
    applyParallax();
})();
