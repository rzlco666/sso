<?php

/** @var View $this */

/** @var string $content */

use yii\helpers\Html;
use yii\web\View;

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="shortcut icon" href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/favicon.ico') ?>">
    <title><?= Html::encode($this->title) ?></title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/css/bootstrap.min.css') ?>"
          type="text/css" id="bootstrap-style"/>
    <!-- Material Icon Css -->
    <link rel="stylesheet"
          href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/css/materialdesignicons.min.css') ?>"
          type="text/css"/>
    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/css/tiny-slider.css') ?>"
          type="text/css"/>
    <link rel="stylesheet" href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/css/swiper.min.css') ?>"
          type="text/css"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/css/style.min.css') ?>"
          type="text/css"/>
    <!-- colors -->
    <link href="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/css/colors/default.css') ?>" rel="stylesheet"
          type="text/css" id="color-opt"/>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

<!-- light-dark mode button -->
<a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
    <i class="uil uil-brightness mode-dark mx-auto"></i>
    <i class="uil uil-moon bx-spin mode-light"></i>
</a>

<!-- Navbar -->
<?= $this->render('navbar') ?>
<!-- /.Navbar -->

<!-- Content Wrapper. Contains page content -->
<?= $this->render('content', ['content' => $content]) ?>
<!-- /.content-wrapper -->

<!-- Footer -->
<?= $this->render('footer') ?>
<!-- /.footer -->

<!-- Script -->
<?= $this->render('script') ?>
<!-- /.script -->

</body>
</html>
