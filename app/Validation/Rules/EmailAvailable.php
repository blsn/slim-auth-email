<?php

namespace App\Validation\Rules;

use Respect\Validation\Rules\AbstractRule;
use App\Models\User;

/*
class EmailAvailable extends AbstractRule 
{
    public function validate($input) {
        var_dump($input);
        die();
    } 
}
*/

/*
class EmailAvailable extends AbstractRule 
{
    public function validate($input) {
        return false; // this test will return a false to AuthController
    } 
}
*/

class EmailAvailable extends AbstractRule 
{
    public function validate($input) {
        return User::where('email', $input)->count() === 0; // validate for signup on with existing email 
    }
}

