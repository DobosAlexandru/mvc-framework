<?php

use app\controllers\SiteController;
use app\controllers\ContactController;


/*****************************
 * Static Routes
 *****************************/

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/about', [SiteController::class, 'about']);


/*****************************
 * Contact Routes
 *****************************/
$app->router->get('/contact', [ContactController::class, 'contact']);
$app->router->post('/contact', [ContactController::class, 'contact']);