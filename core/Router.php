<?php

namespace App\Core;

class Router {

    protected $routes = [
    ];

    public static function load($file){
        $router = new static;

        require $file;
        return $router;
    }

    public function get($route, $controller, $auth = ""){
        if ($auth) {
            $this->routes['lock']['GET'][$route] = $controller;
        } else {
            $this->routes['free']['GET'][$route] = $controller;
        }
    }

    public function post($route, $controller, $auth = ""){
        if ($auth) {
            $this->routes['lock']['POST'][$route] = $controller;
        } else {
            $this->routes['free']['POST'][$route] = $controller;
        }
    }


    public function direct($url, $method){

        $result = $this->checkRoute($url, $method);

        if($result == "free") {
          return $this->callAction(...explode("@", $this->routes[$result][$method][$url]));
        } else if ($result == 'lock') {


            if(isset($_SESSION['user'])) {

                if (substr($url, 0, 5) == "admin" && $_SESSION['user']->role_id != 1){
                    return redirect('/');
                }
                return $this->callAction(...explode("@", $this->routes[$result][$method][$url]));
            } else {
                return redirect('/login');
            }
        }

    }

    private function checkRoute($url, $method) {
        $lock = array_key_exists($url, $this->routes['lock'][$method]);
        $free = array_key_exists($url, $this->routes['free'][$method]);

        if (!$lock && !$free) throw new \Exception('This route not found');

        if($lock) return "lock";
        if($free) return "free";

    }

    private function callAction($controller, $method) {
        $controller = "\\App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $method)) {
            throw new \Exception("This method does not exist!");
        }

        return $controller->$method();
    }
}