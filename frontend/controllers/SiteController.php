<?php

namespace frontend\controllers;

use common\models\Dosen;
use common\models\Mahasiswa;
use common\models\Staff;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        $this->layout = '@frontend/views/layouts/main-auth.php';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            //input date html to mysql date
            $tgl = date('Y-m-d', strtotime($model->lahir));
            // if role = 1
            if ($model->role == 1) {
                // if nim anda already exists
                if (Mahasiswa::find()->where(['nim' => $model->username])->exists()) {
                    if(Mahasiswa::find()->where(['nim' => $model->username])->andWhere(['tanggal_lahir' => $tgl])->exists()) {
                        if ($model->signup()) {
                            Yii::$app->session->setFlash('success', 'Terima kasih telah mendaftar. Silahkan check email untuk proses verifikasi.');
                            return $this->actionLogin();
                        }
                    }else{
                        Yii::$app->session->setFlash('error', 'Tanggal lahir salah.');
                        return $this->refresh();
                    }
                }else{
                    Yii::$app->session->setFlash('error', 'NIM tidak ditemukan.');
                    return $this->refresh();
                }
            }elseif ($model->role == 2) {
                // if nidn anda already exists
                if (Dosen::find()->where(['nidn' => $model->username])->exists()) {
                    if(Dosen::find()->where(['nidn' => $model->username])->andWhere(['tanggal_lahir' => $tgl])->exists()) {
                        if ($model->signup()) {
                            Yii::$app->session->setFlash('success', 'Terima kasih telah mendaftar. Silahkan check email untuk proses verifikasi.');
                            return $this->actionLogin();
                        }
                    }else{
                        Yii::$app->session->setFlash('error', 'Tanggal lahir salah.');
                        return $this->refresh();
                    }
                }else{
                    Yii::$app->session->setFlash('error', 'NIDN tidak ditemukan.');
                    return $this->refresh();
                }
            }elseif ($model->role == 3) {
                // if nidn anda already exists
                if (Staff::find()->where(['nik' => $model->username])->exists()) {
                    if(Staff::find()->where(['nik' => $model->username])->andWhere(['tanggal_lahir' => $tgl])->exists()) {
                        if ($model->signup()) {
                            Yii::$app->session->setFlash('success', 'Terima kasih telah mendaftar. Silahkan check email untuk proses verifikasi.');
                            return $this->actionLogin();
                        }
                    }else{
                        Yii::$app->session->setFlash('error', 'Tanggal lahir salah.');
                        return $this->refresh();
                    }
                }else{
                    Yii::$app->session->setFlash('error', 'NIDN tidak ditemukan.');
                    return $this->refresh();
                }
            }else{
                Yii::$app->session->setFlash('error', 'Status tidak ditemukan.');
                return $this->refresh();
            }
        }

        $this->layout = '@frontend/views/layouts/main-auth.php';

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        $this->layout = '@frontend/views/layouts/main-auth.php';

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
