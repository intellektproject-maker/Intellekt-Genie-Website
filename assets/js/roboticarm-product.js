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
  let workpieceAttached = false;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const btnRunSim = document.getElementById('armRunSimBtn');
  const stepCards = document.querySelectorAll('.arm-seq-step-card');
  const simArmGroup = document.getElementById('simArmArmature');
  const simShoulder = document.getElementById('simShoulder');
  const simElbow = document.getElementById('simElbow');
  const simWrist = document.getElementById('simWrist');
  const simWorkpiece = document.getElementById('simWorkpiece');
  const simStatusText = document.getElementById('simLiveStatusText');

  // The simulator uses a simple planar 2-link inverse-kinematics model.
  // The base stays fixed while shoulder, elbow and wrist transforms move as
  // a connected kinematic chain. The workpiece follows the tool only while
  // the gripper is carrying it.
  const SIM = {
    base: { x: 300, y: 200 },
    upperArm: 100,
    forearm: 80,
    feeder: { x: 130, y: 240 },
    feederLift: { x: 130, y: 175 },
    fixtureLift: { x: 450, y: 175 },
    fixture: { x: 450, y: 240 },
    home: { x: 210, y: 80 }
  };

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

  function solvePlanarIK(targetX, targetY) {
    const dx = targetX - SIM.base.x;
    const dy = targetY - SIM.base.y;
    const distance = Math.hypot(dx, dy);
    const maxReach = SIM.upperArm + SIM.forearm;
    const minReach = Math.abs(SIM.upperArm - SIM.forearm);

    const safeDistance = Math.max(minReach + 0.001, Math.min(maxReach - 0.001, distance));
    const cosElbow = (
      safeDistance * safeDistance -
      SIM.upperArm * SIM.upperArm -
      SIM.forearm * SIM.forearm
    ) / (2 * SIM.upperArm * SIM.forearm);

    const elbow = Math.acos(Math.max(-1, Math.min(1, cosElbow)));
    const shoulder = Math.atan2(dy, dx) -
      Math.atan2(
        SIM.forearm * Math.sin(elbow),
        SIM.upperArm + SIM.forearm * Math.cos(elbow)
      );

    return {
      shoulder: shoulder * 180 / Math.PI,
      elbow: elbow * 180 / Math.PI,
      wrist: 90 - ((shoulder + elbow) * 180 / Math.PI)
    };
  }

  function setArmTarget(x, y) {
    if (!simShoulder || !simElbow || !simWrist) return;

    const pose = solvePlanarIK(x, y);
    simShoulder.setAttribute('transform', 'translate(' + SIM.base.x + ' ' + SIM.base.y + ') rotate(' + pose.shoulder + ')');
    simElbow.setAttribute('transform', 'translate(' + SIM.upperArm + ' 0) rotate(' + pose.elbow + ')');
    simWrist.setAttribute('transform', 'translate(' + SIM.forearm + ' 0) rotate(' + pose.wrist + ')');
  }

  function setWorkpiece(x, y, opacity) {
    if (!simWorkpiece) return;
    simWorkpiece.style.opacity = opacity == null ? '1' : String(opacity);
    simWorkpiece.setAttribute('transform', 'translate(' + x + ' ' + y + ')');
  }

  function setSimulationPose(x, y, opacity) {
    setArmTarget(x, y);
    if (workpieceAttached) {
      setWorkpiece(x, y, 1);
    } else if (opacity != null) {
      setWorkpiece(x, y, opacity);
    }
  }

  function animatePose(targetX, targetY, duration, carryWorkpiece) {
    return new Promise(resolve => {
      const startTarget = animatePose.currentTarget || SIM.home;
      const startX = startTarget.x;
      const startY = startTarget.y;
      const shouldCarry = carryWorkpiece === true;

      if (prefersReducedMotion || duration <= 0) {
        setSimulationPose(targetX, targetY, 1);
        animatePose.currentTarget = { x: targetX, y: targetY };
        resolve();
        return;
      }

      const startTime = performance.now();

      function frame(now) {
        const progress = Math.min(1, (now - startTime) / duration);
        const eased = 1 - Math.pow(1 - progress, 3);
        const x = startX + (targetX - startX) * eased;
        const y = startY + (targetY - startY) * eased;

        if (shouldCarry) {
          workpieceAttached = true;
        }

        setSimulationPose(x, y, 1);

        if (progress < 1) {
          window.requestAnimationFrame(frame);
        } else {
          animatePose.currentTarget = { x: targetX, y: targetY };
          resolve();
        }
      }

      window.requestAnimationFrame(frame);
    });
  }
  animatePose.currentTarget = { ...SIM.home };

  function clearSimulationTimers() {
    if (simTimer) {
      window.clearTimeout(simTimer);
      simTimer = null;
    }
  }

  function wait(ms) {
    return new Promise(resolve => {
      simTimer = window.setTimeout(resolve, ms);
    });
  }

  function finishSimulation() {
    isSimulating = false;
    workpieceAttached = false;
    setSimStatus('AUTOMATION CYCLE COMPLETE // READY');
    stepCards.forEach(card => card.classList.remove('active', 'completed'));
    setArmTarget(SIM.home.x, SIM.home.y);
    animatePose.currentTarget = { ...SIM.home };
    setSimButton('RUN SIMULATION', 'fa-play', false);
  }

  async function runAutomationSimulation() {
    if (isSimulating) return;

    clearSimulationTimers();
    isSimulating = true;
    workpieceAttached = false;
    setSimButton('RUNNING...', 'fa-spinner fa-spin', true);

    // Start from the home position with the component at Feeder A.
    setWorkpiece(SIM.feeder.x, SIM.feeder.y, 1);
    setArmTarget(SIM.home.x, SIM.home.y);
    animatePose.currentTarget = { ...SIM.home };

    if (prefersReducedMotion) {
      setSimStepUI(0);
      setSimStatus('STEP 01: PICKING FROM FEEDER A // REDUCED MOTION');
      setSimulationPose(SIM.feeder.x, SIM.feeder.y, 1);
      workpieceAttached = true;

      setSimStepUI(1);
      setSimStatus('STEP 02: TRANSFERRING TO FIXTURE B // REDUCED MOTION');
      setSimulationPose(SIM.fixtureLift.x, SIM.fixtureLift.y, 1);
      setSimulationPose(SIM.fixture.x, SIM.fixture.y, 1);

      setSimStepUI(2);
      setSimStatus('STEP 03: PLACING INTO FIXTURE B // REDUCED MOTION');
      workpieceAttached = false;
      setWorkpiece(SIM.fixture.x, SIM.fixture.y, 1);

      setSimStepUI(3);
      setSimStatus('STEP 04: RELEASING WORKPIECE // RETURNING HOME');
      setSimulationPose(SIM.home.x, SIM.home.y, 1);
      finishSimulation();
      return;
    }

    // STEP 01 — PICK
    setSimStepUI(0);
    setSimStatus('STEP 01: ALIGNING TOOL WITH FEEDER A');
    await animatePose(SIM.feeder.x, SIM.feeder.y, 1100, false);
    setSimStatus('STEP 01: WORKPIECE ENGAGED // PICK COMPLETE');
    workpieceAttached = true;
    setWorkpiece(SIM.feeder.x, SIM.feeder.y, 1);
    await wait(500);

    // STEP 02 — MOVE
    setSimStepUI(1);
    setSimStatus('STEP 02: LIFTING WORKPIECE FROM FEEDER A');
    await animatePose(SIM.feederLift.x, SIM.feederLift.y, 650, true);
    setSimStatus('STEP 02: TRANSFERRING ALONG INTERPOLATED PATH');
    await animatePose(SIM.fixtureLift.x, SIM.fixtureLift.y, 1600, true);

    // STEP 03 — PLACE
    setSimStepUI(2);
    setSimStatus('STEP 03: LOWERING TOOL INTO FIXTURE B');
    await animatePose(SIM.fixture.x, SIM.fixture.y, 700, true);
    await wait(500);
    setSimStatus('STEP 03: WORKPIECE RELEASED // PLACE COMPLETE');
    workpieceAttached = false;
    setWorkpiece(SIM.fixture.x, SIM.fixture.y, 1);
    await wait(350);

    // STEP 04 — RESET
    setSimStepUI(3);
    setSimStatus('STEP 04: RETURNING EMPTY TOOL TO HOME');
    await animatePose(SIM.home.x, SIM.home.y, 1200, false);

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
