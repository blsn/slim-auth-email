<?php

namespace App\Controllers;
/*
class HomeController 
{
    public function index($request, $response) {
        return 'Home Controller';        
    }
}
*/

/*
use Slim\Views\Twig as View; 
class HomeController 
{
    protected $view;
    public function __construct(View $view) {
        $this->view = $view;
    }
    public function index($request, $response) {
        return $this->view->render($response, 'index.twig');
    }
}
*/

/*
use Slim\Views\Twig as View;
use Monolog\Logger as Logger;

class HomeController 
{
    protected $view;
    protected $logger;
    
    public function __construct(View $view, Logger $logger) {
        $this->view = $view;
        $this->logger = $logger;        
    }

    public function index($request, $response, $args) {
        $this->logger->info("My logger is now ready");
        return $this->view->render($response, 'index.twig', $args);
    }
}
*/

/*
class HomeController extends Controller // extends Controller
{
    public function index($request, $response, $args) {
        $this->container->logger->info("My logger is now ready");
        return $this->container->view->render($response, 'index.twig', $args);
    }
}
*/

/*
class HomeController extends Controller // extends Controller, get() for '$this->view' instead '$this->container->view'
{
    public function index($request, $response, $args) {
        $this->logger->info("My logger is now ready");
        return $this->view->render($response, 'index.twig', $args);
    }
}
*/

/*
class HomeController extends Controller // test elequent
{
    public function index($request, $response, $args) {
        $user = $this->db->table('users')->find(1); // test eloquent
        var_dump($user->email);
        //die();
        $this->logger->info("My logger is now ready");
        return $this->view->render($response, 'index.twig', $args);
    }
}
*/

/*
use App\Models\User; // test elequent with class User
class HomeController extends Controller // test elequent
{
    public function index($request, $response, $args) {
        //$user = User::find(1);
        //$user = User::where('email', 'mike@abc.com');
        //var_dump($user);
        $user = User::where('email', 'mike@abc.com')->first();        
        var_dump($user->email);
        //die();        
        $this->logger->info("My logger is now ready");
        return $this->view->render($response, 'index.twig', $args);
    }
}
*/

/*
use App\Models\User; // test elequent with class User
class HomeController extends Controller // test elequent
{
    public function index($request, $response, $args) {
        User::create([
            'name'      => 'Billy',
            'email'     => 'billy@codec.com',
            'password'  => '123',
        ]);
        $this->logger->info("My logger is now ready");
        return $this->view->render($response, 'index.twig', $args);
    }
}
*/

/*
use App\Models\User; // test elequent with class User
class HomeController extends Controller // test elequent
{
    public function index($request, $response, $args) {
        $user = User::where('email', 'my@email.com')->first(); // show this user on homepage (if exist on DB) ...
        var_dump($user->email);
        $this->logger->info("My logger is now ready"); // show this log message when browser on homepage ...
        return $this->view->render($response, 'index.twig', $args);
    }
}
*/

/*
use App\Models\User; // test elequent with class User
class HomeController extends Controller // test elequent
{
    public function index($request, $response, $args) {
        $this->flash->addMessage('danger', 'Test flash message'); // test flash message (replace with 'info' for testing)
        $user = User::where('email', 'my@email.com')->first(); // show this user on homepage (if exist on DB) ...
        var_dump($user->email);
        $this->logger->info("My logger is now ready"); // show this log message when browser on homepage ...
        return $this->view->render($response, 'index.twig', $args);
    }
}
*/

use App\Models\User; // test elequent with class User
class HomeController extends Controller // test elequent
{
    public function index($request, $response, $args) {
        //$this->flash->addMessage('danger', 'Test flash message'); // test flash message (replace with 'info' for testing)
        //$user = User::find(28); // query the table by id
        /**
        * example: show this email from db on homepage, also show the name of the signed-in user 
        * $user = User::where('email', 'my@email.com')->first(); // show this user on homepage (if exist on DB) ...
        * var_dump($user->email);
        * return $this->view->render($response, 'index.twig', array('u' => $user), $args); // name in DB of user
        */
        $this->logger->info("My logger is now ready"); // show this log message when browser on homepage ...
        return $this->view->render($response, 'index.twig', $args); // name in url path        
    }
}
