<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Autonomous Mobile Robots | Intellekt Genie</title>
    <style>
        :root {
            --amr-navy: #050b18;
            --amr-blue: #2563eb;
            --amr-light-blue: #60a5fa;
            --amr-text: #e8eef9;
            --amr-muted: #a9b7cc;
            --amr-panel: #0c1627;
        }

        .amr-page {
            background: var(--amr-navy);
            color: var(--amr-text);
            overflow: hidden;
        }

        .amr-hero {
            position: relative;
            min-height: 610px;
            display: flex;
            align-items: center;
            background:
                radial-gradient(circle at 78% 40%, rgba(37, 99, 235, .22), transparent 34%),
                linear-gradient(135deg, #050b18 0%, #081326 60%, #0b1b35 100%);
            border-bottom: 1px solid rgba(148, 163, 184, .13);
        }

        .amr-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            opacity: .18;
            background-image: linear-gradient(rgba(96, 165, 250, .2) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(96, 165, 250, .2) 1px, transparent 1px);
            background-size: 72px 72px;
            mask-image: linear-gradient(to right, black, transparent 85%);
            pointer-events: none;
        }

        .amr-container {
            width: min(1180px, calc(100% - 48px));
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .amr-hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 65px;
            align-items: center;
            padding: 100px 0 85px;
        }

        .amr-eyebrow {
            color: var(--amr-light-blue);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2.4px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .amr-hero h1 {
            font-size: clamp(40px, 5vw, 66px);
            line-height: 1.08;
            letter-spacing: -2px;
            margin: 0 0 24px;
            color: #fff;
            font-weight: 750;
        }

        .amr-hero h1 span {
            color: #75b7ff;
        }

        .amr-hero-copy {
            max-width: 560px;
            color: var(--amr-muted);
            font-size: 18px;
            line-height: 1.85;
            margin: 0;
        }

        .amr-hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 430px;
        }

        .amr-hero-image::before {
            content: "";
            position: absolute;
            width: 390px;
            height: 390px;
            border-radius: 50%;
            background: rgba(37, 99, 235, .18);
            filter: blur(55px);
            z-index: -1;
        }

        .amr-hero-image img {
            width: min(100%, 410px);
            max-height: 500px;
            object-fit: contain;
            filter: drop-shadow(0 28px 35px rgba(0, 0, 0, .5));
        }

        .amr-section {
            padding: 92px 0;
            background: #f5f8fc;
            color: #0b1730;
        }

        .amr-section-heading {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 52px;
        }

        .amr-section-heading .amr-eyebrow {
            color: #2563eb;
            margin-bottom: 14px;
        }

        .amr-section-heading h2 {
            font-size: clamp(30px, 4vw, 44px);
            line-height: 1.2;
            margin: 0 0 18px;
            letter-spacing: -1px;
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
            font-size: 23px;
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
            .amr-hero-grid,
            .amr-application-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .amr-hero-grid {
                padding: 75px 0 60px;
            }

            .amr-hero-image {
                min-height: auto;
            }

            .amr-feature-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 560px) {
            .amr-container {
                width: min(100% - 32px, 1180px);
            }

            .amr-hero h1 {
                letter-spacing: -1px;
            }

            .amr-feature-grid,
            .amr-list {
                grid-template-columns: 1fr;
            }

            .amr-section,
            .amr-application {
                padding: 65px 0;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="amr-page">
        <section class="amr-hero">
            <div class="amr-container amr-hero-grid">
                <div>
                    <div class="amr-eyebrow">Intellekt Robotics</div>
                    <h1>Autonomous Mobile <span>Robots</span></h1>
                    <p class="amr-hero-copy">
                        Explore the technology behind intelligent mobile robots designed to move materials,
                        navigate dynamic environments, and support safer, more efficient operations.
                    </p>
                </div>
                <div class="amr-hero-image">
                    <img src="assets/image/new-images/amr.png" alt="Autonomous mobile robot used for industrial automation">
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
