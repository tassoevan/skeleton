<?php
require __DIR__ . '/../vendor/autoload.php';

MyCompany\MyApplication\Application::boot(__DIR__);
$app = new MyCompany\MyApplication\Application();
$app->run();
