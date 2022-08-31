<?php 

use mywallet\Router;
use mywallet\controllers\MainController;

require_once __DIR__. '/../vendor/autoload.php';

$router = new Router();

$router->get('/', [MainController::class, 'index']);

$router->resolve();


