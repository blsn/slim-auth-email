<?php

namespace App\Controllers;
/*
class Controller 
{
    protected $container;
    public function __construct($container) {
        $this->container = $container; 
    }    
}
*/

class Controller 
{
    protected $container;
    
    public function __construct($container) {
        $this->container = $container; 
    }    

    public function __get($property) { // get() magic method
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }        
    }
}
