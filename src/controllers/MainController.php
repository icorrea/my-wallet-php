<?php

namespace mywallet\controllers;
use mywallet\Router;

class MainController{
    
    public function index(Router $router){
       return $router->render('Main/index');
    }

}