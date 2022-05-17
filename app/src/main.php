<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="form">
    <div class="form-top-bar">
        <div class="h7 d-none d-md-block">high standard and high-quality work</div>
        <div class="d-md-none">
            <div class="h4 fw-900 text-black">Get local jobs done by locals!</div>
            <div class="h14 fw-700 text-black">Quote within mins and job completion within days!</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-xl-11">
                <form action="./src/form.php" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="row justify-content-center align-items-center form-content">
                        <div class="col-12 col-xl-auto d-flex align-items-center py-3 booking-header" data-aos="fade-right">
                            <div class="px-4 px-lg-5 text-uppercase">
                                <div class="h3 fw-800 line-height-3"><span class="text-primary">Free</span> Measure<br> and quote </div>
                                <div class="h5 text-black fw-900">for all services</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg pl-xl-5" data-aos="fade-left">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="text" placeholder="Your Name" name="name" required>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="tel" placeholder="Your Number" name="phone" required>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="email" placeholder="Your Email" name="email" required>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="text" placeholder="Your Location" name="location" required>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <select name="service" class="form-control border-0 rounded-0 bg-grey" required>
                                        <option selected disabled>Service You Require</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 py-2">
                                    <button type="submit" class="btn btn-primary text-black form-control rounded-0 text-uppercase h13 text-italic fw-900">
                                        Make A Booking</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="quick-contact">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto text-uppercase h2 fw-900 line-height-1 letter-spacing-n02" data-aos="fade-right">
                <div class="text-white">Quote within mins and job</div>
                <div class="text-primary">Completion within days!</div>
            </div>
            <div class="col-auto" data-aos="fade-left">
                <div class="row no-gutters justify-content-center">
                    <div class="col-auto px-2">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary rounded-0 text-black line-height-1 h9 fw-800 quick-contact-button">
                            Book NOw
                        </a>
                    </div>

                    <div class="col-auto px-2">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-block border-primary rounded-0 text-white line-height-1 h9 fw-800 quick-contact-button">
                            Free Onsite Quote &amp; Inspection
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="services-wrapper">
            <div class="row">
                <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                    <div class="service-card">
                        <?= renderImg("service-1.png", "lib", "w-100") ?>
                        <div class="service-caption">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="primary-block"></div>
                                </div>
                                <div class="col">Concrete driveway replacement</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                    <div class="service-card">
                        <?= renderImg("service-2.png", "lib", "w-100") ?>
                        <div class="service-caption">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="primary-block"></div>
                                </div>
                                <div class="col">Concrete shed slabs</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                    <div class="service-card">
                        <?= renderImg("service-3.png", "lib", "w-100") ?>
                        <div class="service-caption">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="primary-block"></div>
                                </div>
                                <div class="col">New Concrete driveways</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                    <div class="service-card">
                        <?= renderImg("service-4.png", "lib", "w-100") ?>
                        <div class="service-caption">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="primary-block"></div>
                                </div>
                                <div class="col">Polished concrete</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                    <div class="service-card">
                        <?= renderImg("service-5.png", "lib", "w-100") ?>
                        <div class="service-caption">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="primary-block"></div>
                                </div>
                                <div class="col">Concrete restoration</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                    <div class="service-card">
                        <?= renderImg("service-6.png", "lib", "w-100") ?>
                        <div class="service-caption">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="primary-block"></div>
                                </div>
                                <div class="col">Concrete footpaths</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see-more-services">
                <div class="row">
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-1.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete driveway replacement</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-2.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete shed slabs</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-3.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">New Concrete driveways</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-4.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Polished concrete</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-5.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete restoration</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-6.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete footpaths</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-4">
            <div class="col-12">
                <button id="show-more-services" class="btn btn-block btn-dark-grey rounded-0 text-white py-4 line-height-2 h10 fw-700 text-uppercase">
                    See More Services
                </button>
            </div>
        </div>
    </div>
</section>

<section class="color-range">
    <div class="container">
        <div class="row justify-content-between align-items-center py-5">
            <div class="col-auto col-lg-6 text-uppercase h2 fw-900 line-height-1 letter-spacing-n02" data-aos="fade-right">
                <div class="text-white">We Have a wide range <span class="text-primary">of concrete colours</span></div>
            </div>
            <div class="col-auto" data-aos="fade-left">
                <div class="row no-gutters justify-content-center">
                    <div class="col-auto px-2">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary rounded-0 text-black line-height-1 h9 fw-800 color-range-button">
                            Book NOw
                        </a>
                    </div>

                    <div class="col-auto px-2">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-block border-primary rounded-0 text-white line-height-1 h9 fw-800 color-range-button">
                            Free Onsite Quote &amp; Inspection
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <div class="color-range-slider">
                    <div class="color-range-slider-content range-1">
                        <?= renderImg("charcoal.png", "lib") ?>
                    </div>
                    <div class="color-range-slider-content range-2">
                        <?= renderImg("jet-black.png", "lib") ?>
                    </div>
                    <div class="color-range-slider-content range-3">
                        <?= renderImg("graphite.png", "lib") ?>
                    </div>
                    <div class="color-range-slider-content range-4">
                        <?= renderImg("grey-mist.png", "lib") ?>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="color-range-nav-button range-button-1 active mb-4">
                    <div class="d-flex align-items-center">
                        <div class="primary-block"></div>
                        <div class="pl-4">Charcoal</div>
                    </div>
                </div>
                <div class="color-range-nav-button range-button-2 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="primary-block"></div>
                        <div class="pl-4">Jet Black</div>
                    </div>
                </div>
                <div class="color-range-nav-button range-button-3 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="primary-block"></div>
                        <div class="pl-4">Graphite</div>
                    </div>
                </div>
                <div class="color-range-nav-button range-button-4 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="primary-block"></div>
                        <div class="pl-4">Grey Mist</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>