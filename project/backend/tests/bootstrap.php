<?php
    $root = dirname(dirname(dirname(__FILE__)));

    $yiit = dirname($root) . '/yii/framework/yiit.php';
    var_dump($yiit);
    $config = $root .'/backend/config/main.php';

    require_once($yiit);
    //require_once(dirname(__FILE__) . '/WebTestCase.php');

    Yii::createWebApplication($config);
