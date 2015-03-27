<?php
/**
 * Common project settings
 */

define('PP_CONFIG_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendors/autoload.php';

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
            'functions' => [
            ],
            'filters' => [
                'jencode' => 'CJSON::encode',
            ],
        ],
    ], // end of 'components'

    'params' => [
        /**
         * Paypal stuff
         *
         */
        'paypalClientId'            => 'AfkvVJgl9gtLBN_piQrWJwc7lYyqYal7RqoJ2Lxa7UR5NlKIemKP6AAdx63MGb2cQ32Bg_hsmruUcHeK',
        'paypalSecret'              => 'EGs4lYALx5vB6t6SDPDQ6RgLSqKhTqxenQREi7D8yEKHF9OfaR03WwWp9QbnCtzxOexywlTFE6u4SH2L',

        /**
         * Braintree stuf
         *
         */
        'braintreeEnv'              => 'sandbox',
        'braintreeMerchantId'       => 'hhd5hvcvhdyyqwny',
        'braintreePublicKey'        => 'wswnwnkghmrzgyqs',
        'braintreePrivateKey'       => '405b0e496af848bddad3f5c03dbdb4bb',
        'brainTreeMechantAccounts'  => [
            'THB'       => 'hq-test-thb',
            'SGD'       => 'hq-test-sgd',
            'HKD'       => 'hq-tesh-hkd'
        ]
    ]
];