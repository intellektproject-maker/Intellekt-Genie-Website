<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
    <!-- Homepage Hero Cinematic Robotics Styles & Interaction Script -->
    <link rel="stylesheet" href="assets/css/home-commercial.css">
    <link rel="stylesheet" href="assets/css/home-hero-cinematic.css">
    <script src="assets/js/home-hero-cinematic.js" defer></script>
</head>

<body>
    <?php include 'header.php' ?>

    <!-- ================= ROBOTICS HERO SECTION ================= -->
    <section class="robotics-hero-section home-hero-cinematic" id="homeHeroSection">
        <!-- Living 3D Robotics Atmospheric Layers -->
        <div class="hero-scene-stage"></div>
        <div class="hero-grid-overlay"></div>
        <div class="hero-floor-glow"></div>
        <div class="hero-laser-scanner"></div>

        <!-- Robotics Environmental Light Accents -->
        <div class="robot-lighting-layer">
            <div class="ambient-lab-light"></div>
            <div class="amr-active-glow"></div>
            <div class="arm-active-glow"></div>
            <div class="arm-beacon-pulse"></div>
        </div>

        <!-- Live Operational Telemetry HUD -->
        <div class="hero-hud-telemetry" aria-label="System status telemetry">
            <div class="hud-status-indicator">
                <span class="hud-dot"></span>
                <div class="hud-text-group">
                    <span class="hud-title">SYSTEM // ONLINE</span>
                    <span class="hud-subtitle">AMR &amp; MANIPULATION ACTIVE</span>
                </div>
            </div>
            <div class="hud-metrics-divider"></div>
            <div class="hud-metric">
                <span class="hud-metric-val">SYNCED</span>
                <span class="hud-metric-lbl">FLEET</span>
            </div>
        </div>

        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="robotics-hero-content">
                        <!-- Subheading / Kicker -->
                        <div class="robotics-kicker">
                            <span class="robotics-kicker-line"></span>
                            <span class="robotics-kicker-text">INTELLEKT ROBOTICS</span>
                        </div>

                        <!-- Headline -->
                        <h1 class="robotics-headline">
                            Intelligent Robotics.<br>
                            <span class="robotics-highlight">Engineered</span><br>
                            for the Real World.
                        </h1>

                        <!-- Subtitle -->
                        <p class="robotics-subtext">
                            INTELLEKT develops autonomous mobile robots and intelligent robotic arms for real-world industrial and automation applications.
                        </p>

                        <!-- Capability Metric Badges -->
                        <div class="robotics-metrics-row">
                            <div class="robotics-metric-item">
                                <span class="robotics-metric-num">01</span>
                                <span class="robotics-metric-title">MOVE</span>
                                <span class="robotics-metric-desc">AUTONOMOUSLY</span>
                            </div>
                            <div class="robotics-metric-item">
                                <span class="robotics-metric-num">02</span>
                                <span class="robotics-metric-title">MANIPULATE</span>
                                <span class="robotics-metric-desc">INTELLIGENTLY</span>
                            </div>
                            <div class="robotics-metric-item">
                                <span class="robotics-metric-num">03</span>
                                <span class="robotics-metric-title">AUTOMATE</span>
                                <span class="robotics-metric-desc">AT SCALE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Capabilities Bottom Dock Bar (5 Items) -->
        <div class="robotics-dock-bar" id="capabilities">
            <div class="container">
                <div class="row g-2 justify-content-between align-items-center">
                    <!-- 1. AMR -->
                    <div class="col-6 col-md-4 col-lg">
                        <div class="robotics-dock-item">
                            <div class="robotics-dock-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="7" width="20" height="11" rx="3"></rect>
                                    <circle cx="7" cy="18" r="2"></circle>
                                    <circle cx="17" cy="18" r="2"></circle>
                                    <line x1="12" y1="7" x2="12" y2="4"></line>
                                    <circle cx="12" cy="3" r="1.5"></circle>
                                    <line x1="6" y1="12" x2="18" y2="12"></line>
                                </svg>
                            </div>
                            <div class="robotics-dock-text">
                                <span class="robotics-dock-title">AMR</span>
                                <span class="robotics-dock-subtitle">Autonomous Mobile Robots</span>
                            </div>
                        </div>
                    </div>

                    <!-- 2. ROBOTIC ARMS -->
                    <div class="col-6 col-md-4 col-lg">
                        <div class="robotics-dock-item">
                            <div class="robotics-dock-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="5" cy="19" r="2"></circle>
                                    <line x1="5" y1="17" x2="8" y2="10"></line>
                                    <circle cx="9" cy="9" r="2"></circle>
                                    <line x1="11" y1="9" x2="16" y2="6"></line>
                                    <circle cx="17" cy="5" r="2"></circle>
                                    <path d="M19 3l3 2-2 3"></path>
                                    <line x1="2" y1="21" x2="10" y2="21"></line>
                                </svg>
                            </div>
                            <div class="robotics-dock-text">
                                <span class="robotics-dock-title">Robotic Arms</span>
                                <span class="robotics-dock-subtitle">Industrial Manipulation</span>
                            </div>
                        </div>
                    </div>

                    <!-- 3. AI & COMPUTER VISION -->
                    <div class="col-6 col-md-4 col-lg">
                        <div class="robotics-dock-item">
                            <div class="robotics-dock-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="8"></circle>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <line x1="12" y1="2" x2="12" y2="5"></line>
                                    <line x1="12" y1="19" x2="12" y2="22"></line>
                                    <line x1="2" y1="12" x2="5" y2="12"></line>
                                    <line x1="19" y1="12" x2="22" y2="12"></line>
                                </svg>
                            </div>
                            <div class="robotics-dock-text">
                                <span class="robotics-dock-title">AI & Vision</span>
                                <span class="robotics-dock-subtitle">Intelligent Perception</span>
                            </div>
                        </div>
                    </div>

                    <!-- 4. INDUSTRIAL AUTOMATION -->
                    <div class="col-6 col-md-4 col-lg">
                        <div class="robotics-dock-item">
                            <div class="robotics-dock-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                            </div>
                            <div class="robotics-dock-text">
                                <span class="robotics-dock-title">Automation</span>
                                <span class="robotics-dock-subtitle">Integration & Deployment</span>
                            </div>
                        </div>
                    </div>

                    <!-- 5. ROBOTICS SOFTWARE -->
                    <div class="col-6 col-md-4 col-lg">
                        <div class="robotics-dock-item">
                            <div class="robotics-dock-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                    <rect x="9" y="9" width="6" height="6"></rect>
                                    <line x1="9" y1="1" x2="9" y2="4"></line>
                                    <line x1="15" y1="1" x2="15" y2="4"></line>
                                    <line x1="9" y1="20" x2="9" y2="23"></line>
                                    <line x1="15" y1="20" x2="15" y2="23"></line>
                                    <line x1="20" y1="9" x2="23" y2="9"></line>
                                    <line x1="20" y1="14" x2="23" y2="14"></line>
                                    <line x1="1" y1="9" x2="4" y2="9"></line>
                                    <line x1="1" y1="14" x2="4" y2="14"></line>
                                </svg>
                            </div>
                            <div class="robotics-dock-text">
                                <span class="robotics-dock-title">Software</span>
                                <span class="robotics-dock-subtitle">Control, Simulation, Insights</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================= END ROBOTICS HERO SECTION ================= -->


    <!-- =========================================================
         INTELLEKT ROBOTICS - WHY CHOOSE US SECTION (COMMERCIAL REDESIGN)
         ========================================================= -->
    <section class="home-technical-section" id="robotics-solutions">
        <div class="container">
            <div class="technical-section-header">
                <span class="technical-kicker">BUILDING A SMARTER TOMORROW</span>
                <h2 class="technical-title">Why Choose <span class="text-cyan">Intellekt Robotics</span></h2>
                <p class="technical-desc">
                    We involve students in practical robotics and automation projects
                    while providing hands-on experience through robotics internships.
                </p>
            </div>

            <div class="technical-layout-split">
                
                <!-- Center Visual Pane -->
                <div class="technical-visual-pane">
                    <div class="technical-backdrop-grid"></div>
                    <img src="assets/image/robotics-spider-bot.png" alt="Intellekt Robotics spider bot" class="technical-hero-img">
                    <div class="technical-hud-overlay">
                        <span class="hud-label">INTELLIGENT</span>
                        <span class="hud-label">AUTONOMOUS</span>
                        <span class="hud-label">SCALABLE</span>
                    </div>
                </div>

                <!-- Features Pane -->
                <div class="technical-specs-pane">
                    
                    <div class="spec-panel">
                        <div class="spec-icon">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <div class="spec-content">
                            <h3>Autonomous Mobile Robots</h3>
                            <p>We develop AMR solutions that support intelligent material movement, navigation, and operational efficiency.</p>
                        </div>
                    </div>
                    
                    <div class="spec-panel">
                        <div class="spec-icon">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <div class="spec-content">
                            <h3>Robotics and Automation</h3>
                            <p>We design practical robotic systems, automation workflows, and engineering solutions for real-world applications.</p>
                        </div>
                    </div>
                    
                    <div class="spec-panel">
                        <div class="spec-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="spec-content">
                            <h3>Student Internships</h3>
                            <p>We welcome students as interns and provide practical training in robotics, AMRs, automation, AI, and embedded systems.</p>
                        </div>
                    </div>
                    
                    <div class="spec-panel">
                        <div class="spec-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div class="spec-content">
                            <h3>Intelligent Perception</h3>
                            <p>We explore computer vision, sensors, and intelligent systems that help robots understand and respond to their surroundings.</p>
                        </div>
                    </div>
                    
                    <div class="spec-panel">
                        <div class="spec-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="spec-content">
                            <h3>Industry-Ready Innovation</h3>
                            <p>From student learning to real-world deployment, we focus on building reliable, scalable, and future-ready robotics capabilities.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================
         SERVICES SECTION (COMMERCIAL REDESIGN)
         ========================================================= -->
    <section class="home-services-section">
        <div class="container">
            <div class="technical-section-header text-center mx-auto" style="text-align: center; max-width: 800px;">
                <h2 class="technical-title">Services</h2>
            </div>
            
            <div class="cr-services-grid">
                
                <!-- Service 1 -->
                <article class="cr-service-card">
                    <div class="cr-service-img-wrapper">
                        <img src="assets/image/new-images/service-2.webp" alt="Corporate Training">
                    </div>
                    <div class="cr-service-content">
                        <h3 class="cr-service-title">
                            Corporate Training
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </h3>
                        <ul class="cr-service-list">
                            <li>Management Skills</li>
                            <li>Behavioural Skills</li>
                            <li>Leadership Skills</li>
                            <li>Compliance Training</li>
                        </ul>
                        <div class="mt-auto pt-3">
                            <a class="cr-service-btn">View More</a>
                        </div>
                    </div>
                </article>

                <!-- Service 2 -->
                <article class="cr-service-card">
                    <div class="cr-service-img-wrapper">
                        <img src="assets/image/new-images/service-3.webp" alt="Organization Restructure solutions">
                    </div>
                    <div class="cr-service-content">
                        <h3 class="cr-service-title">
                            Organization Restructure
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </h3>
                        <ul class="cr-service-list">
                            <li>Evaluation & Gap Analysis</li>
                            <li>Customized Proposal</li>
                            <li>KPI Development & SOP Creation</li>
                            <li>Implementation & Monitoring</li>
                        </ul>
                        <div class="mt-auto pt-3">
                            <a class="cr-service-btn">View More</a>
                        </div>
                    </div>
                </article>

                <!-- Service 3 -->
                <article class="cr-service-card">
                    <div class="cr-service-img-wrapper">
                        <img src="assets/image/new-images/service-5.webp" alt="Value-Added Programmes for Colleges">
                    </div>
                    <div class="cr-service-content">
                        <h3 class="cr-service-title">
                            Value-Added Programmes
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </h3>
                        <ul class="cr-service-list">
                            <li>Technical Training</li>
                            <li>AI & Robotics</li>
                            <li>Management & Soft Skills</li>
                            <li>Industry Exposure & Career Readiness</li>
                        </ul>
                        <div class="mt-auto pt-3">
                            <a class="cr-service-btn">View More</a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- <article class=" py-5  sigma-course-area sigma-course-area-two sigma-section-padding  sigma-animation">
        <div class="container">
            <div class="sigma-section-title-wrap text-center">
                <h2 class="sigma-section-title mb-0 text-sigma-title -tracking-[.94px]">Our Training programmes</h2>

            </div>

            <div class="sigma-course-items sigma-course-items-with-cat  pt-[40px]">
                <div class="grid grid-cols-4 xl:grid-cols-3 lg:grid-cols-2 mls:grid-cols-1 gap-x-[30px] gap-y-[40px]">


                    <div class="sigma-course-item sigama-course-filter development uxdesign  geography overflow-hidden shadow-[0_34.358px_171.789px_0_rgba(0,0,0,0.11)] bg-white">
                        <div class="sigma-course-thum">
                            <a class="course-img inline-block w-full overflow-hidden " href="behavioural.php">
                                <img class="w-full duration-500  hover:scale-[1.2]"
                                    src="assets/image/new-images/programm-1.webp" alt="course">
                            </a>
                        </div>
                        <div class="sigma-course-details-wrap py-[20px] px-[15px]">

                            <div class="sigma-course-title-wrap pt-[20px]">
                                <h5 class="sigma-course-title mb-0 text-[20px] leading-[30px]">
                                    <a href="behavioural.php"><i class="fas fa-chalkboard-teacher pe-2"></i> Behavioural</a>
                                </h5>
                                <p></p>
                            </div>



                            <div
                                class="sigma-course-footer border-t-[1px] border-solid border-[rgba(210, 210, 210, 0.4)] pt-[15px] mt-[20px]">
                                <div class="sigma-course-price-wrap flex items-center justify-between gap-[10px]">

                                    <div class="sigma-course-cart-btn">
                                        <a class="text-light pt-2 fw-bold  flex items-center justify-center h-[35px] bg-sigma-accent rounded-[4px]   px-[12px] hover:bg-sigma-brand text-decoration-none py-auto"
                                            href="behavioural.php">
                                            <p>view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sigma-course-item sigama-course-filter development uxdesign  geography overflow-hidden shadow-[0_34.358px_171.789px_0_rgba(0,0,0,0.11)] bg-white">
                        <div class="sigma-course-thum">
                            <a class="course-img inline-block w-full overflow-hidden " href="business-communication.php">
                                <img class="w-full duration-500  hover:scale-[1.2]"
                                    src="assets/image/new-images/programm-2.webp" alt="course">
                            </a>
                        </div>
                        <div class="sigma-course-details-wrap py-[20px] pt-2 pb-3 px-[15px] pb-4">

                            <div class="sigma-course-title-wrap  ">
                                <h5 class="sigma-course-title mb-0 text-[20px] leading-[30px]">
                                    <a href="business-management.php"><i class="fas fa-chalkboard-teacher pe-2"></i>Business Management</a>
                                </h5>
                                <p></p>
                            </div>



                            <div
                                class="sigma-course-footer border-t-[1px] border-solid border-[rgba(210, 210, 210, 0.4)]   pt-2 mt-[20px]">
                                <div class="sigma-course-price-wrap flex items-center justify-between gap-[10px]">

                                    <div class="sigma-course-cart-btn">
                                        <a class="text-light mt-2 pt-2 fw-bold  flex items-center justify-center h-[35px] bg-sigma-accent rounded-[4px] mt-2  px-[12px] hover:bg-sigma-brand text-decoration-none py-auto"
                                            href="business-management.php">
                                            <p>view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sigma-course-item sigama-course-filter development uxdesign  geography overflow-hidden shadow-[0_34.358px_171.789px_0_rgba(0,0,0,0.11)] bg-white">
                        <div class="sigma-course-thum">
                            <a class="course-img inline-block w-full overflow-hidden " href="compliance.php">
                                <img class="w-full duration-500  hover:scale-[1.2]"
                                    src="assets/image/new-images/programm-3.webp" alt="course">
                            </a>
                        </div>
                        <div class="sigma-course-details-wrap py-[20px] px-[15px]">

                            <div class="sigma-course-title-wrap pt-[20px]">
                                <h5 class="sigma-course-title mb-0 text-[20px] leading-[30px]">
                                    <a href="compliance.php"><i class="fas fa-chalkboard-teacher pe-2"></i>Compliance</a>
                                </h5>
                                <p></p>
                            </div>



                            <div
                                class="sigma-course-footer border-t-[1px] border-solid border-[rgba(210, 210, 210, 0.4)] pt-[15px] mt-[20px]">
                                <div class="sigma-course-price-wrap flex items-center justify-between gap-[10px]">

                                    <div class="sigma-course-cart-btn">
                                        <a class="text-light pt-2 fw-bold  flex items-center justify-center h-[35px] bg-sigma-accent rounded-[4px]   px-[12px] hover:bg-sigma-brand text-decoration-none py-auto"
                                            href="compliance.php">
                                            <p>view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sigma-course-item sigama-course-filter development uxdesign  geography overflow-hidden shadow-[0_34.358px_171.789px_0_rgba(0,0,0,0.11)] bg-white">
                        <div class="sigma-course-thum">
                            <a class="course-img inline-block w-full overflow-hidden " href="leadership.php ">
                                <img class="w-full duration-500  hover:scale-[1.2]"
                                    src="assets/image/new-images/programm-4.webp" alt="course">
                            </a>
                        </div>
                        <div class="sigma-course-details-wrap py-[20px] px-[15px]">

                            <div class="sigma-course-title-wrap pt-[20px]">
                                <h5 class="sigma-course-title mb-0 text-[20px] leading-[30px]">
                                    <a href="leadership.php"> <i class="fas fa-chalkboard-teacher pe-2"></i>Leadership</a>
                                </h5>
                                <p></p>
                            </div>



                            <div
                                class="sigma-course-footer border-t-[1px] border-solid border-[rgba(210, 210, 210, 0.4)] pt-[15px] mt-[20px]">
                                <div class="sigma-course-price-wrap flex items-center justify-between gap-[10px]">

                                    <div class="sigma-course-cart-btn">
                                        <a class="text-light pt-2 fw-bold  flex items-center justify-center h-[35px] bg-sigma-accent rounded-[4px]   px-[12px] hover:bg-sigma-brand text-decoration-none py-auto"
                                            href="leadership.php">
                                            <p>view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sigma-course-item sigama-course-filter development uxdesign  geography overflow-hidden shadow-[0_34.358px_171.789px_0_rgba(0,0,0,0.11)] bg-white">
                        <div class="sigma-course-thum">
                            <a class="course-img inline-block w-full overflow-hidden " href="social-impact.php">
                                <img class="w-full duration-500  hover:scale-[1.2]"
                                    src="assets/image/new-images/programm-5.webp" alt="course">
                            </a>
                        </div>
                        <div class="sigma-course-details-wrap py-[20px] px-[15px]">

                            <div class="sigma-course-title-wrap pt-[20px]">
                                <h5 class="sigma-course-title mb-0 text-[20px] leading-[30px]">
                                    <a href="social-impact.php"><i class="fas fa-chalkboard-teacher pe-2"></i>Social Impact</a>
                                </h5>
                                <p></p>
                            </div>



                            <div
                                class="sigma-course-footer border-t-[1px] border-solid border-[rgba(210, 210, 210, 0.4)] pt-[15px] mt-[20px]">
                                <div class="sigma-course-price-wrap flex items-center justify-between gap-[10px]">

                                    <div class="sigma-course-cart-btn">
                                        <a class="text-light pt-2  fw-bold flex items-center justify-center h-[35px] bg-sigma-accent rounded-[4px]   px-[12px] hover:bg-sigma-brand text-decoration-none py-auto"
                                            href="social-impact.php">
                                            <p>view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sigma-course-item sigama-course-filter development uxdesign  geography overflow-hidden shadow-[0_34.358px_171.789px_0_rgba(0,0,0,0.11)] bg-white">
                        <div class="sigma-course-thum">
                            <a class="course-img inline-block w-full overflow-hidden " href="technical.php">
                                <img class="w-100 duration-500  hover:scale-[1.2]"
                                    src="assets/image/new-images/programm-6.webp" alt="course">
                            </a>
                        </div>
                        <div class="sigma-course-details-wrap py-[20px] px-[15px]">

                            <div class="sigma-course-title-wrap pt-[20px]">
                                <h5 class="sigma-course-title mb-0 text-[20px] leading-[30px]">
                                    <a href="technical.php"><i class="fas fa-chalkboard-teacher pe-2"></i>Technical</a>
                                </h5>
                                <p></p>
                            </div>



                            <div
                                class="sigma-course-footer border-t-[1px] border-solid border-[rgba(210, 210, 210, 0.4)] pt-[15px] mt-[20px]">
                                <div class="sigma-course-price-wrap flex items-center justify-between gap-[10px]">

                                    <div class="sigma-course-cart-btn">
                                        <a class="text-light pt-2 fw-bold flex items-center justify-center h-[35px] bg-sigma-accent rounded-[4px]   px-[12px] hover:bg-sigma-brand text-decoration-none py-auto"
                                            href="technical.php">
                                            <p>view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sigma-more-courses text-center pt-[50px] md:pt-[40px]">
                <a class="sigma-btn sigma-btn-transparent sigma-btn-icon" href="programmes.php">
                    Explore All Programmes
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#03071E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </article> -->




    <?php include 'footer.php' ?>
</body>

</html>
