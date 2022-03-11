<?php

/** @var yii\web\View $this */

$this->title = 'SSO';
?>
<!-- home section -->
<section class="home bg-light" id="home">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/baby-phone.png') ?>"
                     style="max-width: 50px;" alt="" class="img-fluid mb-4 smallphone-image">
                <h1 class="display-5 fw-bold">ITS PKU Muhammadiyah Surakarta</h1>
                <p class="mt-4 text-muted">Manajemen Profile Single Sign On ITS PKU Muhammadiyah Surakarta</p>
                <button class="btn bg-gradiant mt-4">Read More</button>
            </div>

            <div class="col-lg-5 offset-md-1 ">
                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/homebg1.svg') ?>"
                     style="max-width:90%; width:90%;" alt="" class="img-fluid">
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="background-line"></div>
</section>
<!-- end home section -->

<!-- service section -->
<section class="section service bg-light" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title text-center mb-5">
                    <h6 class="mb-0 fw-bold text-primary">What We Do?</h6>
                    <h2 class="f-40">How can help you!</h2>
                    <div class="border-phone">
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                            inventore omnis aliquid rerum alias molestias.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="service-box text-center">
                    <div class="service-icon p-4"
                         style="background-image: url(<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/service/bomb.png') ?>); background-repeat: no-repeat; background-position: center;">
                        <i class="mdi mdi-security text-gradiant f-30"></i>
                    </div>

                    <div class="service-content mt-4">
                        <a href="">
                            <h5 class="fw-bold">Fully Secured</h5>
                        </a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 pt-4 pt-lg-0">
                <div class="service-box text-center shadow">
                    <div class="service-icon p-4"
                         style="background-image: url(<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/service/bomb.png') ?>); background-repeat: no-repeat; background-position: center;">
                        <i class="mdi mdi-lightbulb-on text-gradiant f-30"></i>
                    </div>

                    <div class="service-content mt-4">
                        <a href="">
                            <h5 class="fw-bold">Creative Idea</h5>
                        </a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 pt-4 pt-lg-0">
                <div class="service-box text-center">
                    <div class="service-icon p-4"
                         style="background-image: url(<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/service/bomb.png') ?>); background-repeat: no-repeat; background-position: center;">
                        <i class="mdi mdi-google-nearby text-gradiant f-30"></i>
                    </div>

                    <div class="service-content mt-4">
                        <a href="">
                            <h5 class="fw-bold">Deasign & Brading</h5>
                        </a>
                        <p class="text-muted">Lorem ipsum dolor sit amet, adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->


