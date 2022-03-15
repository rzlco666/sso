<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var LoginForm $model */

use common\models\LoginForm;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Sign In SSO';
?>

<div class="row">
    <div class="col-lg-8">
        <div class="fxt-column-wrap justify-content-between">
            <div class="fxt-animated-img">
                <div class="fxt-transformX-L-50 fxt-transition-delay-10">
                    <img alt="Animated Image"
                         src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/img/figure/bg-login.png') ?>">
                </div>
            </div>
            <div class="fxt-transformX-L-50 fxt-transition-delay-3">
                <a class="fxt-logo" href="<?= Url::home() ?>"><img alt="Logo"
                                                                                src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/logo-dark.png') ?>"
                                                                                style="max-width: 168px;"></a>
            </div>
            <div class="fxt-transformX-L-50 fxt-transition-delay-5">
                <div class="fxt-middle-content">
                    <h1 class="fxt-main-title"><?= Html::encode($this->title) ?></h1>
                    <div class="fxt-switcher-description1">Jika belum memiliki akun kamu
                        dapat<?= Html::a('Sign Up', 'signup', ['class' => 'fxt-switcher-text ms-2']) ?></div>
                </div>
            </div>
            <div class="fxt-transformX-L-50 fxt-transition-delay-7">
                <div class="fxt-qr-code">
                    <img alt="QR"
                         src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/img/elements/qr-login-34.png') ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="fxt-column-wrap justify-content-center">
            <div class="fxt-form">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="form-group">
                    <?php if (Yii::$app->session->hasFlash('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> <?= Yii::$app->session->getFlash('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <?php if (Yii::$app->session->hasFlash('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal!</strong> <?= Yii::$app->session->getFlash('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'username', [
                        'options' => ['class' => 'form-group has-feedback'],
                        'wrapperOptions' => ['class' => 'input-group mb-3']
                    ])
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password', [
                        'options' => ['class' => 'form-group has-feedback', 'id' => 'password'],
                        'wrapperOptions' => ['class' => 'input-group mb-3']
                    ])
                        ->label(false)
                        ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
                </div>
                <div class="form-group">
                    <div class="fxt-switcher-description2 text-right">
                        <?= Html::a('Reset Password', 'request-password-reset', ['class' => 'fxt-switcher-text']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Sign In', ['class' => 'fxt-btn-fill', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="fxt-style-line">
                <span>Atau sign in menggunakan</span>
            </div>
            <ul class="fxt-socials">
                <li class="fxt-google">
                    <a href="#" title="Google"><i class="fab fa-google"></i></a>
                </li>
                <li class="fxt-apple">
                    <a href="#" title="apple"><i class="fab fa-apple"></i></a>
                </li>
                <li class="fxt-facebook">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--<div class="site-login">
    <h1><? /*= Html::encode($this->title) */ ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'login-form']); */ ?>

                <? /*= $form->field($model, 'username')->textInput(['autofocus' => true]) */ ?>

                <? /*= $form->field($model, 'password')->passwordInput() */ ?>

                <? /*= $form->field($model, 'rememberMe')->checkbox() */ ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <? /*= Html::a('reset it', ['site/request-password-reset']) */ ?>.
                    <br>
                    Need new verification email? <? /*= Html::a('Resend', ['site/resend-verification-email']) */ ?>
                </div>

                <div class="form-group">
                    <? /*= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) */ ?>
                </div>

            <?php /*ActiveForm::end(); */ ?>
        </div>
    </div>
</div>-->
