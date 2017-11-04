<?php

namespace App\Middleware;

/*
class AuthMiddleware extends Middleware {
    public function __invoke($request, $response, $next) {

        // check if the user is not signed in
        // flash a mesage
        // redirect

    $response = $next($request, $response);
    return $response;
    }
}
*/

class AuthMiddleware extends Middleware {
    public function __invoke($request, $response, $next) {

        if(!$this->container->auth->check()) { // check if the user is not signed in
            $this->container->flash->addMessage('danger', 'Please sign in before doing that.'); // flash a mesage
            return $response->withRedirect($this->container->router->pathFor('auth.signin')); // redirect
        }

    $response = $next($request, $response);
    return $response;
    }
}
