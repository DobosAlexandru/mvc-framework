<?php

namespace app\core;

class View
{
    /******
     * Default meta
     */

    public string $title = 'MVC Framework';
    public string $meta_description = '';
    public string $og_title = '';
    public string $og_description = '';
    

    /******
     * Render page with layout and view
     */

    public function renderView($view, $params = [])
    {
        $viewContent = $this->renderOnlyView($view,$params);
        $layoutContent = $this->layoutContent();
        return str_replace('{{ content }}', $viewContent, $layoutContent);
    }

    /******
     * Render content in view if needed
     */

    protected function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{ content }}', $viewContent, $layoutContent);
    }

    /******
     * Get layout content
     */

    protected function layoutContent()
    {
        $layout = Application::$app->layout;

        if(Application::$app->controller){
            $layout = Application::$app->controller->layout;
        }
        
        ob_start();
        include_once Application::$ROOT_DIR."/resources/views/layouts/$layout.php"; 
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
        include_once Application::$ROOT_DIR."/resources/views/$view.php"; 
        return ob_get_clean();
    }

    /******
     * Include files from resources directory
     */

    public function include_file($path_to_file)
    {
        include Application::$ROOT_DIR.'/resources/views/'.$path_to_file.'.php';
    }

    /******
     * Returns assets from public directory
     */

    public function assets($path)
    {
        echo 'http://'.Application::$app->hostname.'/'.$path;
    }

    public function requestIs($request)
    {
        return $_SERVER['REQUEST_URI'] == $request ? true : false;
    }
}