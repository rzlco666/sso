<?php

/** @var yii\web\View $this */

$this->title = 'Wi-Fi';
?>

<style>
    span .key:hover {
        cursor: pointer;
    }

    .copy, .copied {
        transition: ease .3s;
        position: absolute;
    }

    .copied {
        width: fit-content;
    }

    .hide {
        opacity: 0;
    }

    span .key2:hover {
        cursor: pointer;
    }

    .copy2, .copied2 {
        transition: ease .3s;
        position: absolute;
    }

    .copied2 {
        width: fit-content;
    }

    .hide2 {
        opacity: 0;
    }
</style>

<!-- home section -->
<section class="home bg-light" id="home">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/baby-phone.png') ?>"
                     style="max-width: 50px;" alt="" class="img-fluid mb-4 smallphone-image">
                <h1 class="display-5 fw-bold"><?= $this->title ?></h1>
                <p class="mt-4 text-muted">Manajemen Profile Single Sign On ITS PKU Muhammadiyah Surakarta</p>
                <a href="#wifi" class="btn bg-gradiant mt-4">Explore</a>
            </div>

            <div class="col-lg-5 offset-md-1 ">
                <img src="<?= Yii::$app->urlManagerFrontend->createUrl('/landing/images/home-bg.png') ?>" alt=""
                     class="img-fluid">
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <div class="background-line"></div>
</section>
<!-- end home section -->

