<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

/*
class AuthController extends Controller 
{
    public function getSignup($request, $response) { // render the view
        return $this->view->render($response, 'auth/signup.twig');
    }
}
*/

/*
class AuthController extends Controller 
{
    public function getSignup($request, $response) { // render the view
        return $this->view->render($response, 'auth/signup.twig');
    }
    public function postSignup($request, $response) { // submit the form
        var_dump($request->getParams());
    }    
}
*/

/*
use App\Models\User; // test elequent with class User
class AuthController extends Controller
{
    public function getSignup($request, $response) { // render the view
        return $this->view->render($response, 'auth/signup.twig');
    }
    public function postSignup($request, $response) { // submit the form
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            //'password'  => $request->getParam('password')
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        //return $this->view->render($response, 'index.twig'); // redirect to home page
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }    
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; // use Validator class
class AuthController extends Controller
{
    public function getSignup($request, $response) { // render the view
        return $this->view->render($response, 'auth/signup.twig');
    }
    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty(),
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }    
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; // use Validator class
class AuthController extends Controller
{
    public function getSignup($request, $response) { // render the view
        return $this->view->render($response, 'auth/signup.twig');
    }
    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email(), // the 3rd checks if email is valid
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }    
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; // use Validator class
class AuthController extends Controller
{
    public function getSignup($request, $response) { // render the view
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }
}
*/

/* test csrf
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        var_dump($this->csrf->getTokenNameKey()); // test csrf
        var_dump($this->csrf->getTokenValueKey());
        var_dump($request->getAttribute('csrf_name')); // $nameKey
        var_dump($request->getAttribute('csrf_value')); // $valueKey
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) { 
        return 'Authenticated postSignin';
    }      
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt(
            $request->getParam('email'),
            $request->getParam('password')
        );
        var_dump($auth);
    }      
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) {
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }      
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);

        $this->auth->attempt($user->email, $request->getParam('password')); // automaticly sign-in when user sign-up
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) {
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }      
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);

        $this->auth->attempt($user->email, $request->getParam('password')); // automaticly sign-in when user sign-up
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) {
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }

    public function getSignOut($request, $response) { // sign-out
        // sign out
        // redirect
    }    
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);

        $this->auth->attempt($user->email, $request->getParam('password')); // automaticly sign-in when user sign-up
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) {
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }

    public function getSignOut($request, $response) { // sign-out
        $this->auth->logout(); // logout
        return $response->withRedirect($this->router->pathFor('home')); // redirect to homepage
    }    
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);

        $this->flash->addMessage('info', 'You have been signed up!'); // add flash message when sign-up

        $this->auth->attempt($user->email, $request->getParam('password')); // automaticly sign-in when user sign-up
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) { // if auth failed
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }

    public function getSignOut($request, $response) { // sign-out
        $this->auth->logout(); // logout
        return $response->withRedirect($this->router->pathFor('home')); // redirect to homepage
    }    
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v; 
class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);    
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }
        $user = User::create([ // form creates a user in DB
            'name'      => $request->getParam('name'),
            'email'     => $request->getParam('email'),
            'password'  => password_hash($request->getParam('password'), PASSWORD_DEFAULT) // hash
        ]);

        $this->flash->addMessage('info', 'You have been signed up!'); // add flash message when sign-up

        $this->auth->attempt($user->email, $request->getParam('password')); // automaticly sign-in when user sign-up
        return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) { // if auth failed
            $this->flash->addMessage('danger', 'Could not sign you in with those details.'); // flash a message when failed sign-in        
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }

    public function getSignOut($request, $response) { // sign-out
        $this->auth->logout(); // logout
        return $response->withRedirect($this->router->pathFor('home')); // redirect to homepage
    }    
}
*/

