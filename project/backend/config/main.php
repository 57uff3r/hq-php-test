<?php


return CMap::mergeArray(
    require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'base.php'),
        [
        'components' => [
            'db' => [
                'connectionString'      => 'mysql:host=localhost;dbname=hq',
                'emulatePrepare'        => true,
                'username'              => 'root',
                'password'              => 'r3alpass',
                'charset'               => 'utf8',
            ],
        ]
    ]);