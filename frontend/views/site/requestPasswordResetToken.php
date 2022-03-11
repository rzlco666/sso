<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var PasswordResetRequestForm $model */

use frontend\models\PasswordResetRequestForm;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Reset Password SSO';
?>

<div class="row" style="white-space: nowrap;">
    <div class="col-lg-8">
        <div class="fxt-column-wrap justify-content-between">
            <div class="fxt-animated-img">
                <div class="fxt-transformX-L-50 fxt-transition-delay-10">
                    <img alt="Animated Image"
                         src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/img/figure/bg34-1.png') ?>">
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
                    <div class="fxt-switcher-description1">Masukkan alamat email yang terdaftar</div>
                </div>
            </div>
            <div class="fxt-transformX-L-50 fxt-transition-delay-7">
                <div class="fxt-qr-code">
                    <img alt="QR"
                         src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/img/elements/qr-forgot-password-34.png') ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="fxt-column-wrap justify-content-center">
            <div class="fxt-form">
                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <div class="form-group">
                    <label for="email" class="fxt-label text-black">Email</label>
                    <?= $form->field($model, 'email', [
                        'options' => ['class' => 'form-group has-feedback', 'autofocus' => true],
                        'wrapperOptions' => ['class' => 'input-group mb-3']
                    ])
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('email')]) ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Kirim', ['class' => 'fxt-btn-fill']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                <div class="fxt-switcher-description3">Kembali ke<?= Html::a('Sign In', 'login', ['class' => 'fxt-switcher-text ms-1']) ?></div>
            </div>
        </div>
    </div>
</div>
