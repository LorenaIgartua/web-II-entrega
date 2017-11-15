
<?php
class MenuView extends View

	{

	function mostrarMenuAdmin ($tipos, $platos, $error = '')
	{
		$this->smarty->assign('tipos', $tipos);
		$this->smarty->assign('platos', $platos);
		$this->smarty->assign('error', $error);
		$this->smarty->display('templates/menuAdmin.tpl');
	}

	function mostrarModificarPlatoAdmin($tipo, $plato, $error = '', $comentarios)
	{
		$this->smarty->assign('tipos', $tipo);
		$this->smarty->assign('error', $error);
		$this->smarty->assign('plato', $plato);
		$this->smarty->assign('comentarios', $comentarios);
		$this->smarty->display('templates/formModificarPlato.tpl');
	}

	function mostrarModificarMenuAdmin($menu, $error = '')
	{
		$this->smarty->assign('menu', $menu);
		$this->smarty->assign('error', $error);
		$this->smarty->display('templates/formModificarMenu.tpl');
	}

	function mostrarAltaPlatoAdmin($tipos, $error = '')
	{
		$this->smarty->assign('tipos', $tipos);
		$this->smarty->assign('error', $error);
		$this->smarty->display('templates/formAgregarPlato.tpl');
	}


	function mostrarAltaMenuAdmin($tipos, $error = '')
	{
		$this->smarty->assign('error', $error);
		$this->smarty->display('templates/formAgregarMenu.tpl');
	}

	function mostrarTablaUsuarios($users, $error = '')
	{
		$this->smarty->assign('usuarios', $users);
		$this->smarty->assign('error', $error);
		$this->smarty->display('templates/adminUsuarios.tpl');
	}

	function formularioModificar($plato)
		{
		$this->smarty->assign('plato', $plato);
		return $this->smarty->display('templates/formularioModificar.tpl');
		}
	}

?>
