/**
 * Intellekt Genie - Autonomous Mobile Robots (AMR)
 * Mission Control Simulation & Scroll Controller
 */

(function () {
  'use strict';

  // Route definitions for the SVG facility map (viewBox="0 0 600 400")
  const ROUTES = {
    fastest: {
      pathD: 'M 80,320 L 180,320 L 220,180 L 380,180 L 460,90 L 520,90',
      speed: '1.4 m/s',
      battery: '86%',
      payload: '120 kg',
      distance: '38 m',
      clearance: '0.9 m (NARROW)',
      status: 'RAPID TRANSIT'
    },
    safe: {
      pathD: 'M 80,320 L 80,240 L 140,240 L 140,110 L 340,110 L 340,60 L 520,60 L 520,90',
      speed: '1.0 m/s',
      battery: '82%',
      payload: '120 kg',
      distance: '54 m',
      clearance: '2.4 m (MAX)',
      status: 'PERIMETER SAFE'
    },
    optimized: {
      pathD: 'M 80,320 C 140,320 160,260 220,240 C 280,220 320,250 380,200 C 440,150 460,90 520,90',
      speed: '1.2 m/s',
      battery: '84%',
      payload: '120 kg',
      distance: '42 m',
      clearance: '1.8 m (BALANCED)',
      status: 'DYNAMIC SLAM'
    }
  };

  let activeRoute = 'optimized';
  let animationFrameId = null;
  let animProgress = 0;
  let prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // DOM Elements
  const routePathEl = document.getElementById('amrActiveRoutePath');
  const botMarkerEl = document.getElementById('amrBotMarker');
  const routeButtons = document.querySelectorAll('.amr-route-btn');

  // Telemetry DOM elements
  const elSpeed = document.getElementById('telemetrySpeed');
  const elBattery = document.getElementById('telemetryBattery');
  const elPayload = document.getElementById('telemetryPayload');
  const elDistance = document.getElementById('telemetryDistance');
  const elStatus = document.getElementById('telemetryStatus');
  const elClearance = document.getElementById('telemetryClearance');

  function updateTelemetry(routeKey) {
    const data = ROUTES[routeKey];
    if (!data) return;

    if (elSpeed) elSpeed.textContent = data.speed;
    if (elBattery) elBattery.textContent = data.battery;
    if (elPayload) elPayload.textContent = data.payload;
    if (elDistance) elDistance.textContent = data.distance;
    if (elStatus) elStatus.textContent = data.status;
    if (elClearance) elClearance.textContent = data.clearance;
  }

  function setRoute(routeKey) {
    if (!ROUTES[routeKey]) return;
    activeRoute = routeKey;

    // Update active button state
    routeButtons.forEach(btn => {
      const match = btn.getAttribute('data-route') === routeKey;
      btn.classList.toggle('active', match);
      btn.setAttribute('aria-pressed', match ? 'true' : 'false');
    });

    // Update SVG path
    if (routePathEl) {
      routePathEl.setAttribute('d', ROUTES[routeKey].pathD);
    }

    updateTelemetry(routeKey);

    // Reset bot animation position
    animProgress = 0;
    if (prefersReducedMotion) {
      positionBotAtProgress(0.5);
    }
  }

  function positionBotAtProgress(progress) {
    if (!routePathEl || !botMarkerEl) return;
    try {
      const totalLen = routePathEl.getTotalLength();
      if (!totalLen) return;
      const point = routePathEl.getPointAtLength(progress * totalLen);
      // Also calculate tangent angle for orientation
      const aheadPoint = routePathEl.getPointAtLength(Math.min(totalLen, progress * totalLen + 2));
      const angle = Math.atan2(aheadPoint.y - point.y, aheadPoint.x - point.x) * (180 / Math.PI);
      botMarkerEl.setAttribute('transform', `translate(${point.x}, ${point.y}) rotate(${angle})`);
    } catch (e) {
      // Graceful fallback
    }
  }

  function animateLoop() {
    if (!prefersReducedMotion) {
      animProgress += 0.0022;
      if (animProgress > 1) {
        animProgress = 0;
      }
      positionBotAtProgress(animProgress);
    }
    animationFrameId = requestAnimationFrame(animateLoop);
  }

  // Initialize Route Switcher Listeners
  function initRouteControls() {
    routeButtons.forEach(btn => {
      btn.addEventListener('click', function () {
        const routeKey = this.getAttribute('data-route');
        if (routeKey) setRoute(routeKey);
      });

      btn.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          this.click();
        }
      });
    });

    // Listen to reduced motion media query changes
    const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    mediaQuery.addEventListener('change', e => {
      prefersReducedMotion = e.matches;
      if (prefersReducedMotion) {
        if (animationFrameId) cancelAnimationFrame(animationFrameId);
        positionBotAtProgress(0.5);
      } else {
        animateLoop();
      }
    });

    // Start with default route
    setRoute('optimized');
    if (!prefersReducedMotion) {
      animateLoop();
    } else {
      positionBotAtProgress(0.5);
    }
  }

  // IntersectionObserver for scroll-driven reveals
  function initScrollReveals() {
    const reveals = document.querySelectorAll('.rp-reveal');
    if (!reveals.length) return;

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            obs.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.15,
        rootMargin: '0px 0px -40px 0px'
      });

      reveals.forEach(el => observer.observe(el));
    } else {
      // Fallback for older browsers
      reveals.forEach(el => el.classList.add('is-revealed'));
    }
  }

  // Document Ready Execution
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      initRouteControls();
      initScrollReveals();
    });
  } else {
    initRouteControls();
    initScrollReveals();
  }
})();