/*
use App\Models\User; // use User class
use Respect\Validation\Validator as v;
use Nette\Mail\Message;

class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);  
          
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }

        $activCode = md5('yourSalt' . date('Ymdhis')); // generate a activation code	
        $user = User::create([ // form creates a user in DB
            'email' => $request->getParam('email'),
            'name' => $request->getParam('name'),
            'password' => password_hash($request->getParam('password'),PASSWORD_DEFAULT), // hash
            'activ_code' => $activCode // activCode
        ]);
        
        $mail = new Message; // the email message
        $mail->setFrom('noreply@gmail.com')
            ->addTo($request->getParam('email'))
            ->setSubject('Plaease confirm your email')
            ->setHTMLBody("Hello, to confirm this Email click this URL: <br />
            <a target='_blank' href='" . $this->container->settings['baseUrl'] . "auth/confirm?code=" . $activCode ."'>
            " . $this->container->settings['baseUrl'] . "auth/confirm?code=" . $activCode . "</a>");

        try { // send email confirmation
            $this->mailer->send($mail);
            $this->flash->addMessage('info','Please confirm your email. We send a Email with activate Code.');
            return $response->withRedirect($this->router->pathFor('home'));
        } catch (\Nette\Mail\SmtpException $e) {
            $this->flash->addMessage('error', 'Email could not be sent: ' . $e->getMessage());
            return $response->withRedirect($this->router->pathFor('auth.signup'));
        }

        //- replaced with above ... we don't need automaticly sign-in anymore -/
        //$this->flash->addMessage('info', 'You have been signed up!'); // add flash message when sign-up
        //$this->auth->attempt($user->email, $request->getParam('password')); // automaticly sign-in when user sign-up
        //return $response->withRedirect($this->router->pathFor('home')); // ->setName('home') added in 'routes.php'        
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) { // if auth failed
            $this->flash->addMessage('danger', 'Could not sign you in with those details.'); // flash a message when failed sign-in        
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }

    public function getSignOut($request, $response) { // sign-out
        $this->auth->logout(); // logout
        return $response->withRedirect($this->router->pathFor('home')); // redirect to homepage
    }    
}
*/

use App\Models\User; // use User class
use Respect\Validation\Validator as v;
use Nette\Mail\Message;

class AuthController extends Controller
{
    public function getSignup($request, $response) { 
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignup($request, $response) { // submit the form
        $validation = $this->validator->validate($request, [ // validator
            'email'     => v::noWhitespace()->notEmpty()->email()->emailAvailable(), // 4th is a custom validation rule (email duplicate)
            'name'      => v::notEmpty()->alpha(),
            'password'  => v::noWhitespace()->notEmpty(),
        ]);  
          
        if ($validation->failed()) { // call failed() to check if errors  
            return $response->withRedirect($this->router->pathFor('auth.signup')); // if errors, stay on the same page
        }

        $activCode = md5('yourSalt' . date('Ymdhis')); // generate a activation code	
        $user = User::create([ // form creates a user in DB
            'email' => $request->getParam('email'),
            'name' => $request->getParam('name'),
            'password' => password_hash($request->getParam('password'),PASSWORD_DEFAULT), // hash
            'activ_code' => $activCode // activCode
        ]);
        
        $mail = new Message; // the email message
        $mail->setFrom('noreply@gmail.com')
            ->addTo($request->getParam('email'))
            ->setSubject('Plaease confirm your email')
            ->setHTMLBody("Hello, to confirm this Email click this URL: <br />
            <a target='_blank' href='" . $this->container->settings['baseUrl'] . "auth/confirm?code=" . $activCode ."'>
            " . $this->container->settings['baseUrl'] . "auth/confirm?code=" . $activCode . "</a>");

        try { // send email confirmation
            $this->mailer->send($mail);
            $this->flash->addMessage('info','Please confirm your email. We send a Email with activate Code.');
            return $response->withRedirect($this->router->pathFor('home'));
        } catch (\Nette\Mail\SmtpException $e) {
            $this->flash->addMessage('error', 'Email could not be sent: ' . $e->getMessage());
            return $response->withRedirect($this->router->pathFor('auth.signup'));
        }
    }

    public function getSignin($request, $response) { 
        return $this->view->render($response, 'auth/signin.twig');
    }   

    public function postSignin($request, $response) {
        $auth = $this->auth->attempt( // authenticate signed in users
            $request->getParam('email'),
            $request->getParam('password')
        );
        if (!$auth) { // if auth failed
            $this->flash->addMessage('danger', 'Could not sign you in with those details.'); // flash a message when failed sign-in        
            return $response->withRedirect($this->router->pathFor('auth.signin'));
        }
        return $response->withRedirect($this->router->pathFor('home'));
    }

    public function getSignOut($request, $response) { // sign-out
        $this->auth->logout(); // logout
        return $response->withRedirect($this->router->pathFor('home')); // redirect to homepage
    }

    public function confirmEmail($request,$response) {	// confirm email	
        if (!$request->getParam('code')) {
            return $response->withRedirect($this->router->pathFor('home'));
        } 

        $user = User::where('activ_code', $request->getParam('code'))->first();
        $user->activ = 1;
        $user->save();
        
        $this->flash->addMessage('info','Congratulation! Your email is confimed. You can sing on now.');

        return $this->view->render($response,'auth/signin.twig');
    }
}
