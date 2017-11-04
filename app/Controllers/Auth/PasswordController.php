<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as v; 

/*
class PasswordController extends Controller
{
    public function getChangePassword($request, $response) { 
        return $this->view->render($response, 'auth/password/change.twig');
    }

    public function postChangePassword($request, $response) { 
        $validation = $this->validator->validate($request, [
            'password_old'  => v::noWhitespace()->notEmpty()->matchesPassword($this->auth->user()->password), // create a rule with the same name and pass: ->matchesPassword(//user)
            'password'      => v::noWhitespace()->notEmpty()
        ]);

        if($validation->failed()) { // stay on the same page
            return $response->withRedirect($this->router->pathFor('auth.password.change'));
        }

        die('change password');
    }
}
*/

/*
class PasswordController extends Controller
{
    public function getChangePassword($request, $response) { 
        return $this->view->render($response, 'auth/password/change.twig');
    }

    public function postChangePassword($request, $response) { 
        $validation = $this->validator->validate($request, [
            'password_old'  => v::noWhitespace()->notEmpty()->matchesPassword($this->auth->user()->password), // create a rule with the same name and pass: ->matchesPassword(//user)
            'password'      => v::noWhitespace()->notEmpty()
        ]);

        if($validation->failed()) { // stay on the same page
            return $response->withRedirect($this->router->pathFor('auth.password.change'));
        }

        $this->auth->user()->setPassword($request->getParam('password')); // call the method on the user model

        // flash a message
        // redirect the user
    }
}
*/

class PasswordController extends Controller
{
    public function getChangePassword($request, $response) { 
        return $this->view->render($response, 'auth/password/change.twig');
    }

    public function postChangePassword($request, $response) { 
        $validation = $this->validator->validate($request, [
            'password_old'  => v::noWhitespace()->notEmpty()->matchesPassword($this->auth->user()->password), // create a rule with the same name and pass: ->matchesPassword(//user)
            'password'      => v::noWhitespace()->notEmpty()
        ]);

        if($validation->failed()) { // stay on the same page
            return $response->withRedirect($this->router->pathFor('auth.password.change'));
        }

        $this->auth->user()->setPassword($request->getParam('password')); // call the method on the user model

        $this->flash->addMessage('info', 'Your password was changed.'); // flash a message
        return $response->withRedirect($this->router->pathFor('home')); // redirect the user
    }
}
