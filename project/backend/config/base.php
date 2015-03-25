<?php
/**
 * Common project settings
 */

date_default_timezone_set('UTC');

return [
    'basePath'  => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'      => 'Yii Blog Demo',

    // preloaded components
    'preload'   => ['log'],

    // autoloading models and components
    'import'    => [
        'application.models.*',
        'application.components.*',
        'application.extensions.*'
    ],

    'defaultController' => 'site',

    // application components
    'components' => [
        'user'=> [
            'allowAutoLogin' => true,
        ],
        'db' => [
            'connectionString'      => 'mysql:host=localhost;dbname=blog',
            'emulatePrepare'        => true,
            'username'              => 'root',
            'password'              => '',
            'charset'               => 'utf8',
        ],
        'errorHandler'      =>array(
            'errorAction' => 'site/error',
        ),
        'urlManager'=> [
            'urlFormat' => 'path',
            'rules'     => [
                'post/<id:\d+>/<title:.*?>'     => 'post/view',
                'posts/<tag:.*?>'               => 'post/index',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
        'log' => [
            'class'  => 'CLogRouter',
            'routes' => [
                [
                    'class'   => 'CFileLogRoute',
                    'levels'  => 'error, warning',
                ],
                // [
                //     'class'=>'CWebLogRoute',
                // ],
            ],
        ],
        // image component
        'image' => [
            'class'  => 'application.extensions.image.CImageComponent',
            'driver' => 'ImageMagick',
        ],

        /**
         * Twig renderer
         */
        'viewRenderer' => [
            'class'         => 'ext.TwigRenderer.ETwigViewRenderer',
            'twigPathAlias' => 'application.vendors.Twig',

            // All parameters below are optional, change them to your needs
            'fileExtension' => '.twig',
            'options' => [
                'autoescape' => true,
            ],
            'globals' => [
                'html' => 'CHtml'
            ],
            'functions' => require(dirname(__FILE__).'/twigfunctions.php'),
            'filters' => [
                'jencode' => 'CJSON::encode',
            ],
        ],
    ], // end of 'components'

    'params' => require(dirname(__FILE__).'/params.php'),
];