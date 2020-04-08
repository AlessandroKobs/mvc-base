<?php 


namespace core;


class Middleware { 

    /**
     * Recebe o Controller da requisição atual
     */
    protected $controller;

    /**
     * Recebe a action da requisição atual
     */

    protected $action;
    /**
     * Recebe os argumentos da requisição.
     */
    protected $args;


    public function __construct($controller, $action, $args, $next = null) {
        $this->controller = $controller;
        $this->action = $action;
        $this->args = $args;
    }
    public function next() {
        return true;
    }
    public function stop() {
        return false;
    }
    public function getController() {
        return $this->controller;
    }
    public function getAction() {
        return $this->action;
    }
    public function getArgs() {
        return $this->args;
    }
}