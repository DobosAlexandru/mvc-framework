<?php

namespace app\core\middlewares;

abstract class BaseMiddleware
{
    /******
     * BaseMiddleware child method for middleware execution
     */

    abstract public function execute();
}