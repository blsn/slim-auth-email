<?php

namespace App\Middleware;

class GuestMiddleware extends Middleware {
    public function __invoke($request, $response, $next) {

        if($this->container->auth->check()) { // signed-in users will be directed 'home'
            return $response->withRedirect($this->container->router->pathFor('home')); // redirect
        }

    $response = $next($request, $response);
    return $response;
    }
}
