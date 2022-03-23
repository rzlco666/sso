<?php

namespace frontend\controllers;

use common\components\RouterosAPI;
use common\models\Wifi;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class WifiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

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

    public function actionIndex()
    {
        $model = new Wifi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $getEmail = Yii::$app->user->identity->email;
                $genUser = strstr($getEmail, '@', true);

                $getUser = Yii::$app->user->identity->username;
                $sliceUser = substr($getUser, -3);
                $randNum = random_int(10 ** (3 - 1), (10 ** 3) - 1);
                $genCode = $sliceUser . $randNum;

                if (Yii::$app->user->identity->role === 1) {
                    $model->profile = '@mahasiswa';
                    $SERVER = '@mahasiswa Hotspot'; //mikrotik server
                    $PROFILE = '@mahasiswa'; //mikrotik profile
                } elseif (Yii::$app->user->identity->role === 2) {
                    $model->profile = '@dosen';
                    $SERVER = '@dosen Hotspot'; //mikrotik server
                    $PROFILE = '@dosen'; //mikrotik profile
                } elseif (Yii::$app->user->identity->role === 3) {
                    $model->profile = '@staff';
                    $SERVER = '@staff Hotspot'; //mikrotik server
                    $PROFILE = '@staff'; //mikrotik profile
                } else {
                    Yii::$app->session->setFlash('error', 'Anda tidak memiliki hak akses untuk menambahkan data!');
                }

                $model->username = $genUser;
                $model->password = $genCode;
                $model->status = 1;
                $model->user_id = Yii::$app->user->identity->id;
                $model->created_at = date('Y-m-d H:i:s');
                $model->created_by = Yii::$app->user->identity->id;
                $model->updated_at = date('Y-m-d H:i:s');
                $model->updated_by = Yii::$app->user->identity->id;

                $API = new RouterosAPI();

                if ($API->connect('202.91.8.130', 'Apisso', '3%rvR:RnW}:+2fGu')) {

                    $username = "=name=";
                    $username .= $genUser;

                    $pass = "=password=";
                    $pass .= $genCode;

                    $server = "=server=";
                    $server .= $SERVER;

                    $profile = "=profile=";
                    $profile .= $PROFILE;

                    $API->write('/ip/hotspot/user/add', false);
                    $API->write($username, false);
                    $API->write($pass, false);
                    $API->write($server, false);
                    $API->write($profile);

                    //if api write success
                    if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Selamat akun <b>Wi-Fi</b> berhasil dibuat.');
                    } else {
                        Yii::$app->session->setFlash('error', 'Maaf akun <b>Wi-Fi</b> gagal dibuat.');
                    }
                    $API->disconnect();

                } else {
                    Yii::$app->session->setFlash('error', 'Maaf akun <b>Wi-Fi</b> gagal dibuat. Terjadi kesalahan pada server Mikrotik. Silahkan hubungi admin.');
                }

                return $this->redirect(['#wifi']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionTest()
    {
        $API = new RouterosAPI();
        $API->debug = true;

        if ($API->connect('202.91.8.130', 'Apisso', '3%rvR:RnW}:+2fGu')) {

            $API->write('/interface/getall');

            $READ = $API->read(false);
            $ARRAY = $API->parseResponse($READ);

            print_r($ARRAY);

            $API->disconnect();

        }

    }
}
