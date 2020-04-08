<?php
namespace src\Middlewares;

use core\Middleware;

class Auth extends Middleware {

    public function __construct($c, $a, $args) {
        parent::__construct($c, $a, $args);
    }

    public function run() {
       var_dump($this->args[] = 'oi');
    }



}