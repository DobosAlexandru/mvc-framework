<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function home()
    {
        return $this->render('_front/home',[
            'name' => 'Alex Doboș',
        ]);
    }

    public function about()
    {
        return $this->render('_front/about');
    }
    
}