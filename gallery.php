<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php'; ?>
    <!-- Scoped Editorial Gallery Styles -->
    <link rel="stylesheet" href="assets/css/gallery.css?v=7">
    <script>document.documentElement.classList.add('eg-js');</script>
</head>

<body class="gallery-page">
    <?php include 'header.php'; ?>

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
         EDITORIAL GALLERY (asymmetric masonry + editorial text)
         Images: every gallery-*.png in assets/image/new-images/ is
         scanned below; real width/height are read from each file so
         the browser reserves the correct proportion before it loads.
         ========================================================= -->
    <section class="eg-section" aria-label="Campus and Learning Showcase">
        <div class="container">
            <header class="eg-header">
                <span class="eg-kicker">
                    <span class="eg-kicker-line" aria-hidden="true"></span>
                    CAMPUS &amp; LEARNING SHOWCASE
                </span>
                <h3 class="eg-title">Moments &amp; Innovations</h3>
                <p class="eg-subtitle">
                    Explore glimpses from our training programmes, robotics labs, academic seminars, and student innovation sessions.
                </p>
            </header>

            <?php
            /* ---------------------------------------------------------
               1. Reference existing gallery image assets directly in
                  assets/image/new-images/ (gallery-1.png .. gallery-7.png).
                  Real pixel sizes are read so layout follows proportions.
               --------------------------------------------------------- */
            $imageDir = __DIR__ . '/assets/image/new-images';
            $files = glob($imageDir . '/gallery-*.png') ?: [];
            natsort($files);

            $pool = [];
            foreach ($files as $file) {
                $info = @getimagesize($file);
                if (!$info) {
                    continue;
                }
                $ratio = $info[0] / $info[1];
                $pool[] = [
                    'src'  => 'assets/image/new-images/' . basename($file),
                    'w'    => $info[0],
                    'h'    => $info[1],
                    'type' => ($ratio >= 1.8) ? 'wide' : (($ratio < 0.95) ? 'portrait' : 'landscape'),
                ];
            }

            /* Neutral, brand-level editorial headings (no claims about any image). */
            $notes = [
                ['Robotics in Motion',                     'Intelligent machines, engineered with precision.'],
                ['Engineering Ideas Into Reality',         'From first concept to working systems.'],
                ['Built for Intelligent Automation',       'Technology designed for the real world.'],
                ['Technology Meets Real-World Innovation', 'Robotics, automation and intelligent systems.'],
                ['Explore Our Robotics Ecosystem',         'Where engineering and innovation come together.'],
            ];
            $noteCursor = 0;

            /* ---------------------------------------------------------
               2. Composition: row templates, repeated as needed.
                  img  = [kind, preferred ratio type, reveal, parallax, delay ms]
                  note = [kind, variant, reveal]
                  Each image cell takes the first unused image whose
                  proportion fits (portrait / wide / landscape); if none is
                  left it takes whatever remains, so no PNG is ever dropped.
               --------------------------------------------------------- */
            $templates = [
                'r1' => [['img', 'landscape', 'lg',    0,     0],   ['img', 'portrait',  'sm',    0.03, 140]],
                'r2' => [['img', 'landscape', 'sm',   -0.025, 0],   ['img', 'landscape', 'right', 0,    140]],
                'r3' => [['note', 'aside', 'left'],                 ['img', 'landscape', 'lg',    0.02, 140]],
                'r4' => [['note', 'statement', 'left']],
                'r5' => [['img', 'wide',      'lg',    0,     0],   ['img', 'landscape', 'right', 0.035, 160]],
            ];

            $pickImage = function ($pref) use (&$pool) {
                foreach ($pool as $k => $img) {
                    if ($img['type'] === $pref) {
                        unset($pool[$k]);
                        $pool = array_values($pool);
                        return $img;
                    }
                }
                return $pool ? array_shift($pool) : null;
            };

            $imgIndex = 0;
            ?>

            <div class="eg-grid" id="eg-grid">
                <?php
                while ($pool) {
                    foreach ($templates as $rowKey => $cells) {
                        if (!$pool) {
                            break 2; // all PNGs placed - never leave a trailing text-only row
                        }
                        ?>
                        <div class="eg-row eg-row--<?php echo $rowKey; ?>">
                            <?php foreach ($cells as $cellNo => $cell):
                                $pos = $cellNo + 1;
                                if ($cell[0] === 'note'):
                                    $note = $notes[$noteCursor % count($notes)];
                                    $noteCursor++;
                                    ?>
                                    <div class="eg-item eg-note eg-note--<?php echo $cell[1]; ?> eg-cell--<?php echo $pos; ?> eg-rv-<?php echo $cell[2]; ?>">
                                        <span class="eg-note-line" aria-hidden="true"></span>
                                        <h4 class="eg-note-title"><?php echo htmlspecialchars($note[0]); ?></h4>
                                        <p class="eg-note-text"><?php echo htmlspecialchars($note[1]); ?></p>
                                    </div>
                                <?php
                                else:
                                    $item = $pickImage($cell[1]);
                                    if (!$item) {
                                        continue;
                                    }
                                    $idx = $imgIndex++;
                                    ?>
                                    <figure class="eg-item eg-cell--<?php echo $pos; ?> eg-rv-<?php echo $cell[2]; ?>"
                                        <?php if ($cell[3]): ?>data-parallax="<?php echo $cell[3]; ?>"<?php endif; ?>
                                        style="--eg-delay: <?php echo (int) $cell[4]; ?>ms">
                                        <button type="button" class="eg-open" data-index="<?php echo $idx; ?>" aria-label="View image <?php echo $idx + 1; ?> full screen">
                                            <img
                                                src="<?php echo htmlspecialchars($item['src']); ?>"
                                                width="<?php echo $item['w']; ?>"
                                                height="<?php echo $item['h']; ?>"
                                                alt="Intellekt Genie gallery image <?php echo $idx + 1; ?>"
                                                loading="<?php echo ($idx < 2) ? 'eager' : 'lazy'; ?>"
                                                decoding="async"
                                                draggable="false">
                                        </button>
                                    </figure>
                                <?php endif;
                            endforeach; ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- =========================================================
         FULLSCREEN IMAGE VIEWER (no captions)
         ========================================================= -->
    <div id="eg-viewer" class="eg-viewer" role="dialog" aria-modal="true" aria-hidden="true" aria-label="Image viewer">
        <button type="button" id="eg-viewer-close" class="eg-viewer-btn eg-viewer-close" aria-label="Close viewer">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
        <button type="button" id="eg-viewer-prev" class="eg-viewer-btn eg-viewer-nav eg-viewer-prev" aria-label="Previous image">
            <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
        </button>
        <div class="eg-viewer-stage">
            <img id="eg-viewer-img" class="eg-viewer-img" src="" alt="" draggable="false">
        </div>
        <button type="button" id="eg-viewer-next" class="eg-viewer-btn eg-viewer-nav eg-viewer-next" aria-label="Next image">
            <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Scoped Gallery JavaScript -->
    <script src="assets/js/gallery.js?v=7" defer></script>

    <?php include 'footer.php'; ?>
</body>

</html>
