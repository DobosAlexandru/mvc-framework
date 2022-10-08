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
            'name' => 'Alex',
            'page' => [
                'title' => 'Home'
            ]
        ]);
    }


    public function contact(Request $request, Response $response)
    {
        $contact =  new ContactForm;

        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                $response->redirect('/contact');
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
            } else {
                $response->redirect('/contact');
                Application::$app->session->setFlash('failed', 'Something went wrong');
            }
        }
        return $this->render('_front/contact',[
            'model' => $contact
        ]);
    }
    
}