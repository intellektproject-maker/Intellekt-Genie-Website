<?php
session_set_cookie_params([
    'httponly' => true,
    'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
    'samesite' => 'Lax',
]);
session_start();

if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
}
$contactCsrf = $_SESSION['contact_csrf'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
    <style>
        /* =========================================================
           CONTACT PAGE - CLEAN LIGHT FORM PRESENTATION
           ========================================================= */
        .sigma-page-title-area.breadcrumb-main {
            position: relative;
            z-index: 1;
            padding-top: 46px !important;
            padding-bottom: 30px !important;
        }

        .sigma-page-title-area.breadcrumb-main .sigma-page-title {
            color: #ffffff !important;
            margin-top: 0 !important;
        }

        .sigma-contact-area {
            background: #f5f8fc !important;
            padding-top: 0 !important;
        }

        .sigma-contact-area .sigma-contact-wrap {
            padding: 10px 0;
        }

        .sigma-contact-area .sigma-contact-address-heading {
            color: #0b1f43 !important;
        }

        .sigma-contact-area .sigma-contact-wrap ul,
        .sigma-contact-area .sigma-contact-wrap li,
        .sigma-contact-area .sigma-contact-wrap a,
        .sigma-contact-area .sigma-contact-wrap a.contact-links-2 {
            color: #40536f !important;
            opacity: 1 !important;
        }

        .sigma-contact-area .sigma-contact-wrap a:hover {
            color: #1677ff !important;
        }

        .sigma-contact-area .sigma-contact-wrap .text-primary,
        .sigma-contact-area .sigma-contact-wrap i {
            color: #1677ff !important;
        }

        .sigma-contact-form-wrap {
            background: #ffffff !important;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 34px 36px;
            box-shadow: 0 14px 38px rgba(15, 35, 65, 0.08);
        }

        .sigma-contact-area .sigma-input-label {
            color: #0b1f43 !important;
            opacity: 1 !important;
        }

        .sigma-contact-area .sigma-form-input,
        .sigma-contact-area .sigma-form-textarea {
            color: #17213a !important;
            background-color: #ffffff !important;
            border: 1px solid #d7e0eb !important;
        }

        .sigma-contact-area .sigma-form-input::placeholder,
        .sigma-contact-area .sigma-form-textarea::placeholder {
            color: #77839a !important;
            opacity: 1 !important;
        }

        .sigma-contact-area .sigma-form-input:focus,
        .sigma-contact-area .sigma-form-textarea:focus {
            color: #17213a !important;
            border-color: #1677ff !important;
            outline: none;
            box-shadow: 0 0 0 3px rgba(22, 119, 255, 0.10);
        }

        @media (max-width: 767px) {
            .sigma-page-title-area.breadcrumb-main {
                padding-top: 32px !important;
                padding-bottom: 24px !important;
            }

            .sigma-contact-form-wrap {
                padding: 24px 20px;
                border-radius: 12px;
            }
        }
    </style>

</head>

<body>
    <?php include 'header.php' ?>
    <section class="sigma-page-title-area sigma-page-title-dark bg-sigma-section-bg-2 sigma-section-specing-has-bg-no-margin pb-4 breadcrumb-main">
        <div class="container">
            <h2 class="sigma-page-title text-light font-semibold mb-2">Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item "><a href="index.php" class="text-light fw-bold text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-light" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="sigma-contact-area pt-0 pb-5">
        <div class="container-lg">
            <div class="grid grid-cols-12 gap-x-[30px] sm:gap-x-0 sm:gap-y-[30px] pt-[80px] md:pt-[40px] row">
                <div class="col-12 col-md-3">
                    <div class="sigma-contact-wrap">
                        <h3 class="sigma-contact-address-heading text-[37px] text-heading leading-[47px] -tracking-[.74px] mb-[5px] xl:text-[30px] xl:leading-[40px] sm:text-[22px] sm:leading-[32px]">Inquiries</h3>
                        <ul class=" ps-1 pt-1 ">
                            <li class="py-3"><a href="https://maps.app.goo.gl/tHiDUdit6seCydzY7" class="text-decoration-none  contact-links-2"> <i class="fas fa-map-marker-alt me-2 text-primary"></i>EB office, 62/1A, Marutha Kutty St, near KK Pudhur, Saibaba Colony, Kuppakonam Pudur, Coimbatore, Tamil Nadu 641038</a></li>
                            <li class="py-3"><a href="https://maps.app.goo.gl/oh8Y4uJosD6XUU1TA" class="text-decoration-none  contact-links-2" target="_blank"> <i class="fas fa-map-marker-alt me-2 text-primary"></i>9501 N FM 620 RD APT 4101 AUSTIN, TEXAS 78726 </a></li>
                            <li class="py-2"><a href="tel:+919500072201" class="text-decoration-none  contact-links-2"><i class="fas fa-phone me-2 text-primary"></i>+91 95000 72201 </a></li>
                            <li class="py-2"><a href="tel:+919677020049" class="text-decoration-none  contact-links-2"><i class="fas fa-phone me-2 text-primary"></i>+91 96770 20049 </a></li>
                            <li class="py-2"><a href="mailto:info@intellektgenie.com" class="text-decoration-none  contact-links-2"> <i class="fas fa-envelope me-2 text-primary"></i> Info@intellektgenie.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-12 col-md-8">
                    <div class="sigma-contact-form-wrap">
                        <form class="sigma-contact-form" method="post" action="submit_form.php" id="contact-form">
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($contactCsrf, ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="d-none" aria-hidden="true">
                                <label for="website">Website</label>
                                <input type="text" name="website" id="website" value="" tabindex="-1" autocomplete="off">
                            </div>
                            <div class="row   gap-y-[30px]">
                                <div class="sigma-input-name col-12 col-md-6">
                                    <label for="name" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Name</label>
                                    <input type="text" id="name" name="name" autocomplete="name" maxlength="100" pattern="[A-Za-z\s]+" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Full Name" required>
                                </div>
                                <div class="sigma-input-company col-12 col-md-6">
                                    <label for="address" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Address</label>
                                    <input type="text" id="address" name="address" autocomplete="street-address" maxlength="250" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your address" required>
                                </div>
                                <div class="sigma-input-phone col-12 col-md-6">
                                    <label for="phone" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Phone</label>
                                    <input type="tel" id="phone" name="phone" autocomplete="tel" required oninput="this.value = this.value.replace(/[^0-9]/g, '')" pattern="^\+?[0-9]{10,13}$" minlength="10" maxlength="13" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Phone Number">
                                </div>
                                <div class="sigma-input-email col-12 col-md-6">
                                    <label for="email" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Email</label>
                                    <input type="email" id="email" name="email" autocomplete="email" maxlength="254" style="text-transform: lowercase;" oninput="this.value = this.value.toLowerCase();" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Email Address" required>
                                </div>

                            </div>

                            <div class="sigma-text-area mt-[30px]">
                                <label for="message" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Message</label>
                                <textarea id="message" name="message" maxlength="5000" class="sigma-form-textarea text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full h-[174px] resize-none border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Message" required></textarea>
                            </div>
                            <div class=" pt-4">
                                <button type="submit" name="Submits" class="btn btn-primary  py-1 pb-2 py-md-2 px-md-5 px-3   fs-5 "> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>