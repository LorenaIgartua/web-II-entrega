
<?php
class RisottoView extends View

	{
	function mostrarIndex()
		{
		return $this->smarty->display('templates/index.tpl');
		}

	function mostrarHome()
		{
		return $this->smarty->display('templates/home.tpl');
		}

	function mostrarContacto()
		{
		return $this->smarty->display('templates/contacto.tpl');
		}

	function mostrarNosotros()
		{
		return $this->smarty->display('templates/nosotros.tpl');
		}

	function mostrarMenu($tipos, $platos)
		{
		// $this->smarty->assign('perfil', $perfil);
		$this->smarty->assign('tipos', $tipos);
		$this->smarty->assign('platos', $platos);
		$this->smarty->display('templates/menuUsuario.tpl');
		}


	function mostrarVerPlatoUsuario ($tipos, $plato, $error = '', $comentarios)
			{

			$this->smarty->assign('tipos', $tipos);
			$this->smarty->assign('comentarios', $comentarios);
			$this->smarty->assign('plato', $plato);
			$this->smarty->assign('error', $error);
			$this->smarty->display('templates/verPlatoUsuario.tpl');
		}

		function mostrarVerPlatoUsuarioRegistrado($usuario, $tipos, $plato, $error = '')
				{
				$this->smarty->assign('usuario', $usuario);
				$this->smarty->assign('tipos', $tipos);
				$this->smarty->assign('plato', $plato);
				$this->smarty->assign('error', $error);
				$this->smarty->display('templates/verPlatoUsuarioRegistrado.tpl');
			}
	}
?>
