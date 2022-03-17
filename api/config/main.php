<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        /*'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/main.php',
        ],*/
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-api',
            'parsers' => [
                'application/json' => 'yiiwebJsonParser',
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the api
            'name' => 'advanced-api',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                /*[
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'dosen',
                ],*/
                'GET <controller:\w+>s' => '<controller>/index',
                'GET <controller:\w+>s/<uid:\d+>' => '<controller>/view',
                'POST <controller:\w+>s' => '<controller>/create',
                'PUT,PATCH <controller:\w+>s/<uid:\d+>' => '<controller>/update',
                'DELETE <controller:\w+>s/<uid:\d+>' => '<controller>/delete',
                'OPTIONS <controller:\w+>s' => '<controller>/options',

                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',// normal
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',// module
                '/' => 'site/default',// default route
            ],
        ],
    ],
    /*'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
        ],
    ],*/
    'params' => $params,
];
