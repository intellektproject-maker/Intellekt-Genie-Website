<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
    <title>Our Work — Robotics Product Showcase | Intellekt Genie</title>
    <!-- Page-specific Robotics Showcase CSS -->
    <link rel="stylesheet" href="assets/css/our-work.css">
    <!-- Page-specific Robotics Showcase Interaction JS -->
    <script src="assets/js/our-work.js" defer></script>
</head>

<body class="robotics-our-work-page">
    <?php include 'header.php' ?>

    <main>
        <!-- =================================================================
             1. HERO SECTION
             ================================================================= -->
        <section class="ow-hero ow-animate-viewport">
            <div class="ow-hero-glow ow-hero-glow--1"></div>
            <div class="ow-hero-glow ow-hero-glow--2"></div>

            <div class="container ow-hero-container">
                <!-- Hero Left: Strategic Proposition -->
                <div class="ow-hero-content">
                    <div class="ow-kicker">
                        <span class="ow-kicker-line"></span>
                        <span class="ow-kicker-text">ROBOTICS PRODUCT SHOWCASE</span>
                        <div class="ow-breadcrumb d-none d-sm-flex">
                            <a href="index.php">Home</a>
                            <span>/</span>
                            <span>Our Work</span>
                        </div>
                    </div>

                    <h1 class="ow-hero-headline">
                        Robots built for <span class="ow-highlight">real-world</span> possibilities.
                    </h1>

                    <p class="ow-hero-subtext">
                        Discover Intellekt Robotics' purpose-built platforms—combining autonomous mobile robots for efficient facility logistics with agile legged robotics engineered for challenging environments.
                    </p>

                    <div class="ow-hero-actions">
                        <a href="#amr-showcase" class="btn-robotics-primary">
                            <span>Explore Our Robots</span>
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>
                        <a href="contact-us.php" class="btn-robotics-outline">
                            <span>Contact Us</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </a>
                    </div>

                    <!-- Capability Metrics -->
                    <div class="ow-hero-metrics">
                        <div class="ow-metric-item">
                            <span class="ow-metric-num">01</span>
                            <span class="ow-metric-title">AMR PLATFORMS</span>
                        </div>
                        <div class="ow-metric-divider"></div>
                        <div class="ow-metric-item">
                            <span class="ow-metric-num">02</span>
                            <span class="ow-metric-title">SPIDERBOTS</span>
                        </div>
                        <div class="ow-metric-divider"></div>
                        <div class="ow-metric-item">
                            <span class="ow-metric-num">03</span>
                            <span class="ow-metric-title">FIELD-TESTED</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Right: High-Res Transparent Spiderbot Render with Tech Frame -->
                <div class="ow-hero-visual">
                    <div class="ow-visual-frame">
                        <span class="ow-corner ow-corner--tl"></span>
                        <span class="ow-corner ow-corner--br"></span>
                        <div class="ow-orbit-ring"></div>

                        <div class="ow-robot-float" id="owHeroParallaxVisual">
                            <div class="ow-robot-glow-bg"></div>
                            <img src="assets/image/robotics-spider-bot.png" 
                                 alt="Intellekt Robotics Autonomous Spiderbot Platform" 
                                 class="ow-hero-img" 
                                 width="480" 
                                 height="400"
                                 loading="eager">
                        </div>

                        <div class="ow-hud-status">
                            <span class="ow-hud-status-dot"></span>
                            <span>PLATFORM STATUS // ACTIVE</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <section class="container py-5">
            <!-- Two Product Quick-Cards -->
            <div class="ow-overview-grid">
                <article class="ow-overview-card">
                    <div class="ow-card-header">
                        <div class="ow-card-icon">
                            <i class="fa-solid fa-arrows-split-up-and-left"></i>
                        </div>
                        <span class="ow-card-tag">WHEELED MOBILITY</span>
                    </div>
                    <h3>Autonomous Mobile Robots (AMRs)</h3>
                    <p>
                        Engineered for continuous indoor transport, facility logistics, and flexible material movement with intelligent mapping, obstacle avoidance, and fleet-ready navigation.
                    </p>
                    <a href="#amr-showcase" class="ow-card-link">
                        <span>View AMR Specifications</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>

                <article class="ow-overview-card">
                    <div class="ow-card-header">
                        <div class="ow-card-icon">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        <span class="ow-card-tag">LEGGED MOBILITY</span>
                    </div>
                    <h3>Spiderbot &amp; Legged Robotics</h3>
                    <p>
                        Compact multi-legged platforms built to explore complex terrain, maneuver across uneven surfaces, and provide agile locomotion for inspection, education, and prototyping.
                    </p>
                    <a href="#spiderbot-showcase" class="ow-card-link">
                        <span>View Spiderbot Specifications</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </article>
            </div>
        </section>

        <!-- =================================================================
             3. AMR SHOWCASE SECTION
             ================================================================= -->
        <section id="amr-showcase" class="ow-product-showcase ow-product-showcase--amr ow-animate-viewport">
            <div class="container">
                <div class="ow-product-grid">
                    <!-- Left Column: Content & Capabilities -->
                    <div class="ow-product-info">
                        <div class="ow-product-tag">PRODUCT CATEGORY // 01</div>
                        <h2 class="ow-product-title">
                            Autonomous Mobile Robots (AMRs)
                        </h2>
                        <p class="ow-product-desc">
                            Intellekt AMRs utilize intelligent sensor arrays, onboard computing, and localization software to navigate operational facilities with minimal manual intervention. Built to streamline internal movement while adapting seamlessly to changing layouts.
                        </p>

                        <!-- Key Supported Capabilities from amr.php -->
                        <div class="ow-feature-pills">
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-location-crosshairs"></i>
                                <div>
                                    <strong>Autonomous Navigation</strong>
                                    <span>Mapping, localization, lidar sensing, and path planning in dynamic spaces.</span>
                                </div>
                            </div>
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-boxes-packing"></i>
                                <div>
                                    <strong>Material Movement</strong>
                                    <span>Repeatable component, payload, and goods transport across active facilities.</span>
                                </div>
                            </div>
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-gears"></i>
                                <div>
                                    <strong>Flexible Deployment</strong>
                                    <span>Fast reconfiguration to evolving workflows and operational requirements.</span>
                                </div>
                            </div>
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-shield-halved"></i>
                                <div>
                                    <strong>Safe Human Interaction</strong>
                                    <span>Continuous perimeter monitoring and safety deceleration in shared spaces.</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="amr.php" class="btn-robotics-primary">
                                <span>Explore Detailed AMR Specifications</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: High-Res AMR Image -->
                    <div class="ow-product-media">
                        <img src="assets/image/new-images/amr.png" 
                             alt="Intellekt Autonomous Mobile Robot in Industrial Facility" 
                             width="800" 
                             height="450"
                             loading="lazy">
                        <div class="ow-media-badge">
                            <span class="ow-media-badge-dot"></span>
                            <span>INSPECTION &amp; TRANSPORT READY</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================================================================
             4. SPIDERBOT SHOWCASE SECTION
             ================================================================= -->
        <section id="spiderbot-showcase" class="ow-product-showcase ow-product-showcase--spider ow-animate-viewport">
            <div class="container">
                <div class="ow-product-grid ow-product-grid--reversed">
                    <!-- Left Column: Transparent Spiderbot Visual -->
                    <div class="ow-spider-frame">
                        <div class="ow-spider-glow"></div>
                        <img src="assets/image/robotics-spider-bot.png" 
                             alt="Intellekt Multi-Legged Spiderbot Platform" 
                             class="ow-spider-img"
                             width="520" 
                             height="430"
                             loading="lazy">
                    </div>

                    <!-- Right Column: Content & Capabilities -->
                    <div class="ow-product-info">
                        <div class="ow-product-tag">PRODUCT CATEGORY // 02</div>
                        <h2 class="ow-product-title">
                            Spiderbot &amp; Legged Robotics
                        </h2>
                        <p class="ow-product-desc">
                            Compact multi-legged robotic platforms engineered to demonstrate how mechanical articulation, embedded microcontrollers, and intelligent sensing work cohesively. Designed for experimentation with balance, gait patterns, and movement across varied surfaces.
                        </p>

                        <!-- Key Supported Capabilities from spiderbot.php -->
                        <div class="ow-feature-pills">
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-paw"></i>
                                <div>
                                    <strong>Legged Locomotion</strong>
                                    <span>Coordinated multi-joint leg control, gait cycles, and terrain equilibrium.</span>
                                </div>
                            </div>
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-microchip"></i>
                                <div>
                                    <strong>Embedded Intelligence</strong>
                                    <span>Microcontroller feedback, responsive actuator control, and low-latency sensing.</span>
                                </div>
                            </div>
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-mountain"></i>
                                <div>
                                    <strong>Uneven-Terrain Traversal</strong>
                                    <span>Mobility designed for obstacles, steps, and non-flat environments.</span>
                                </div>
                            </div>
                            <div class="ow-feature-pill">
                                <i class="fa-solid fa-flask"></i>
                                <div>
                                    <strong>Research &amp; Prototyping</strong>
                                    <span>Hands-on experimentation platform for robotics engineering and validation.</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="spiderbot.php" class="btn-robotics-primary">
                                <span>Explore Detailed Spiderbot Specifications</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================================================================
             5. PLATFORM COMPARISON MATRIX
             ================================================================= -->
        <section id="platform-comparison" class="ow-comparison-section ow-animate-viewport">
            <div class="container">
                <div class="ow-section-header">
                    <span class="ow-section-kicker">TECHNICAL EVALUATION</span>
                    <h2 class="ow-section-title">Choose the Right Robotic Architecture</h2>
                    <p class="ow-section-desc">
                        Both platforms serve distinct operational goals. Compare their complementary strengths to determine which platform aligns best with your application requirements.
                    </p>
                </div>

                <div class="ow-matrix-table-wrap">
                    <table class="ow-matrix-table">
                        <thead>
                            <tr>
                                <th>Characteristic</th>
                                <th>Autonomous Mobile Robots (AMRs)</th>
                                <th>Spiderbot &amp; Legged Platforms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Primary Locomotion</td>
                                <td>Wheeled drive system with precision odometry</td>
                                <td>Multi-legged articulated gait mechanism</td>
                            </tr>
                            <tr>
                                <td>Operational Environment</td>
                                <td>Smooth indoor floors, warehouses, and factories</td>
                                <td>Uneven surfaces, textured ground, and obstacles</td>
                            </tr>
                            <tr>
                                <td>Core Mission</td>
                                <td>Material handling, fleet logistics, and transport</td>
                                <td>Terrain mobility study, inspection, and prototyping</td>
                            </tr>
                            <tr>
                                <td>Payload &amp; Capacity</td>
                                <td>Designed for component, box, and cart payload transfer</td>
                                <td>Lightweight sensor packages and embedded compute</td>
                            </tr>
                            <tr>
                                <td>Navigation Architecture</td>
                                <td>Lidar / 2D SLAM mapping and point-to-point routing</td>
                                <td>Proximity sensing and gait kinematics algorithms</td>
                            </tr>
                            <tr>
                                <td>Deployment Context</td>
                                <td><span class="ow-matrix-highlight">Logistics &amp; Manufacturing Operations</span></td>
                                <td><span class="ow-matrix-highlight">R&amp;D, Prototyping &amp; Compact Inspection</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- =================================================================
             6. REAL-WORLD USE CASES
             ================================================================= -->
        <section class="ow-use-cases-section">
            <div class="container">
                <div class="ow-section-header">
                    <span class="ow-section-kicker">APPLICATION DOMAINS</span>
                    <h2 class="ow-section-title">Real-World Operational Impact</h2>
                    <p class="ow-section-desc">
                        Derived directly from our validated deployment domains across smart manufacturing, logistics, and emerging field robotics.
                    </p>
                </div>

                <div class="ow-cases-grid">
                    <article class="ow-case-card">
                        <div class="ow-case-icon">
                            <i class="fa-solid fa-warehouse"></i>
                        </div>
                        <span class="ow-case-badge">AMR APPLICATION</span>
                        <h4>Warehouse &amp; Logistics</h4>
                        <p>
                            Automate internal transport between storage racks and dispatch zones, reducing transit delays and improving spatial tracking.
                        </p>
                    </article>

                    <article class="ow-case-card">
                        <div class="ow-case-icon">
                            <i class="fa-solid fa-industry"></i>
                        </div>
                        <span class="ow-case-badge">AMR APPLICATION</span>
                        <h4>Line-Side Manufacturing</h4>
                        <p>
                            Deliver components, raw materials, and assembly trays directly to production cells with synchronized delivery cadences.
                        </p>
                    </article>

                    <article class="ow-case-card">
                        <div class="ow-case-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <span class="ow-case-badge">SPIDERBOT APPLICATION</span>
                        <h4>Confined-Space Inspection</h4>
                        <p>
                            Navigate compact or restricted environments where wheeled robots cannot maintain traction or clear structural barriers.
                        </p>
                    </article>

                    <article class="ow-case-card">
                        <div class="ow-case-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <span class="ow-case-badge">SPIDERBOT APPLICATION</span>
                        <h4>Robotics R&amp;D &amp; Education</h4>
                        <p>
                            Accelerate practical learning and prototyping in inverse kinematics, control algorithms, and multi-actuator coordination.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- =================================================================
             7. FINAL CALL TO ACTION
             ================================================================= -->
        <section class="ow-closing-cta">
            <div class="container">
                <div class="ow-closing-card">
                    <h2>Let’s build the next generation of intelligent machines.</h2>
                    <p>
                        Whether you need autonomous mobility for industrial material flow or agile robotic platforms for specialized research and inspection, Intellekt Robotics delivers dependable, deployment-ready engineering.
                    </p>
                    <div class="ow-closing-actions">
                        <a href="contact-us.php" class="btn-robotics-outline">
                            <span>Contact Us</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>
