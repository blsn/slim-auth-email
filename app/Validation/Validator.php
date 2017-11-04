<?php

namespace App\Validation;

use Respect\Validation\Validator as Respect;

/*
class Validator 
{
    public function validate($request, array $rules) {
        echo '<pre>', var_dump($rules), '<pre>';
        die();
    }
}
*/

/*
use Respect\Validation\Exceptions\NestedValidationException; // catch the errors

class Validator {
    protected $errors;
    public function validate($request, array $rules) {
        foreach($rules as $field => $rule) { // catch the errors
            try {
                $rule->setName(ucfirst($field))->assert($request->getParam($field));
            } catch (NestedValidationException $e) {
                $this->errors[$field] = $e->getMessages();
            }
        }
        var_dump($this->errors);
        die();       
    }
}
*/

/*
use Respect\Validation\Exceptions\NestedValidationException; // catch the errors
class Validator {
    protected $errors;

    public function validate($request, array $rules) {
        foreach($rules as $field => $rule) { // catch the errors
            try {
                $rule->setName(ucfirst($field))->assert($request->getParam($field));
            } catch (NestedValidationException $e) {
                $this->errors[$field] = $e->getMessages();
            }
        }
        return $this; // return errors
    }
    Public function failed () { // check if errors array not empty
        return !empty($this->errors);
    }
}
*/

use Respect\Validation\Exceptions\NestedValidationException; // catch the errors
class Validator {
    protected $errors;

    public function validate($request, array $rules) {
        foreach($rules as $field => $rule) { // catch the errors
            try {
                $rule->setName(ucfirst($field))->assert($request->getParam($field));
            } catch (NestedValidationException $e) {
                $this->errors[$field] = $e->getMessages();
            }
        }
        $_SESSION["errors"] = $this->errors; // store errors to send to class ValidationErrorsMiddleware
        return $this; // return errors
    }
    Public function failed () { // check if errors array not empty
        return !empty($this->errors);
    }
}
