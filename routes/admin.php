<?php

use app\controllers\DashboardController;



/*****************************
 * Admin Routes
 *****************************/

$app->router->get('/dashboard',[DashboardController::class, 'dashboard']);