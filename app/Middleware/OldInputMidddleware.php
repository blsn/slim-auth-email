<?php

namespace App\Middleware;

class OldInputMidddleware extends Middleware {
    public function __invoke($request, $response, $next) {

        $this->container->view->getEnvironment()->addGlobal('old', isset($_SESSION['old']) ? $_SESSION['old']: null);
        $_SESSION['old'] = $request->getParams(); // save data of the submitted form

        $response = $next($request, $response);
        return $response;
    }
}
