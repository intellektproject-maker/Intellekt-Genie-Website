<!-- INTELLEKT GENIE WELCOME SLIDESHOW POPUP (FULL POSTER REDESIGN) -->
<aside id="igWelcomeModal" class="ig-welcome-modal" role="dialog" aria-modal="true" aria-label="Welcome to Intellekt Genie" style="display: none;">
    <div class="ig-welcome-backdrop" id="igWelcomeBackdrop"></div>
    <div class="ig-welcome-dialog" id="igWelcomeDialog" role="region" aria-label="Intellekt Genie Introduction Slideshow">
        
        <!-- Modal Top Bar -->
        <div class="ig-welcome-topbar">
            <div class="ig-welcome-brand">
                <img src="assets/image/new-images/logo-white.png" alt="Intellekt Genie Logo" class="ig-welcome-logo">
            </div>
            <div class="ig-welcome-topbar-actions">
                <button type="button" class="ig-welcome-close-btn" id="igWelcomeClose" aria-label="Close welcome slideshow">
                    <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Full Poster Slides Container -->
        <div class="ig-welcome-body" id="igWelcomeBody">
            <div class="ig-welcome-slides-wrapper" id="igWelcomeSlidesWrapper">
                <div class="ig-welcome-slides-track" id="igWelcomeSlidesTrack">

                    <!-- POSTER 1: ABOUT INTELLEKT GENIE -->
                    <div class="ig-welcome-slide active" data-slide-index="0" role="group" aria-roledescription="slide" aria-label="1 of 4: About Intellekt Genie">
                        <figure class="ig-poster-stage">
                            <img src="assets/image/new-images/poster-1-about.jpg?v=1" alt="Poster 1 - About Intellekt Genie: Advanced Engineering &amp; Intelligent Systems — Autonomous Robotics, Intelligent Automation, Real-World Performance" class="ig-poster-img" loading="eager">
                        </figure>
                    </div>

                    <!-- POSTER 2: OUR APPROACH -->
                    <div class="ig-welcome-slide" data-slide-index="1" role="group" aria-roledescription="slide" aria-label="2 of 4: Our Approach">
                        <figure class="ig-poster-stage">
                            <img src="assets/image/new-images/poster-2-approach.jpg?v=1" alt="Poster 2 - Our Approach: Precision Integration &amp; Field Validation — Hardware &amp; Software Integration, Testing, Validation, Deployment" class="ig-poster-img" loading="eager">
                        </figure>
                    </div>

                    <!-- POSTER 3: OUR SOLUTIONS -->
                    <div class="ig-welcome-slide" data-slide-index="2" role="group" aria-roledescription="slide" aria-label="3 of 4: Our Solutions">
                        <figure class="ig-poster-stage">
                            <img src="assets/image/new-images/poster-3-solutions.jpg?v=1" alt="Poster 3 - Our Solutions: Commercial Robotics, Agentic AI, Industrial Automation — Unified Engineering Architecture for Next-Generation Industry" class="ig-poster-img" loading="eager">
                        </figure>
                    </div>

                    <!-- POSTER 4: OUR MISSION -->
                    <div class="ig-welcome-slide" data-slide-index="3" role="group" aria-roledescription="slide" aria-label="4 of 4: Our Mission">
                        <figure class="ig-poster-stage">
                            <img src="assets/image/new-images/poster-4-mission.jpg?v=1" alt="Poster 4 - Our Mission: Dependable Technology &amp; Responsible AI — Engineering Innovation, Operational Integrity, Autonomous Future" class="ig-poster-img" loading="eager">
                        </figure>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal Bottom Controls Bar -->
        <div class="ig-welcome-footer">
            <div class="ig-welcome-status">
                <span class="ig-welcome-counter" id="igWelcomeCounter" aria-live="polite">01 / 04</span>
                <div class="ig-welcome-dots" id="igWelcomeDots" role="tablist" aria-label="Slideshow slide selectors">
                    <button type="button" class="ig-welcome-dot active" data-goto="0" role="tab" aria-selected="true" aria-label="Slide 1: About Intellekt Genie"></button>
                    <button type="button" class="ig-welcome-dot" data-goto="1" role="tab" aria-selected="false" aria-label="Slide 2: Our Approach"></button>
                    <button type="button" class="ig-welcome-dot" data-goto="2" role="tab" aria-selected="false" aria-label="Slide 3: Our Solutions"></button>
                    <button type="button" class="ig-welcome-dot" data-goto="3" role="tab" aria-selected="false" aria-label="Slide 4: Our Mission"></button>
                </div>
                <div class="ig-welcome-timer-bar" id="igWelcomeTimerBar" aria-hidden="true">
                    <div class="ig-welcome-timer-fill" id="igWelcomeTimerFill"></div>
                </div>
            </div>

            <div class="ig-welcome-nav-actions">
                <button type="button" class="ig-welcome-nav-btn ig-nav-prev" id="igWelcomePrev" aria-label="Previous slide">
                    <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                    <span>Previous</span>
                </button>
                <button type="button" class="ig-welcome-nav-btn ig-nav-next" id="igWelcomeNext" aria-label="Next slide">
                    <span>Next</span>
                    <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                </button>
                <button type="button" class="ig-welcome-nav-btn ig-nav-explore" id="igWelcomeExplore" aria-label="Explore More">
                    <span>Explore More</span>
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

    </div>
</aside>
