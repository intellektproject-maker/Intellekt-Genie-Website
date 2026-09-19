<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
    <!-- Programmes page – scoped hero styles -->
    <link rel="stylesheet" href="assets/css/programmes-hero.css">
</head>

<body>
    <?php include 'header.php' ?>

    <!-- ═══════════════════════════════════════════════════════════
         PROGRAMMES CINEMATIC HERO
         ════════════════════════════════════════════════════════ -->
    <section class="prog-hero" id="programmes-hero" aria-label="Robotics Programmes hero">

        <!-- Parallax background image (JS shifts this element) -->
        <div class="prog-hero__bg" id="programmes-hero-bg" role="img" aria-hidden="true"></div>

        <!-- Dark gradient overlay -->
        <div class="prog-hero__overlay" aria-hidden="true"></div>

        <!-- Ambient blue light pulse -->
        <div class="prog-hero__ambient" aria-hidden="true"></div>

        <!-- Thin bottom rule -->
        <div class="prog-hero__rule" aria-hidden="true"></div>

        <!-- Hero content -->
        <div class="prog-hero__inner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7 col-xl-6">

                        <!-- Academy label -->
                        <div class="prog-hero__label" aria-hidden="true">
                            <span class="prog-hero__label-line"></span>
                            INTELLEKT ROBOTICS ACADEMY
                        </div>

                        <!-- Main heading -->
                        <h1 class="prog-hero__heading">Robotics Programmes</h1>

                        <!-- Breadcrumb -->
                        <nav class="prog-hero__breadcrumb" aria-label="Breadcrumb">
                            <a href="index.php">Home</a>
                            <span class="prog-hero__breadcrumb-sep" aria-hidden="true">&#8250;</span>
                            <span aria-current="page">Robotics Programmes</span>
                        </nav>

                        <!-- Thin divider -->
                        <div class="prog-hero__divider" aria-hidden="true"></div>

                        <!-- Description -->
                        <p class="prog-hero__desc">
                            Practical learning programmes in autonomous mobile robots,
                            robotics automation, artificial intelligence, machine vision,
                            embedded systems and industrial deployment.
                        </p>

                        <!-- Learning indicators -->
                        <div class="prog-hero__indicators" role="list">

                            <div class="prog-hero__indicator" role="listitem">
                                <span class="prog-hero__ind-num">01</span>
                                <span class="prog-hero__ind-title">HANDS-ON</span>
                                <span class="prog-hero__ind-sub">LEARNING</span>
                            </div>

                            <div class="prog-hero__indicator" role="listitem">
                                <span class="prog-hero__ind-num">02</span>
                                <span class="prog-hero__ind-title">INDUSTRY-RELEVANT</span>
                                <span class="prog-hero__ind-sub">SKILLS</span>
                            </div>

                            <div class="prog-hero__indicator" role="listitem">
                                <span class="prog-hero__ind-num">03</span>
                                <span class="prog-hero__ind-title">REAL-WORLD</span>
                                <span class="prog-hero__ind-sub">APPLICATIONS</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ═══════════════════════════════════════════════════════════
         END PROGRAMMES CINEMATIC HERO
         ════════════════════════════════════════════════════════ -->


    <!-- ═══════════════════════════════════════════════════════════
         PROGRAMMES SECTION
         ════════════════════════════════════════════════════════ -->
    <article class="prog-section" id="robotics-programmes">
        <div class="container">

            <!-- Section heading -->
            <div class="text-center mb-5">
                <span class="prog-section__kicker">LEARN. BUILD. INNOVATE.</span>
                <h2 class="prog-section__heading">Our Robotics Programmes</h2>
                <p class="prog-section__desc">
                    Industry-aligned learning paths designed to equip you with practical skills
                    for real-world robotics and automation challenges.
                </p>
            </div>

            <!-- Programme cards -->
            <div class="row g-4">

                <!-- 1. Autonomous Mobile Robots -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="prog-card">
                        <img
                            src="assets/image/new-images/card-amr.jpg"
                            alt="Autonomous mobile robot navigating a warehouse floor"
                            class="prog-card__img"
                            loading="lazy"
                        >
                        <div class="prog-card__body">
                            <h4 class="prog-card__title">Autonomous Mobile Robots</h4>
                            <p class="prog-card__desc">
                                Learn the fundamentals of AMR design, navigation and intelligent
                                material movement.
                            </p>
                            <ul class="prog-card__list">
                                <li>Mobile robot architecture</li>
                                <li>Mapping and navigation</li>
                                <li>Obstacle avoidance</li>
                                <li>Fleet and deployment concepts</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2. Robotic Arms -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="prog-card">
                        <img
                            src="assets/image/new-images/card-arm.jpg"
                            alt="Industrial robotic arm performing precision assembly"
                            class="prog-card__img"
                            loading="lazy"
                        >
                        <div class="prog-card__body">
                            <h4 class="prog-card__title">Robotic Arms &amp; Manipulation</h4>
                            <p class="prog-card__desc">
                                Explore articulated robotic arm systems, motion control and
                                precision industrial manipulation tasks.
                            </p>
                            <ul class="prog-card__list">
                                <li>Robot kinematics &amp; dynamics</li>
                                <li>End-effector tooling</li>
                                <li>Motion planning</li>
                                <li>Robot-cell integration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 3. AI & Machine Vision -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="prog-card">
                        <img
                            src="assets/image/new-images/card-vision.jpg"
                            alt="Machine vision inspection system on a factory conveyor"
                            class="prog-card__img"
                            loading="lazy"
                        >
                        <div class="prog-card__body">
                            <h4 class="prog-card__title">AI &amp; Machine Vision</h4>
                            <p class="prog-card__desc">
                                Explore generative AI, computer vision and intelligent perception
                                for next-generation robotic systems.
                            </p>
                            <ul class="prog-card__list">
                                <li>Generative AI fundamentals</li>
                                <li>Image processing &amp; object detection</li>
                                <li>AI-guided inspection</li>
                                <li>AI and sensor integration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Robotics & Industrial Automation -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="prog-card">
                        <img
                            src="assets/image/new-images/card-automation.jpg"
                            alt="Engineers monitoring industrial automation systems in a control room overlooking a robot factory floor"
                            class="prog-card__img"
                            loading="lazy"
                        >
                        <div class="prog-card__body">
                            <h4 class="prog-card__title">Robotics &amp; Industrial Automation</h4>
                            <p class="prog-card__desc">
                                Understand how robots, sensors and control systems work together
                                in industrial environments.
                            </p>
                            <ul class="prog-card__list">
                                <li>Automation architecture</li>
                                <li>PLC and control basics</li>
                                <li>Industrial sensors</li>
                                <li>Robot-cell integration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 5. Embedded Robotics & IoT -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="prog-card">
                        <img
                            src="assets/image/new-images/card-embedded.jpg"
                            alt="Embedded electronics workbench with microcontroller, motor drivers and oscilloscope"
                            class="prog-card__img"
                            loading="lazy"
                        >
                        <div class="prog-card__body">
                            <h4 class="prog-card__title">Embedded Robotics &amp; IoT</h4>
                            <p class="prog-card__desc">
                                Develop the electronics and software foundation required to
                                create connected robots.
                            </p>
                            <ul class="prog-card__list">
                                <li>Microcontrollers</li>
                                <li>Embedded programming</li>
                                <li>Motor and sensor interfacing</li>
                                <li>IoT communication</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 6. Hands-on Robotics Projects -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="prog-card">
                        <img
                            src="assets/image/new-images/robotics-why-choose-us.webp"
                            alt="Industrial robotics lab with AMR and robotic arm in a modern facility"
                            class="prog-card__img"
                            loading="lazy"
                        >
                        <div class="prog-card__body">
                            <h4 class="prog-card__title">Hands-on Robotics Projects</h4>
                            <p class="prog-card__desc">
                                Apply your learning through guided projects, prototyping, testing
                                and demonstrations.
                            </p>
                            <ul class="prog-card__list">
                                <li>Project planning</li>
                                <li>Mechanical and electrical integration</li>
                                <li>Testing and troubleshooting</li>
                                <li>Project documentation</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div>
    </article>
    <!-- ═══════════════════════════════════════════════════════════
         END PROGRAMMES SECTION
         ════════════════════════════════════════════════════════ -->


    <!-- ═══════════════════════════════════════════════════════════
         FEATURE STRIP
         ════════════════════════════════════════════════════════ -->
    <section class="prog-features" aria-label="Programme benefits">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <!-- Expert Faculty -->
                <div class="col-6 col-md-3">
                    <div class="prog-feature-item">
                        <svg class="prog-feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/><line x1="12" y1="12" x2="12" y2="16"/><polyline points="9 15 12 18 15 15"/>
                        </svg>
                        <div>
                            <div class="prog-feature-title">Expert Faculty</div>
                            <div class="prog-feature-desc">Guided by industry-experienced robotics practitioners</div>
                        </div>
                    </div>
                </div>

                <!-- Practical Projects -->
                <div class="col-6 col-md-3">
                    <div class="prog-feature-item">
                        <svg class="prog-feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="3" width="20" height="14" rx="2"/><polyline points="8 21 12 17 16 21"/><line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                        <div>
                            <div class="prog-feature-title">Practical Projects</div>
                            <div class="prog-feature-desc">Build and test real robots during the programme</div>
                        </div>
                    </div>
                </div>

                <!-- Industry Relevant -->
                <div class="col-6 col-md-3">
                    <div class="prog-feature-item">
                        <svg class="prog-feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                        </svg>
                        <div>
                            <div class="prog-feature-title">Industry Relevant</div>
                            <div class="prog-feature-desc">Curriculum aligned with real industrial requirements</div>
                        </div>
                    </div>
                </div>

                <!-- Certification -->
                <div class="col-6 col-md-3">
                    <div class="prog-feature-item">
                        <svg class="prog-feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
                        </svg>
                        <div>
                            <div class="prog-feature-title">Certification</div>
                            <div class="prog-feature-desc">Receive a recognised programme completion certificate</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ═══════════════════════════════════════════════════════════
         END FEATURE STRIP
         ════════════════════════════════════════════════════════ -->

    <!-- Programmes hero parallax script (scoped, lightweight) -->
    <script src="assets/js/programmes-hero.js" defer></script>

    <?php include 'footer.php' ?>
</body>

</html>
