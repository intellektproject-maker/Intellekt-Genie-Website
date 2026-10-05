/**
 * Intellekt Genie - Spiderbot & Legged Robotics
 * Terrain Lab & Gait Demonstration Controller
 */

(function () {
  'use strict';

  // Terrain Profiles & Configuration
  const TERRAIN_CONFIG = {
    flat: {
      pathD: 'M 0,270 L 600,270',
      botTransform: 'translate(250px, 210px) rotate(0deg)',
      modeText: 'TRIPOD GAIT',
      balanceText: 'STABLE // LEVEL',
      terrainText: 'FLAT SURFACE',
      strokeColor: '#38bdf8'
    },
    rough: {
      pathD: 'M 0,270 Q 60,240 120,265 T 240,245 T 360,280 T 480,250 T 600,270',
      botTransform: 'translate(250px, 195px) rotate(-7deg)',
      modeText: 'ADAPTIVE WAVE',
      balanceText: 'DYNAMIC COMPENSATION',
      terrainText: 'UNEVEN ROUGH',
      strokeColor: '#f59e0b'
    },
    obstacle: {
      pathD: 'M 0,270 L 210,270 L 210,195 L 340,195 L 340,270 L 600,270',
      botTransform: 'translate(265px, 135px) rotate(9deg)',
      modeText: 'HIGH CLEARANCE STEP',
      balanceText: 'ACTIVE PITCH STABILIZATION',
      terrainText: 'STEP BARRIER',
      strokeColor: '#ef4444'
    }
  };

  // DOM Elements - Terrain Lab
  const terrainPathEl = document.getElementById('spiderTerrainProfilePath');
  const terrainBotEl = document.getElementById('spiderTerrainBot');
  const terrainButtons = document.querySelectorAll('.spider-terrain-btn');

  const elTerrainMode = document.getElementById('terrainStatusMode');
  const elTerrainBalance = document.getElementById('terrainStatusBalance');
  const elTerrainType = document.getElementById('terrainStatusType');

  function setTerrain(terrainKey) {
    const config = TERRAIN_CONFIG[terrainKey];
    if (!config) return;

    // Update buttons
    terrainButtons.forEach(btn => {
      const match = btn.getAttribute('data-terrain') === terrainKey;
      btn.classList.toggle('active', match);
      btn.setAttribute('aria-pressed', match ? 'true' : 'false');
    });

    // Update SVG profile & Robot posture
    if (terrainPathEl) {
      terrainPathEl.setAttribute('d', config.pathD);
      terrainPathEl.setAttribute('stroke', config.strokeColor);
    }
    if (terrainBotEl) {
      terrainBotEl.style.transform = config.botTransform;
    }

    // Update telemetry status
    if (elTerrainMode) elTerrainMode.textContent = config.modeText;
    if (elTerrainBalance) elTerrainBalance.textContent = config.balanceText;
    if (elTerrainType) elTerrainType.textContent = config.terrainText;
  }

  function initTerrainLab() {
    terrainButtons.forEach(btn => {
      btn.addEventListener('click', function () {
        const key = this.getAttribute('data-terrain');
        if (key) setTerrain(key);
      });
    });

    // Default to Flat
    setTerrain('flat');
  }

  // Gait Lab Mode Switching (Walk, Turn, Climb)
  const GAIT_CONFIG = {
    walk: {
      title: 'Tripod Forward Walk',
      desc: 'Alternating triads of legs form stable support tripods while the remaining three swing forward in continuous rhythmic progression.',
      cadence: '1.2 Hz (Simulated)',
      dutyFactor: '60% Stance Phase'
    },
    turn: {
      title: 'Differential Yaw Turn',
      desc: 'Inner and outer legs modulate stepping direction and step arc length to execute sharp rotational reorientation around the central axis.',
      cadence: '0.9 Hz (Simulated)',
      dutyFactor: 'Rotational Offset'
    },
    climb: {
      title: 'High Pitch Incline Crawl',
      desc: 'Forward legs elevate above normal horizontal plane while rear actuators lower body mass to ensure positive ground traction against gravity.',
      cadence: '0.7 Hz (Simulated)',
      dutyFactor: '75% High Stability'
    }
  };

  const gaitButtons = document.querySelectorAll('.spider-gait-mode-btn');
  const elGaitTitle = document.getElementById('gaitDisplayTitle');
  const elGaitDesc = document.getElementById('gaitDisplayDesc');
  const elGaitCadence = document.getElementById('gaitDisplayCadence');
  const elGaitDuty = document.getElementById('gaitDisplayDuty');
  const gaitSvgContainer = document.getElementById('spiderGaitSvgStage');

  function setGaitMode(modeKey) {
    const config = GAIT_CONFIG[modeKey];
    if (!config) return;

    gaitButtons.forEach(btn => {
      const match = btn.getAttribute('data-gait') === modeKey;
      btn.classList.toggle('active', match);
      btn.setAttribute('aria-selected', match ? 'true' : 'false');
    });

    if (elGaitTitle) elGaitTitle.textContent = config.title;
    if (elGaitDesc) elGaitDesc.textContent = config.desc;
    if (elGaitCadence) elGaitCadence.textContent = config.cadence;
    if (elGaitDuty) elGaitDuty.textContent = config.dutyFactor;

    if (gaitSvgContainer) {
      gaitSvgContainer.setAttribute('data-active-gait', modeKey);
    }
  }

  function initGaitLab() {
    gaitButtons.forEach(btn => {
      btn.addEventListener('click', function () {
        const mode = this.getAttribute('data-gait');
        if (mode) setGaitMode(mode);
      });
    });

    setGaitMode('walk');
  }

  // Scroll reveals
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
      }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

      reveals.forEach(el => observer.observe(el));
    } else {
      reveals.forEach(el => el.classList.add('is-revealed'));
    }
  }

  // Document Ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      initTerrainLab();
      initGaitLab();
      initScrollReveals();
    });
  } else {
    initTerrainLab();
    initGaitLab();
    initScrollReveals();
  }
})();
