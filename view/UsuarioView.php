
<?php
class UsuarioView extends View

	{
	function mostrarFormComentario($id_plato)
		{
		$this->smarty->assign('id_plato', $id_plato);
		return $this->smarty->display('templates/formAgregarComentario.tpl');
		}


	}
?>
