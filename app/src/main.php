<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="form">
    <div class="form-top-bar h7">
        high standard and high-quality work
    </div>
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-xl-11">
                <form action="./src/form.php" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="row justify-content-center align-items-center form-content">
                        <div class="col-12 col-xl-auto d-flex align-items-center py-3 booking-header">
                            <div class="px-4 px-lg-5 text-uppercase">
                                <div class="h3 fw-800 line-height-3"><span class="text-primary">Free</span> Measure<br> and quote </div>
                                <div class="h5 text-black fw-900">for all services</div>
                            </div>
                        </div>
                        <div class="col-12 col-lg pl-xl-5">
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

<?php include __DIR__ . '/footer.php'; ?>