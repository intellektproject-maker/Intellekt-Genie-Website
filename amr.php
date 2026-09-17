<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Autonomous Mobile Robots | Intellekt Genie</title>
    <style>
        :root {
            --amr-ink: #05080d;
            --amr-white: #f7f9fd;
            --amr-blue: #63adff;
            --amr-muted: #c2ccda;
            --amr-line: rgba(184, 204, 230, .24);
        }

        * { box-sizing: border-box; }

        .amr-page {
            background: #f4f7fb;
            color: var(--amr-white);
            overflow: hidden;
        }

        /* Reference-style full-width hero with a soft, angled lower edge. */
        .amr-hero {
            position: relative;
            min-height: 620px;
            display: flex;
            align-items: center;
            isolation: isolate;
            overflow: hidden;
            background-color: #070b10;
            background-image:
                linear-gradient(90deg, rgba(4, 8, 13, .98) 0%, rgba(4, 8, 13, .94) 30%, rgba(4, 8, 13, .62) 57%, rgba(4, 8, 13, .22) 100%),
                linear-gradient(180deg, rgba(4, 8, 13, .12) 0%, rgba(4, 8, 13, .18) 70%, rgba(4, 8, 13, .55) 100%),
                url('assets/image/new-images/amr.png');
            background-repeat: no-repeat;
            background-position: center, center, right center;
            background-size: cover, cover, auto 100%;
            clip-path: polygon(0 0, 100% 0, 100% 88%, 82% 91%, 62% 94%, 40% 96%, 20% 94%, 0 88%);
            padding-bottom: 55px;
        }

        .amr-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            opacity: .13;
            background-image:
                linear-gradient(rgba(96, 165, 250, .2) 1px, transparent 1px),
                linear-gradient(90deg, rgba(96, 165, 250, .2) 1px, transparent 1px);
            background-size: 78px 78px;
            mask-image: linear-gradient(to right, black 0%, transparent 76%);
            pointer-events: none;
        }

        .amr-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background:
                radial-gradient(ellipse at 76% 52%, rgba(73, 139, 214, .14), transparent 38%),
                linear-gradient(90deg, transparent 45%, rgba(0, 0, 0, .12) 100%);
            pointer-events: none;
        }

        .amr-container {
            width: min(1180px, calc(100% - 48px));
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .amr-hero-content {
            max-width: 690px;
            padding: 108px 0 72px;
        }

        .amr-eyebrow {
            color: var(--amr-blue);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2.6px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .amr-hero h1 {
            max-width: 680px;
            font-size: clamp(43px, 5.3vw, 76px);
            line-height: 1.03;
            letter-spacing: -3px;
            margin: 0 0 26px;
            color: #ffffff;
            font-weight: 800;
        }

        .amr-hero h1 span { color: var(--amr-blue); }

        .amr-hero-copy {
            max-width: 650px;
            color: #d0d9e7;
            font-size: 18px;
            line-height: 1.72;
            margin: 0;
        }

        .amr-capabilities {
            display: flex;
            align-items: stretch;
            margin-top: 43px;
            max-width: 680px;
        }

        .amr-capability {
            display: flex;
            align-items: center;
            gap: 14px;
            min-height: 55px;
            padding: 0 27px;
            border-right: 1px solid var(--amr-line);
        }

        .amr-capability:first-child { padding-left: 0; }
        .amr-capability:last-child { border-right: 0; }

        .amr-capability-icon {
            width: 31px;
            height: 31px;
            flex: 0 0 31px;
            color: var(--amr-blue);
        }

        .amr-capability strong {
            display: block;
            color: #f5f8ff;
            font-size: 15px;
            line-height: 1.35;
            font-weight: 650;
        }

        .amr-section {
            position: relative;
            margin-top: -42px;
            padding: 112px 0 92px;
            background: #f5f8fc;
            color: #0b1730;
        }

        .amr-section-heading {
            max-width: 760px;
            margin: 0 auto 52px;
            text-align: center;
        }

        .amr-section-heading .amr-eyebrow {
            color: #438fe8;
            margin-bottom: 14px;
        }

        .amr-section-heading h2 {
            font-size: clamp(30px, 4vw, 44px);
            line-height: 1.2;
            margin: 0 0 18px;
            letter-spacing: -1.2px;
        }

        .amr-section-heading p {
            color: #64748b;
            font-size: 17px;
            line-height: 1.8;
            margin: 0;
        }

        .amr-feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .amr-feature-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 30px 26px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, .05);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .amr-feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 38px rgba(15, 23, 42, .1);
        }

        .amr-icon {
            width: 48px;
            height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            background: #e8f1ff;
            color: #2563eb;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .amr-feature-card h3 {
            font-size: 21px;
            margin: 0 0 12px;
            color: #0b1730;
        }

        .amr-feature-card p {
            margin: 0;
            color: #64748b;
            line-height: 1.75;
            font-size: 15px;
        }

        .amr-application {
            padding: 86px 0;
            background: #081326;
            color: #fff;
        }

        .amr-application-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 65px;
            align-items: center;
        }

        .amr-application h2 {
            font-size: clamp(30px, 4vw, 43px);
            line-height: 1.2;
            margin: 0 0 20px;
            letter-spacing: -1px;
        }

        .amr-application p {
            color: #afbdd0;
            font-size: 16px;
            line-height: 1.85;
            margin: 0;
        }

        .amr-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .amr-list-item {
            padding: 22px;
            border: 1px solid rgba(148, 163, 184, .18);
            border-radius: 14px;
            background: rgba(255, 255, 255, .035);
            color: #dbeafe;
            font-size: 15px;
            line-height: 1.5;
        }

        .amr-list-item strong {
            display: block;
            color: #fff;
            margin-bottom: 6px;
            font-size: 16px;
        }

        @media (max-width: 900px) {
            .amr-hero {
                min-height: 650px;
                background-position: center, center, 78% center;
                background-size: cover, cover, auto 100%;
            }

            .amr-hero-content {
                max-width: 650px;
                padding: 78px 0 70px;
            }

            .amr-capabilities {
                flex-wrap: wrap;
                gap: 18px 0;
            }

            .amr-capability { padding: 0 18px; }
            .amr-capability:first-child { padding-left: 0; }
            .amr-feature-grid { grid-template-columns: repeat(2, 1fr); }
            .amr-application-grid { grid-template-columns: 1fr; gap: 35px; }
        }

        @media (max-width: 560px) {
            .amr-container { width: min(100% - 32px, 1180px); }

            .amr-hero {
                min-height: auto;
                clip-path: polygon(0 0, 100% 0, 100% 96%, 70% 98%, 35% 100%, 0 96%);
                background-position: center, center, 72% 20%;
                background-size: cover, cover, auto 48%;
                padding-bottom: 35px;
            }

            .amr-hero-content { padding: 70px 0 55px; }
            .amr-hero h1 { letter-spacing: -1.5px; }
            .amr-hero-copy { font-size: 16px; }

            .amr-capabilities {
                display: grid;
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .amr-capability,
            .amr-capability:first-child {
                padding: 0;
                border-right: 0;
            }

            .amr-feature-grid,
            .amr-list { grid-template-columns: 1fr; }
            .amr-section, .amr-application { padding: 65px 0; }
            .amr-section { margin-top: -20px; }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="amr-page">
        <section class="amr-hero">
            <div class="amr-container">
                <div class="amr-hero-content">
                    <div class="amr-eyebrow">Intellekt Robotics</div>
                    <h1>Autonomous Mobile <span>Robots</span></h1>
                    <p class="amr-hero-copy">
                        Explore the technology behind intelligent mobile robots designed to move materials,
                        navigate dynamic environments, and support safer, more efficient operations.
                    </p>

                    <div class="amr-capabilities" aria-label="AMR capabilities">
                        <div class="amr-capability">
                            <svg class="amr-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                <path d="M4 15.5 28 4 17 28l-2.5-10.5L4 15.5Z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"/>
                            </svg>
                            <strong>Autonomous<br>Navigation</strong>
                        </div>
                        <div class="amr-capability">
                            <svg class="amr-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                <path d="m16 3 11 6.5v13L16 29 5 22.5v-13L16 3Z" stroke="currentColor" stroke-width="2.2" stroke-linejoin="round"/>
                                <path d="m5 9.5 11 6.5 11-6.5M16 16v13" stroke="currentColor" stroke-width="2.2"/>
                            </svg>
                            <strong>Material<br>Movement</strong>
                        </div>
                        <div class="amr-capability">
                            <svg class="amr-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                <path d="m19.2 3.8 1.2 3.1c.8.3 1.6.7 2.3 1.3l3.2-.7 2.1 3.6-2.2 2.5c.1.5.2 1.1.2 1.7s-.1 1.2-.2 1.7l2.2 2.5-2.1 3.6-3.2-.7c-.7.6-1.5 1-2.3 1.3l-1.2 3.1h-4.2l-1.2-3.1c-.8-.3-1.6-.7-2.3-1.3l-3.2.7-2.1-3.6 2.2-2.5c-.1-.5-.2-1.1-.2-1.7s.1-1.2.2-1.7L6.2 11l2.1-3.6 3.2.7c.7-.6 1.5-1 2.3-1.3L15 3.8h4.2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                <circle cx="17.1" cy="15.3" r="3.2" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            <strong>Flexible<br>Deployment</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="amr-section">
            <div class="amr-container">
                <div class="amr-section-heading">
                    <div class="amr-eyebrow">Technology in Motion</div>
                    <h2>Intelligent mobility for practical automation</h2>
                    <p>
                        Autonomous Mobile Robots, or AMRs, use sensors, onboard computing, and navigation
                        software to travel through workspaces with minimal manual intervention. They can
                        help organizations streamline internal movement while adapting to changing routes
                        and operating conditions.
                    </p>
                </div>

                <div class="amr-feature-grid">
                    <article class="amr-feature-card">
                        <div class="amr-icon">01</div>
                        <h3>Autonomous Navigation</h3>
                        <p>Understand how mapping, localization, sensors, and path planning help mobile robots navigate their surroundings.</p>
                    </article>
                    <article class="amr-feature-card">
                        <div class="amr-icon">02</div>
                        <h3>Material Movement</h3>
                        <p>Support the movement of components, tools, and goods across facilities with repeatable and organized workflows.</p>
                    </article>
                    <article class="amr-feature-card">
                        <div class="amr-icon">03</div>
                        <h3>Flexible Deployment</h3>
                        <p>Adapt robotic workflows to changing layouts, operational requirements, and different industrial environments.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="amr-application">
            <div class="amr-container amr-application-grid">
                <div>
                    <div class="amr-eyebrow">Where AMRs Create Value</div>
                    <h2>Built for real operational challenges</h2>
                    <p>
                        AMR systems can be integrated into a variety of environments where reliable movement,
                        improved visibility, and reduced repetitive handling are important. Their value comes
                        from combining robotics hardware with software-driven decision-making.
                    </p>
                </div>
                <div class="amr-list">
                    <div class="amr-list-item"><strong>Warehousing</strong>Internal transport and order-support workflows.</div>
                    <div class="amr-list-item"><strong>Manufacturing</strong>Line-side delivery and component movement.</div>
                    <div class="amr-list-item"><strong>Healthcare</strong>Controlled transport of supplies and materials.</div>
                    <div class="amr-list-item"><strong>Research & Education</strong>Practical learning, prototyping, and experimentation.</div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
