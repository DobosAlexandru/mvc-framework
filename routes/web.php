<?php

use app\controllers\SiteController;


/*****************************
 * Static Routes
 *****************************/

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);