<!-- start features -->
<div class="section features" id="features">
    <!-- start container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title text-center mb-5">
                    <h6 class="mb-0 fw-bold text-primary">AppTech Features</h6>
                    <h2 class="f-40">Features for our app </h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                        inventore omnis aliquid rerum alias molestias.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">


            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Top Features
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Smart Features
                        </button>
                    </li>

                </ul>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="features-item text-start text-lg-end">
                                    <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                        <i class="mdi mdi-message-alert-outline f-24"></i>
                                    </div>
                                    <div class="content mt-3">
                                        <h5>Responsive Design</h5>
                                        <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                    </div>
                                </div>

                                <div class="features-item text-start text-lg-end mt-5">
                                    <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                        <i class="mdi mdi-autorenew f-24"></i>
                                    </div>
                                    <div class="content mt-3">
                                        <h5>Cool Features</h5>
                                        <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                    </div>
                                </div>

                                <div class="features-item text-start text-lg-end mt-5">
                                    <div class="icon avatar-sm text-center ms-lg-auto rounded-circle">
                                        <i class="mdi mdi-eyedropper f-24"></i>
                                    </div>
                                    <div class="content mt-3">
                                        <h5>Lifetime Support</h5>
                                        <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/features/phone.png') ?>"
                                     alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-4">
                                <div class="features-item">
                                    <div class="icon avatar-sm text-center rounded-circle">
                                        <i class="mdi mdi-lifebuoy f-24"></i>
                                    </div>
                                    <div class="content mt-3">
                                        <h5>Stunning Design</h5>
                                        <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                    </div>
                                </div>

                                <div class="features-item mt-5">
                                    <div class="icon avatar-sm text-center rounded-circle">
                                        <i class="mdi mdi-dropbox f-24"></i>
                                    </div>
                                    <div class="content mt-3">
                                        <h5>Best PSD Pack</h5>
                                        <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                    </div>
                                </div>

                                <div class="features-item mt-5">
                                    <div class="icon avatar-sm text-center rounded-circle">
                                        <i class="mdi mdi-flask f-24"></i>
                                    </div>
                                    <div class="content mt-3">
                                        <h5>Creative Idea</h5>
                                        <p>Vivamus ac nulla ultrices laoreet neque mollis mi morbi elementum .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                         aria-labelledby="pills-profile-tab">

                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/features/phone2.png') ?>"
                                     alt="" class="img-fluid">
                            </div>

                            <div class="col-lg-6">
                                <h2 class="mb-4">Smart Features</h2>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="features-box mt-4">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                </div>
                                                <div class="heading">
                                                    <h6 class="mt-1">Fast Messaging</h6>
                                                    <p class="text-muted">Soluta velit sint, esse quis tempora
                                                        impedit corrupti in recusandae tenetur dignissimos
                                                        voluptates..</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="features-box mt-4">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                </div>
                                                <div class="heading">
                                                    <h6 class="mt-1">User Freindly</h6>
                                                    <p class="text-muted">Amet repudiandae illo quasi enim iusto
                                                        corporis ratione? Laudantium reprehenderit sint provident.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="features-box mt-4">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                </div>
                                                <div class="heading">
                                                    <h6 class="mt-1">Minimal Interface</h6>
                                                    <p class="text-muted">Repellat ad in autem, odio quos ex eum
                                                        recusandae cupiditate assumenda nihil incidunt dolorem qui
                                                        soluta.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="features-box mt-4">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <i class="mdi mdi-check-circle f-20 me-2"></i>
                                                </div>
                                                <div class="heading">
                                                    <h6 class="mt-1">Notification</h6>
                                                    <p class="text-muted">Ipsam nisi quam velit maxime corrupti ut
                                                        quos, ad eum laudantium voluptatibus, facilis numquam
                                                        repellendus.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</div>
<!-- end features -->


<!-- start testimonial -->
<section class="section bg-light testimonial" id="testimonial">
    <!-- start container -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="title">
                    <p class=" text-primary fw-bold mb-0">Client Testimonial <i
                                class="mdi mdi-cellphone-iphone"></i>
                    </p>
                    <h3>What they think of us!</h3>
                    <p class="text-muted">Morbi at erat et tortor tempor sodales non eu lacus Donec at gravida nunc
                        vitae
                        volutpat. Morbi in sem quis
                        dui placerat ornare.</p>
                    <button class="btn bg-gradiant">Read More Testimonial <i
                                class="mdi mdi-arrow-right"></i></button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testi-slider" id="testi-slider">
                    <div class="item">
                        <div class="testi-box position-relative overflow-hidden">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/img-1.png') ?>"
                                         alt="" class="img-fluid">
                                </div>
                                <div class="col-md-7">
                                    <div class="p-4">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar">
                                                    <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/user/img-1.png') ?>"
                                                         alt=""
                                                         class="img-fluid rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                </p>
                                                <div class="date">
                                                    <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <h5 class="fw-bold">Bulid The App That Everyone Love.</h5>
                                            <p class="text-muted f-14">Start working with Styza that can provide
                                                everything you need to generate awareness, drive traffic, connect.
                                            </p>
                                            <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                Follow
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="back-image position-absolute end-0 bottom-0">
                                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/rating-image.png') ?>' ?>"
                                     alt="" class="img-fluid">
                            </div>

                        </div>
                    </div>
                    <!-- slider item -->

                    <div class="item">
                        <div class="testi-box position-relative overflow-hidden">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/img-2.png') ?>"
                                         alt="" class="img-fluid">
                                </div>
                                <div class="col-md-7">
                                    <div class="p-4">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar">
                                                    <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/user/img-2.png') ?>"
                                                         alt=""
                                                         class="img-fluid rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <p class="f-14 mb-0 text-dark fw-bold"><span
                                                            class="text-muted fw-normal">Review By </span> Freanki Fabel
                                                </p>
                                                <div class="date">
                                                    <p class="text-muted mb-0 f-14">28 jan, 2021 <span>10:25
                                                                AM</span></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <h5 class="fw-bold">Easy and prefect solution</h5>
                                            <p class="text-muted f-14">Start working with Styza that can provide
                                                everything you need to generate awareness, drive traffic, connect.
                                            </p>
                                            <button class="btn btn-sm bg-gradiant"><i
                                                        class="mdi mdi-plus f-16 align-middle"></i>
                                                Follow
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="back-image position-absolute end-0 bottom-0">
                                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/rating-image.png') ?>"
                                     alt="" class="img-fluid">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end testimonial -->

