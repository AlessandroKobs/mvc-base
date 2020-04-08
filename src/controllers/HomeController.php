<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {


    public function index() {
       $ar['result'] = ['Hello' => 'World'];
       $this->json($ar, 401);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}