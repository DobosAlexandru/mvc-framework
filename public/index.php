<?php

use app\core\Application;


require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require_once '../config.php';

$app = new Application(dirname(__DIR__), $config);


include_once '../routes/route.php';



// Run the app

$app->run();