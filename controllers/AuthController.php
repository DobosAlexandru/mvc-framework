<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;
use app\core\Response;
use app\models\LoginForm;

class AuthController extends Controller{

    public function login(Request $request, Response $response){
        $loginForm = new LoginForm;

        if($request->isPost()){
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()){
                $response->redirect('/dashboard');
                return;
            }
        }

        return $this->render('auth/login',[
            'model' => $loginForm
        ]);

    }

    public function register(Request $request){

        $user = new User;
       
        if($request->isPost()){
            
            $user->loadData($request->getBody());

            if($user->validate() && $user->save()){
                Application::$app->session->setFlash('success', 'Thanks for registering');
                return Application::$app->response->redirect('/dashboard');
            }

            return $this->render('auth/register', [
                'model' => $user
            ]);
        }
        return $this->render('auth/register', [
            'model' => $user,
        ]);
        
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

}