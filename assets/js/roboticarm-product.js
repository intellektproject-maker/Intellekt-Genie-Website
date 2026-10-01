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

  function runAutomationSimulation() {
    if (isSimulating) return;
    isSimulating = true;

    if (btnRunSim) {
      btnRunSim.disabled = true;
      btnRunSim.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2" aria-hidden="true"></i><span>RUNNING...</span>';
    }

    if (prefersReducedMotion) {
      // Reduced motion fallback: show final completed step instantly
      setSimStepUI(2);
      if (simStatusText) simStatusText.textContent = 'SIMULATION COMPLETE (REDUCED MOTION)';
      setTimeout(() => {
        isSimulating = false;
        if (btnRunSim) {
          btnRunSim.disabled = false;
          btnRunSim.innerHTML = '<i class="fa-solid fa-rotate-right me-2" aria-hidden="true"></i><span>COMPLETE // RUN AGAIN</span>';
        }
      }, 800);
      return;
    }

    // Step 0: PICK (Gripper descends at Tray A)
    setSimStepUI(0);
    if (simStatusText) simStatusText.textContent = 'STEP 01: PICKING WORKPIECE AT FEEDER TRAY';
    if (simArmGroup) simArmGroup.style.transform = 'rotate(-28deg)';
    if (simWorkpiece) {
      simWorkpiece.style.opacity = '1';
      simWorkpiece.style.transform = 'translate(130px, 240px)';
    }

    // Step 1: MOVE (Arm lifts and arcs to Station B)
    simTimer = setTimeout(() => {
      setSimStepUI(1);
      if (simStatusText) simStatusText.textContent = 'STEP 02: EXECUTING KINEMATIC PATH TRAJECTORY';
      if (simArmGroup) simArmGroup.style.transform = 'rotate(15deg)';
      if (simWorkpiece) {
        simWorkpiece.style.transform = 'translate(450px, 240px)';
      }

      // Step 2: PLACE (Workpiece seated in fixture B)
      simTimer = setTimeout(() => {
        setSimStepUI(2);
        if (simStatusText) simStatusText.textContent = 'STEP 03: PLACING WORKPIECE IN ASSEMBLY NEST';
        if (simArmGroup) simArmGroup.style.transform = 'rotate(24deg)';

        // Step 3: RESET (Arm returns to home origin)
        simTimer = setTimeout(() => {
          setSimStepUI(3);
          if (simStatusText) simStatusText.textContent = 'STEP 04: RESETTING ARM TO HOME READY POSTURE';
          if (simArmGroup) simArmGroup.style.transform = 'rotate(0deg)';

          // Finish
          simTimer = setTimeout(() => {
            isSimulating = false;
            if (simStatusText) simStatusText.textContent = 'AUTOMATION CYCLE COMPLETE // READY';
            stepCards.forEach(card => card.classList.remove('active', 'completed'));
            if (simWorkpiece) {
              simWorkpiece.style.transform = 'translate(130px, 240px)';
            }
            if (btnRunSim) {
              btnRunSim.disabled = false;
              btnRunSim.innerHTML = '<i class="fa-solid fa-rotate-right me-2" aria-hidden="true"></i><span>COMPLETE // RUN AGAIN</span>';
            }
          }, 1200);
        }, 1400);
      }, 1400);
    }, 1400);
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
