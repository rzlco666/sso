<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */

/** @var Exception $exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '404 - Error';
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
                <h1 class="display-5 fw-bold">Error - 404</h1>
                <p class="mt-4 text-muted"><?= nl2br(Html::encode($message)) ?></p>
                <a href="<?= Url::home() ?>" class="btn bg-gradiant mt-4">Halaman Utama</a>
            </div>

            <div class="col-lg-5 offset-md-1 ">
                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/home-error.png') ?>" alt=""
                     class="img-fluid">
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="background-line"></div>
</section>
<!-- end home section -->
