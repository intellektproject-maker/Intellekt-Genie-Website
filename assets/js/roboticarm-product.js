/**
 * Intellekt Genie - Robotic Arms
 * Motion Lab Joint Inspector & Automation Sequence Simulator
 */

(function () {
  'use strict';

  // Joint definitions for the Motion Lab
  const JOINTS_DATA = {
    J1: {
      num: 'JOINT 01',
      title: 'Base Rotation',
      axis: 'Pan / Yaw Axis (Z-Plane)',
      role: 'Azimuthal base rotation orienting the arm structure across the workcell.',
      function: 'Rotational positioning & radial sector alignment'
    },
    J2: {
      num: 'JOINT 02',
      title: 'Shoulder Articulation',
      axis: 'Elevation / Pitch Axis (Y-Plane)',
      role: 'Primary vertical drive governing overall vertical lift and payload reach.',
      function: 'Primary elevation & vertical envelope control'
    },
    J3: {
      num: 'JOINT 03',
      title: 'Elbow Articulation',
      axis: 'Flexion / Extension Axis (Y-Plane)',
      role: 'Radial reach modulation controlling forearm extension and target approach.',
      function: 'Planar reach extension & retraction'
    },
    J4: {
      num: 'JOINT 04',
      title: 'Wrist Pitch',
      axis: 'Tilt / Elevation Axis (Y-Plane)',
      role: 'Tool orientation adjustment aligning end-effector perpendicular to work surface.',
      function: 'End-effector pitch & angular targeting'
    },
    J5: {
      num: 'JOINT 05',
      title: 'Wrist Roll',
      axis: 'Axial Torsion Axis (X-Plane)',
      role: 'Continuous axial twist matching component pick angles and assembly alignment.',
      function: 'Rotational component indexing'
    },
    J6: {
      num: 'JOINT 06',
      title: 'Tool Flange / Interface',
      axis: 'End-Effector Mount',
      role: 'Precision standardized mechanical mounting plate for mechanical grippers or vacuum tools.',
      function: 'Payload coupling & modular tooling'
    }
  };

  // DOM Elements - Joint Inspector
  const jointPins = document.querySelectorAll('.arm-joint-pin');
  const jointTabs = document.querySelectorAll('.arm-joint-tab-btn');
  const elJointNum = document.getElementById('inspectorJointNum');
  const elJointTitle = document.getElementById('inspectorJointTitle');
  const elJointAxis = document.getElementById('inspectorJointAxis');
  const elJointRole = document.getElementById('inspectorJointRole');
  const elJointFunc = document.getElementById('inspectorJointFunc');

  function selectJoint(jointKey) {
    const data = JOINTS_DATA[jointKey];
    if (!data) return;

    // Update pins
    jointPins.forEach(pin => {
      const match = pin.getAttribute('data-joint') === jointKey;
      pin.classList.toggle('active', match);
      pin.setAttribute('aria-pressed', match ? 'true' : 'false');
    });

    // Update tabs
    jointTabs.forEach(tab => {
      const match = tab.getAttribute('data-joint') === jointKey;
      tab.classList.toggle('active', match);
      tab.setAttribute('aria-selected', match ? 'true' : 'false');
    });

    // Update content
    if (elJointNum) elJointNum.textContent = data.num;
    if (elJointTitle) elJointTitle.textContent = data.title;
    if (elJointAxis) elJointAxis.textContent = data.axis;
    if (elJointRole) elJointRole.textContent = data.role;
    if (elJointFunc) elJointFunc.textContent = data.function;
  }

  function initJointInspector() {
    jointPins.forEach(pin => {
      pin.addEventListener('click', function () {
        const j = this.getAttribute('data-joint');
        if (j) selectJoint(j);
      });
      pin.addEventListener('mouseenter', function () {
        const j = this.getAttribute('data-joint');
        if (j) selectJoint(j);
      });
    });

    jointTabs.forEach(tab => {
      tab.addEventListener('click', function () {
        const j = this.getAttribute('data-joint');
        if (j) selectJoint(j);
      });
    });

    // Default select J1
    selectJoint('J1');
  }

  // Automation Sequence Simulation (Pick -> Move -> Place -> Reset)
  let isSimulating = false;
  let simTimer = null;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const btnRunSim = document.getElementById('armRunSimBtn');
  const stepCards = document.querySelectorAll('.arm-seq-step-card');
  const simArmGroup = document.getElementById('simArmArmature');
  const simWorkpiece = document.getElementById('simWorkpiece');
  const simStatusText = document.getElementById('simLiveStatusText');

  function setSimStepUI(stepIndex) {
    stepCards.forEach((card, idx) => {
      if (idx === stepIndex) {
        card.classList.add('active');
        card.classList.remove('completed');
      } else if (idx < stepIndex) {
        card.classList.remove('active');
        card.classList.add('completed');
      } else {
        card.classList.remove('active');
        card.classList.remove('completed');
      }
    });
  }

  function setSimButton(label, icon, disabled) {
    if (!btnRunSim) return;
    btnRunSim.disabled = disabled;
    btnRunSim.innerHTML = '<i class="fa-solid ' + icon + ' me-2" aria-hidden="true"></i><span>' + label + '</span>';
  }

  function setSimStatus(message) {
    if (simStatusText) {
      simStatusText.textContent = message;
      simStatusText.setAttribute('aria-live', 'polite');
    }
  }

  function setArmPose(rotation) {
    if (simArmGroup) {
      simArmGroup.setAttribute('transform', 'rotate(' + rotation + ' 300 200)');
    }
  }

  function setWorkpiece(x, y, opacity) {
    if (!simWorkpiece) return;
    simWorkpiece.style.opacity = opacity == null ? '1' : String(opacity);
    simWorkpiece.setAttribute('transform', 'translate(' + x + ' ' + y + ')');
  }

  function animatePose(rotation, x, y, duration) {
    return new Promise(resolve => {
      if (prefersReducedMotion || duration <= 0) {
        setArmPose(rotation);
        setWorkpiece(x, y, 1);
        resolve();
        return;
      }

      const startTime = performance.now();
      const startTransform = simArmGroup
        ? (simArmGroup.getAttribute('transform') || 'rotate(0 300 200)')
        : 'rotate(0 300 200)';
      const match = startTransform.match(/rotate\\(([-.\\d]+)\\s+300\\s+200\\)/);
      const startRotation = match ? Number(match[1]) : 0;
      const startWorkpiece = simWorkpiece
        ? (simWorkpiece.getAttribute('transform') || 'translate(130 240)').match(/translate\\(([-.\\d]+)\\s+([-.\\d]+)\\)/)
        : null;
      const startX = startWorkpiece ? Number(startWorkpiece[1]) : 130;
      const startY = startWorkpiece ? Number(startWorkpiece[2]) : 240;

      function frame(now) {
        const progress = Math.min(1, (now - startTime) / duration);
        const eased = 1 - Math.pow(1 - progress, 3);
        setArmPose(startRotation + (rotation - startRotation) * eased);
        setWorkpiece(
          startX + (x - startX) * eased,
          startY + (y - startY) * eased,
          1
        );

        if (progress < 1) {
          window.requestAnimationFrame(frame);
        } else {
          resolve();
        }
      }

      window.requestAnimationFrame(frame);
    });
  }

  function clearSimulationTimers() {
    if (simTimer) {
      window.clearTimeout(simTimer);
      simTimer = null;
    }
  }

  function finishSimulation() {
    isSimulating = false;
    setSimStatus('AUTOMATION CYCLE COMPLETE // READY');
    stepCards.forEach(card => card.classList.remove('active', 'completed'));
    setArmPose(0);
    setWorkpiece(130, 240, 1);
    setSimButton('RUN SIMULATION', 'fa-play', false);
  }

  async function runAutomationSimulation() {
    if (isSimulating) return;

    clearSimulationTimers();
    isSimulating = true;
    setSimButton('RUNNING...', 'fa-spinner fa-spin', true);

    // The SVG robot is animated with real SVG transforms rather than CSS transforms.
    // This keeps the joints connected and makes the workpiece follow the tool path.
    if (prefersReducedMotion) {
      setSimStepUI(0);
      setSimStatus('STEP 01: PICKING FROM FEEDER A // REDUCED MOTION');
      setArmPose(-63.1);
      setWorkpiece(134, 239, 1);

      setSimStepUI(1);
      setSimStatus('STEP 02: TRANSFERRING TO FIXTURE B // REDUCED MOTION');
      setArmPose(145.2);
      setWorkpiece(465, 244, 1);

      setSimStepUI(2);
      setSimStatus('STEP 03: PLACING INTO FIXTURE B // REDUCED MOTION');
      setWorkpiece(450, 240, 1);

      setSimStepUI(3);
      setSimStatus('STEP 04: RETURNING HOME // REDUCED MOTION');
      setArmPose(0);
      setWorkpiece(450, 240, 0.45);

      simTimer = window.setTimeout(finishSimulation, 900);
      return;
    }

    // STEP 01 — PICK
    setSimStepUI(0);
    setSimStatus('STEP 01: ALIGNING TOOL WITH FEEDER A');
    await animatePose(-63.1, 134, 239, 1200);
    setSimStatus('STEP 01: WORKPIECE ENGAGED // PICK COMPLETE');
    await new Promise(resolve => {
      simTimer = window.setTimeout(resolve, 500);
    });

    // STEP 02 — MOVE
    setSimStepUI(1);
    setSimStatus('STEP 02: TRANSFERRING ALONG INTERPOLATED PATH');
    await animatePose(145.2, 465, 244, 1700);

    // STEP 03 — PLACE
    setSimStepUI(2);
    setSimStatus('STEP 03: LOWERING TOOL INTO FIXTURE B');
    await animatePose(145.2, 450, 240, 700);
    await new Promise(resolve => {
      simTimer = window.setTimeout(resolve, 650);
    });

    // STEP 04 — RESET
    setSimStepUI(3);
    setSimStatus('STEP 04: RELEASING WORKPIECE // RETURNING HOME');
    setWorkpiece(450, 240, 0.45);
    await animatePose(0, 190, 70, 1300);

    finishSimulation();
  }
  function initAutomationSimulation() {
    if (btnRunSim) {
      btnRunSim.addEventListener('click', runAutomationSimulation);
    }
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
      initJointInspector();
      initAutomationSimulation();
      initScrollReveals();
    });
  } else {
    initJointInspector();
    initAutomationSimulation();
    initScrollReveals();
  }
})();
