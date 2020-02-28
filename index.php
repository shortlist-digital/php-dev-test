<?php

require_once __DIR__ . '/vendor/autoload.php';

use BackendApp\Repository\Repository;
use BackendApp\Ads\AdsInjector;

$repo = new Repository();
$ads = new AdsInjector();

$app = new BackendApp\BackendApp($repo, $ads);
$app->start();
