<?php

define('RESOURCE', 0);
define('PARAMS', 1);

include_once 'config/Router.php';
include_once 'controller/Api.php';
include_once 'controller/RisottoApiController.php';


$router = new Router();

$router->AddRoute("comentarios", "GET", "RisottoApiController", "obtenerComentariosTodos");
$router->AddRoute("comentarios/:id", "GET", "RisottoApiController", "obtenerComentarios");
$router->AddRoute("comentarios", "POST", "RisottoApiController", "agregarComentario");
$router->AddRoute("comentarios", "DELETE", "RisottoApiController", "borrarComentario");


$route = $_GET['resource'];
$array = $router->Route($route);

if(sizeof($array) == 0)
  echo "404";
else
{
  $controller = $array[0];
  $metodo = $array[1];
  $url_params = $array[2];
  echo (new $controller())->$metodo($url_params);
}
?>