<!-- slider section -->
<section class="section app-slider" id="app">
    <!-- start container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title text-center mb-5">
                    <h6 class="mb-0 fw-bold text-primary">App Screen!</h6>
                    <h2 class="f-40">Show our App Screenshots!</h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br>
                        inventore omnis aliquid rerum alias molestias.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container">
                    <div class="fream-phone ">
                        <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/phone-fream.png') ?>"
                             alt="" class="img-fluid">
                    </div>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide border-radius">
                            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/ss/s-1.png') ?>"
                                 alt="" class="img-fluid">
                        </div>
                        <div class="swiper-slide border-radius">
                            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/ss/s-2.png') ?>"
                                 alt="" class="img-fluid">
                        </div>
                        <div class="swiper-slide border-radius">
                            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/ss/s-3.png') ?>"
                                 alt="" class="img-fluid">
                        </div>
                        <div class="swiper-slide border-radius">
                            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/ss/s-4.png') ?>"
                                 alt="" class="img-fluid">
                        </div>
                        <div class="swiper-slide border-radius">
                            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/ss/s-5.png') ?>"
                                 alt="" class="img-fluid">
                        </div>
                        <div class="swiper-slide border-radius">
                            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/testi/ss/s-6.png') ?>"
                                 alt="" class="img-fluid">
                        </div>
                    </div>

                    <!-- navigation buttons -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
</section>
<!-- end section -->

<!-- cta section -->
<section class="section cta" id="cta">
    <div class="bg-overlay-gradiant"></div>
    <!-- start container -->
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h1 class="display-4 text-white">Build Your ideal workspace today.</h1>
                    <p class="text-white-50 mt-3 f-18">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Iure distinctio vero facilis numquam sapiente! Eaque inventore eveniet repellendus quod
                        maiores nulla.</p>
                    <div class="d-flex mt-4 ">
                        <div class="app-store">
                            <a href=""><img
                                        src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/img-appstore.png') ?>"
                                        alt="" class="img-fluid"></a>
                        </div>
                        <div class="googleplay">
                            <a href=""><img
                                        src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/img-googleplay.png') ?>"
                                        alt="" class="img-fluid ms-3"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cta-phone-image">
                    <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/cta-bg.png') ?>" alt=""
                         class=" img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end section -->


<!-- contact section -->
<section class="section contact overflow-hidden" id="contact">
    <!-- start container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title text-center mb-5">
                    <h6 class="mb-0 fw-bold text-primary">Contact Us</h6>
                    <h2 class="f-40">Get In Touch!</h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos <br>
                        inventore omnis aliquid rerum alias molestias.</p>

                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-box">
                    <div class="mb-4">
                        <h4 class=" fw-semibold mb-1">Need Support !</h4>
                        <p class="text-muted">Contact us for a quote , help to join the them.</p>
                    </div>

                    <div class="custom-form mt-4 ">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg" style="opacity: 1;">
                                <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                            </p>

                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control contact-form"
                                               placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="email" id="email" type="email"
                                               class="form-control contact-form" placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control contact-form" id="subject"
                                               placeholder="Your Subject..">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4"
                                                      class="form-control contact-form h-auto"
                                                      placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-12 d-grid">
                                    <input type="submit" id="submit" name="send"
                                           class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class="col-lg-7">
                <div class="m-5">
                    <div class="position-relative">
                        <div class="contact-map">
                            <iframe
                                    src="https://maps.google.com/maps?q=its%20pku&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                    width="550" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                        </div>
                        <div class="map-shape"></div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-md-4">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <i class="mdi mdi-google-maps f-50 text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1">Alamat</h5>
                        <p class="f-14 mb-0 text-muted">Tulang Bawang No. 26 Kadipiro Banjarsari Kota Surakarta</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center mt-4 mt-lg-0">
                    <div class="flex-shrink-0">
                        <i class="mdi mdi-email f-50 text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1">Email</h5>
                        <p class="f-14 mb-0 text-muted">info@itspku.ac.id</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center mt-4 mt-lg-0">
                    <div class="flex-shrink-0">
                        <i class="mdi mdi-phone f-50 text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1">Phone</h5>
                        <p class="f-14 mb-0 text-muted">(0271) 734955</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end section -->
