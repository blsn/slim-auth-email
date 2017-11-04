<?php

namespace App\Auth;

/*
class Auth 
{
    public function attempt($email, $password) {
        //1. grab the user by email
        //2. if !user return false
        //3. verify password for that user
        //4. set user id into session
    }
}
*/

/*
use App\Models\User; // use User class
class Auth 
{
    public function attempt($email, $password) {
        $user = User::where('email', $email)->first(); // grab the user by email (1)
        if (!$user) { // if !user return false (2)
            return false;
        }
        if (password_verify($password, $user->password)) { // verify password for that user (3)
            $_SESSION['user'] = $user->id; // set user id into session (4)
            return true;
        }
        return false;
    }
}
*/

/*
use App\Models\User;
class Auth 
{    
    //public function user() {
    //    return User::find($_SESSION['user']); // this returns the user by id
    //}
    public function user() {
        if (isset($_SESSION['user'])) {
            return User::find($_SESSION['user']);
        }
        return false;
    }

    public function check() {
        return isset($_SESSION['user']); // this is the user id we already set attempt()
    }

    public function attempt($email, $password) {
        $user = User::where('email', $email)->first(); // grab the user by email
        if (!$user) { // if !user return false
            return false;
        }
        if (password_verify($password, $user->password)) { // verify password for that user
            $_SESSION['user'] = $user->id; // set user id into session
            return true;
        }
        return false;
    }
}
*/

/*
use App\Models\User;
class Auth 
{
    public function user() { // user details user id
        if (isset($_SESSION['user'])) {
            return User::find($_SESSION['user']);
        }
        return false;
    }

    public function check() { // is user authenticated (signed in), based on session stored in attempt(), used in navbar
        return isset($_SESSION['user']);
    }

    public function attempt($email, $password) { // authenticate signed in users
        $user = User::where('email', $email)->first(); // grab the user by email
        if (!$user) { // if !user return false
            return false;
        }
        if (password_verify($password, $user->password)) { // verify password for that user
            $_SESSION['user'] = $user->id; // set user id into session
            return true;
        }
        return false;
    }

    public function logout() { // sign out
        unset($_SESSION['user']);
    }
}
*/

use App\Models\User;
class Auth 
{
    public function user() { // user details user id
        if (isset($_SESSION['user'])) {
            return User::find($_SESSION['user']);
        }
        return false;
    }

    public function check() { // is user authenticated (signed in), based on session stored in attempt(), used in navbar
        return isset($_SESSION['user']);
    }

    public function attempt($email, $password) { // authenticate signed in users
        $user = User::where('email', $email)->first(); // grab the user by email
        if (!$user) { // if !user return false
            return false;
        }
        if ($user->activ == 0) { // check if user account is active
            return false;
        }
        if (password_verify($password, $user->password)) { // verify password for that user
            $_SESSION['user'] = $user->id; // set user id into session
            return true;
        }
        return false;
    }

    public function logout() { // sign out
        unset($_SESSION['user']);
    }
}
