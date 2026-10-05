/**
 * home-hero-cinematic.js
 * Lightweight interactive effects for the living homepage robotics hero.
 * - Subtle desktop mouse parallax for depth and spatial reality (max 8px offset).
 * - IntersectionObserver to pause keyframe animations when hero is scrolled out of view.
 * - Respects prefers-reduced-motion.
 * - Zero external dependencies.
 */

(function () {
  'use strict';

  var mq = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)');
  var reducedMotion = mq && mq.matches;

  /* ── 1. Pause animations when hero scrolls out of view ─────── */
  function initHeroVisibility() {
    var hero = document.getElementById('homeHeroSection');
    if (!hero || !window.IntersectionObserver) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        var state = entry.isIntersecting ? 'running' : 'paused';
        var animElems = hero.querySelectorAll('.hero-floor-glow, .hero-laser-scanner, .ambient-lab-light, .amr-active-glow, .arm-active-glow, .arm-beacon-pulse, .hud-dot');
        for (var i = 0; i < animElems.length; i++) {
          animElems[i].style.animationPlayState = state;
        }
      });
    }, { threshold: 0.05 });

    observer.observe(hero);
  }

  /* ── 2. Subtle Depth Parallax on Desktop ───────────────────── */
  function initHeroParallax() {
    if (reducedMotion || window.innerWidth < 992) return;

    var hero = document.getElementById('homeHeroSection');
    var stage = hero ? hero.querySelector('.hero-scene-stage') : null;
    var hud = hero ? hero.querySelector('.hero-hud-telemetry') : null;
    if (!hero || !stage) return;

    var MAX_STAGE_PX = 8;
    var MAX_HUD_PX = 5;
    var rect = hero.getBoundingClientRect();

    function onMouseMove(e) {
      if (window.innerWidth < 992) return;
      var cx = rect.left + rect.width / 2;
      var cy = rect.top + rect.height / 2;
      var dx = (e.clientX - cx) / rect.width;
      var dy = (e.clientY - cy) / rect.height;

      var stageX = (-dx * MAX_STAGE_PX).toFixed(2);
      var stageY = (-dy * MAX_STAGE_PX).toFixed(2);
      stage.style.transform = 'scale(1.03) translate(' + stageX + 'px, ' + stageY + 'px)';

      if (hud) {
        var hudX = (dx * MAX_HUD_PX).toFixed(2);
        var hudY = (dy * MAX_HUD_PX).toFixed(2);
        hud.style.transform = 'translate(' + hudX + 'px, ' + hudY + 'px)';
      }
    }

    function onMouseLeave() {
      stage.style.transform = 'scale(1.02) translate(0px, 0px)';
      if (hud) {
        hud.style.transform = 'translate(0px, 0px)';
      }
    }

    hero.addEventListener('mousemove', onMouseMove, { passive: true });
    hero.addEventListener('mouseleave', onMouseLeave);

    window.addEventListener('resize', function () {
      rect = hero.getBoundingClientRect();
      if (window.innerWidth < 992) onMouseLeave();
    }, { passive: true });
  }

  /* ── 3. Boot & Runtime Preference Handlers ─────────────────── */
  document.addEventListener('DOMContentLoaded', function () {
    if (!reducedMotion) {
      initHeroVisibility();
      setTimeout(initHeroParallax, 250);
    }
  });

  if (mq) {
    mq.addEventListener('change', function (e) {
      reducedMotion = e.matches;
      var hero = document.getElementById('homeHeroSection');
      if (reducedMotion && hero) {
        var stage = hero.querySelector('.hero-scene-stage');
        if (stage) stage.style.transform = 'none';
      }
    });
  }
})();
