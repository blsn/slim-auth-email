<?php

namespace App\Middleware;

/*
class ValidationErrorsMiddleware extends Middleware { // base middleware
    public function __invoke($request, $response, $next) { // gets called as method when the object is called
        var_dump($next);
    }
}
*/

/*
class ValidationErrorsMiddleware extends Middleware {
    public function __invoke($request, $response, $next) { 
        //return false; // test before the state change
        $response = $next($request, $response); // next middleware, this is standart for middleware
        return $response; // test after the state change
    }
}
*/

class ValidationErrorsMiddleware extends Middleware {
    public function __invoke($request, $response, $next) { 
        $this->container->view->getEnvironment()->addGlobal('errors', isset($_SESSION['errors']) ? $_SESSION['errors']: null);
        unset($_SESSION['errors']);

        $response = $next($request, $response); // next middleware, this is standart for middleware
        return $response; // test after the state change
    }
}

