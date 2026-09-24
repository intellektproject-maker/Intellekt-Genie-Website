<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Robotic Arms | Intellekt Genie</title>
    <style>
        :root {
            --arm-white: #f7f9fd;
            --arm-blue: #63adff;
            --arm-line: rgba(184, 204, 230, .24);
        }

        * { box-sizing: border-box; }

        .arm-page {
            background: #f4f7fb;
            color: var(--arm-white);
            overflow: hidden;
        }

        .arm-hero {
            position: relative;
            min-height: 390px;
            display: flex;
            align-items: center;
            isolation: isolate;
            overflow: hidden;
            background-color: #070b10;
            background-image:
                linear-gradient(90deg, rgba(4, 8, 13, .98) 0%, rgba(4, 8, 13, .94) 28%, rgba(4, 8, 13, .45) 53%, rgba(4, 8, 13, .08) 100%),
                linear-gradient(180deg, rgba(4, 8, 13, .06) 0%, rgba(4, 8, 13, .10) 55%, rgba(4, 8, 13, .42) 100%),
                url('assets/image/new-images/card-arm.jpg');
            background-repeat: no-repeat;
            background-position: center, center, right center;
            /* Keep the entire landscape image visible instead of zooming/cropping it. */
            background-size: cover, cover, auto 100%;
            border-radius: 0 0 50% 50% / 0 0 9% 9%;
        }

        .arm-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            opacity: .09;
            background-image:
                linear-gradient(rgba(96, 165, 250, .2) 1px, transparent 1px),
                linear-gradient(90deg, rgba(96, 165, 250, .2) 1px, transparent 1px);
            background-size: 78px 78px;
            mask-image: linear-gradient(to right, black 0%, transparent 72%);
            pointer-events: none;
        }

        .arm-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(90deg, transparent 45%, rgba(7, 11, 16, .12) 70%, rgba(7, 11, 16, .22) 100%);
            pointer-events: none;
        }

        .arm-container {
            width: min(1180px, calc(100% - 48px));
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .arm-hero-content {
            max-width: 610px;
            padding: 52px 0 56px;
        }

        .arm-eyebrow {
            color: var(--arm-blue);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2.4px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .arm-hero h1 {
            max-width: 610px;
            font-size: clamp(40px, 4.2vw, 58px);
            line-height: 1.02;
            letter-spacing: -2.5px;
            margin: 0 0 18px;
            color: #fff;
            font-weight: 800;
        }

        .arm-hero h1 span { color: var(--arm-blue); }

        .arm-hero-copy {
            max-width: 540px;
            color: #d7e1ef;
            font-size: 15px;
            line-height: 1.62;
            margin: 0;
        }

        .arm-capabilities {
            display: flex;
            align-items: stretch;
            margin-top: 25px;
            max-width: 560px;
        }

        .arm-capability {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 44px;
            padding: 0 20px;
            border-right: 1px solid var(--arm-line);
        }

        .arm-capability:first-child { padding-left: 0; }
        .arm-capability:last-child { border-right: 0; }

        .arm-capability-icon {
            width: 26px;
            height: 26px;
            flex: 0 0 26px;
            color: var(--arm-blue);
        }

        .arm-capability strong {
            display: block;
            color: #f5f8ff;
            font-size: 12px;
            line-height: 1.3;
            font-weight: 650;
        }

        .arm-section {
            position: relative;
            margin-top: -1px;
            padding: 84px 0 92px;
            background: #f5f8fc;
            color: #0b1730;
        }

        .arm-section-heading {
            max-width: 760px;
            margin: 0 auto 52px;
            text-align: center;
        }

        .arm-section-heading .arm-eyebrow { color: #438fe8; margin-bottom: 14px; }
        .arm-section-heading h2 { font-size: clamp(30px, 4vw, 44px); line-height: 1.2; margin: 0 0 18px; letter-spacing: -1.2px; }
        .arm-section-heading p { color: #64748b; font-size: 17px; line-height: 1.8; margin: 0; }

        .arm-feature-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
        .arm-feature-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 18px; padding: 30px 26px; box-shadow: 0 12px 30px rgba(15, 23, 42, .05); transition: transform .25s ease, box-shadow .25s ease; }
        .arm-feature-card:hover { transform: translateY(-5px); box-shadow: 0 18px 38px rgba(15, 23, 42, .1); }
        .arm-icon { width: 48px; height: 48px; display: inline-flex; align-items: center; justify-content: center; border-radius: 13px; background: #e8f1ff; color: #2563eb; font-size: 14px; font-weight: 700; margin-bottom: 20px; }
        .arm-feature-card h3 { font-size: 21px; margin: 0 0 12px; color: #0b1730; }
        .arm-feature-card p { margin: 0; color: #64748b; line-height: 1.75; font-size: 15px; }

        .arm-application { padding: 86px 0; background: #081326; color: #fff; }
        .arm-application-grid { display: grid; grid-template-columns: .9fr 1.1fr; gap: 65px; align-items: center; }
        .arm-application h2 { font-size: clamp(30px, 4vw, 43px); line-height: 1.2; margin: 0 0 20px; letter-spacing: -1px; }
        .arm-application p { color: #afbdd0; font-size: 16px; line-height: 1.85; margin: 0; }
        .arm-list { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
        .arm-list-item { padding: 22px; border: 1px solid rgba(148, 163, 184, .18); border-radius: 14px; background: rgba(255, 255, 255, .035); color: #dbeafe; font-size: 15px; line-height: 1.5; }
        .arm-list-item strong { display: block; color: #fff; margin-bottom: 6px; font-size: 16px; }

        @media (max-width: 900px) {
            .arm-hero {
                min-height: 470px;
                background-position: center, center, right center;
                background-size: cover, cover, auto 100%;
            }
            .arm-hero-content { max-width: 570px; padding: 65px 0 70px; }
            .arm-capabilities { flex-wrap: wrap; gap: 18px 0; }
            .arm-capability { padding: 0 18px; }
            .arm-capability:first-child { padding-left: 0; }
            .arm-feature-grid { grid-template-columns: repeat(2, 1fr); }
            .arm-application-grid { grid-template-columns: 1fr; gap: 35px; }
        }

        @media (max-width: 560px) {
            .arm-container { width: min(100% - 32px, 1180px); }
            .arm-hero {
                min-height: auto;
                border-radius: 0 0 50% 50% / 0 0 4% 4%;
                background-position: center, center, right center;
                background-size: cover, cover, auto 55%;
                background-position-y: center, center, top;
                padding-bottom: 25px;
            }
            .arm-hero-content { padding: 58px 0 48px; }
            .arm-hero h1 { font-size: clamp(38px, 11vw, 52px); letter-spacing: -1.5px; }
            .arm-hero-copy { font-size: 15px; }
            .arm-capabilities { display: grid; grid-template-columns: 1fr; gap: 17px; }
            .arm-capability, .arm-capability:first-child { padding: 0; border-right: 0; }
            .arm-feature-grid, .arm-list { grid-template-columns: 1fr; }
            .arm-section, .arm-application { padding: 65px 0; }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="arm-page">
        <section class="arm-hero">
            <div class="arm-container">
                <div class="arm-hero-content">
                    <div class="arm-eyebrow">Intellekt Robotics</div>
                    <h1>Autonomous robotic <span>Robots</span></h1>
                    <p class="arm-hero-copy">Explore precision robotic arm systems designed for repeatable handling, assembly, pick-and-place operations, and practical industrial automation.</p>
                    <div class="arm-capabilities" aria-label="Robotic arm capabilities">
                        <div class="arm-capability"><svg class="arm-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M7 25h18M10 25V14l7-5 7 5v11M14 25v-6h4v6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg><strong>Precision<br>Movement</strong></div>
                        <div class="arm-capability"><svg class="arm-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M8 25V9h10a5 5 0 0 1 0 10H8M18 19l6 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg><strong>Pick &amp;<br>Place</strong></div>
                        <div class="arm-capability"><svg class="arm-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><circle cx="16" cy="16" r="11" stroke="currentColor" stroke-width="2.2"/><path d="M16 10v6l4 3" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg><strong>Repeatable<br>Automation</strong></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="arm-section">
            <div class="arm-container">
                <div class="arm-section-heading">
                    <div class="arm-eyebrow">Precision in Motion</div>
                    <h2>Precision automation for practical robotics</h2>
                    <p>Robotic arms combine multi-axis motion, controllers, sensors, and end-effectors to perform precise and repeatable tasks. They can support manufacturing, prototyping, education, and automation workflows where controlled movement matters.</p>
                </div>
                <div class="arm-feature-grid">
                    <article class="arm-feature-card"><div class="arm-icon">01</div><h3>Precision Movement</h3><p>Explore coordinated joint movement, trajectory planning, and controlled positioning for repeatable robotic tasks.</p></article>
                    <article class="arm-feature-card"><div class="arm-icon">02</div><h3>Pick &amp; Place</h3><p>Automate repetitive handling, sorting, transfer, assembly, and component placement workflows.</p></article>
                    <article class="arm-feature-card"><div class="arm-icon">03</div><h3>Flexible Automation</h3><p>Configure robotic sequences and end-effectors for different industrial, training, and prototyping requirements.</p></article>
                </div>
            </div>
        </section>

        <section class="arm-application">
            <div class="arm-container arm-application-grid">
                <div><div class="arm-eyebrow">Where Robotic Arms Create Value</div><h2>Built for precise automation challenges</h2><p>ROBOTIC ARM systems can be integrated into a variety of environments where reliable movement, improved visibility, and reduced repetitive handling are important. Their value comes from combining robotics hardware with software-driven decision-making.</p></div>
                <div class="arm-list"><div class="arm-list-item"><strong>Manufacturing</strong>Assembly, machine tending, and component handling.</div><div class="arm-list-item"><strong>Manufacturing</strong>Pick-and-place, machine tending, and component handling.</div><div class="arm-list-item"><strong>Prototyping</strong>Rapid testing of motion, controls, sensors, and end-effectors.</div><div class="arm-list-item"><strong>Training &amp; Education</strong>Hands-on robotics programming, control, and automation learning.</div></div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
