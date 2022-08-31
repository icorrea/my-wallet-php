<?php

namespace mywallet;

class Router
{
    
    public array $getRoutes = [];

    public function get($url,$fn){
        $this->getRoutes[$url] = $fn;
    }

    public function resolve(){
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $currentUrl = $_SERVER['REQUEST_URI'] ?? null;

        if($method === 'get'){
            $fn = $this->getRoutes[$currentUrl];
        }

        if($fn){
            call_user_func($fn,$this);
        } else {
            echo '404.Not Found';
        }
    }

    public function render($view){
        $layout = "_layout";
        $renderBody = __DIR__ . '/views/' . $view.'.php';
        include_once __DIR__ . '/views/shared/'.$layout.'.php';
    }

}
