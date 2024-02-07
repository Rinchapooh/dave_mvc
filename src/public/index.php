<?php
//https://www.phpliveregex.com/#tab-preg-match

//echo 'Requested URL is: ' . $_SERVER['QUERY_STRING']  ;

require '../Core/Router.php';

$router = new Router();

//
//$router->add('', ['controller' => 'home', 'action' =>'index']);
//$router->add('/posts', ['controller' => 'posts', 'action' => 'index']);
$router->add('/posts/new', ['controller'=>'posts', 'action'=>'new']);
$router->add('/home', ['controller' => 'home', 'action'=>'index']);

$router->add('controller', 'action');
$router->add('admin/{action}/{controller}');
//
////display routes
////dump('ROUTING_TABLE', $router->getRoutes());
//$url = $_SERVER['QUERY_STRING'];
////dump('URL IS: ', $url);
//$router->match($url);
//
//if ($router->match($url)){
//
//    dump('PARAMS', $router->getParametres());
//
//}else{
//    echo 'No route found to URL: '. $url;
//}


//xdebug_info();

echo "<pre>";
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo "<pre>";
