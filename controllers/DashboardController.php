<?php

namespace app\controllers;

use app\core\Controller;
use app\core\middlewares\AuthMiddleware;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['dashboard']));    
    }

    public function dashboard()
    {
        $this->setLayout('admin');
        return $this->render('_admin/dashboard');
    }
}