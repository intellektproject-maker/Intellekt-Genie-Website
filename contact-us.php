<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
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
                            <div class="row   gap-y-[30px]">
                                <div class="sigma-input-name col-12 col-md-6">
                                    <label for="name" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Name</label>
                                    <input type="text" name="name" pattern="[A-Za-z\s]+" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Full Name" required>
                                </div>
                                <div class="sigma-input-company col-12 col-md-6">
                                    <label for="address" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Address</label>
                                    <input type="text" name="address" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your address" required>
                                </div>
                                <div class="sigma-input-phone col-12 col-md-6">
                                    <label for="phone" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Phone</label>
                                    <input type="tel" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" pattern="^\+?[0-9]{10,13}$" minlength="10" maxlength="13" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Phone Number">
                                </div>
                                <div class="sigma-input-email col-12 col-md-6">
                                    <label for="email" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Email</label>
                                    <input type="email" name="email" style="text-transform: lowercase;" oninput="this.value = this.value.toLowerCase();" class="sigma-form-input text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Email Address" required>
                                </div>

                            </div>

                            <div class="sigma-text-area mt-[30px]">
                                <label for="message" class="sigma-input-label text-sigma-title-90 text-[18px]  -tracking-[.18px] leading-[28px]">Message</label>
                                <textarea name="message" class="sigma-form-textarea text-heading bg-sigma-section-bg rounded-[4px] p-[16px] w-full h-[174px] resize-none border border-solid border-transparent placeholder:text-[15px] placeholder:text-sigma-title-50 placeholder:leading-[26px] mt-[10px] focus:border-sigma-secondary" placeholder="Your Message" required></textarea>
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