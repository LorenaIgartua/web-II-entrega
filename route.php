
<?php
define('ACTION', 0);
define('VALOR1', 1);
include_once 'config/ConfigApp.php';
include_once 'model/Model.php';
include_once 'view/View.php';
include_once 'controller/Controller.php';
// include_once 'controller/Usua?rioController.php';
include_once 'controller/RisottoController.php';
include_once 'controller/AdministradorController.php';
include_once 'controller/UsuarioController.php';
include_once 'controller/SeguridadController.php';

function parseURL($url)
	{
	$urlExploded = explode('/', $url);
	$arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
	$arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded, 1) : null;
	return $arrayReturn;
	}

if (isset($_GET['action']))
	{
	$urlData = parseURL($_GET['action']);
	$action = $urlData[ConfigApp::$ACTION]; //home
	if (array_key_exists($action, ConfigApp::$ACTIONS))
		{
		$params = $urlData[ConfigApp::$PARAMS];
		$action = explode('#', ConfigApp::$ACTIONS[$action]); //Array[0] -> TareasController [1] -> index
		$controller = new $action[0]();
		$metodo = $action[1];
		if (isset($params) && $params != null)
			{
			echo $controller->$metodo($params);
			}
		  else
			{
			echo $controller->$metodo();
			}
		}
	}

?>
