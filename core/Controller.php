<?php

namespace app\core;

use app\core\middlewares\BaseMiddleware;

class Controller {

    /******
     * Default layout
     */

    public string $layout = 'main';

    public string $action = '';
    
    protected array $middlewares = [];

    /******
     * Controller render view
     */

    public function render($view , $params =[])
    {
        return Application::$app->view->renderView($view, $params);
    }

    /******
     * Modify layout
     */

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}