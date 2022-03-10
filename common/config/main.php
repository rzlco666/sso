<?php

use kartik\grid\Module;

return [
    'name' => 'SSO - ITS PKU Muhammadiyah Surakarta',
    'timeZone' => 'Asia/Jakarta',
    'modules' => [
        'gridview' => [
            'class' => Module::class
        ],
        'gridviewKrajee' => [
            'class' => Module::class
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'id-ID',
    'components' => [
        'i18n' => [
            'translations' => [
                'yii2-ajaxcrud' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2ajaxcrud/ajaxcrud/messages',
                    'sourceLanguage' => 'id',
                ],
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
