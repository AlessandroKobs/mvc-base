<?php
namespace core;

use \core\RouterBase;
use src\Middlewares;
use src\Middlewares\Auth;

class Router extends RouterBase {
    public $routes;
    public $middleware;

    public function get($endpoint, $trigger, $middleware = null) {
        $this->middleware = $middleware;
        $this->routes['get'][$endpoint] = $trigger;
    }
    public function post($endpoint, $trigger) {
        $this->routes['post'][$endpoint] = $trigger;
    }

    public function put($endpoint, $trigger) {
        $this->routes['put'][$endpoint] = $trigger;
    }

    public function delete($endpoint, $trigger) {
        $this->routes['delete'][$endpoint] = $trigger;
    }

}