<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
    <!-- Scoped Cinematic Gallery Showcase Styles -->
    <link rel="stylesheet" href="assets/css/gallery.css">
</head>

<body>
    <?php include 'header.php' ?>

    <!-- =========================================================
         PAGE HERO / BREADCRUMB
         ========================================================= -->
    <section class="sigma-page-title-area sigma-page-title-dark bg-sigma-section-bg-2 sigma-section-specing-has-bg-no-margin pb-4 breadcrumb-main">
        <div class="container">
            <h2 class="sigma-page-title text-light font-semibold mb-2">Gallery</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-light fw-bold text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-light" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- =========================================================
         CINEMATIC GALLERY SHOWCASE
         ========================================================= -->
    <section class="cinematic-gallery-section" aria-label="Cinematic Gallery Showcase">
        <div class="cg-header">
            <span class="cg-kicker">
                <span class="cg-kicker-line"></span>
                CAMPUS &amp; LEARNING SHOWCASE
            </span>
            <h3 class="cg-title">Moments &amp; Innovations</h3>
            <p class="cg-subtitle">
                Explore glimpses from our training programmes, robotics labs, academic seminars, and student innovation sessions.
            </p>
        </div>

        <div class="cg-stage">
            <!-- Main Showcase Area with Center Slide and Subtle Previews -->
            <div class="cg-showcase">
                <!-- Previous Button -->
                <button type="button" class="cg-nav-btn cg-nav-prev" aria-label="Previous image">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Track Containing All Slides -->
                <div class="cg-track" role="region" aria-label="Image Carousel">
                    <?php
                    // Every existing gallery image from the original gallery page
                    $galleryImages = [
                        ['src' => 'assets/image/new-images/gallery-23.webp', 'alt' => 'Leadership presentation and address to trainees'],
                        ['src' => 'assets/image/new-images/gallery-24.webp', 'alt' => 'Interactive student training session in progress'],
                        ['src' => 'assets/image/new-images/gallery-27.webp', 'alt' => 'Academic lecture on robotics engineering'],
                        ['src' => 'assets/image/new-images/gallery-28.webp', 'alt' => 'Robotics seminar presentation on automation'],
                        ['src' => 'assets/image/new-images/gallery-29.webp', 'alt' => 'Keynote speaker address at tech symposium'],
                        ['src' => 'assets/image/new-images/gallery-34.webp', 'alt' => 'Student innovation project review session'],
                        ['src' => 'assets/image/new-images/gallery-36.webp', 'alt' => 'Industry mentor discussing robotics blueprints'],
                        ['src' => 'assets/image/new-images/gallery-38.webp', 'alt' => 'Hands-on hardware lab demonstration'],
                        ['src' => 'assets/image/new-images/gallery-39.webp', 'alt' => 'Engineering interns testing component assembly'],
                        ['src' => 'assets/image/new-images/gallery-1.webp',  'alt' => 'Student team sports and collaboration day'],
                        ['src' => 'assets/image/new-images/gallery-2.webp',  'alt' => 'Outdoor cohort team building activity'],
                        ['src' => 'assets/image/new-images/gallery-3.webp',  'alt' => 'Student robotics workshop cohort gathering'],
                        ['src' => 'assets/image/new-images/gallery-5.webp',  'alt' => 'Interactive robotics design lab cohort'],
                        ['src' => 'assets/image/new-images/gallery-6.webp',  'alt' => 'Collaborative team session in laboratory'],
                        ['src' => 'assets/image/new-images/gallery-7.webp',  'alt' => 'Hardware prototyping team workshop'],
                        ['src' => 'assets/image/new-images/gallery-8.webp',  'alt' => 'Faculty mentorship during hands-on lab'],
                        ['src' => 'assets/image/new-images/gallery-9.webp',  'alt' => 'Student group assembling embedded drone system'],
                        ['src' => 'assets/image/new-images/gallery-10.webp', 'alt' => 'Engineering students prototyping quadcopter frame'],
                        ['src' => 'assets/image/new-images/gallery-11.webp', 'alt' => 'Embedded circuits wiring and motor assembly lab'],
                        ['src' => 'assets/image/new-images/gallery-12.webp', 'alt' => 'Hands-on quadcopter assembly session'],
                        ['src' => 'assets/image/new-images/gallery-13.webp', 'alt' => 'Student team testing brushless DC motor components'],
                        ['src' => 'assets/image/new-images/gallery-14.webp', 'alt' => 'Robotics hardware design and wiring workshop'],
                        ['src' => 'assets/image/new-images/gallery-15.webp', 'alt' => 'Cohort members calibrating quadcopter drone kit'],
                        ['src' => 'assets/image/new-images/gallery-16.webp', 'alt' => 'Faculty guided drone frame assembly in lab'],
                        ['src' => 'assets/image/new-images/gallery-17.webp', 'alt' => 'Trainees learning component diagnostics'],
                        ['src' => 'assets/image/new-images/gallery-19.webp', 'alt' => 'Guest speaker address at seminar hall'],
                        ['src' => 'assets/image/new-images/gallery-20.webp', 'alt' => 'Group seminar on practical industrial robotics'],
                        ['src' => 'assets/image/new-images/gallery-21.webp', 'alt' => 'Classroom session on automation workflows'],
                        ['src' => 'assets/image/new-images/gallery-22.webp', 'alt' => 'Faculty and student group in auditorium discussion']
                    ];

                    foreach ($galleryImages as $idx => $item):
                        $isActive = ($idx === 0) ? 'is-active' : '';
                    ?>
                        <article class="cg-slide <?php echo $isActive; ?>" data-index="<?php echo $idx; ?>" aria-label="Slide <?php echo $idx + 1; ?> of <?php echo count($galleryImages); ?>">
                            <div class="cg-slide-inner">
                                <span class="cg-expand-badge" aria-hidden="true">
                                    <i class="fa-solid fa-expand"></i> Expand View
                                </span>
                                <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>" loading="<?php echo ($idx < 3) ? 'eager' : 'lazy'; ?>" draggable="false">
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <!-- Next Button -->
                <button type="button" class="cg-nav-btn cg-nav-next" aria-label="Next image">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- Slide Meta Bar (Counter) -->
            <div class="cg-meta-bar">
                <div class="cg-counter" aria-live="polite">
                    <span class="cg-counter-current">01</span>
                    <span class="cg-counter-divider">/</span>
                    <span class="cg-counter-total"><?php echo str_pad(count($galleryImages), 2, '0', STR_PAD_LEFT); ?></span>
                </div>
            </div>

            <!-- Thin Progress Indicator Bar -->
            <div class="cg-progress-wrap" role="progressbar" aria-label="Slide timer progress">
                <div class="cg-progress-bar"></div>
            </div>

            <!-- Thumbnails Strip -->
            <div class="cg-thumbs-wrap">
                <div class="cg-thumbs-scroll" role="tablist" aria-label="Gallery thumbnails">
                    <?php foreach ($galleryImages as $idx => $item): ?>
                        <button type="button" class="cg-thumb-item <?php echo ($idx === 0) ? 'is-active' : ''; ?>" role="tab" aria-label="View slide <?php echo $idx + 1; ?>" aria-selected="<?php echo ($idx === 0) ? 'true' : 'false'; ?>">
                            <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="Thumbnail <?php echo $idx + 1; ?>" loading="lazy" draggable="false">
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         LIGHTBOX MODAL
         ========================================================= -->
    <div id="cg-lightbox" class="cg-lightbox" role="dialog" aria-modal="true" aria-hidden="true" aria-label="Image Lightbox">
        <button type="button" id="cg-lightbox-close" class="cg-lightbox-close" aria-label="Close lightbox">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <button type="button" id="cg-lightbox-prev" class="cg-lightbox-nav cg-lightbox-prev" aria-label="Previous image">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="cg-lightbox-content">
            <img id="cg-lightbox-img" class="cg-lightbox-img" src="" alt="Enlarged view">
            <div class="cg-lightbox-caption">
                <span id="cg-lightbox-current">01</span> / <span id="cg-lightbox-total"><?php echo str_pad(count($galleryImages), 2, '0', STR_PAD_LEFT); ?></span>
            </div>
        </div>

        <button type="button" id="cg-lightbox-next" class="cg-lightbox-nav cg-lightbox-next" aria-label="Next image">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

    <!-- Scoped Gallery Showcase JavaScript -->
    <script src="assets/js/gallery.js?v=2" defer></script>

    <?php include 'footer.php' ?>
</body>

</html>