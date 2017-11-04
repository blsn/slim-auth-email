<?php
// DIC configuration

use Respect\Validation\Validator as v;

$container = $app->getContainer();

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// twig
/*
$container['view'] = function ($c) {
    $settings = $c->get('settings')['view'];    
    $view = new \Slim\Views\Twig($settings['template_path'], $settings['twig']);
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $c['request']->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};
*/

// auth signin
$container['auth'] = function () {
    return new \App\Auth\Auth;
};

// twig
/*
$container['view'] = function ($c) {
    $settings = $c->get('settings')['view'];    
    $view = new \Slim\Views\Twig($settings['template_path'], $settings['twig']);
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $c['request']->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    $view->getEnvironment()->addGlobal('auth', $c->auth); // attach it to view, $container['auth'] should come before
    return $view;
};
*/

/*
// twig
$container['view'] = function ($c) {
    $settings = $c->get('settings')['view'];    
    $view = new \Slim\Views\Twig($settings['template_path'], $settings['twig']);
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $c['request']->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    $view->getEnvironment()->addGlobal('auth', [ // call the methods and store the variables
        'check' => $c->auth->check(),
        'user'  => $c->auth->user()
    ]);

    return $view;
};
*/

// twig
$container['view'] = function ($c) {
    $settings = $c->get('settings')['view'];    
    $view = new \Slim\Views\Twig($settings['template_path'], $settings['twig']);
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $c['request']->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    $view->getEnvironment()->addGlobal('auth', [ // call the methods and store the variables
        'check' => $c->auth->check(),
        'user'  => $c->auth->user()
    ]);

    $view->getEnvironment()->addGlobal('flash', $c->flash);

    return $view;
};

/* test psr-4
 * $user = new \App\Models\User;
 * var_dump($user);
 * die();
 */

$container['HomeController'] = function($container) { 
    //return new App\Controllers\HomeController; // HomeController
    //return new App\Controllers\HomeController($container->view); // +twig
    //return new App\Controllers\HomeController($container->view, $container->logger); // +log
    return new App\Controllers\HomeController($container); // +Controller    
};

// password change
$container['PasswordController'] = function($container) { 
    return new App\Controllers\Auth\PasswordController($container);
};

// elequent
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

// auth controller
$container['AuthController'] = function($container) {
    return new App\Controllers\Auth\AuthController($container);
};

// validator
$container['validator'] = function($container) {
    return new App\Validation\Validator;
};  

// flash
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

// nette mail (SmtpMailer)
$container['mailer'] = function($container) {
	return new Nette\Mail\SmtpMailer($container['settings']['mailer']);
};

// middleware
$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));

// old form data
$app->add(new \App\Middleware\OldInputMidddleware($container));

// custom validation rule
v::with('App\\Validation\\Rules\\');

// csrf
$container['csrf'] = function () {
    return new \Slim\Csrf\Guard;
};

// attach this class (MUST put before the line below)
$app->add(new \App\Middleware\CsrfViewMidddleware($container));

// register csrf middleware for all routes
$app->add($container->csrf);

