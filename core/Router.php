<?php

namespace app\core;
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
            $this->response->setStatusCode(404);
            return $this->renderView('_404');
        }

        if(is_string($callback))
        {
            return $this->renderView($callback);
        }

        if(is_array($callback)){
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }

        return call_user_func($callback, $this->request);
    }

    /******
     * Render page with layout and view
     */

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view,$params);
        return str_replace('{{ content }}', $viewContent, $layoutContent);
    }

    /******
     * Render content in view if needed
     */

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{ content }}', $viewContent, $layoutContent);
    }

    /******
     * Get layout content
     */

    protected function layoutContent()
    {
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/$layout.php"; 
        return ob_get_clean();
    }

    /******
     * Get view content
     */

    protected function renderOnlyView($view,$params)
    {
        foreach($params as $key => $value){
            $$key = $value;
        }
        
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php"; 
        return ob_get_clean();
    }
}