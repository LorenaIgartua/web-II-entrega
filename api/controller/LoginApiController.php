
<?php
include_once ('../model/UsuarioModel.php');
include_once ('controller/Api.php');
include_once ('controller/RisottoApiController.php');
include_once ('view/LoginApiView.php');


class LoginApiController extends Api

	{
	function __construct()
		{

		$this->view = new LoginApiView();
		$this->model = new UsuarioModel();
		}


	function iniciarSesion()
		{
		$this->view->mostrarLogin();
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
				$_SESSION['PERFIL'] = $user[0]['perfil'];
				$_SESSION['LAST_ACTIVITY'] = time();
				header('Location: ' . COMENTARIOS);
				}
			  else
				{
				$this->view->mostrarLogin('Usuario o Password incorrectos');
				}
			}
		}

	function cerrarSesion()
		{
		session_start();
		session_destroy();
			header('Location: ' . INICIOSESION);
		die();
		}



	}

?>
