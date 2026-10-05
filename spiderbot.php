<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Spiderbot &amp; Legged Robotics | Intellekt Genie Robotics</title>
    <link rel="stylesheet" href="assets/css/robotics-product-shared.css">
    <link rel="stylesheet" href="assets/css/spiderbot-product.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="rp-page">
        <!-- 01 HERO SECTION WITH FULL LANDSCAPE VISUAL -->
        <section class="spider-hero">
            <div class="spider-hero-bg" aria-hidden="true">
                <img src="assets/image/new-images/spiderbot-hero-generated.png" alt="Spiderbot legged robotics platform">
            </div>

            <div class="rp-container">
                <div class="spider-hero-content">
                    <div class="rp-badge mb-3">
                        <span class="rp-badge-dot"></span>
                        <span>INTELLEKT ROBOTICS // LEGGED SYSTEMS</span>
                    </div>
                    <h1 class="spider-hero-title">
                        Spiderbot &amp;<br>
                        <span class="text-gradient-cyan">Legged Robotics</span>
                    </h1>
                    <p class="spider-hero-copy">
                        Compact robotic platforms for exploring locomotion, embedded intelligence, sensing and adaptive movement across non-standard terrain and constrained environments.
                    </p>
                    <div class="spider-hero-actions">
                        <a href="#terrain-lab" class="rp-btn-primary">
                            <span>Explore Terrain Lab</span>
                            <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                        </a>
                        <a href="#gait-lab" class="rp-control-btn">
                            <span>Analyze Gait Kinematics</span>
                        </a>
                    </div>

                    <!-- Technical HUD Overlay -->
                    <div class="spider-hero-hud-wrap">
                        <div class="spider-hero-hud-grid">
                            <div class="rp-hud-chip">
                                <span class="rp-hud-label">// SYSTEM VIEW</span>
                                <span class="rp-hud-value text-warning">SIMULATED VIEW</span>
                            </div>
                            <div class="rp-hud-chip">
                                <span class="rp-hud-label">LOCOMOTION</span>
                                <span class="rp-hud-value"><span class="rp-badge-dot"></span> MULTI-LEGGED</span>
                            </div>
                            <div class="rp-hud-chip">
                                <span class="rp-hud-label">IMU BALANCE</span>
                                <span class="rp-hud-value">ACTIVE VECTORS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 02 INTERACTIVE TERRAIN LAB -->
        <section class="rp-section spider-terrain-lab" id="terrain-lab">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 02 — TERRAIN SIMULATION</div>
                    <h2 class="rp-section-title">Interactive Terrain Adaptation Lab</h2>
                    <p class="rp-section-subtitle">
                        Observe how multi-legged kinematics adapt to surface variations, adjusting stance elevation, leg extension, and body pitch to maintain continuous balance.
                    </p>
                </div>

                <div class="spider-terrain-layout rp-reveal">
                    <!-- Left: Interactive Terrain Stage -->
                    <div class="spider-terrain-canvas-wrap rp-corner-bracket">
                        <div class="spider-terrain-header">
                            <div>
                                <span class="rp-badge rp-badge-demo">
                                    <span class="rp-badge-dot rp-badge-dot-amber"></span>
                                    VISUAL SIMULATION ONLY
                                </span>
                            </div>
                            <div class="text-end font-monospace" style="font-size: 11px; color: var(--rp-text-dim);">
                                SURFACE PROFILE DYNAMICS // SIDE ELEVATION
                            </div>
                        </div>

                        <div class="spider-terrain-stage" role="region" aria-label="Interactive Terrain Simulation Stage">
                            <svg class="spider-terrain-svg" viewBox="0 0 600 350" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                                <defs>
                                    <linearGradient id="spiderBodyGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#1e293b" />
                                        <stop offset="100%" stop-color="#0f172a" />
                                    </linearGradient>
                                </defs>

                                <!-- Grid reference horizontal guides -->
                                <line x1="0" y1="200" x2="600" y2="200" stroke="rgba(148, 163, 184, 0.08)" stroke-width="1" stroke-dasharray="4 4" />
                                <line x1="0" y1="270" x2="600" y2="270" stroke="rgba(148, 163, 184, 0.15)" stroke-width="1" />

                                <!-- Dynamic SVG Terrain Profile Line -->
                                <path id="spiderTerrainProfilePath" class="spider-terrain-profile" d="M 0,270 L 600,270" fill="none" stroke="#38bdf8" stroke-width="3" stroke-linecap="round" />

                                <!-- Simulated Legged Robot Schematic (Elevated and pitched dynamically) -->
                                <g id="spiderTerrainBot" transform="translate(250, 210)">
                                    <!-- Central Body Core -->
                                    <rect x="-35" y="-18" width="70" height="36" rx="8" fill="url(#spiderBodyGrad)" stroke="#00d2ff" stroke-width="2" />
                                    <!-- Sensor Eye / Camera -->
                                    <circle cx="28" cy="0" r="5" fill="#38bdf8" />
                                    <circle cx="28" cy="0" r="2" fill="#ffffff" />
                                    <!-- Internal Electronics Indicator -->
                                    <rect x="-20" y="-8" width="30" height="16" rx="3" fill="#090e1a" stroke="#475467" stroke-width="1" />
                                    <circle cx="-12" cy="0" r="2.5" fill="#00d2ff" />
                                    <circle cx="-3" cy="0" r="2.5" fill="#38bdf8" />

                                    <!-- Left Legs (Rear & Front Coordinated) -->
                                    <!-- Leg 1 Front -->
                                    <path d="M 20,8 Q 45,25 50,60" fill="none" stroke="#38bdf8" stroke-width="3.5" stroke-linecap="round" />
                                    <circle cx="50" cy="60" r="3.5" fill="#00d2ff" />
                                    <!-- Leg 2 Mid -->
                                    <path d="M 0,14 Q 5,38 10,60" fill="none" stroke="#38bdf8" stroke-width="3.5" stroke-linecap="round" />
                                    <circle cx="10" cy="60" r="3.5" fill="#00d2ff" />
                                    <!-- Leg 3 Rear -->
                                    <path d="M -20,8 Q -40,30 -45,60" fill="none" stroke="#38bdf8" stroke-width="3.5" stroke-linecap="round" />
                                    <circle cx="-45" cy="60" r="3.5" fill="#00d2ff" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <!-- Right: Terrain Controls & Telemetry -->
                    <div class="spider-terrain-controls">
                        <div class="spider-terrain-status-panel">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="rp-card-num">// SURFACE SELECTION</span>
                                <span class="badge bg-secondary font-monospace" style="font-size: 10px;">TEST MODES</span>
                            </div>
                            <h3 class="rp-card-title mb-2">Select Terrain Profile</h3>
                            <p class="rp-card-desc mb-3">
                                Switch ground topography to test adaptive locomotion gait and posture stabilization.
                            </p>

                            <div class="spider-terrain-btn-grid" role="group" aria-label="Select terrain profile">
                                <button type="button" class="rp-control-btn spider-terrain-btn active" data-terrain="flat" aria-pressed="true">
                                    FLAT
                                </button>
                                <button type="button" class="rp-control-btn spider-terrain-btn" data-terrain="rough" aria-pressed="false">
                                    ROUGH
                                </button>
                                <button type="button" class="rp-control-btn spider-terrain-btn" data-terrain="obstacle" aria-pressed="false">
                                    OBSTACLE
                                </button>
                            </div>
                        </div>

                        <!-- Live Status Display -->
                        <div class="spider-terrain-status-panel">
                            <div class="rp-card-num mb-2">// ADAPTIVE TELEMETRY</div>
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <span class="rp-hud-label">LOCOMOTION MODE</span>
                                    <div class="font-monospace text-white fw-bold fs-5" id="terrainStatusMode">TRIPOD GAIT</div>
                                    <span class="font-monospace text-warning" style="font-size: 10px;">[ SIMULATED DEMO VALUE ]</span>
                                </div>
                                <div class="border-top pt-2" style="border-color: var(--rp-border) !important;">
                                    <span class="rp-hud-label">BALANCE POSTURE</span>
                                    <div class="font-monospace text-cyan fw-bold fs-6" id="terrainStatusBalance">STABLE // LEVEL</div>
                                    <span class="font-monospace text-warning" style="font-size: 10px;">[ SIMULATED DEMO VALUE ]</span>
                                </div>
                                <div class="border-top pt-2" style="border-color: var(--rp-border) !important;">
                                    <span class="rp-hud-label">SURFACE CONTOUR</span>
                                    <div class="font-monospace text-white fw-bold fs-6" id="terrainStatusType">FLAT SURFACE</div>
                                    <span class="font-monospace text-warning" style="font-size: 10px;">[ SIMULATED DEMO VALUE ]</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 03 GAIT DEMONSTRATION SECTION -->
        <section class="rp-section spider-gait-section" id="gait-lab">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 03 — GAIT LAB</div>
                    <h2 class="rp-section-title">Biomimetic Gait Demonstration</h2>
                    <p class="rp-section-subtitle">
                        Explore coordinated leg sequencing patterns that enable multi-legged robots to crawl, orient, and surmount steep angles.
                    </p>
                </div>

                <div class="spider-gait-layout rp-reveal">
                    <!-- Gait Mode Buttons -->
                    <div class="spider-gait-selector-box" role="tablist" aria-label="Select gait pattern">
                        <button type="button" class="spider-gait-mode-btn active" data-gait="walk" role="tab" aria-selected="true">
                            <div>
                                <div class="gait-btn-title">WALK MODE</div>
                                <p class="gait-btn-desc">Alternating tripod gait for continuous forward translation.</p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-primary" aria-hidden="true"></i>
                        </button>

                        <button type="button" class="spider-gait-mode-btn" data-gait="turn" role="tab" aria-selected="false">
                            <div>
                                <div class="gait-btn-title">TURN MODE</div>
                                <p class="gait-btn-desc">Differential radial steps rotating the robot around its center.</p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-primary" aria-hidden="true"></i>
                        </button>

                        <button type="button" class="spider-gait-mode-btn" data-gait="climb" role="tab" aria-selected="false">
                            <div>
                                <div class="gait-btn-title">CLIMB MODE</div>
                                <p class="gait-btn-desc">Pitch-biased high step gait maximizing vertical footholds.</p>
                            </div>
                            <i class="fa-solid fa-chevron-right text-primary" aria-hidden="true"></i>
                        </button>
                    </div>

                    <!-- 2.5D Gait Stage Schematic -->
                    <div class="spider-gait-visual-canvas rp-corner-bracket" id="spiderGaitSvgStage" data-active-gait="walk">
                        <div class="d-flex justify-content-between align-items-center w-100 mb-3 pb-2 border-bottom border-secondary" style="border-color: var(--rp-border) !important;">
                            <span class="rp-badge rp-badge-demo" style="font-size: 10px;">
                                <span class="rp-badge-dot rp-badge-dot-amber"></span>
                                SIMULATED GAIT KINEMATICS
                            </span>
                            <div class="font-monospace text-light" style="font-size: 11px;">HEXAPOD TOPOLOGY // 2D TOP VIEW</div>
                        </div>

                        <svg class="spider-gait-svg" viewBox="0 0 400 240" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                            <!-- Hexapod Central Body Core -->
                            <polygon points="170,90 230,90 245,120 230,150 170,150 155,120" fill="#0f172a" stroke="#00d2ff" stroke-width="2" />
                            <circle cx="200" cy="120" r="12" fill="#1e293b" stroke="#38bdf8" stroke-width="1.5" />
                            <!-- Center Heading Arrow -->
                            <polygon points="215,120 205,114 205,126" fill="#00d2ff" />

                            <!-- 6 Symmetrical Legs -->
                            <!-- Leg 1: Front Right -->
                            <g class="spider-leg-group leg-fr">
                                <path class="spider-leg-path" d="M 230,90 Q 280,60 300,40" />
                                <circle class="spider-foot-contact" cx="300" cy="40" r="5" />
                            </g>
                            <!-- Leg 2: Mid Right -->
                            <g class="spider-leg-group leg-mr">
                                <path class="spider-leg-path" d="M 245,120 Q 300,120 330,120" />
                                <circle class="spider-foot-contact" cx="330" cy="120" r="5" />
                            </g>
                            <!-- Leg 3: Rear Right -->
                            <g class="spider-leg-group leg-rr">
                                <path class="spider-leg-path" d="M 230,150 Q 280,180 300,200" />
                                <circle class="spider-foot-contact" cx="300" cy="200" r="5" />
                            </g>

                            <!-- Leg 4: Front Left -->
                            <g class="spider-leg-group leg-fl">
                                <path class="spider-leg-path" d="M 170,90 Q 120,60 100,40" />
                                <circle class="spider-foot-contact" cx="100" cy="40" r="5" />
                            </g>
                            <!-- Leg 5: Mid Left -->
                            <g class="spider-leg-group leg-ml">
                                <path class="spider-leg-path" d="M 155,120 Q 100,120 70,120" />
                                <circle class="spider-foot-contact" cx="70" cy="120" r="5" />
                            </g>
                            <!-- Leg 6: Rear Left -->
                            <g class="spider-leg-group leg-rl">
                                <path class="spider-leg-path" d="M 170,150 Q 120,180 100,200" />
                                <circle class="spider-foot-contact" cx="100" cy="200" r="5" />
                            </g>
                        </svg>

                        <!-- Dynamic Gait Info Footnote -->
                        <div class="w-100 mt-3 pt-3 border-top d-flex justify-content-between flex-wrap gap-2" style="border-color: var(--rp-border) !important;">
                            <div>
                                <div class="rp-card-title mb-1 fs-6" id="gaitDisplayTitle">Tripod Forward Walk</div>
                                <div class="text-secondary" style="font-size: 13px;" id="gaitDisplayDesc">
                                    Alternating triads of legs form stable support tripods while the remaining three swing forward.
                                </div>
                            </div>
                            <div class="text-end font-monospace" style="font-size: 11px;">
                                <div class="text-primary fw-bold" id="gaitDisplayCadence">1.2 Hz (Simulated)</div>
                                <div class="text-muted" id="gaitDisplayDuty">60% Stance Phase</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 04 INSIDE THE LEARNING LOOP -->
        <section class="rp-section spider-loop-section rp-grid-bg">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 04 — INTELLIGENCE PIPELINE</div>
                    <h2 class="rp-section-title">Inside the Learning Loop</h2>
                    <p class="rp-section-subtitle">
                        Legged robotics combines tight closed-loop sensory feedback with kinematic gait adaptation, forming an ideal platform for robotics education and embedded experimentation.
                    </p>
                </div>

                <!-- 5 Stage Cybernetic Chain -->
                <div class="spider-loop-chain rp-reveal">
                    <div class="spider-loop-node">
                        <div class="spider-loop-node-num">01 // FEEDBACK</div>
                        <h3 class="spider-loop-node-title">SENSE</h3>
                        <p class="spider-loop-node-sub">IMU balance, current draw, and ground touch sensors collect state data.</p>
                    </div>

                    <i class="fa-solid fa-arrow-right spider-loop-arrow" aria-hidden="true"></i>

                    <div class="spider-loop-node">
                        <div class="spider-loop-node-num">02 // EMBEDDED</div>
                        <h3 class="spider-loop-node-title">PROCESS</h3>
                        <p class="spider-loop-node-sub">Onboard microcontroller computes orientation tilt and body elevation.</p>
                    </div>

                    <i class="fa-solid fa-arrow-right spider-loop-arrow" aria-hidden="true"></i>

                    <div class="spider-loop-node">
                        <div class="spider-loop-node-num">03 // KINEMATICS</div>
                        <h3 class="spider-loop-node-title">PLAN</h3>
                        <p class="spider-loop-node-sub">Inverse kinematic solver generates next foot coordinates and trajectory.</p>
                    </div>

                    <i class="fa-solid fa-arrow-right spider-loop-arrow" aria-hidden="true"></i>

                    <div class="spider-loop-node">
                        <div class="spider-loop-node-num">04 // ACTUATION</div>
                        <h3 class="spider-loop-node-title">ACT</h3>
                        <p class="spider-loop-node-sub">Servo bus executes coordinated PWM angle changes across all joints.</p>
                    </div>

                    <i class="fa-solid fa-arrow-right spider-loop-arrow" aria-hidden="true"></i>

                    <div class="spider-loop-node">
                        <div class="spider-loop-node-num">05 // REFINEMENT</div>
                        <h3 class="spider-loop-node-title">LEARN</h3>
                        <p class="spider-loop-node-sub">Gait parameters adapt based on stability results and surface traction.</p>
                    </div>
                </div>

                <!-- Exploration Domains Grid -->
                <div class="row g-4 mt-2">
                    <div class="col-12 col-md-4">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[DOMAIN 01]</span>
                                <i class="fa-solid fa-microchip text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">Embedded Systems</h3>
                            <p class="rp-card-desc">
                                Hands-on exploration of real-time microcontrollers, serial communication protocols, and multi-channel PWM servo timing.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[DOMAIN 02]</span>
                                <i class="fa-solid fa-person-walking text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">Gait Control &amp; Kinematics</h3>
                            <p class="rp-card-desc">
                                Study trigonometry-based inverse kinematics, wave gaits, and dynamic center-of-mass stability margins.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[DOMAIN 03]</span>
                                <i class="fa-solid fa-code text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">Programming &amp; Research</h3>
                            <p class="rp-card-desc">
                                Script behavioral logic, test reinforcement learning algorithms, and explore autonomous navigation with open-source toolchains.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 05 SPIDERBOT APPLICATIONS -->
        <section class="rp-section">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 05 — APPLICATION DOMAINS</div>
                    <h2 class="rp-section-title">Educational &amp; Research Exploration</h2>
                    <p class="rp-section-subtitle">
                        Compact multi-legged platforms deliver hands-on robotics understanding across educational classrooms and advanced laboratory testbeds.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Education -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/embedded-robotics.png" alt="Students learning robotics programming with legged platforms">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">ACADEMIA</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">STEM &amp; Higher Education</h3>
                                <p class="rp-card-desc">
                                    Enables students to transition from theoretical mechanics to physical hardware debugging, covering motor drivers, sensor acquisition, and C++/Python robot control.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Research -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-vision.jpg" alt="Locomotion research testbed with legged robotics">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">RESEARCH</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Locomotion Research</h3>
                                <p class="rp-card-desc">
                                    Offers university and corporate labs an accessible framework for evaluating adaptive foothold selection, neuromorphic control, and bio-inspired walking behaviors.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Prototyping -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-embedded.jpg" alt="Robotics rapid prototyping">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">PROTOTYPING</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Rapid Concept Prototyping</h3>
                                <p class="rp-card-desc">
                                    Allows engineers to validate custom end-effector grippers, optical sensors, and payload delivery modules in compact physical test chambers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Exploration -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-automation.jpg" alt="Robotic exploration in constrained spaces">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">INSPECTION</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Confined Space Exploration Concepts</h3>
                                <p class="rp-card-desc">
                                    Explores how low-profile legged chassis can negotiate pipes, rubble piles, and ducts where wheeled vehicles face mechanical entrapment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 06 ENGINEERING ARCHITECTURE & SPECIFICATIONS -->
        <section class="rp-section rp-grid-bg">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 06 — PLATFORM ARCHITECTURE</div>
                    <h2 class="rp-section-title">Platform Mechanics &amp; Electronics Stack</h2>
                    <p class="rp-section-subtitle">
                        An overview of the biomimetic leg linkages, servo interconnects, and embedded compute framework.
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="rp-spec-table rp-reveal">
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-diagram-project text-primary" aria-hidden="true"></i>
                                    <span>Leg Kinematics</span>
                                </div>
                                <div class="rp-spec-val">Multi-Segment Articulated Linkages // Biomimetic Coxa-Femur-Tibia</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-bolt text-primary" aria-hidden="true"></i>
                                    <span>Actuation Bus</span>
                                </div>
                                <div class="rp-spec-val">Dedicated Multi-Channel PWM Controller // High-Torque Servos</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-compass-drafting text-primary" aria-hidden="true"></i>
                                    <span>Inertial Sensing</span>
                                </div>
                                <div class="rp-spec-val">6-DOF Onboard IMU // Dynamic Roll-Pitch Stabilization</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-code text-primary" aria-hidden="true"></i>
                                    <span>Software Stack</span>
                                </div>
                                <div class="rp-spec-val">Open Architecture // Python &amp; Arduino Compatible API</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-plug text-primary" aria-hidden="true"></i>
                                    <span>Extension Ports</span>
                                </div>
                                <div class="rp-spec-val">I2C, SPI, UART &amp; GPIO Sensor Expansion Headers</div>
                            </div>
                        </div>
                        <div class="mt-3 text-center font-monospace" style="font-size: 11px; color: var(--rp-text-dim);">
                            * SYSTEM ARCHITECTURE PRINCIPLES // SPECIFIC ACTUATOR RATINGS AND SENSOR SUITES CONFIGURED PER LAB KIT REQUIREMENTS.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 07 FINAL CTA SECTION -->
        <section class="rp-section border-bottom-0">
            <div class="rp-container">
                <div class="rp-cta-box rp-reveal">
                    <div class="rp-badge mb-3">
                        <span class="rp-badge-dot"></span>
                        <span>ROBOTICS RESEARCH &amp; EDUCATION</span>
                    </div>
                    <h2 class="rp-section-title mb-3">
                        Explore Legged Locomotion for Your<br>
                        <span class="text-gradient-cyan">Academic Lab or Prototyping Program</span>
                    </h2>
                    <p class="rp-section-subtitle mx-auto mb-4" style="max-width: 600px;">
                        Connect with our engineering and educational robotics team to discuss curriculum integration, research platforms, or custom development.
                    </p>
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                        <a href="contact-us.php" class="rp-btn-primary">
                            <span>Inquire About Platforms</span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                        <a href="our-work.php" class="rp-control-btn">
                            <span>Explore Our Work</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="assets/js/robotics-product-shared.js" defer></script>
    <script src="assets/js/spiderbot-product.js" defer></script>
</body>
</html>
