<?php

namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
    /******
     * Actions array property
     */

    public array $actions = [];

    /******
     * Auth Middleware class constructor
     */

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    /******
     * Execute middleware if middleware is registered in actions array or actions is empty
     */

    public function execute()
    {
        if(Application::isGuest()){
            if(empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)){
                throw new ForbiddenException();
            }
        }
    }
}