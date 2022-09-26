<?php

namespace app\core;

class Request
{
    /******
     * Return clean uri 
     */

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path,'?');
        if($position === false){
            return $path;
        }

        return substr($path, 0 ,$position);
    }

    /******
     * Return the calling request method
     */

    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    /******
     * Check if request method is get
     */

    public function isGet()
    {
        return $this->method() === 'get';
    }

    /******
     * Check if request method is post
     */

    public function isPost()
    {
        return $this->method() === 'post';
    }

    public function getBody()
    {
        $body = [];
        
        if($this->method() === 'get'){
            foreach($_GET as $key => $value){
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if($this->method() === 'post'){
            foreach($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }
}