<?php

namespace app\core;

class Response 
{
    /******
     * Set response status code
     */

    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    /******
     * Redirect to page
     */

    public function redirect(string $string)
    {
        header('Location: '.$string);
    }
}