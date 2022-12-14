<?php

use app\controllers\AuthController;


/*****************************
 * Auth Routes
 *****************************/


$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout',[AuthController::class, 'logout']);
