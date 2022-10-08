<?php

namespace app\core;

use app\core\db\Database;
use Exception;

class Application 
{
    /******
     * Default application layout
     */

    public string $layout = 'main';
    
    /******
     * User class property
     */

    public string $userClass;

    /******
     * Host name property
     */

    public string $hostname;
    
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
     * Database instance
     */

    public Database $db;

    /******
     * Database model user instance
     */

    public ?UserModel $user;

    /******
     * Response instance
     */

    public Response $response;

    /******
     * Session instance
     */

    public Session $session;

    /******
     * Ref to self static property
     */

    public static Application $app;

    /******
     * Controller instance
     */

    public ?Controller $controller = null;

    /******
     * View instance
     */

    public View $view;

    /******
     * App constructor
     */

    public function __construct($rootPath, array $config)
    {
        $this->userClass = $config['userClass'];
        $this->hostname = $config['hostname'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request,$this->response);
        $this->view = new View;

        $this->db = new Database($config['db']);

        $primaryValue = $this->session->get('user');

        if($primaryValue){
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
        } else {
            $this->user = null;
        }
        
    }

    /******
     * Guest user
     */

    public static function isGuest()
    {
        return !self::$app->user;
    }

    /******
     * Echo resolved route
     */

    public function run()
    {
        try{
            echo $this->router->resolve();
        } catch(Exception $e){
            $this->response->setStatusCode($e->getCode());
            echo $this->view->renderView('_front/_error', [
                'exception' => $e
            ]);
        }
    }

    public function getController()
    {
        return $this->controller;
    }

    public function setController(Controller $controller)
    {
        return $this->controller = $controller;
    }

    /******
     * Login user in application
     */

    public function login(UserModel $user)
    {
        $this->user =$user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }

    /******
     * User logout and remove it from session
     */

    public function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }
}