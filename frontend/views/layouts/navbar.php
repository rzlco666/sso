<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;

?>
<!-- START  NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
    <div class="container-fluid">

        <!-- LOGO -->
        <a class="navbar-brand logo text-uppercase" href="<?= Url::home() ?>">
            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/logo-light.png') ?>"
                 class="logo-light" alt="" height="30">
            <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/logo-dark.png') ?>"
                 class="logo-dark" alt="" height="30">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#app">Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <?php if (Yii::$app->user->isGuest): ?>
            <div class="ms-auto">
                <?= Html::a('<i class="uil uil-signin"></i> Sign In', ['/site/login'], ['class' => 'btn bg-gradiant']) ?>
            </div>
            <?php else: ?>
            <div class="ms-auto">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="uil uil-user"></i> <?= Yii::$app->user->identity->username ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?= Html::beginForm(['/site/logout'], 'post') ?>
                        <li>
                            <?= Html::submitButton(
                                'Logout',
                                ['class' => 'dropdown-item']
                            ) ?>
                        </li>
                        <?= Html::endForm() ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->