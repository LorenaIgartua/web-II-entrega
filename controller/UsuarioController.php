
<?php
include_once ('model/UsuarioModel.php');
include_once ('view/UsuarioView.php');
include_once ('controller/RisottoController.php');


class UsuarioController extends Controller
{

function __construct()
{
	// $this->cierre = new RisottoController();
	$this->view = new UsuarioView();
	$this->model = new UsuarioModel();
}


function iniciarSesion()
{
	$this->view->mostrarLogin();
}

function nuevoUsuario() //muestra formulario para incorporar un nuevo Usuario
{
	$this->view->crearUsuario();
}

function registrar()
{
	$mail = isset($_POST['usuario']) ? $_POST['usuario'] : "";
	$password = $_POST['password'];
	$perfil = 0;
	$hash = password_hash($password, PASSWORD_DEFAULT);
	$this->model->agregarUsuario($mail, $hash, $perfil);
	header('Location: ' . MENU);
}

function verificarUsuario()
{
	$userName = $_POST['usuario'];
	$password = $_POST['password'];
	if (!empty($userName) && !empty($password))
		{
		$user = $this->model->getUser($userName);
		if ((!empty($user)) && password_verify($password, $user[0]['password']))
			{
			session_start();
			$_SESSION['USER'] = $user[0]['id_usuario'];
			$_SESSION['LAST_ACTIVITY'] = time();
			$_SESSION['PERFIL'] = $user[0]['perfil'];
			header('Location: ' . MENU);
			}
		  else
			{
			$this->view->mostrarLogin('Usuario o Password incorrectos');
			}
			$this->view->mostrarLogin('Usuario o password incorrectos');
		}
	}

	function cerrarSesion()
		{
		session_start();
		session_destroy();
		header('Location: ' . MENU);
		}

	}

?>
