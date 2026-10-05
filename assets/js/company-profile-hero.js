/**
 * company-profile-hero.js
 * Page-specific enhancements for the Intellekt Robotics company profile hero.
 * - Pauses CSS animations when the robot visual is off-screen (performance)
 * - Applies subtle mouse-parallax on desktop (max 6px) for depth feel
 * - Fully respects prefers-reduced-motion
 * No external dependencies.
 */

(function () {
  'use strict';

  var mq = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)');
  var reducedMotion = mq && mq.matches;

  /* ── Pause animations when visual is scrolled out of view ───────── */
  function initVisibilityPause() {
    var wrapper = document.getElementById('cpRobotWrapper');
    if (!wrapper || !window.IntersectionObserver) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        var state = entry.isIntersecting ? 'running' : 'paused';
        wrapper.style.animationPlayState = state;
        var children = wrapper.querySelectorAll('*');
        for (var i = 0; i < children.length; i++) {
          children[i].style.animationPlayState = state;
        }
      });
    }, { threshold: 0.05 });

    observer.observe(wrapper);
  }

  /* ── Subtle mouse-parallax on desktop only ───────────────────────── */
  function initParallax() {
    if (reducedMotion) return;
    if (window.innerWidth < 992) return;

    var hero   = document.querySelector('.cp-hero');
    var visual = document.getElementById('cpRobotWrapper');
    if (!hero || !visual) return;

    var MAX = 6; // px max displacement
    var rect = hero.getBoundingClientRect();

    function onMove(e) {
      if (window.innerWidth < 992) return;
      var cx = rect.left + rect.width  / 2;
      var cy = rect.top  + rect.height / 2;
      var dx = ((e.clientX - cx) / rect.width)  * MAX;
      var dy = ((e.clientY - cy) / rect.height) * MAX;
      /* Translate on top of the existing float animation via CSS transform */
      visual.style.setProperty('--cp-parallax-x', dx.toFixed(2) + 'px');
      visual.style.setProperty('--cp-parallax-y', dy.toFixed(2) + 'px');
    }

    function onLeave() {
      visual.style.setProperty('--cp-parallax-x', '0px');
      visual.style.setProperty('--cp-parallax-y', '0px');
    }

    hero.addEventListener('mousemove', onMove, { passive: true });
    hero.addEventListener('mouseleave', onLeave);

    /* Recalculate rect on resize */
    window.addEventListener('resize', function () {
      rect = hero.getBoundingClientRect();
      if (window.innerWidth < 992) onLeave();
    }, { passive: true });
  }

  /* ── Boot ────────────────────────────────────────────────────────── */
  document.addEventListener('DOMContentLoaded', function () {
    if (!reducedMotion) {
      initVisibilityPause();
      /* Small delay so layout settles before measuring hero rect */
      setTimeout(initParallax, 250);
    }
  });

  /* Listen for OS-level preference changes at runtime */
  if (mq) {
    mq.addEventListener('change', function (e) {
      reducedMotion = e.matches;
    });
  }
})();
