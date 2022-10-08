<?php

namespace app\core;

use app\core\exception\NotFoundException;
use app\core\Request;

class Router {

    /******
     * Request instance
     */
    public Request $request;

    /******
     * Response instance
     */
    public Response $response;

    /******
     * App protected routes
     */
    protected array $routes = [];

    /******
     * Router constructor
     */

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /******
     * Define the get method
     */

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /******
     * Define the post method
     */

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /******
     * Resolve routes with calling method and callback
     */

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false)
        {
            throw new NotFoundException();
        }

        if(is_string($callback))
        {
            return Application::$app->view->renderView($callback);
        }

        if(is_array($callback)){
            $controller = new $callback[0]();
            Application::$app->controller = $controller;
            $controller->action = $callback[1];

            foreach($controller->getMiddlewares() as $middleware){
                $middleware->execute();
            }

            $callback[0] = $controller;
        }

        return call_user_func($callback, $this->request, $this->response);
    }

    
}