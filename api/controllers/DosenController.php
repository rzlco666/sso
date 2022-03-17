<?php

namespace api\controllers;

use yii\rest\ActiveController;

class DosenController extends ActiveController
{
    public $modelClass = 'common\models\Dosen';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['rateLimiter']);
        return $behaviors;
    }
}