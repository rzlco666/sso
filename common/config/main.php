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
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
