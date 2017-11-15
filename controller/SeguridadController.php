<?php

class SeguridadController extends Controller
{

function __construct()
	{
		session_start();

		if (isset($_SESSION['USER']))
		{
				if (time() - $_SESSION['LAST_ACTIVITY'] > 200)
				{
					header('Location: ' . CERRARSESIONTIEMPO);
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
		if ($_SESSION['PERFIL'] != ADMIN)
			{
			header('Location: ' . CERRARSESION);
			die();
			}
		}

		function esUser()
			{
			if (!isset($_SESSION['PERFIL']))
				{
				header('Location: ' . INICIOSESION);
				die();
				}
			}

}
?>
