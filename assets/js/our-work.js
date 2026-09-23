/**
 * our-work.js
 * Interactive scripts for the Our Work robotics showcase page.
 * - IntersectionObserver to pause CSS animations when elements are scrolled out of view.
 * - Interactive category tab pill switchers (AMR vs Spiderbot).
 * - Subtle desktop mouse-parallax for the floating hero robot visual.
 * - Respects prefers-reduced-motion.
 * - Zero external dependencies.
 */

(function () {
  'use strict';

  var mq = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)');
  var reducedMotion = mq && mq.matches;

  /* ── 1. Visibility-based Animation Play State ──────────────── */
  function initAnimationObserver() {
    if (!window.IntersectionObserver) return;

    var animatedElements = document.querySelectorAll('.ow-animate-viewport');
    if (!animatedElements.length) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        var state = entry.isIntersecting ? 'running' : 'paused';
        entry.target.style.animationPlayState = state;
        var subAnims = entry.target.querySelectorAll('*');
        for (var i = 0; i < subAnims.length; i++) {
          subAnims[i].style.animationPlayState = state;
        }
      });
    }, { threshold: 0.05 });

    animatedElements.forEach(function (elem) {
      observer.observe(elem);
    });
  }

  /* ── 3. Subtle Desktop Mouse Parallax for Hero Visual ──────── */
  function initHeroParallax() {
    if (reducedMotion || window.innerWidth < 992) return;

    var heroSection = document.querySelector('.ow-hero');
    var visual = document.getElementById('owHeroParallaxVisual');
    if (!heroSection || !visual) return;

    var MAX_OFFSET = 7; // Max px shift
    var rect = heroSection.getBoundingClientRect();

    function onMouseMove(e) {
      if (window.innerWidth < 992) return;
      var cx = rect.left + rect.width / 2;
      var cy = rect.top + rect.height / 2;
      var dx = ((e.clientX - cx) / rect.width) * MAX_OFFSET;
      var dy = ((e.clientY - cy) / rect.height) * MAX_OFFSET;

      visual.style.setProperty('--ow-parallax-x', dx.toFixed(2) + 'px');
      visual.style.setProperty('--ow-parallax-y', dy.toFixed(2) + 'px');
    }

    function onMouseLeave() {
      visual.style.setProperty('--ow-parallax-x', '0px');
      visual.style.setProperty('--ow-parallax-y', '0px');
    }

    heroSection.addEventListener('mousemove', onMouseMove, { passive: true });
    heroSection.addEventListener('mouseleave', onMouseLeave);

    window.addEventListener('resize', function () {
      rect = heroSection.getBoundingClientRect();
      if (window.innerWidth < 992) onMouseLeave();
    }, { passive: true });
  }

  /* ── 4. Boot Handler ───────────────────────────────────────── */
  document.addEventListener('DOMContentLoaded', function () {
    if (!reducedMotion) {
      initAnimationObserver();
      setTimeout(initHeroParallax, 300);
    }
  });

  if (mq) {
    mq.addEventListener('change', function (e) {
      reducedMotion = e.matches;
      if (reducedMotion) {
        var visual = document.getElementById('owHeroParallaxVisual');
        if (visual) {
          visual.style.setProperty('--ow-parallax-x', '0px');
          visual.style.setProperty('--ow-parallax-y', '0px');
        }
      }
    });
  }
})();
