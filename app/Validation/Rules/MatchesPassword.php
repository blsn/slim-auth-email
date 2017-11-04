<?php

namespace App\Validation\Rules;
/*
use Respect\Validation\Rules\AbstractRule;
use App\Models\User;

class MatchesPassword extends AbstractRule 
{
    protected $password;

    public function __construct($password) { // the signed-in hashed user authenticated password
        $this->password = $password;
    }

    public function validate($input) { // the typed in non-hashed input ('password_old')
        var_dump($input); echo "<br>"; var_dump($this->password);
        die();        
    }
}
*/

use Respect\Validation\Rules\AbstractRule;
use App\Models\User;

class MatchesPassword extends AbstractRule 
{
    protected $password;

    public function __construct($password) { // the signed-in hashed user authenticated password
        $this->password = $password;
    }

    public function validate($input) { // the typed in non-hashed input ('password_old')
        return password_verify($input, $this->password); // compare the non-hashed input with the already hashed password
    }
}

