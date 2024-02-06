<?php

require 'helper.php';

class Router
{

    protected array $routes = [];
    protected array $params = [];

    public function add($route, $params = []){

        //$this->routes[$route] = $params;

    $route = preg_replace('/\//', '\\/', $route);

    $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z]+)',$route);

    $route = '/^' . $route . '$/i';

    $this->routes[$route] = $params;



    }

    public function match($url)
    {
        /*
        foreach ($this->routes as $route => $params) {

            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }

        return false;
        */

        // Match to the fixed URL format /controller/action
       /* $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";
        if (preg_match($reg_exp, $url, $matches)){

            $params = [];
            foreach ($matches as $key => $match) {

                if (is_string($key)){
                    $params[$key] = $match;

                }
            }

            $this->params = $params;
                return true;
        }

        return false;


*/


        foreach ($this->routes as $route => $params) {

            if(preg_match($route, $url, $matches)){

                foreach ($matches as $key => $match){
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }

                $this->params = $params;
                return true;

            }

        }
 return false;
    }





    public function getRoutes(){

        return $this->routes;
    }
    public function getParametres(){

        return $this->params;

    }

}