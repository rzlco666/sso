<?php

namespace api\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class DosenController extends ActiveController
{
    public $modelClass = 'common\models\Dosen';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        unset($behaviors['rateLimiter']);
        return $behaviors;
    }
}