<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Robotic Arms | Intellekt Genie Robotics</title>
    <link rel="stylesheet" href="assets/css/robotics-product-shared.css">
    <link rel="stylesheet" href="assets/css/roboticarm-product.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="rp-page">
        <!-- 01 HERO SECTION -->
        <section class="arm-hero rp-grid-bg">
            <div class="rp-container">
                <div class="arm-hero-grid">
                    <div class="arm-hero-content">
                        <div class="rp-badge mb-3">
                            <span class="rp-badge-dot"></span>
                            <span>INTELLEKT ROBOTICS // PRECISION AUTOMATION</span>
                        </div>
                        <h1 class="arm-hero-title">
                            Robotic<br>
                            <span class="text-gradient-cyan">Arms</span>
                        </h1>
                        <p class="arm-hero-copy">
                            Precision robotic systems engineered for controlled movement, handling, assembly, and practical industrial automation across modern manufacturing cells.
                        </p>
                        <div class="arm-hero-actions">
                            <a href="#motion-lab" class="rp-btn-primary">
                                <span>Enter Motion Lab</span>
                                <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                            </a>
                            <a href="#automation-sequence" class="rp-control-btn">
                                <span>View Automation Cycle</span>
                            </a>
                        </div>
                    </div>

                    <!-- HERO VISUAL WITH HUD OVERLAY -->
                    <div class="arm-hero-visual rp-corner-bracket">
                        <div class="arm-hero-frame">
                            <img src="assets/image/new-images/card-arm.jpg" alt="Industrial articulated robotic arm executing precision manipulation" width="600" height="420">
                            <!-- Technical HUD Overlay -->
                            <div class="amr-hud-overlay" aria-label="Simulated arm kinematics view">
                                <div class="amr-hud-top">
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">// KINEMATIC STATUS</span>
                                        <span class="rp-hud-value text-warning">SIMULATED SYSTEM VIEW</span>
                                    </div>
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">COORDINATES</span>
                                        <span class="rp-hud-value font-monospace" style="font-size: 11px;">[X, Y, Z, R, P, Y]</span>
                                    </div>
                                </div>
                                <div class="amr-hud-bottom">
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">KINEMATICS</span>
                                        <span class="rp-hud-value"><span class="rp-badge-dot"></span> 6-AXIS ACTIVE</span>
                                    </div>
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">POSITIONING</span>
                                        <span class="rp-hud-value">CONTROLLED</span>
                                    </div>
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">TOOLING</span>
                                        <span class="rp-hud-value">MODULAR READY</span>
                                    </div>
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">CALIBRATION</span>
                                        <span class="rp-hud-value">SYNCHRONIZED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 02 INTERACTIVE MOTION LAB (JOINT INSPECTOR) -->
        <section class="rp-section arm-motion-lab" id="motion-lab">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 02 — MOTION LAB</div>
                    <h2 class="rp-section-title">Interactive Multi-Axis Joint Inspector</h2>
                    <p class="rp-section-subtitle">
                        Hover or click any joint pin (J1–J6) across the kinematic chain to inspect axis orientation, positioning roles, and degrees of freedom.
                    </p>
                </div>

                <div class="arm-lab-layout rp-reveal">
                    <!-- Left: Arm Visual Canvas with Overlaid Joint Pins -->
                    <div class="arm-visual-canvas rp-corner-bracket" role="region" aria-label="Interactive 6-Axis Joint Map">
                        <img src="assets/image/new-images/card-arm.jpg" alt="6-Axis robotic arm joint map" class="arm-visual-img">

                        <!-- Interactive Joint Markers J1 to J6 -->
                        <button type="button" class="arm-joint-pin active" data-joint="J1" aria-label="Joint 1 Base Rotation" aria-pressed="true">
                            J1
                        </button>
                        <button type="button" class="arm-joint-pin" data-joint="J2" aria-label="Joint 2 Shoulder Articulation" aria-pressed="false">
                            J2
                        </button>
                        <button type="button" class="arm-joint-pin" data-joint="J3" aria-label="Joint 3 Elbow Articulation" aria-pressed="false">
                            J3
                        </button>
                        <button type="button" class="arm-joint-pin" data-joint="J4" aria-label="Joint 4 Wrist Pitch" aria-pressed="false">
                            J4
                        </button>
                        <button type="button" class="arm-joint-pin" data-joint="J5" aria-label="Joint 5 Wrist Roll" aria-pressed="false">
                            J5
                        </button>
                        <button type="button" class="arm-joint-pin" data-joint="J6" aria-label="Joint 6 Tool Flange" aria-pressed="false">
                            J6
                        </button>

                        <div class="position-absolute bottom-0 start-0 m-3 p-2 rounded" style="background: rgba(6, 9, 17, 0.85); border: 1px solid var(--rp-border);">
                            <span class="rp-badge rp-badge-demo" style="font-size: 10px;">
                                <span class="rp-badge-dot rp-badge-dot-amber"></span>
                                SIMULATED MOTION AXES
                            </span>
                        </div>
                    </div>

                    <!-- Right: Joint Inspector Details -->
                    <div class="arm-joint-inspector">
                        <!-- Quick Selector Tabs -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="rp-card-num">// SELECT AXIS POINT</span>
                                <span class="badge bg-secondary font-monospace" style="font-size: 10px;">6 DEGREES OF FREEDOM</span>
                            </div>
                            <div class="arm-joint-selector-nav" role="tablist" aria-label="Joint selector tabs">
                                <button type="button" class="arm-joint-tab-btn active" data-joint="J1" role="tab" aria-selected="true">J1</button>
                                <button type="button" class="arm-joint-tab-btn" data-joint="J2" role="tab" aria-selected="false">J2</button>
                                <button type="button" class="arm-joint-tab-btn" data-joint="J3" role="tab" aria-selected="false">J3</button>
                                <button type="button" class="arm-joint-tab-btn" data-joint="J4" role="tab" aria-selected="false">J4</button>
                                <button type="button" class="arm-joint-tab-btn" data-joint="J5" role="tab" aria-selected="false">J5</button>
                                <button type="button" class="arm-joint-tab-btn" data-joint="J6" role="tab" aria-selected="false">J6</button>
                            </div>
                        </div>

                        <!-- Dynamic Joint Detail Card -->
                        <div class="arm-joint-detail-card rp-corner-bracket">
                            <span class="rp-card-num" id="inspectorJointNum">JOINT 01</span>
                            <h3 class="arm-joint-detail-title" id="inspectorJointTitle">Base Rotation</h3>
                            <div class="arm-joint-axis-badge" id="inspectorJointAxis">Pan / Yaw Axis (Z-Plane)</div>
                            <p class="arm-joint-detail-desc" id="inspectorJointRole">
                                Azimuthal base rotation orienting the arm structure across the workcell.
                            </p>

                            <div class="border-top pt-3" style="border-color: var(--rp-border) !important;">
                                <div class="rp-hud-label mb-1">KINEMATIC FUNCTION</div>
                                <div class="font-monospace text-light" style="font-size: 13px;" id="inspectorJointFunc">
                                    Rotational positioning &amp; radial sector alignment
                                </div>
                            </div>
                        </div>

                        <div class="p-3 rounded border font-monospace" style="background: rgba(15, 23, 42, 0.6); border-color: var(--rp-border) !important; font-size: 11px; color: var(--rp-text-dim);">
                            <span class="text-warning">NOTICE:</span> Joint descriptions are generic kinematic representations for illustrative purposes. No real-world torque or gear ratio claims are implied.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 03 AUTOMATION SEQUENCE SIMULATION -->
        <section class="rp-section arm-sequence-section" id="automation-sequence">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 03 — AUTOMATION SEQUENCE</div>
                    <h2 class="rp-section-title">Pick-and-Place Task Simulation</h2>
                    <p class="rp-section-subtitle">
                        Observe the coordinated cycle of a robotic pick-and-place sequence, executing precision path interpolation from component pickup to drop-off nest.
                    </p>
                </div>

                <!-- 4 Step Cards -->
                <div class="arm-step-progress-grid rp-reveal">
                    <div class="arm-seq-step-card" data-step="0">
                        <div class="arm-seq-num">01 // ENGAGE</div>
                        <h3 class="arm-seq-title">PICK</h3>
                        <p class="arm-seq-desc">End-effector lowers over feeder station and engages workpiece.</p>
                    </div>

                    <div class="arm-seq-step-card" data-step="1">
                        <div class="arm-seq-num">02 // TRANSIT</div>
                        <h3 class="arm-seq-title">MOVE</h3>
                        <p class="arm-seq-desc">Arm lifts and traverses a smooth interpolated trajectory arc.</p>
                    </div>

                    <div class="arm-seq-step-card" data-step="2">
                        <div class="arm-seq-num">03 // DEPOSIT</div>
                        <h3 class="arm-seq-title">PLACE</h3>
                        <p class="arm-seq-desc">Tool accurately positions component into target fixture nest.</p>
                    </div>

                    <div class="arm-seq-step-card" data-step="3">
                        <div class="arm-seq-num">04 // RETURN</div>
                        <h3 class="arm-seq-title">RESET</h3>
                        <p class="arm-seq-desc">Arm disengages and returns smoothly to home ready coordinate.</p>
                    </div>
                </div>

                <!-- Visual Simulation Stage -->
                <div class="arm-simulation-stage rp-corner-bracket rp-reveal">
                    <div class="arm-sim-canvas-wrap" role="region" aria-label="Visual animation of pick and place sequence">
                        <svg class="arm-sim-svg" viewBox="0 0 600 300" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                            <defs>
                                <linearGradient id="armMetalGrad" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#1e293b" />
                                    <stop offset="50%" stop-color="#334155" />
                                    <stop offset="100%" stop-color="#0f172a" />
                                </linearGradient>
                            </defs>

                            <!-- Floor & Stations -->
                            <line x1="40" y1="260" x2="560" y2="260" stroke="#334155" stroke-width="2" />

                            <!-- Feeder Station A (Left) -->
                            <rect x="90" y="220" width="80" height="40" rx="4" fill="#0f172a" stroke="#38bdf8" stroke-width="1.5" />
                            <text x="100" y="244" fill="#38bdf8" font-family="monospace" font-size="9" font-weight="bold">FEEDER A</text>

                            <!-- Target Assembly Fixture B (Right) -->
                            <rect x="410" y="220" width="80" height="40" rx="4" fill="#0f172a" stroke="#00d2ff" stroke-width="1.5" />
                            <text x="418" y="244" fill="#00d2ff" font-family="monospace" font-size="9" font-weight="bold">FIXTURE B</text>

                            <!-- Transfer Trajectory Arc (Dotted) -->
                            <path d="M 130,220 C 130,80 450,80 450,220" fill="none" stroke="rgba(56, 189, 248, 0.3)" stroke-width="2" stroke-dasharray="6 6" />

                            <!-- Central Robot Pedestal -->
                            <polygon points="270,260 330,260 315,200 285,200" fill="#1e293b" stroke="#475467" stroke-width="1.5" />
                            <circle cx="300" cy="200" r="14" fill="#0f172a" stroke="#38bdf8" stroke-width="2" />

                            <!-- Articulated Arm Group (Rotates around base pivot 300, 200) -->
                            <g id="simArmArmature" style="transform-origin: 300px 200px; transition: transform 1.2s cubic-bezier(0.25, 1, 0.5, 1);">
                                <!-- Arm Link 1 (Shoulder to Elbow) -->
                                <line x1="300" y1="200" x2="260" y2="100" stroke="#38bdf8" stroke-width="10" stroke-linecap="round" />
                                <circle cx="260" cy="100" r="9" fill="#0f172a" stroke="#00d2ff" stroke-width="2" />
                                <!-- Arm Link 2 (Elbow to Wrist) -->
                                <line x1="260" y1="100" x2="210" y2="60" stroke="#94a3b8" stroke-width="7" stroke-linecap="round" />
                                <circle cx="210" cy="60" r="7" fill="#0f172a" stroke="#38bdf8" stroke-width="2" />
                                <!-- Gripper Tool Flange -->
                                <line x1="210" y1="60" x2="190" y2="70" stroke="#00d2ff" stroke-width="4" stroke-linecap="round" />
                                <polygon points="190,66 180,60 180,80 190,74" fill="#00d2ff" />
                            </g>

                            <!-- Workpiece Cube (Moves smoothly between stations) -->
                            <g id="simWorkpiece" style="transition: transform 1.2s cubic-bezier(0.25, 1, 0.5, 1); transform: translate(130px, 240px);">
                                <rect x="-10" y="-10" width="20" height="20" rx="3" fill="#fbbf24" stroke="#d97706" stroke-width="1.5" />
                                <text x="-6" y="4" fill="#0f172a" font-family="monospace" font-size="9" font-weight="bold">W1</text>
                            </g>
                        </svg>
                    </div>

                    <div class="arm-sim-controls">
                        <div>
                            <span class="rp-badge rp-badge-demo me-2">
                                <span class="rp-badge-dot rp-badge-dot-amber"></span>
                                VISUAL SIMULATION ONLY
                            </span>
                            <span class="font-monospace text-light" style="font-size: 12px;" id="simLiveStatusText">
                                READY TO RUN SEQUENCE
                            </span>
                        </div>
                        <button type="button" class="rp-btn-primary" id="armRunSimBtn">
                            <i class="fa-solid fa-play me-2" aria-hidden="true"></i>
                            <span>RUN SIMULATION</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- 04 ROBOTIC ARM CAPABILITIES (TECHNICAL LAYOUT) -->
        <section class="rp-section rp-grid-bg">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 04 — CORE CAPABILITIES</div>
                    <h2 class="rp-section-title">Engineering Pillars of Controlled Motion</h2>
                    <p class="rp-section-subtitle">
                        Industrial articulated arms rely on coordinated kinematics, high repeatability, and flexible tool integration to maintain automation reliability.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[PILLAR 01]</span>
                                <i class="fa-solid fa-bullseye text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">PRECISION</h3>
                            <p class="rp-card-desc">
                                Coordinated joint servo loops generate smooth velocity profiles, minimizing positional deviation during delicate handling tasks.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[PILLAR 02]</span>
                                <i class="fa-solid fa-arrows-spin text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">REPEATABILITY</h3>
                            <p class="rp-card-desc">
                                Consistent cycle execution ensures identical component placement and fixture engagement across continuous shift operations.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[PILLAR 03]</span>
                                <i class="fa-solid fa-hand-fist text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">END-EFFECTOR READY</h3>
                            <p class="rp-card-desc">
                                Standardized wrist ISO flanges support rapid interchange of mechanical jaws, pneumatic suction cups, and custom magnetic grippers.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[PILLAR 04]</span>
                                <i class="fa-solid fa-microchip text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">INTEGRATION</h3>
                            <p class="rp-card-desc">
                                Seamless interface with industrial PLCs, vision systems, digital I/O lines, and safety interlocking protocols.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 05 ROBOTIC ARM APPLICATIONS -->
        <section class="rp-section">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 05 — APPLICATION DOMAINS</div>
                    <h2 class="rp-section-title">Target Workflows &amp; Automation Scenarios</h2>
                    <p class="rp-section-subtitle">
                        From precision parts placement to educational control labs, articulated manipulation systems support varied industrial tasks.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Assembly -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-arm.jpg" alt="Robotic arm performing mechanical assembly">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">MANUFACTURING</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Component Assembly</h3>
                                <p class="rp-card-desc">
                                    Precision insertion, fastening, and alignment of multi-piece components with consistent orientation and controlled contact force.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pick & Place -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-automation.jpg" alt="High speed pick and place handling">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">LOGISTICS</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Pick &amp; Place Sorting</h3>
                                <p class="rp-card-desc">
                                    Rapid transfer of parts between trays, conveyor belts, and packaging blisters, reducing repetitive ergonomic strain.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Machine Tending -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-vision.jpg" alt="Robotic arm tending CNC machine">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">MACHINING</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Machine Tending</h3>
                                <p class="rp-card-desc">
                                    Automated loading and unloading of CNC mills, 3D printers, and test fixtures, enabling lights-out continuous cell operation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Training & Education -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/embedded-robotics.png" alt="Students learning robotic arm programming in lab">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">ACADEMIA</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Training &amp; Robotics Education</h3>
                                <p class="rp-card-desc">
                                    Hands-on learning of inverse kinematics, trajectory programming, industrial safety zones, and Python/ROS robot control architectures.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Prototyping -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-embedded.jpg" alt="Rapid prototyping robotics workcell">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">ENGINEERING</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Rapid Prototyping</h3>
                                <p class="rp-card-desc">
                                    Flexible validation of end-of-arm tooling, custom pneumatic fixtures, and automated inspection concepts before scaling to production.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 06 ENGINEERING ARCHITECTURE & PRINCIPLES -->
        <section class="rp-section rp-grid-bg">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 06 — PLATFORM ARCHITECTURE</div>
                    <h2 class="rp-section-title">Kinematic Architecture &amp; System Integration</h2>
                    <p class="rp-section-subtitle">
                        An overview of the structural architecture, joint topology, and control interfaces supporting articulated manipulation.
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="rp-spec-table rp-reveal">
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-code-branch text-primary" aria-hidden="true"></i>
                                    <span>Kinematic Architecture</span>
                                </div>
                                <div class="rp-spec-val">6-Axis Articulated Serial Linkage // Spherical Wrist</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-compass text-primary" aria-hidden="true"></i>
                                    <span>Motion Control Logic</span>
                                </div>
                                <div class="rp-spec-val">Forward &amp; Inverse Kinematic Solvers // S-Curve Interpolation</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-puzzle-piece text-primary" aria-hidden="true"></i>
                                    <span>Tool Flange Interface</span>
                                </div>
                                <div class="rp-spec-val">Standard Mechanical Mounting Pattern // Pneumatic &amp; Digital I/O</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-shield-virus text-primary" aria-hidden="true"></i>
                                    <span>Safety Boundary Protocols</span>
                                </div>
                                <div class="rp-spec-val">Programmable Soft Limits // Hardware E-Stop Interlock</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-terminal text-primary" aria-hidden="true"></i>
                                    <span>Programming Environment</span>
                                </div>
                                <div class="rp-spec-val">Teach Pendant Emulation // Scriptable Automation API</div>
                            </div>
                        </div>
                        <div class="mt-3 text-center font-monospace" style="font-size: 11px; color: var(--rp-text-dim);">
                            * SYSTEM ARCHITECTURE PRINCIPLES // SPECIFIC KINEMATIC PACKAGES CONFIGURED PER AUTOMATION CELL SPECIFICATIONS.
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
                        <span>PRECISION AUTOMATION CONSULTATION</span>
                    </div>
                    <h2 class="rp-section-title mb-3">
                        Integrate Controlled Motion into Your<br>
                        <span class="text-gradient-cyan">Next Generation Automation Cell</span>
                    </h2>
                    <p class="rp-section-subtitle mx-auto mb-4" style="max-width: 600px;">
                        Discuss your pick-and-place, assembly, or robotics training requirements with our engineering team.
                    </p>
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                        <a href="contact-us.php" class="rp-btn-primary">
                            <span>Contact Our Engineers</span>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>
                        <a href="our-work.php" class="rp-control-btn">
                            <span>Explore Showcase Portfolio</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="assets/js/robotics-product-shared.js" defer></script>
    <script src="assets/js/roboticarm-product.js" defer></script>
</body>
</html>
