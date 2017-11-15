<?php

class SeguridadApiController extends Api

{
function __construct()
	{
	session_start();
	if (isset($_SESSION['USER']))
		{
					if (time() - $_SESSION['LAST_ACTIVITY'] > 30)
						{
						header('Location: ' . LOGOUT);
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

}
?>
