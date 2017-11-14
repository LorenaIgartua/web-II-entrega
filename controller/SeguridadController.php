<?php

class SeguridadController extends Controller

	{
	function __construct()
		{
		// session_start();
		if (isset($_SESSION['USER']))
			{
						if (time() - $_SESSION['LAST_ACTIVITY'] > 1)
							{
							header('Location: ' . CERRARSESION);
							die();
							}
						$_SESSION['LAST_ACTIVITY'] = time();
						}
					 else
						{
						header('Location: ' . INICIOSESION);
						die();
						}
		}

		function admin()
			{
			if ($_SESSION['PERFIL'] == ADMIN)
			{
				return true;
			}
			else
		  {
		  return false;
		  }
		}


}
?>
