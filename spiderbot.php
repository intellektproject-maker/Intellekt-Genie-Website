<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Spiderbot &amp; Legged Robotics | Intellekt Genie</title>
    <style>
        :root {
            --spider-white: #f7f9fd;
            --spider-blue: #63adff;
            --spider-line: rgba(184, 204, 230, .24);
        }

        * { box-sizing: border-box; }

        .spider-page {
            background: #f4f7fb;
            color: var(--spider-white);
            overflow: hidden;
        }

        .spider-hero {
            position: relative;
            min-height: 390px;
            display: flex;
            align-items: center;
            isolation: isolate;
            overflow: hidden;
            background:
                radial-gradient(circle at 78% 45%, rgba(37, 99, 170, .18), transparent 34%),
                linear-gradient(90deg, #050a10 0%, #07101b 56%, #0a1728 100%);
            border-radius: 0 0 50% 50% / 0 0 9% 9%;
        }

        .spider-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            opacity: .08;
            background-image:
                linear-gradient(rgba(96, 165, 250, .2) 1px, transparent 1px),
                linear-gradient(90deg, rgba(96, 165, 250, .2) 1px, transparent 1px);
            background-size: 78px 78px;
            mask-image: linear-gradient(to right, black 0%, transparent 76%);
            pointer-events: none;
        }

        .spider-container {
            width: min(1180px, calc(100% - 48px));
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        /* Keep the copy in its own column so the hero image can never cover it. */
        .spider-hero-content {
            width: 48%;
            max-width: 520px;
            padding: 52px 0 56px;
            position: relative;
            z-index: 2;
        }

        .spider-eyebrow {
            color: var(--spider-blue);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2.4px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .spider-hero h1 {
            max-width: 510px;
            font-size: clamp(40px, 4vw, 58px);
            line-height: 1.02;
            letter-spacing: -2.5px;
            margin: 0 0 18px;
            color: #fff;
            font-weight: 800;
        }

        .spider-hero h1 span { color: var(--spider-blue); }

        .spider-hero-copy {
            max-width: 500px;
            color: #d7e1ef;
            font-size: 15px;
            line-height: 1.62;
            margin: 0;
        }

        .spider-capabilities {
            display: flex;
            align-items: stretch;
            margin-top: 25px;
            max-width: 520px;
        }

        .spider-capability {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 44px;
            padding: 0 17px;
            border-right: 1px solid var(--spider-line);
        }

        .spider-capability:first-child { padding-left: 0; }
        .spider-capability:last-child { border-right: 0; padding-right: 0; }

        .spider-capability-icon {
            width: 26px;
            height: 26px;
            flex: 0 0 26px;
            color: var(--spider-blue);
        }

        .spider-capability strong {
            display: block;
            color: #f5f8ff;
            font-size: 12px;
            line-height: 1.3;
            font-weight: 650;
        }

        .spider-visual {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            pointer-events: none;
            z-index: 1;
        }

        .spider-visual::after {
            content: "";
            position: absolute;
            width: 85%;
            height: 45%;
            right: 0;
            bottom: 12%;
            background: radial-gradient(ellipse, rgba(0, 0, 0, .48), transparent 70%);
            filter: blur(12px);
            z-index: -1;
        }

        .spider-visual img {
            display: block;
            width: 100%;
            max-width: 590px;
            max-height: 350px;
            object-fit: contain;
            object-position: right center;
            filter: drop-shadow(0 24px 24px rgba(0, 0, 0, .24));
        }

        .spider-section {
            position: relative;
            margin-top: -1px;
            padding: 84px 0 92px;
            background: #f5f8fc;
            color: #0b1730;
        }

        .spider-section-heading {
            max-width: 760px;
            margin: 0 auto 52px;
            text-align: center;
        }

        .spider-section-heading .spider-eyebrow { color: #438fe8; margin-bottom: 14px; }
        .spider-section-heading h2 { font-size: clamp(30px, 4vw, 44px); line-height: 1.2; margin: 0 0 18px; letter-spacing: -1.2px; }
        .spider-section-heading p { color: #64748b; font-size: 17px; line-height: 1.8; margin: 0; }

        .spider-feature-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
        .spider-feature-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 18px; padding: 30px 26px; box-shadow: 0 12px 30px rgba(15, 23, 42, .05); transition: transform .25s ease, box-shadow .25s ease; }
        .spider-feature-card:hover { transform: translateY(-5px); box-shadow: 0 18px 38px rgba(15, 23, 42, .1); }
        .spider-icon { width: 48px; height: 48px; display: inline-flex; align-items: center; justify-content: center; border-radius: 13px; background: #e8f1ff; color: #2563eb; font-size: 14px; font-weight: 700; margin-bottom: 20px; }
        .spider-feature-card h3 { font-size: 21px; margin: 0 0 12px; color: #0b1730; }
        .spider-feature-card p { margin: 0; color: #64748b; line-height: 1.75; font-size: 15px; }

        .spider-application { padding: 86px 0; background: #081326; color: #fff; }
        .spider-application-grid { display: grid; grid-template-columns: .9fr 1.1fr; gap: 65px; align-items: center; }
        .spider-application h2 { font-size: clamp(30px, 4vw, 43px); line-height: 1.2; margin: 0 0 20px; letter-spacing: -1px; }
        .spider-application p { color: #afbdd0; font-size: 16px; line-height: 1.85; margin: 0; }
        .spider-list { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
        .spider-list-item { padding: 22px; border: 1px solid rgba(148, 163, 184, .18); border-radius: 14px; background: rgba(255, 255, 255, .035); color: #dbeafe; font-size: 15px; line-height: 1.5; }
        .spider-list-item strong { display: block; color: #fff; margin-bottom: 6px; font-size: 16px; }

        @media (max-width: 900px) {
            .spider-hero { min-height: 560px; }
            .spider-hero-content { width: 54%; max-width: 570px; padding: 65px 0 70px; }
            .spider-visual { width: 48%; right: 0; opacity: .72; }
            .spider-capabilities { flex-wrap: wrap; gap: 18px 0; }
            .spider-capability { padding: 0 18px; }
            .spider-capability:first-child { padding-left: 0; }
            .spider-feature-grid { grid-template-columns: repeat(2, 1fr); }
            .spider-application-grid { grid-template-columns: 1fr; gap: 35px; }
        }

        @media (max-width: 560px) {
            .spider-container { width: min(100% - 32px, 1180px); }
            .spider-hero { min-height: auto; border-radius: 0 0 50% 50% / 0 0 4% 4%; }
            .spider-hero-content { width: 100%; padding: 58px 0 30px; }
            .spider-hero h1 { font-size: clamp(38px, 11vw, 52px); letter-spacing: -1.5px; }
            .spider-hero-copy { font-size: 15px; }
            .spider-visual { position: relative; right: auto; top: auto; width: 100%; height: 230px; opacity: 1; justify-content: center; }
            .spider-visual img { max-height: 230px; object-position: center; }
            .spider-capabilities { display: grid; grid-template-columns: 1fr; gap: 17px; }
            .spider-capability, .spider-capability:first-child { padding: 0; border-right: 0; }
            .spider-feature-grid, .spider-list { grid-template-columns: 1fr; }
            .spider-section, .spider-application { padding: 65px 0; }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="spider-page">
        <section class="spider-hero">
            <div class="spider-container">
                <div class="spider-hero-content">
                    <div class="spider-eyebrow">Intellekt Robotics</div>
                    <h1>Spiderbot &amp; <span>Legged Robotics</span></h1>
                    <p class="spider-hero-copy">Explore compact legged robots designed to move across uneven surfaces, operate in challenging spaces, and demonstrate the practical possibilities of agile robotic systems.</p>
                    <div class="spider-capabilities" aria-label="Spiderbot capabilities">
                        <div class="spider-capability"><svg class="spider-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M16 4v24M4 16h24M8 8l16 16M24 8 8 24" stroke="currentColor" stroke-width="2.1" stroke-linecap="round"/><circle cx="16" cy="16" r="4.5" stroke="currentColor" stroke-width="2.1"/></svg><strong>Agile<br>Movement</strong></div>
                        <div class="spider-capability"><svg class="spider-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M16 5 27 11.5v9L16 27 5 20.5v-9L16 5Z" stroke="currentColor" stroke-width="2.1" stroke-linejoin="round"/><path d="m5 11.5 11 6.5 11-6.5M16 18v9" stroke="currentColor" stroke-width="2.1"/></svg><strong>Stable<br>Locomotion</strong></div>
                        <div class="spider-capability"><svg class="spider-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M6 24V8M6 8h20M26 8v16M6 24h20" stroke="currentColor" stroke-width="2.1" stroke-linecap="round"/><path d="m11 13 5 5 5-5" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round"/></svg><strong>Flexible<br>Exploration</strong></div>
                    </div>
                </div>
                <div class="spider-visual" aria-hidden="true">
                    <img src="assets/image/new-images/spider.png" alt="Spiderbot legged robot">
                </div>
            </div>
        </section>

        <section class="spider-section">
            <div class="spider-container">
                <div class="spider-section-heading">
                    <div class="spider-eyebrow">Robotics in Motion</div>
                    <h2>Agile machines for adaptable environments</h2>
                    <p>Spiderbots are compact legged robotic platforms that explore how mechanical design, embedded control, and intelligent sensing can work together. Their multi-legged structure supports experimentation with balance, movement, and navigation across varied surfaces.</p>
                </div>
                <div class="spider-feature-grid">
                    <article class="spider-feature-card"><div class="spider-icon">01</div><h3>Legged Locomotion</h3><p>Study coordinated leg movement, balance, and gait patterns that allow robots to move with agility and control.</p></article>
                    <article class="spider-feature-card"><div class="spider-icon">02</div><h3>Embedded Intelligence</h3><p>Combine microcontrollers, sensors, actuators, and software to create responsive robotic movement systems.</p></article>
                    <article class="spider-feature-card"><div class="spider-icon">03</div><h3>Practical Exploration</h3><p>Use compact robotic platforms for prototyping, education, research, and testing concepts in mobile robotics.</p></article>
                </div>
            </div>
        </section>

        <section class="spider-application">
            <div class="spider-container spider-application-grid">
                <div><div class="spider-eyebrow">Applications &amp; Learning</div><h2>Designed to explore movement beyond the ordinary</h2><p>Legged robotic platforms provide a practical way to understand locomotion, embedded systems, and autonomous behavior. They are useful for hands-on experimentation where mobility and adaptability are central to the challenge.</p></div>
                <div class="spider-list"><div class="spider-list-item"><strong>Research &amp; Prototyping</strong>Experiment with gait control, sensing, and robotic mobility.</div><div class="spider-list-item"><strong>Education &amp; Training</strong>Build practical skills in electronics, mechanics, and programming.</div><div class="spider-list-item"><strong>Inspection Concepts</strong>Explore robotic movement for compact or difficult-to-access spaces.</div><div class="spider-list-item"><strong>Innovation Projects</strong>Develop new ideas around agile machines and intelligent systems.</div></div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
