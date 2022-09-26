<?php

namespace app\core;

class Application 
{
    /******
     * App root directory
     */

    public static string $ROOT_DIR;

    /******
     * Router instance
     */

    public Router $router;

    /******
     * Request instance
     */

    public Request $request;

    /******
     * Response instance
     */

    public Response $response;

    /******
     * Ref to self static property
     */

    public static Application $app;

    /******
     * Controller instance
     */

    public Controller $controller;

    /******
     * App constructor
     */

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request,$this->response);
    }

    /******
     * Echo resolved route
     */

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController(Controller $controller)
    {
        return $this->controller = $controller;
    }
}