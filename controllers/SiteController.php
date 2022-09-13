<?php

namespace app\controllers;

use app\core\Application;

class SiteController 
{
    public function home()
    {
        $params = [
            'name' => "Alex"
        ];
        return Application::$app->router->renderView('home',$params);
    }


    public function contact()
    {
        return 'Show contact form';
    }

    public function handleContact()
    {
        return 'Handling submitted data from controller';
    }
}