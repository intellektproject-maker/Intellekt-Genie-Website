<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Autonomous Mobile Robots | Intellekt Genie Robotics</title>
    <link rel="stylesheet" href="assets/css/robotics-product-shared.css">
    <link rel="stylesheet" href="assets/css/amr-product.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="rp-page">
        <!-- 01 HERO SECTION -->
        <section class="amr-hero rp-grid-bg">
            <div class="rp-container">
                <div class="amr-hero-grid">
                    <div class="amr-hero-content">
                        <div class="rp-badge mb-3">
                            <span class="rp-badge-dot"></span>
                            <span>INTELLEKT ROBOTICS // AUTONOMOUS MOBILITY</span>
                        </div>
                        <h1 class="amr-hero-title">
                            Autonomous Mobile<br>
                            <span class="text-gradient-cyan">Robots</span>
                        </h1>
                        <p class="amr-hero-copy">
                            Intellekt Autonomous Mobile Robots (AMRs) are engineered for intelligent movement, spatial navigation, and reliable material transport across dynamic modern facilities and industrial workspaces.
                        </p>
                        <div class="amr-hero-actions">
                            <a href="#mission-control" class="rp-btn-primary">
                                <span>Launch Mission Control</span>
                                <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                            </a>
                            <a href="contact-us.php" class="rp-control-btn">
                                <span>Request Deployment Consultation</span>
                            </a>
                        </div>
                    </div>

                    <!-- HERO VISUAL WITH HUD OVERLAY -->
                    <div class="amr-hero-visual rp-corner-bracket">
                        <div class="amr-hero-frame">
                            <img src="assets/image/new-images/card-amr.jpg" alt="Intellekt Autonomous Mobile Robot platform in an industrial facility" width="600" height="420">
                            <!-- Technical HUD Overlay -->
                            <div class="amr-hud-overlay" aria-label="Simulated robot telemetry view">
                                <div class="amr-hud-top">
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">// SYSTEM VIEW</span>
                                        <span class="rp-hud-value text-warning">SIMULATED SYSTEM VIEW</span>
                                    </div>
                                    <div class="amr-radar-circle" title="Simulated spatial scan active" aria-hidden="true"></div>
                                </div>
                                <div class="amr-hud-bottom">
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">SYSTEM STATUS</span>
                                        <span class="rp-hud-value"><span class="rp-badge-dot"></span> ONLINE</span>
                                    </div>
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">NAVIGATION</span>
                                        <span class="rp-hud-value">AUTONOMOUS</span>
                                    </div>
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">PAYLOAD</span>
                                        <span class="rp-hud-value">READY</span>
                                    </div>
                                    <div class="rp-hud-chip">
                                        <span class="rp-hud-label">MAPPING</span>
                                        <span class="rp-hud-value">ACTIVE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 02 INTERACTIVE MISSION CONTROL SECTION -->
        <section class="rp-section amr-mission-control" id="mission-control">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 02 — MISSION CONTROL SIMULATION</div>
                    <h2 class="rp-section-title">Autonomous Fleet Navigation &amp; Routing</h2>
                    <p class="rp-section-subtitle">
                        Experience how the AMR platform continuously calculates spatial trajectories, evaluates path clearance, and avoids simulated dynamic obstacles across a facility floorplan.
                    </p>
                </div>

                <div class="amr-mission-layout rp-reveal">
                    <!-- Left: Stylized Top-Down Facility Map -->
                    <div class="amr-map-container rp-corner-bracket">
                        <div class="amr-map-header">
                            <div>
                                <span class="rp-badge rp-badge-demo">
                                    <span class="rp-badge-dot rp-badge-dot-amber"></span>
                                    VISUAL SIMULATION ONLY
                                </span>
                            </div>
                            <div class="text-end font-monospace" style="font-size: 11px; color: var(--rp-text-dim);">
                                FACILITY GRID // ZONE-B4 // TOP-DOWN
                            </div>
                        </div>

                        <div class="amr-map-canvas" role="region" aria-label="Interactive Top-Down Facility Map Simulation">
                            <svg class="amr-map-svg" viewBox="0 0 600 400" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                                <defs>
                                    <!-- Gradients & Markers -->
                                    <linearGradient id="amrRouteGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#38bdf8" />
                                        <stop offset="100%" stop-color="#00d2ff" />
                                    </linearGradient>
                                    <filter id="amrGlow" x="-20%" y="-20%" width="140%" height="140%">
                                        <feGaussianBlur stdDeviation="3" result="blur" />
                                        <feComposite in="SourceGraphic" in2="blur" operator="over" />
                                    </filter>
                                </defs>

                                <!-- Facility Zones & Storage Racks -->
                                <g class="facility-infrastructure">
                                    <!-- Aisle Racks Upper Left -->
                                    <rect x="50" y="40" width="130" height="40" rx="4" class="amr-zone-rack" />
                                    <text x="60" y="64" class="amr-zone-label">RACK STORAGE A-1</text>

                                    <rect x="50" y="100" width="130" height="40" rx="4" class="amr-zone-rack" />
                                    <text x="60" y="124" class="amr-zone-label">RACK STORAGE A-2</text>

                                    <!-- Central Obstacle Zone (Simulated machinery / pallet stack) -->
                                    <rect x="230" y="120" width="110" height="80" rx="6" fill="rgba(245, 158, 11, 0.12)" stroke="rgba(245, 158, 11, 0.45)" stroke-width="1.5" stroke-dasharray="4 4" />
                                    <text x="242" y="156" fill="#fbbf24" font-family="monospace" font-size="9" letter-spacing="1">OBSTACLE BUFFER</text>
                                    <text x="245" y="172" fill="#94a3b8" font-family="monospace" font-size="8">DYNAMIC ZONE</text>

                                    <!-- Lower Facility Racks -->
                                    <rect x="230" y="270" width="140" height="45" rx="4" class="amr-zone-rack" />
                                    <text x="240" y="297" class="amr-zone-label">INSPECTION BAY C-1</text>

                                    <rect x="420" y="180" width="130" height="150" rx="6" class="amr-zone-rack" />
                                    <text x="435" y="210" class="amr-zone-label">ASSEMBLY CELL</text>
                                    <text x="435" y="230" fill="#64748b" font-family="monospace" font-size="9">STATION B-04</text>
                                </g>

                                <!-- Start & Destination Waypoints -->
                                <g class="waypoints">
                                    <!-- Start Point A (Dock 01) -->
                                    <circle cx="80" cy="320" r="14" fill="rgba(37, 99, 235, 0.25)" stroke="#38bdf8" stroke-width="2" class="amr-waypoint-start" />
                                    <circle cx="80" cy="320" r="4" fill="#38bdf8" />
                                    <text x="45" y="356" fill="#38bdf8" font-family="monospace" font-size="10" font-weight="bold">START: BAY 01</text>

                                    <!-- Destination Point B (Assembly cell) -->
                                    <circle cx="520" cy="90" r="14" fill="rgba(0, 210, 255, 0.25)" stroke="#00d2ff" stroke-width="2" class="amr-waypoint-end" />
                                    <circle cx="520" cy="90" r="4" fill="#00d2ff" />
                                    <text x="460" y="60" fill="#00d2ff" font-family="monospace" font-size="10" font-weight="bold">DEST: CELL 04</text>
                                </g>

                                <!-- Active Simulated Route Line -->
                                <path id="amrActiveRoutePath" class="amr-route-path" d="M 80,320 C 140,320 160,260 220,240 C 280,220 320,250 380,200 C 440,150 460,90 520,90" />

                                <!-- Simulated AMR Bot Marker -->
                                <g id="amrBotMarker" class="amr-bot-marker" transform="translate(80, 320)">
                                    <!-- Forward LiDAR Sensor Scan Cone -->
                                    <path d="M 0,0 L 40,-16 L 40,16 Z" fill="rgba(0, 210, 255, 0.18)" stroke="rgba(0, 210, 255, 0.4)" stroke-width="1" />
                                    <!-- Robot Chassis (Top-down) -->
                                    <rect x="-14" y="-10" width="28" height="20" rx="5" fill="#0f172a" stroke="#00d2ff" stroke-width="2" />
                                    <!-- Wheels -->
                                    <rect x="-12" y="-13" width="8" height="3" rx="1" fill="#38bdf8" />
                                    <rect x="-12" y="10" width="8" height="3" rx="1" fill="#38bdf8" />
                                    <rect x="4" y="-13" width="8" height="3" rx="1" fill="#38bdf8" />
                                    <rect x="4" y="10" width="8" height="3" rx="1" fill="#38bdf8" />
                                    <!-- Center Indicator -->
                                    <circle cx="0" cy="0" r="3.5" fill="#38bdf8" />
                                    <!-- Direction Nose Arrow -->
                                    <polygon points="10,0 6,-3 6,3" fill="#00d2ff" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <!-- Right: Mission Controls & Simulated Telemetry -->
                    <div class="amr-dashboard">
                        <!-- Route Selection Controls -->
                        <div class="amr-route-controls">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="rp-card-num">// NAVIGATION ALGORITHM</span>
                                <span class="badge bg-secondary font-monospace" style="font-size: 10px;">SELECT TRAJECTORY</span>
                            </div>
                            <h3 class="rp-card-title mb-2">Trajectory Strategy</h3>
                            <p class="rp-card-desc mb-3">
                                Select an autonomous pathing strategy to observe dynamic route recalculation across the simulated workspace.
                            </p>

                            <div class="amr-route-btn-group" role="group" aria-label="Select AMR pathing mode">
                                <button type="button" class="rp-control-btn amr-route-btn" data-route="fastest" aria-pressed="false">
                                    FASTEST
                                </button>
                                <button type="button" class="rp-control-btn amr-route-btn" data-route="safe" aria-pressed="false">
                                    SAFE
                                </button>
                                <button type="button" class="rp-control-btn amr-route-btn active" data-route="optimized" aria-pressed="true">
                                    OPTIMIZED
                                </button>
                            </div>
                        </div>

                        <!-- Simulated Telemetry Panels -->
                        <div class="amr-telemetry-grid">
                            <div class="amr-telemetry-card">
                                <span class="rp-hud-label">SIMULATED VELOCITY</span>
                                <div class="amr-telemetry-val" id="telemetrySpeed">1.2 m/s</div>
                                <span class="amr-telemetry-sub">[ DEMO VALUE ]</span>
                            </div>

                            <div class="amr-telemetry-card">
                                <span class="rp-hud-label">BATTERY STATE</span>
                                <div class="amr-telemetry-val" id="telemetryBattery">84%</div>
                                <span class="amr-telemetry-sub">[ DEMO VALUE ]</span>
                            </div>

                            <div class="amr-telemetry-card">
                                <span class="rp-hud-label">CURRENT PAYLOAD</span>
                                <div class="amr-telemetry-val" id="telemetryPayload">120 kg</div>
                                <span class="amr-telemetry-sub">[ DEMO VALUE ]</span>
                            </div>

                            <div class="amr-telemetry-card">
                                <span class="rp-hud-label">REMAINING DISTANCE</span>
                                <div class="amr-telemetry-val" id="telemetryDistance">42 m</div>
                                <span class="amr-telemetry-sub">[ DEMO VALUE ]</span>
                            </div>

                            <div class="amr-telemetry-card">
                                <span class="rp-hud-label">CLEARANCE MARGIN</span>
                                <div class="amr-telemetry-val" id="telemetryClearance" style="font-size: 16px;">1.8 m (BALANCED)</div>
                                <span class="amr-telemetry-sub">[ DEMO VALUE ]</span>
                            </div>

                            <div class="amr-telemetry-card">
                                <span class="rp-hud-label">DISPATCH MODE</span>
                                <div class="amr-telemetry-val" id="telemetryStatus" style="font-size: 16px;">DYNAMIC SLAM</div>
                                <span class="amr-telemetry-sub">[ DEMO VALUE ]</span>
                            </div>
                        </div>

                        <div class="p-3 rounded border font-monospace" style="background: rgba(15, 23, 42, 0.6); border-color: var(--rp-border) !important; font-size: 11px; color: var(--rp-text-dim);">
                            <span class="text-warning">NOTICE:</span> All values shown in this Mission Control view are UI demonstrations illustrating path planning and kinematics concepts.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 03 AMR CAPABILITIES (5-STAGE SEQUENCE) -->
        <section class="rp-section amr-capabilities-section">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 03 — CAPABILITY PIPELINE</div>
                    <h2 class="rp-section-title">The Autonomous Navigation Sequence</h2>
                    <p class="rp-section-subtitle">
                        From perception to physical execution, the Intellekt AMR mobility framework executes a closed-loop spatial intelligence cycle.
                    </p>
                </div>

                <div class="amr-capability-sequence">
                    <div class="amr-cap-card rp-reveal">
                        <div class="amr-cap-num">01 // PERCEPTION</div>
                        <h3 class="amr-cap-title">SENSE</h3>
                        <p class="amr-cap-desc">
                            Sensors capture real-time spatial depth and obstacle points across surrounding workspaces.
                        </p>
                    </div>

                    <div class="amr-cap-card rp-reveal">
                        <div class="amr-cap-num">02 // LOCALIZATION</div>
                        <h3 class="amr-cap-title">MAP</h3>
                        <p class="amr-cap-desc">
                            The system builds and updates an accurate continuous understanding of operating facility boundaries.
                        </p>
                    </div>

                    <div class="amr-cap-card rp-reveal">
                        <div class="amr-cap-num">03 // KINEMATICS</div>
                        <h3 class="amr-cap-title">PLAN</h3>
                        <p class="amr-cap-desc">
                            Onboard compute evaluates candidate trajectories to determine an optimal, collision-free movement path.
                        </p>
                    </div>

                    <div class="amr-cap-card rp-reveal">
                        <div class="amr-cap-num">04 // PROPULSION</div>
                        <h3 class="amr-cap-title">MOVE</h3>
                        <p class="amr-cap-desc">
                            Differential or omnidirectional drives execute smooth acceleration curves along the designated route.
                        </p>
                    </div>

                    <div class="amr-cap-card rp-reveal">
                        <div class="amr-cap-num">05 // RECOVERY</div>
                        <h3 class="amr-cap-title">ADAPT</h3>
                        <p class="amr-cap-desc">
                            When unforeseen physical obstacles appear, routes automatically recalculate without operational stoppage.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 04 TECHNICAL INTELLIGENCE & ARCHITECTURE -->
        <section class="rp-section rp-grid-bg">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 04 — TECHNICAL INTELLIGENCE</div>
                    <h2 class="rp-section-title">Perception Architecture &amp; Safety Control</h2>
                    <p class="rp-section-subtitle">
                        Industrial autonomy requires tight integration of multi-layer safety fields, environmental perception, and deterministic motion controllers.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[SYS.NAV.01]</span>
                                <i class="fa-solid fa-radar text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">LiDAR &amp; Spatial Perception</h3>
                            <p class="rp-card-desc">
                                Continuous planar laser scanning provides robust contour detection, feature extraction, and centimeter-level localization reference.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[SYS.NAV.02]</span>
                                <i class="fa-solid fa-shield-halved text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">Dynamic Safety Zones</h3>
                            <p class="rp-card-desc">
                                Speed-dependent protective fields reduce robot velocity automatically upon approaching workers or transient facility traffic.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[SYS.NAV.03]</span>
                                <i class="fa-solid fa-network-wired text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">Fleet Coordination</h3>
                            <p class="rp-card-desc">
                                Centralized dispatch protocols coordinate traffic rights, intersection management, and job distribution across multiple AMR units.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="rp-card h-100 rp-reveal">
                            <div class="rp-card-header">
                                <span class="rp-card-num">[SYS.NAV.04]</span>
                                <i class="fa-solid fa-battery-half text-primary fs-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="rp-card-title">Autonomous Docking</h3>
                            <p class="rp-card-desc">
                                Optical and magnetic docking guides ensure precision alignment with automatic charging terminals and transfer stations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 05 AMR APPLICATIONS (LARGE VISUAL PANELS) -->
        <section class="rp-section">
            <div class="rp-container">
                <div class="rp-section-heading">
                    <div class="rp-section-tag">// SEC 05 — APPLICATION DOMAINS</div>
                    <h2 class="rp-section-title">Engineered for High-Density Operations</h2>
                    <p class="rp-section-subtitle">
                        AMR solutions adapt to varied material handling topologies, from warehouse aisles to clean research rooms and manufacturing lines.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Warehouse -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-automation.jpg" alt="Autonomous mobile robot transporting bins in automated warehouse">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">LOGISTICS // WAREHOUSE</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Warehouse Material Movement</h3>
                                <p class="rp-card-desc">
                                    Automates point-to-point bin transport, tote replenishment, and finished goods transfer between racking zones and dispatch docks, eliminating manual hauling.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Manufacturing -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-amr.jpg" alt="AMR delivering parts along a manufacturing line">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">INDUSTRY // PRODUCTION</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Manufacturing Line-Side Logistics</h3>
                                <p class="rp-card-desc">
                                    Delivers subassemblies and raw kits directly to workstations on demand, synchronizing with production line cadence and reducing staging floor congestion.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Laboratory -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-vision.jpg" alt="Controlled internal transport in laboratory environment">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">CLEANROOM // LABORATORY</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Controlled Internal Transport</h3>
                                <p class="rp-card-desc">
                                    Transfers samples, reagents, and sensitive test carriers through controlled access corridors with steady acceleration and secure containment.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Education & R&D -->
                    <div class="col-12 col-md-6">
                        <div class="rp-app-card rp-reveal">
                            <div class="rp-app-img-wrap">
                                <img src="assets/image/new-images/card-embedded.jpg" alt="Robotics research and development testbed">
                                <div class="rp-app-badge-overlay">
                                    <span class="rp-badge">ACADEMIA // R&amp;D</span>
                                </div>
                            </div>
                            <div class="rp-app-body">
                                <h3 class="rp-card-title">Education &amp; Robotics Research</h3>
                                <p class="rp-card-desc">
                                    Provides academic programs and robotics engineering labs an open, accessible testbed for studying SLAM algorithms, pathing logic, and autonomous behaviors.
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
                    <h2 class="rp-section-title">Core Mechanical &amp; Electrical Architecture</h2>
                    <p class="rp-section-subtitle">
                        An overview of the structural design principles and integration layers foundational to Intellekt mobile platforms.
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="rp-spec-table rp-reveal">
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-cube text-primary" aria-hidden="true"></i>
                                    <span>Chassis &amp; Mechanical Frame</span>
                                </div>
                                <div class="rp-spec-val">Rigid Steel Subframe // Low Center-of-Gravity</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-gear text-primary" aria-hidden="true"></i>
                                    <span>Drive Subsystem</span>
                                </div>
                                <div class="rp-spec-val">Dual Differential Drive // High-Traction Suspension</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-microchip text-primary" aria-hidden="true"></i>
                                    <span>Navigation Compute</span>
                                </div>
                                <div class="rp-spec-val">Embedded Real-Time Linux // SLAM Perception Engine</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-eye text-primary" aria-hidden="true"></i>
                                    <span>Primary Sensing</span>
                                </div>
                                <div class="rp-spec-val">2D Safety Laser Scanners // 3D Depth Avoidance Optical</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-triangle-exclamation text-primary" aria-hidden="true"></i>
                                    <span>Safety Architecture</span>
                                </div>
                                <div class="rp-spec-val">Category 3 / PLd Safety Relays // Dual E-Stops</div>
                            </div>
                            <div class="rp-spec-row">
                                <div class="rp-spec-key">
                                    <i class="fa-solid fa-wifi text-primary" aria-hidden="true"></i>
                                    <span>Communication Bus</span>
                                </div>
                                <div class="rp-spec-val">Industrial Dual-Band Wi-Fi // Modbus &amp; REST API</div>
                            </div>
                        </div>
                        <div class="mt-3 text-center font-monospace" style="font-size: 11px; color: var(--rp-text-dim);">
                            * SYSTEM ARCHITECTURE PRINCIPLES // SPECIFIC CAPACITIES AND SENSOR PACKAGES CONFIGURED PER FACILITY REQUIREMENTS.
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
                        <span>FACILITY LOGISTICS CONSULTATION</span>
                    </div>
                    <h2 class="rp-section-title mb-3">
                        Accelerate Internal Transport with<br>
                        <span class="text-gradient-cyan">Intelligent Mobile Automation</span>
                    </h2>
                    <p class="rp-section-subtitle mx-auto mb-4" style="max-width: 600px;">
                        Connect with our engineering team to review facility pathing, simulate fleet integration, or schedule a hands-on robotics demonstration.
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
    <script src="assets/js/amr-product.js" defer></script>
</body>
</html>
