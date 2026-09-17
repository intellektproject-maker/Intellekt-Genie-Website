<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header-link.php'; ?>
    <title>Spiderbot &amp; Legged Robotics | Intellekt Genie</title>
    <style>
        :root { --spider-blue:#62adff; --spider-white:#f8fafc; }
        * { box-sizing:border-box; }
        body { margin:0; }
        .spider-page { background:#f4f7fb; color:var(--spider-white); overflow:hidden; }
        .spider-hero { position:relative; min-height:565px; display:flex; align-items:stretch; isolation:isolate; overflow:hidden; background:#050a11; border-radius:0 0 50% 50% / 0 0 7% 7%; }
        .spider-hero::before { content:""; position:absolute; inset:0; z-index:2; pointer-events:none; background:linear-gradient(90deg,#050a11 0%,rgba(5,10,17,.98) 22%,rgba(5,10,17,.88) 38%,rgba(5,10,17,.38) 57%,rgba(5,10,17,.04) 78%,rgba(5,10,17,.02) 100%),linear-gradient(0deg,rgba(5,10,17,.62),transparent 38%,rgba(5,10,17,.14)); }
        .spider-hero::after { content:""; position:absolute; inset:0; z-index:3; pointer-events:none; opacity:.11; background-image:linear-gradient(rgba(96,165,250,.22) 1px,transparent 1px),linear-gradient(90deg,rgba(96,165,250,.22) 1px,transparent 1px); background-size:84px 84px; mask-image:linear-gradient(to right,black,transparent 72%); }
        .spider-container { width:min(1240px,calc(100% - 48px)); margin:0 auto; position:relative; z-index:5; }
        .spider-hero-content { position:relative; z-index:6; width:53%; max-width:700px; padding:82px 0 90px; display:flex; flex-direction:column; justify-content:center; }
        .spider-eyebrow { color:var(--spider-blue); font-size:11px; font-weight:700; letter-spacing:2.6px; text-transform:uppercase; margin-bottom:18px; }
        .spider-hero h1 { max-width:700px; font-size:clamp(44px,5vw,72px); line-height:.99; letter-spacing:-3.5px; margin:0 0 24px; color:#fff; font-weight:800; }
        .spider-hero h1 span { color:var(--spider-blue); }
        .spider-hero-copy { max-width:570px; color:#d8e2ef; font-size:16px; line-height:1.7; margin:0; }
        .spider-capabilities { display:flex; align-items:stretch; margin-top:34px; max-width:610px; }
        .spider-capability { display:flex; align-items:center; gap:12px; min-height:52px; padding:0 25px; border-right:1px solid rgba(184,204,230,.25); }
        .spider-capability:first-child { padding-left:0; }
        .spider-capability:last-child { border-right:0; }
        .spider-capability-icon { width:28px; height:28px; flex:0 0 28px; color:var(--spider-blue); }
        .spider-capability strong { display:block; color:#f5f8ff; font-size:13px; line-height:1.3; font-weight:650; white-space:nowrap; }
        /* The generated asset is a wide landscape composition. Let the entire image span the hero so its right-positioned robot is not cropped or enlarged. */
        .spider-visual { position:absolute; z-index:1; inset:0; width:100%; height:100%; display:block; pointer-events:none; }
        .spider-visual img { display:block; width:100%; height:100%; object-fit:cover; object-position:center center; filter:brightness(.88) contrast(1.06) saturate(.96); }
        .spider-section { position:relative; margin-top:-1px; padding:92px 0 100px; background:#f5f8fc; color:#0b1730; }
        .spider-section-heading { max-width:780px; margin:0 auto 52px; text-align:center; }
        .spider-section-heading .spider-eyebrow { color:#438fe8; margin-bottom:15px; }
        .spider-section-heading h2 { font-size:clamp(32px,4vw,48px); line-height:1.18; margin:0 0 20px; letter-spacing:-1.5px; }
        .spider-section-heading p { color:#64748b; font-size:17px; line-height:1.8; margin:0; }
        .spider-feature-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:22px; }
        .spider-feature-card { background:#fff; border:1px solid #e2e8f0; border-radius:18px; padding:30px 26px; box-shadow:0 12px 30px rgba(15,23,42,.05); transition:transform .25s ease,box-shadow .25s ease; }
        .spider-feature-card:hover { transform:translateY(-5px); box-shadow:0 18px 38px rgba(15,23,42,.1); }
        .spider-icon { width:48px; height:48px; display:inline-flex; align-items:center; justify-content:center; border-radius:13px; background:#e8f1ff; color:#2563eb; font-size:14px; font-weight:700; margin-bottom:20px; }
        .spider-feature-card h3 { font-size:21px; margin:0 0 12px; color:#0b1730; }
        .spider-feature-card p { margin:0; color:#64748b; line-height:1.75; font-size:15px; }
        .spider-application { padding:86px 0; background:#081326; color:#fff; }
        .spider-application-grid { display:grid; grid-template-columns:.9fr 1.1fr; gap:65px; align-items:center; }
        .spider-application h2 { font-size:clamp(30px,4vw,43px); line-height:1.2; margin:0 0 20px; letter-spacing:-1px; }
        .spider-application p { color:#afbdd0; font-size:16px; line-height:1.85; margin:0; }
        .spider-list { display:grid; grid-template-columns:repeat(2,1fr); gap:16px; }
        .spider-list-item { padding:22px; border:1px solid rgba(148,163,184,.18); border-radius:14px; background:rgba(255,255,255,.035); color:#dbeafe; font-size:15px; line-height:1.5; }
        .spider-list-item strong { display:block; color:#fff; margin-bottom:6px; font-size:16px; }
        @media (max-width:1000px) { .spider-hero{min-height:570px;} .spider-hero-content{width:64%;} }
        @media (max-width:760px) { .spider-hero{min-height:auto;border-radius:0 0 50% 50% / 0 0 4% 4%;} .spider-hero::before{background:linear-gradient(180deg,rgba(5,10,17,.94),rgba(5,10,17,.75) 52%,rgba(5,10,17,.6));} .spider-hero-content{width:100%;max-width:650px;padding:62px 0 30px;} .spider-hero h1{font-size:clamp(42px,10vw,62px);letter-spacing:-2px;} .spider-hero-copy{max-width:600px;} .spider-visual{position:absolute;inset:0;width:100%;height:100%;} .spider-visual img{object-position:center;} .spider-capabilities{flex-wrap:wrap;gap:18px 0;margin-top:28px;} .spider-capability{padding:0 18px;} .spider-capability:first-child{padding-left:0;} .spider-feature-grid{grid-template-columns:repeat(2,1fr);} .spider-application-grid{grid-template-columns:1fr;gap:35px;} }
        @media (max-width:520px) { .spider-container{width:min(100% - 32px,1180px);} .spider-hero-content{padding-top:52px;} .spider-capabilities{display:grid;grid-template-columns:1fr;gap:17px;} .spider-capability,.spider-capability:first-child{padding:0;border-right:0;} .spider-visual{inset:0;width:100%;height:100%;} .spider-feature-grid,.spider-list{grid-template-columns:1fr;} .spider-section,.spider-application{padding:65px 0;} }
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
                    <p class="spider-hero-copy">Explore compact legged robots designed to move across uneven terrain, operate in challenging spaces, and demonstrate the practical potential of agile robotic systems.</p>
                    <div class="spider-capabilities" aria-label="Spiderbot capabilities">
                        <div class="spider-capability"><svg class="spider-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M16 4v24M4 16h24M8 8l16 16M24 8 8 24" stroke="currentColor" stroke-width="2.1" stroke-linecap="round"/><circle cx="16" cy="16" r="4.5" stroke="currentColor" stroke-width="2.1"/></svg><strong>Agile<br>Movement</strong></div>
                        <div class="spider-capability"><svg class="spider-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M16 5 27 11.5v9L16 27 5 20.5v-9L16 5Z" stroke="currentColor" stroke-width="2.1" stroke-linejoin="round"/><path d="m5 11.5 11 6.5 11-6.5M16 18v9" stroke="currentColor" stroke-width="2.1"/></svg><strong>Stable<br>Locomotion</strong></div>
                        <div class="spider-capability"><svg class="spider-capability-icon" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M6 24V8M6 8h20M26 8v16M6 24h20" stroke="currentColor" stroke-width="2.1" stroke-linecap="round"/><path d="m11 13 5 5 5-5" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round"/></svg><strong>Flexible<br>Exploration</strong></div>
                    </div>
                </div>
                <div class="spider-visual" aria-hidden="true"><img src="assets/image/new-images/spider.png" alt="Spiderbot legged robot"></div>
            </div>
        </section>
        <section class="spider-section">
            <div class="spider-container">
                <div class="spider-section-heading"><div class="spider-eyebrow">Robotics in Motion</div><h2>Agile machines for adaptable environments</h2><p>Spiderbots are compact legged robotic platforms that explore how mechanical design, embedded control, and intelligent sensing can work together. Their multi-legged structure supports experimentation with balance, movement, and navigation across varied surfaces.</p></div>
                <div class="spider-feature-grid"><article class="spider-feature-card"><div class="spider-icon">01</div><h3>Legged Locomotion</h3><p>Study coordinated leg movement, balance, and gait patterns that allow robots to move with agility and control.</p></article><article class="spider-feature-card"><div class="spider-icon">02</div><h3>Embedded Intelligence</h3><p>Combine microcontrollers, sensors, actuators, and software to create responsive robotic movement systems.</p></article><article class="spider-feature-card"><div class="spider-icon">03</div><h3>Practical Exploration</h3><p>Use compact robotic platforms for prototyping, education, research, and testing concepts in mobile robotics.</p></article></div>
            </div>
        </section>
        <section class="spider-application"><div class="spider-container spider-application-grid"><div><div class="spider-eyebrow">Applications &amp; Learning</div><h2>Designed to explore movement beyond the ordinary</h2><p>Legged robotic platforms provide a practical way to understand locomotion, embedded systems, and autonomous behavior. They are useful for hands-on experimentation where mobility and adaptability are central to the challenge.</p></div><div class="spider-list"><div class="spider-list-item"><strong>Research &amp; Prototyping</strong>Experiment with gait control, sensing, and robotic mobility.</div><div class="spider-list-item"><strong>Education &amp; Training</strong>Build practical skills in electronics, mechanics, and programming.</div><div class="spider-list-item"><strong>Inspection Concepts</strong>Explore robotic movement for compact or difficult-to-access spaces.</div><div class="spider-list-item"><strong>Innovation Projects</strong>Develop new ideas around agile machines and intelligent systems.</div></div></div></section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