<!-- pricing section -->
<section class="section pricing bg-light" id="wifi">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title text-center mb-5">
                    <h6 class="mb-0 fw-bold text-primary">Wi-Fi <i
                                class="mdi mdi-wifi-settings"></i></h6>
                    <h2 class="f-40">Akun Wi-Fi</h2>
                    <p class="text-muted">Generate akun Wi-Fi untuk kamu gunakan dilingkungan ITS PKU Muhammadiyah
                        Surakarta.</p>

                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="price-item shadow-sm overflow-hidden mt-4 mt-lg-0">
                    <div class="topbar-header bg-primary py-2 text-center">
                        <?php

                        use common\models\Wifi;
                        use yii\helpers\Html;
                        use yii\widgets\ActiveForm;

                        if (Yii::$app->user->identity->role === 1) {
                            echo '<h6 class="mb-0 text-white fw-normal">Akun Wi-Fi Mahasiswa</h6>';
                        } elseif (Yii::$app->user->identity->role === 2) {
                            echo '<h6 class="mb-0 text-white fw-normal">Akun Wi-Fi Dosen</h6>';
                        } elseif (Yii::$app->user->identity->role === 3) {
                            echo '<h6 class="mb-0 text-white fw-normal">Akun Wi-Fi Staff</h6>';
                        } else {
                            echo '<h6 class="mb-0 text-white fw-normal">Kamu Tidak Memiliki Akses</h6>';
                        }
                        ?>
                    </div>

                    <div class="price-down-box p-4">
                        <?php
                        $akun = Wifi::findOne(['user_id' => Yii::$app->user->identity->id]);

                        if (!empty($akun)) :
                            ?>
                            <div class="badge bg-primary fw-normal f-14">Aktif</div>
                            <div class="price-tag mt-2">
                                <h6 class="mb-0 f-20">
                                    <i class="mdi mdi-account"></i>
                                    <span class="key"><?= $akun->username ?></span>
                                    <span class="copy hide">
                                    &nbsp;<i class="mdi mdi-content-copy"></i>
                                </span>
                                    <span class="copied hide">
                                    &nbsp;<i class="mdi mdi-check text-success"></i>
                                </span>
                                </h6>
                                <h6 class="mb-0 f-20">
                                    <i class="mdi mdi-lock"></i>
                                    <span class="key2"><?= $akun->password ?></span>
                                    <span class="copy2 hide">
                                    &nbsp;<i class="mdi mdi-content-copy"></i>
                                </span>
                                    <span class="copied2 hide">
                                    &nbsp;<i class="mdi mdi-check text-success"></i>
                                </span>
                                </h6>
                            </div>
                            <p class="text-muted mb-0 mt-2"><span class="text-danger">*</span> Klik teks untuk menyalin
                            </p>
                            <p class="text-muted mb-0">Hubungkan dengan Wi-Fi
                                <b>
                                    <?php
                                    if (Yii::$app->user->identity->role === 1) {
                                        echo '@mahasiswa';
                                    } elseif (Yii::$app->user->identity->role === 2) {
                                        echo '@dosen';
                                    } elseif (Yii::$app->user->identity->role === 3) {
                                        echo '@staff';
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </b>.
                            </p>

                            <!--<button type="button" class="btn btn-sm btn-primary mt-3" id="basicToastBtn"><i
                                        class="mdi mdi-information-variant me-2"></i>Detail Akun
                            </button>-->
                            <button type="button" class="btn btn-sm btn-primary mt-3" data-bs-toggle="modal"
                                    data-bs-target="#detailWiFi"><i
                                        class="mdi mdi-information-variant me-2"></i>Detail Akun
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="detailWiFi" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Akun Wi-Fi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="badge bg-primary fw-normal f-14">Aktif</div>
                                            <div class="price-tag mt-2">
                                                <h6 class="mb-0 f-20">
                                                    <i class="mdi mdi-account"></i>
                                                    <span class="key"><?= $akun->username ?></span>
                                                    <span class="copy hide">
                                                        &nbsp;<i class="mdi mdi-content-copy"></i>
                                                    </span>
                                                    <span class="copied hide">
                                                        &nbsp;<i class="mdi mdi-check text-success"></i>
                                                    </span>
                                                </h6>
                                                <h6 class="mb-0 f-20">
                                                    <i class="mdi mdi-lock"></i>
                                                    <span class="key2"><?= $akun->password ?></span>
                                                    <span class="copy2 hide">
                                                        &nbsp;<i class="mdi mdi-content-copy"></i>
                                                    </span>
                                                    <span class="copied2 hide">
                                                        &nbsp;<i class="mdi mdi-check text-success"></i>
                                                    </span>
                                                </h6>
                                            </div>
                                            <p class="text-muted mb-0 mt-2">Hubungkan dengan Wi-Fi
                                                <b>
                                                    <?php
                                                    if (Yii::$app->user->identity->role === 1) {
                                                        echo '@mahasiswa';
                                                    } elseif (Yii::$app->user->identity->role === 2) {
                                                        echo '@dosen';
                                                    } elseif (Yii::$app->user->identity->role === 3) {
                                                        echo '@staff';
                                                    } else {
                                                        echo '-';
                                                    }
                                                    ?>
                                                </b>.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                                Tutup
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php else : ?>
                            <div class="badge bg-primary fw-normal f-14">Belum Dibuat</div>
                            <div class="price-tag mt-2">
                                <h6 class="mb-0 f-20">
                                    <i class="mdi mdi-account"></i>
                                    <span class="key">-</span>
                                    <span class="copy hide">
                                    &nbsp;<i class="mdi mdi-content-copy"></i>
                                </span>
                                    <span class="copied hide">
                                    &nbsp;<i class="mdi mdi-check text-success"></i>
                                </span>
                                </h6>
                                <h6 class="mb-0 f-20">
                                    <i class="mdi mdi-lock"></i>
                                    <span class="key2">-</span>
                                    <span class="copy2 hide">
                                    &nbsp;<i class="mdi mdi-content-copy"></i>
                                </span>
                                    <span class="copied2 hide">
                                    &nbsp;<i class="mdi mdi-check text-success"></i>
                                </span>
                                </h6>
                            </div>
                            <p class="text-muted mb-0 mt-2"><span class="text-danger">*</span> Klik teks untuk menyalin
                            </p>
                            <p class="text-muted mb-0">Hubungkan dengan Wi-Fi
                                <b>
                                    <?php
                                    if (Yii::$app->user->identity->role === 1) {
                                        echo '@mahasiswa';
                                    } elseif (Yii::$app->user->identity->role === 2) {
                                        echo '@dosen';
                                    } elseif (Yii::$app->user->identity->role === 3) {
                                        echo '@staff';
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </b>.
                            </p>

                            <?php
                            $form = ActiveForm::begin();

                            echo $form->field($model, 'id_user')->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false);
                            echo Html::submitButton('<i class="mdi mdi-plus me-2"></i>Buat Akun', ['class' => 'btn btn-sm btn-primary mt-3']);

                            ActiveForm::end();
                            ?>

                        <?php endif; ?>

                        <?php if (Yii::$app->session->hasFlash('success')): ?>
                            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                                <div id="basicToast" class="toast show" role="alert" aria-live="assertive"
                                     aria-atomic="true" data-bs-delay="5000">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                             preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#28a745"/>
                                        </svg>
                                        <strong class="me-auto text-success">Berhasil!</strong>
                                        <small>Terbaru</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        <?= Yii::$app->session->getFlash('success') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (Yii::$app->session->hasFlash('error')): ?>
                            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                                <div id="basicToast" class="toast show" role="alert" aria-live="assertive"
                                     aria-atomic="true" data-bs-delay="5000">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                             preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#dc3545"/>
                                        </svg>
                                        <strong class="me-auto text-danger">Gagal!</strong>
                                        <small>Terbaru</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        <?= Yii::$app->session->getFlash('error') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end pricing -->

<script>
    document.querySelector("#basicToastBtn").onclick = function () {
        new bootstrap.Toast(document.querySelector('#basicToast')).show();
    }
</script>

<script>
    const key = document.querySelector('.key')
    const keyText = key.innerText
    const copy = document.querySelector('.copy')
    const copied = document.querySelector('.copied')


    // Show "copy" icon on hover with helper class.
    key.addEventListener('mouseover', () => copy.classList.remove('hide'))
    key.addEventListener('mouseleave', () => copy.classList.add('hide'))


    // Copy text when clicking on it.
    key.addEventListener('click', () => {
        // We change "copy" icon for "copied" message.
        copy.classList.add('hide')
        copied.classList.remove('hide')

        // We turn simple text into an input value temporarily, so we can use methods .select() and .execCommand() which are compatible with inputs and textareas.
        let helperInput = document.createElement('input')
        document.body.appendChild(helperInput)
        helperInput.value = keyText
        helperInput.select()
        document.execCommand('copy')
        document.body.removeChild(helperInput)

        // We remove the "copied" message after 2 seconds.
        setTimeout(() => {
            copied.classList.add('hide')
        }, 2000)

    })
</script>

<script>
    const key2 = document.querySelector('.key2')
    const keyText2 = key2.innerText
    const copy2 = document.querySelector('.copy2')
    const copied2 = document.querySelector('.copied2')


    // Show "copy" icon on hover with helper class.
    key2.addEventListener('mouseover', () => copy2.classList.remove('hide'))
    key2.addEventListener('mouseleave', () => copy2.classList.add('hide'))


    // Copy text when clicking on it.
    key2.addEventListener('click', () => {
        // We change "copy" icon for "copied" message.
        copy2.classList.add('hide')
        copied2.classList.remove('hide')

        // We turn simple text into an input value temporarily, so we can use methods .select() and .execCommand() which are compatible with inputs and textareas.
        let helperInput = document.createElement('input')
        document.body.appendChild(helperInput)
        helperInput.value = keyText2
        helperInput.select()
        document.execCommand('copy')
        document.body.removeChild(helperInput)

        // We remove the "copied" message after 2 seconds.
        setTimeout(() => {
            copied2.classList.add('hide')
        }, 2000)

    })
</script>

