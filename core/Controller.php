<?php

namespace app\core;

use app\core\middlewares\BaseMiddleware;

class Controller {

    /******
     * Default layout
     */

    public string $layout = 'main';

    /******
     * Controller action
     */

    public string $action = '';
    
    /******
     * Controller middlewares
     */

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

    /******
     * Register middleware by adding it to middleware array
     */

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /******
     * Get all middlewares
     */

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}