<?php

namespace app\core;

class Controller {

    /******
     * Default layout
     */

    public string $layout = 'main';

    /******
     * Controller render view
     */

    public function render($view , $params =[])
    {
        return Application::$app->router->renderView($view, $params);
    }

    /******
     * Modify layout
     */

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
}