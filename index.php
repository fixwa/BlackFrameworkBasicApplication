<?php
/**
 * User: pablo <fixwah@gmail.com>
 * Date: 18/08/2017
 * Time: 03:38 PM
 */
require_once __DIR__ . '/vendor/autoload.php';

$app = new Black\Application();
$app->setAppBaseDir(__DIR__);
$app->init();