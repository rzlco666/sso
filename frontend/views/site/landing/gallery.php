<!-- slider section -->
<section class="section app-slider bg-light" id="app">
    <!-- start container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title text-center mb-5">
                    <h6 class="mb-0 fw-bold text-primary">Galeri <i
                                class="mdi mdi-tooltip-image-outline"></i></h6>
                    <h2 class="f-40">Galeri ITS PKU</h2>
                    <p class="text-muted">Foto kegiatan dan aktifitas civitas ITS PKU Muhammadiyah Surakarta.</p>
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