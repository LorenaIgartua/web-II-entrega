<?php

define('RESOURCE', 0);
define('PARAMS', 1);

include_once 'config/Router.php';
include_once '../model/Model.php';
include_once 'controller/RisottoApiController.php';


$router = new Router();
//url, verb, controller, method
$router->AddRoute("menu", "GET", "RisottoApiController", "getMenu");
// $router->AddRoute("tareas/:id", "GET", "TareasApiController", "getTarea");
// $router->AddRoute("tareas/:id/descripcion", "GET", "TareasApiController", "getDescripcion");
// $router->AddRoute("tareas/:id", "PUT", "TareasApiController", "editTarea");
// $router->AddRoute("tareas", "POST", "TareasApiController", "createTareas");
// $router->AddRoute("tareas/:id", "DELETE", "TareasApiController", "deleteTareas");
// $router->AddRoute("tareas/:id/finalizar", "PUT", "TareasApiController", "updateCompletado");

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
