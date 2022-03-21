<?php

namespace frontend\controllers;

use common\models\Wifi;
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

                $getEmail = \Yii::$app->user->identity->email;
                $genUser = strstr($getEmail, '@', true);

                $getUser = \Yii::$app->user->identity->username;
                $sliceUser = substr($getUser,  -3);
                $randNum = random_int(10 ** (3 - 1), (10 ** 3) -1);
                $genCode = $sliceUser.$randNum;

                if (\Yii::$app->user->identity->role === 1) {
                    $model->profile = '@mahasiswa';
                } elseif (\Yii::$app->user->identity->role === 2) {
                    $model->profile = '@dosen';
                } elseif (\Yii::$app->user->identity->role === 3) {
                    $model->profile = '@staff';
                } else {
                    \Yii::$app->session->setFlash('error', 'Anda tidak memiliki hak akses untuk menambahkan data!');
                }

                $model->username = $genUser;
                $model->password = $genCode;
                $model->status = 1;
                $model->user_id = \Yii::$app->user->identity->id;
                $model->created_at = date('Y-m-d H:i:s');
                $model->created_by = \Yii::$app->user->identity->id;
                $model->updated_at = date('Y-m-d H:i:s');
                $model->updated_by = \Yii::$app->user->identity->id;

                if ($model->save()){
                    //set flash message html
                    \Yii::$app->session->setFlash('success', 'Selamat akun <b>Wi-Fi</b> berhasil dibuat.');
                }else{
                    \Yii::$app->session->setFlash('error', 'Maaf akun <b>Wi-Fi</b> gagal dibuat.');
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
}
