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
                        <div class="col-12 col-md-6 col-lg-5 col-xl-auto d-flex align-items-center py-3 booking-header" data-aos="fade-right">
                            <div class="px-4 px-xl-5 text-uppercase text-center text-md-left">
                                <div class="h3 fw-800 line-height-3"><span class="text-primary">Free</span> Measure<br class="d-none d-md-block"> and quote </div>
                                <div class="h5 text-black fw-900">for all services</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg pl-xl-5" data-aos="fade-left">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-lg-4 py-1 py-md-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="text" placeholder="Your Name" name="name" required>
                                </div>
                                <div class="col-12 col-lg-6 col-lg-4 py-1 py-md-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="tel" placeholder="Your Number" name="phone" required>
                                </div>
                                <div class="col-12 col-lg-6 col-lg-4 py-1 py-md-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="email" placeholder="Your Email" name="email" required>
                                </div>
                                <div class="col-12 col-lg-6 col-lg-4 py-1 py-md-2">
                                    <input class="form-control border-0 rounded-0 bg-grey" type="text" placeholder="Your Location" name="location" required>
                                </div>
                                <div class="col-12 col-lg-6 col-lg-4 py-1 py-md-2">
                                    <select name="service" class="form-control border-0 rounded-0 bg-grey" required>
                                        <option selected disabled>Service You Require</option>
                                        <option>Concrete Driveway Replacement</option>
                                        <option>Concrete Shed Slabs</option>
                                        <option>New Concrete Driveways</option>
                                        <option>Polished Concrete</option>
                                        <option>Concrete Restoration</option>
                                        <option>Concrete Footpaths</option>
                                        <option>Landscaping</option>
                                        <option>Mini Excavations</option>
                                        <option>Concrete Sealing</option>
                                        <option>Concrete Retaining Walls</option>
                                        <option>Concrete Flooring</option>
                                        <option>Concrete Paving</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 col-lg-4 py-2">
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
            <div class="col-auto pt-2 pt-md-4 pt-xl-0" data-aos="fade-left">
                <div class="row no-gutters justify-content-center">
                    <div class="col-auto px-1 px-xl-2">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary rounded-0 text-black line-height-1 h9 fw-800 quick-contact-button">
                            Book Now
                        </a>
                    </div>

                    <div class="col col-md-auto px-1 px-md-2">
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
                            <?= renderImg("service-7.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Landscaping</div>
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
                                    <div class="col">Mini Excavations</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-9.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete Sealing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-10.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete Retaining Walls</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-11.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete Flooring</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 py-3" data-aos="fade-up">
                        <div class="service-card">
                            <?= renderImg("service-12.png", "lib", "w-100") ?>
                            <div class="service-caption">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="primary-block"></div>
                                    </div>
                                    <div class="col">Concrete Paving</div>
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
            <div class="col-auto col-lg-6 text-uppercase line-height-1 letter-spacing-n02" data-aos="fade-right">
                <div class="text-white h2 fw-900">We Have a wide range <span class="text-primary">of concrete colours</span></div>
                <a href="./assets/file/Concrete_Colour_Chart.pdf" target="_blank" class="btn p-0 rounded-0 text-white fw-500 h13"><?= renderImg("download.png","icons", "pr-3") ?>Download Concrete Colour Chart</a>
            </div>
            <div class="col-auto" data-aos="fade-left">
                <div class="row no-gutters justify-content-center pt-3 pt-md-4 pt-xl-0">
                    <div class="col-auto px-1 px-lg-2">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary rounded-0 text-black line-height-1 h9 fw-800 color-range-button">
                            Book NOw
                        </a>
                    </div>

                    <div class="col-auto px-1 px-md-2">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-block border-primary rounded-0 text-white line-height-1 h9 fw-800 color-range-button">
                            Free Onsite Quote &amp; Inspection
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-9 px-0 px-md-3 pb-3 pb-md-4 pb-xl-0">
                <div class="color-range-slider">
                    <!-- <div class="color-range-slider-content">
                        <?= renderImg("charcoal.png", "lib") ?>
                    </div>
                    <div class="color-range-slider-content">
                        <?= renderImg("jet-black.png", "lib") ?>
                    </div>
                    <div class="color-range-slider-content">
                        <?= renderImg("graphite.png", "lib") ?>
                    </div>
                    <div class="color-range-slider-content">
                        <?= renderImg("grey-mist.png", "lib") ?>
                    </div> -->
                    <div class="color-range-slider-content">
                        <?= renderImg("snow.jpg", "lib") ?>
                    </div>
                    <div class="color-range-slider-content">
                        <?= renderImg("stallion.jpg", "lib") ?>
                    </div>
                    <div class="color-range-slider-content">
                        <?= renderImg("pewter.jpg", "lib") ?>
                    </div>
                    <div class="color-range-slider-content">
                        <?= renderImg("cork.jpg", "lib") ?>
                    </div>
                    <div class="color-range-slider-content">
                        <?= renderImg("cobalt-blue.jpg", "lib") ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3">
                <div class="row no-gutters range-buttons-wrapper">
                    <!-- <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button active mb-4" drange="1">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Charcoal</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button mb-4" drange="2">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Jet Black</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button mb-4" drange="3">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Graphite</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button mb-4" drange="4">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Grey Mist</div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button active mb-4" drange="1">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Snow</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button mb-4" drange="2">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Stallion</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button mb-4" drange="3">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Pewter</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button mb-4" drange="4">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Cork</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-12 px-md-2 px-xl-0">
                        <div class="color-range-nav-button mb-4" drange="5">
                            <div class="d-flex align-items-center">
                                <div class="primary-block"></div>
                                <div class="pl-4">Cobalt Blue</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>