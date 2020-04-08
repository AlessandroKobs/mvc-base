<?php
use core\Router;

$router = new Router();


/**
 * Acrescentado a funcionalidade de Middleware, que pode ser passado como o terceiro parametro.
 * $router->get(rota, controller@action, middleware)
 */

$router->get('/', 'HomeController@index', 'Auth');

/**
 * Também permite a chamada de rota normalmente.
 */
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre','Auth');