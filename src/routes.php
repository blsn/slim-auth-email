<?php

// Routes

/*
$app->get('/[{name}]', function ($request, $response, $args) {
    $this->logger->info("My logger is now ready");
    return $this->view->render($response, 'index.twig', $args);
});
*/

//$app->get('/[{name}]', 'HomeController:index');

/*
$app->get('/auth/signup', 'AuthController:getSignup')->setName('auth.signup'); // AuthController (postSignup) check $validation->failed() and returns pathFor('auth.signup') so if errors stay in '/auth/signup'
$app->post('/auth/signup', 'AuthController:postSignup');
*/

$app->get('/[{name}]', 'HomeController:index')->setName('home');

/*
$app->get('/auth/signin', 'AuthController:getSignin'); // signin
$app->post('/auth/signin', 'AuthController:postSignin')->setName('auth.signin'); // the URL of the sign-in form is '/auth/signin', on post the action redirects to pathFor('auth.signin) which is here ->setName('auth.signin'), and will instantiate the controller AuthController:postSignin
*/

/*
$app->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout'); // sign out

$app->get('/auth/password/change', 'PasswordController:getChangePassword'); // change password
$app->post('/auth/password/change', 'PasswordController:postChangePassword')->setName('auth.password.change');
*/

/*
use App\Middleware\AuthMiddleware;

$app->group('', function () { // access to this area allowed only to auth users
    $this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout'); // sign out

    $this->get('/auth/password/change', 'PasswordController:getChangePassword'); // change password
    $this->post('/auth/password/change', 'PasswordController:postChangePassword')->setName('auth.password.change');
})->add(new AuthMiddleware($container));


use App\Middleware\GuestMiddleware;

$app->group('', function () { // signed in users can't access this area
    $this->get('/auth/signup', 'AuthController:getSignup')->setName('auth.signup'); // AuthController (postSignup) check $validation->failed() and returns pathFor('auth.signup') so if errors stay in '/auth/signup'
    $this->post('/auth/signup', 'AuthController:postSignup');

    $this->get('/auth/signin', 'AuthController:getSignin'); // signin
    $this->post('/auth/signin', 'AuthController:postSignin')->setName('auth.signin'); // the URL of the sign-in form is '/auth/signin', on post the action redirects to pathFor('auth.signin) which is here ->setName('auth.signin'), and will instantiate the controller AuthController:postSignin
})->add(new GuestMiddleware($container));
*/

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

$app->group('', function () { // access to this area allowed only to auth users
    $this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout'); // sign out

    $this->get('/auth/password/change', 'PasswordController:getChangePassword'); // change password
    $this->post('/auth/password/change', 'PasswordController:postChangePassword')->setName('auth.password.change');
})->add(new AuthMiddleware($container));

$app->group('', function () { // signed in users can't access this area
    $this->get('/auth/signup', 'AuthController:getSignup')->setName('auth.signup'); // AuthController (postSignup) check $validation->failed() and returns pathFor('auth.signup') so if errors stay in '/auth/signup'
    $this->post('/auth/signup', 'AuthController:postSignup');

    $this->get('/auth/signin', 'AuthController:getSignin'); // signin
    $this->post('/auth/signin', 'AuthController:postSignin')->setName('auth.signin'); // the URL of the sign-in form is '/auth/signin', on post the action redirects to pathFor('auth.signin) which is here ->setName('auth.signin'), and will instantiate the controller AuthController:postSignin

	$this->get('/auth/confirm','AuthController:confirmEmail'); // confirm email    
})->add(new GuestMiddleware($container));
