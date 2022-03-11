<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var SignupForm $model */

use frontend\models\SignupForm;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Sign Up SSO';
?>

<div class="row">
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
                    <div class="fxt-switcher-description1">Jika telah memiliki akun kamu
                        dapat<?= Html::a('Sign In', 'login', ['class' => 'fxt-switcher-text ms-2']) ?></div>
                </div>
            </div>
            <div class="fxt-transformX-L-50 fxt-transition-delay-7">
                <div class="fxt-qr-code">
                    <img alt="QR"
                         src="<?= Yii::$app->urlManagerFrontend->createUrl('/auth/img/elements/qr-register-34.png') ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="fxt-column-wrap justify-content-center">
            <div class="fxt-form">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div class="form-group">
                    <?= $form->field($model, 'username', [
                        'options' => ['class' => 'form-group has-feedback', 'autofocus' => true],
                        'wrapperOptions' => ['class' => 'input-group mb-3']
                    ])
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'email', [
                        'options' => ['class' => 'form-group has-feedback'],
                        'wrapperOptions' => ['class' => 'input-group mb-3']
                    ])
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('email')]) ?>
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
                    <div class="fxt-checkbox-box">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1" class="ps-4 text-black">I agree with <a
                                    class="terms-link" href="#">Terms</a> and <a class="terms-link" href="#">Privacy Policy</a></label>
                    </div>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Sign Up', ['class' => 'fxt-btn-fill', 'name' => 'signup-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
