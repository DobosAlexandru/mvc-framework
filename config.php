<?php

use app\models\User;

$config= [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
    'hostname' => $_ENV['HOST_NAME'],
    'appName' => $_ENV['APP_NAME']
];