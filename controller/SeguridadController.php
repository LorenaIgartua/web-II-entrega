<?php

class SeguridadController extends Controller
{

function __construct()
	{
		session_start();

		if (isset($_SESSION['USER']))
		{
				if (time() - $_SESSION['LAST_ACTIVITY'] > 50)
				{
					header('Location: ' . CERRARSESION);
					die();
				}
				else
			 	{
				$_SESSION['LAST_ACTIVITY'] = time();
				}
		}

}

	function esAdmin()
		{
			// print_r($_SESSION);
			// die();
		if ($_SESSION['PERFIL'] != ADMIN)
			{
			header('Location: ' . CERRARSESION);
			die();
			}
		}

		function esUser()
			{
				// print_r($_SESSION);
				// die();
			if (!isset($_SESSION['PERFIL']))
				{
				header('Location: ' . INICIOSESION);
				die();
				}
			}

}
?>
