<?php

namespace App\Middleware;

class Middleware { // base middleware

    protected $container;

    public function __construct($container) {
        $this->container = $container;
    }
}