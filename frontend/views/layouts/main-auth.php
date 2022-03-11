<?php

/** @var View $this */

/** @var string $content */

use yii\helpers\Html;
use yii\web\View;

?>
<!DOCTYPE html>
<html class="no-js" lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= Html::encode($this->title) ?></title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <?php $this->registerCsrfMetaTags() ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/favicon.ico') ?>">
    <!-- Bootstrap CSS -->
    <link href="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/css/fontawesome-all.min.css') ?>" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/font/flaticon.css') ?>" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/style.css') ?>" rel="stylesheet">
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class="preloader" id="preloader">
    <div class='inner'>
        <div class='line1'></div>
        <div class='line2'></div>
        <div class='line3'></div>
    </div>
</div>
<section class="fxt-template-animation fxt-template-layout34" data-bg-image="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/img/elements/bg1.png') ?>">
    <div class="fxt-shape">
        <div class="fxt-transformX-L-50 fxt-transition-delay-1">
            <img alt="Shape" src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/img/elements/shape1.png') ?>">
        </div>
    </div>
    <div class="container">
        <?= $content ?>
    </div>
</section>

<!-- jquery-->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/js/jquery-3.5.0.min.js') ?>"></script>
<!-- Bootstrap js -->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/js/bootstrap.min.js') ?>"></script>
<!-- Imagesloaded js -->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/js/imagesloaded.pkgd.min.js') ?>"></script>
<!-- Validator js -->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/js/validator.min.js') ?>"></script>
<!-- Custom Js -->
<script src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/js/main.js') ?>"></script>

</body>
