<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
    <!-- Page-specific hero interaction & animation pause handler -->
    <script src="assets/js/company-profile-hero.js" defer></script>
</head>

<body>
    <?php include 'header.php' ?>

    <main class="robotics-company-profile">
        <!-- Premium Futuristic Robotics Hero Section -->
        <section class="cp-hero">
            <div class="cp-hero-grid"></div>
            <div class="cp-hero-glow cp-hero-glow--1"></div>
            <div class="cp-hero-glow cp-hero-glow--2"></div>

            <div class="container cp-hero-container">
                <!-- Left text column -->
                <div class="cp-hero-content">
                    <div class="cp-hero-kicker">
                        <span class="cp-kicker-line"></span>
                        <span class="cp-kicker-text">INTELLEKT ROBOTICS</span>
                        <div class="cp-breadcrumb d-none d-sm-flex">
                            <a href="index.php">Home</a>
                            <span>/</span>
                            <span>Company</span>
                            <span>/</span>
                            <span class="text-white">Profile</span>
                        </div>
                    </div>

                    <h1 class="cp-hero-headline">
                        Engineering intelligent <span class="cp-hero-highlight">machines</span> for the real world.
                    </h1>

                    <p class="cp-hero-subtext">
                        Pioneering next-generation autonomous robotics, industrial manipulation, and intelligent automation systems built for dependable deployment in demanding environments.
                    </p>

                    <div class="cp-hero-actions">
                        <a href="amr.php" class="btn-robotics-primary">
                            <span>Explore Our Work</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="contact-us.php" class="btn-robotics-outline">
                            <span>Contact Us</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </a>
                    </div>

                    <div class="cp-hero-badges">
                        <div class="cp-badge">
                            <span class="cp-badge-num">01</span>
                            <span class="cp-badge-label">Autonomous<br>Mobility</span>
                        </div>
                        <div class="cp-badge-divider"></div>
                        <div class="cp-badge">
                            <span class="cp-badge-num">02</span>
                            <span class="cp-badge-label">Robotic<br>Manipulation</span>
                        </div>
                        <div class="cp-badge-divider"></div>
                        <div class="cp-badge">
                            <span class="cp-badge-num">03</span>
                            <span class="cp-badge-label">Vision &amp;<br>Intelligence</span>
                        </div>
                    </div>
                </div>

                <!-- Right visual column (Robotic Arm Visual) -->
                <div class="cp-hero-visual">
                    <div class="cp-visual-frame">
                        <span class="cp-corner cp-corner--tl"></span>
                        <span class="cp-corner cp-corner--br"></span>

                        <div class="cp-orbit cp-orbit--1">
                            <span class="cp-orbit-dot"></span>
                        </div>
                        <div class="cp-orbit cp-orbit--2"></div>

                        <div class="cp-robot-wrapper" id="cpRobotWrapper">
                            <div class="cp-robot-glow"></div>

                            <!-- Animated Robotic Arm SVG Graphic -->
                            <svg class="cp-robot-svg" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Futuristic Intellekt Robotics Mechanical Arm Visualization">
                                <defs>
                                    <linearGradient id="armMetalGrad1" x1="100" y1="400" x2="350" y2="100" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#0e172a" />
                                        <stop offset="50%" stop-color="#1e293b" />
                                        <stop offset="100%" stop-color="#334155" />
                                    </linearGradient>
                                    <linearGradient id="armMetalGrad2" x1="200" y1="300" x2="400" y2="150" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#1e293b" />
                                        <stop offset="60%" stop-color="#3b82f6" stop-opacity="0.35" />
                                        <stop offset="100%" stop-color="#0f172a" />
                                    </linearGradient>
                                    <linearGradient id="accentBlueGrad" x1="0" y1="0" x2="1" y2="1">
                                        <stop offset="0%" stop-color="#3b82f6" />
                                        <stop offset="100%" stop-color="#00d2ff" />
                                    </linearGradient>
                                    <linearGradient id="glowLinear" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#00d2ff" stop-opacity="0.8" />
                                        <stop offset="100%" stop-color="#2563eb" stop-opacity="0" />
                                    </linearGradient>
                                    <filter id="neonGlow" x="-20%" y="-20%" width="140%" height="140%">
                                        <feGaussianBlur stdDeviation="6" result="blur" />
                                        <feMerge>
                                            <feMergeNode in="blur" />
                                            <feMergeNode in="SourceGraphic" />
                                        </feMerge>
                                    </filter>
                                </defs>

                                <!-- Base Pedestal & Foundation Platform -->
                                <ellipse cx="250" cy="430" rx="140" ry="34" fill="#080e1a" stroke="rgba(59, 130, 246, 0.3)" stroke-width="1.5" />
                                <ellipse cx="250" cy="425" rx="110" ry="24" fill="#0f172a" stroke="rgba(59, 130, 246, 0.5)" stroke-width="2" />
                                <ellipse cx="250" cy="420" rx="75" ry="16" fill="url(#armMetalGrad1)" stroke="#3b82f6" stroke-width="1.5" />

                                <!-- Platform Grid Rings & HUD Accents -->
                                <circle cx="250" cy="250" r="210" stroke="rgba(59, 130, 246, 0.12)" stroke-width="1" stroke-dasharray="6 8" />
                                <circle cx="250" cy="250" r="170" stroke="rgba(0, 210, 255, 0.08)" stroke-width="1" />

                                <!-- Vertical Robotic Column (Base Segment) -->
                                <path d="M225 420 L235 340 L265 340 L275 420 Z" fill="url(#armMetalGrad1)" stroke="rgba(59, 130, 246, 0.4)" stroke-width="1.5" />
                                <line x1="250" y1="418" x2="250" y2="345" stroke="#3b82f6" stroke-width="2" opacity="0.6" />

                                <!-- Joint 1: Shoulder Turret -->
                                <g class="cp-joint-animated">
                                    <circle cx="250" cy="330" r="28" fill="#0b1329" stroke="#3b82f6" stroke-width="2.5" />
                                    <circle cx="250" cy="330" r="14" fill="#1e293b" stroke="#00d2ff" stroke-width="1.5" />
                                    <circle cx="250" cy="330" r="5" fill="#00d2ff" filter="url(#neonGlow)" />
                                    <circle cx="250" cy="330" r="22" stroke="rgba(59, 130, 246, 0.5)" stroke-dasharray="4 4" stroke-width="1" />
                                </g>

                                <!-- Lower Arm Bicep Linkage -->
                                <path d="M242 320 L175 190 L198 178 L262 312 Z" fill="url(#armMetalGrad2)" stroke="rgba(59, 130, 246, 0.4)" stroke-width="1.5" />
                                <!-- Piston Cylinder -->
                                <path d="M256 318 L216 220 L226 215 L266 310 Z" fill="#0f172a" stroke="rgba(0, 210, 255, 0.3)" stroke-width="1" />
                                <!-- Tech Accent Line -->
                                <line x1="248" y1="305" x2="190" y2="192" stroke="#00d2ff" stroke-width="1.5" stroke-dasharray="3 5" opacity="0.8" />

                                <!-- Joint 2: Elbow Articulation -->
                                <g class="cp-joint-animated cp-joint-animated--2">
                                    <circle cx="186" cy="184" r="22" fill="#0b1329" stroke="#3b82f6" stroke-width="2" />
                                    <circle cx="186" cy="184" r="10" fill="#1e293b" stroke="#00d2ff" stroke-width="1.5" />
                                    <circle cx="186" cy="184" r="4" fill="#3b82f6" filter="url(#neonGlow)" />
                                </g>

                                <!-- Forearm Linkage -->
                                <path d="M192 174 L325 125 L332 142 L198 194 Z" fill="url(#armMetalGrad1)" stroke="rgba(59, 130, 246, 0.5)" stroke-width="1.5" />
                                <line x1="205" y1="182" x2="315" y2="137" stroke="#3b82f6" stroke-width="2" opacity="0.7" />

                                <!-- Joint 3: Wrist Axis -->
                                <g>
                                    <circle cx="330" cy="134" r="16" fill="#0b1329" stroke="#00d2ff" stroke-width="2" />
                                    <circle cx="330" cy="134" r="6" fill="#00d2ff" filter="url(#neonGlow)" />
                                </g>

                                <!-- End Effector / Robotic Tool Head -->
                                <path d="M338 128 L368 116 L376 138 L344 146 Z" fill="#1e293b" stroke="#3b82f6" stroke-width="1.5" />

                                <!-- Gripper Finger Top -->
                                <path d="M368 116 L395 106 L404 116 L386 124 Z" fill="url(#armMetalGrad2)" stroke="#00d2ff" stroke-width="1.5" />
                                <!-- Gripper Finger Bottom -->
                                <path d="M374 136 L398 148 L390 158 L368 144 Z" fill="url(#armMetalGrad2)" stroke="#00d2ff" stroke-width="1.5" />

                                <!-- Laser / Sensor Emitter Beam -->
                                <polygon points="400,111 445,124 445,140 395,153" fill="url(#glowLinear)" opacity="0.4" />
                                <circle cx="445" cy="132" r="3" fill="#00d2ff" filter="url(#neonGlow)" />

                                <!-- Dynamic Vertical Scan Beam Line -->
                                <line class="cp-scan-beam" x1="120" y1="0" x2="380" y2="0" stroke="url(#accentBlueGrad)" stroke-width="1.5" opacity="0.8" filter="url(#neonGlow)" />

                                <!-- Status LED Indicators -->
                                <circle cx="230" cy="370" r="3" fill="#00d2ff" class="cp-dot-blink" />
                                <circle cx="230" cy="382" r="3" fill="#3b82f6" class="cp-dot-blink cp-dot-blink--2" />
                                <circle cx="230" cy="394" r="3" fill="#38bdf8" class="cp-dot-blink cp-dot-blink--3" />

                                <!-- Futuristic Metric Labels on HUD -->
                                <text x="320" y="380" fill="rgba(148, 163, 184, 0.6)" font-family="monospace" font-size="9" letter-spacing="1">SYS // INTELLEKT-R1</text>
                                <text x="320" y="394" fill="rgba(0, 210, 255, 0.7)" font-family="monospace" font-size="9" letter-spacing="1">STATUS // NOMINAL</text>
                                <line x1="310" y1="372" x2="310" y2="398" stroke="#3b82f6" stroke-width="1.5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subtle scroll hint -->
            <div class="cp-scroll-hint">
                <span class="cp-scroll-line"></span>
            </div>
        </section>

        <!-- About Intellekt Robotics Overview -->
        <section class="container py-5 robotics-company-intro">
            <div class="row py-4 align-items-center g-5">
                <div class="col-12 col-lg-6">
                    <div class="cp-about-tag">ABOUT OUR COMPANY</div>
                    <h2 class="cp-intro-title">
                        Reliable engineering designed for operational growth.
                    </h2>
                    <p class="lead mb-3 text-light opacity-90">
                        Intellekt Robotics develops practical robotics and automation solutions that help organizations
                        move materials, automate repetitive operations, improve accuracy, and build safer workplaces.
                    </p>
                    <p class="cp-intro-text mb-0">
                        Our work brings together autonomous mobile robots, robotic manipulation, machine vision,
                        embedded systems, and industrial automation. We focus on dependable engineering, practical
                        deployment, and solutions that can grow with our customers' operational needs.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="robotics-profile-visual rounded-4 overflow-hidden">
                        <img src="assets/image/new-images/about-img.webp" class="img-fluid w-100" alt="Intellekt Robotics engineering and automation">
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision, mission and approach -->
        <section class="sigma-shop-details-area py-5 robotics-profile-tabs">
            <div class="container-lg">
                <div class="sigma-tabs pt-3 sigma-animation" data-wow-delay=".3s">
                    <div class="sigma-tab-items flex flex-wrap list-none gap-[20px] border-b border-solid border-[#EDEDED]">
                        <button class="sigma-tab-item relative active px-[15px] pb-[10px] text-[18px] font-bold leading-[28px] transition-all duration-300 ease-in-out" data-tab="#robotics-vision">Our Vision</button>
                        <button class="sigma-tab-item relative px-[15px] pb-[10px] text-[18px] font-bold leading-[28px] transition-all duration-300 ease-in-out" data-tab="#robotics-mission">Our Mission</button>
                        <button class="sigma-tab-item relative px-[15px] pb-[10px] text-[18px] font-bold leading-[28px] transition-all duration-300 ease-in-out" data-tab="#robotics-approach">Our Approach</button>
                    </div>
                    <div class="sigma-tabs-content">
                        <div id="robotics-vision" class="sigma-tab-content active p-4 p-md-5 mt-3">
                            <h3 class="h4 text-primary mb-3">A more intelligent, autonomous future</h3>
                            <p class="sigma-product-desc lh-base mb-0">
                                To become a trusted robotics technology partner by creating intelligent, scalable, and
                                accessible automation systems that improve how people and industries work.
                            </p>
                        </div>
                        <div id="robotics-mission" class="sigma-tab-content p-4 p-md-5 mt-3">
                            <h3 class="h4 text-primary mb-3">From engineering ideas to working systems</h3>
                            <p class="sigma-product-desc lh-base mb-0">
                                Our mission is to design, develop, and deploy reliable robotic solutions through strong
                                engineering, responsible innovation, and continuous collaboration with industry,
                                institutions, and emerging technology teams.
                            </p>
                        </div>
                        <div id="robotics-approach" class="sigma-tab-content p-4 p-md-5 mt-3">
                            <h3 class="h4 text-primary mb-3">Practical, modular, and deployment-focused</h3>
                            <p class="sigma-product-desc lh-base mb-0">
                                We begin with the operational problem, validate the environment, develop the right
                                hardware and software architecture, and test for safety, reliability, and maintainability
                                before deployment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why choose Intellekt Robotics (Capabilities) -->
        <section class="sigma-why-choose-us sigma-section-padding pb-5">
            <div class="container-lg">
                <div class="sigma-section-title-wrap d-flex flex-column justify-content-center align-items-center align-items-md-start pb-4">
                    <p class="robotics-kicker-text mb-2">WHAT WE BRING</p>
                    <h2 class="lh-base sigma-section-title mb-2 text-sigma-title col-md-9 col-12 text-center text-md-start">
                        Robotics built around real operational needs.
                    </h2>
                    <p class="col-md-9 col-12 text-center text-md-start mb-0">
                        We combine intelligent hardware, software, and engineering expertise to create solutions that are
                        useful in real environments—not just demonstrations.
                    </p>
                </div>

                <div class="row d-flex justify-content-center align-items-stretch">
                    <div class="col-12 col-sm-6 col-md-4 my-3 d-flex">
                        <div class="sigma-services-item text-center w-100">
                            <div class="sigma-services-icon flex justify-center items-center mx-auto rounded-[50%]">
                                <i class="fa-solid fa-robot fa-2x"></i>
                            </div>
                            <h3 class="sigma-services-title fs-5 py-3 pb-0">Autonomous Mobility</h3>
                            <p class="sigma-services-text pt-[15px] mb-0">AMR systems for material movement, indoor navigation, fleet coordination, and facility logistics.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 my-3 d-flex">
                        <div class="sigma-services-item text-center w-100">
                            <div class="sigma-services-icon flex justify-center items-center mx-auto rounded-[50%]">
                                <i class="fa-solid fa-hand fa-2x"></i>
                            </div>
                            <h3 class="sigma-services-title fs-5 py-3 pb-0">Robotic Manipulation</h3>
                            <p class="sigma-services-text pt-[15px] mb-0">Robotic arm integration and custom manipulation workflows for handling, assembly, and repetitive tasks.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 my-3 d-flex">
                        <div class="sigma-services-item text-center w-100">
                            <div class="sigma-services-icon flex justify-center items-center mx-auto rounded-[50%]">
                                <i class="fa-solid fa-eye fa-2x"></i>
                            </div>
                            <h3 class="sigma-services-title fs-5 py-3 pb-0">AI &amp; Machine Vision</h3>
                            <p class="sigma-services-text pt-[15px] mb-0">Perception, object detection, inspection, tracking, and vision-guided automation for smarter decisions.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 my-3 d-flex">
                        <div class="sigma-services-item text-center w-100">
                            <div class="sigma-services-icon flex justify-center items-center mx-auto rounded-[50%]">
                                <i class="fa-solid fa-gears fa-2x"></i>
                            </div>
                            <h3 class="sigma-services-title fs-5 py-3 pb-0">Industrial Automation</h3>
                            <p class="sigma-services-text pt-[15px] mb-0">Connected automation systems, process integration, control logic, and workflow optimization.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 my-3 d-flex">
                        <div class="sigma-services-item text-center w-100">
                            <div class="sigma-services-icon flex justify-center items-center mx-auto rounded-[50%]">
                                <i class="fa-solid fa-microchip fa-2x"></i>
                            </div>
                            <h3 class="sigma-services-title fs-5 py-3 pb-0">Embedded Engineering</h3>
                            <p class="sigma-services-text pt-[15px] mb-0">Embedded software, sensors, firmware, communication, and system-level integration for robotic platforms.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 my-3 d-flex">
                        <div class="sigma-services-item text-center w-100">
                            <div class="sigma-services-icon flex justify-center items-center mx-auto rounded-[50%]">
                                <i class="fa-solid fa-graduation-cap fa-2x"></i>
                            </div>
                            <h3 class="sigma-services-title fs-5 py-3 pb-0">Training &amp; Innovation</h3>
                            <p class="sigma-services-text pt-[15px] mb-0">Hands-on robotics training, internships, workshops, and applied innovation programs for future engineers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Closing statement & CTA -->
        <section class="container py-5 text-center robotics-profile-closing">
            <p class="robotics-kicker-text mb-2">BUILDING WHAT COMES NEXT</p>
            <h2 class="fw-bold mb-3 text-white">Let's make automation more intelligent.</h2>
            <p class="mx-auto mb-0 text-light opacity-85" style="max-width: 760px;">
                Whether the goal is autonomous movement, intelligent inspection, robotic manipulation, or a complete
                automation workflow, Intellekt Robotics works toward solutions that are practical, dependable, and ready
                for the next stage of growth.
            </p>
            <div class="cp-closing-actions">
                <a href="amr.php" class="btn-robotics-primary">
                    <span>Explore Our Work</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="contact-us.php" class="btn-robotics-outline">
                    <span>Contact Us</span>
                    <i class="fa-solid fa-paper-plane"></i>
                </a>
            </div>
        </section>
    </main>

    <?php include 'footer.php' ?>
</body>

</html>
