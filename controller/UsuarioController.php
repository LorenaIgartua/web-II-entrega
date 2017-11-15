
<?php
include_once 'view/UsuarioView.php';
include_once 'model/TipoMenuModel.php';
include_once 'model/PlatoMenuModel.php';
include_once 'model/LoginModel.php';
include_once 'controller/SeguridadController.php';

class UsuarioController extends Controller

	{
	private $seguridadController;

	function __construct()
	{
		$this->view = new UsuarioView();
		$this->tipoMenu = new TipoMenuModel();
		$this->platos = new PlatoMenuModel();
		$this->usuarios = new LoginModel();
		$this->seguridadController = new SeguridadController();
	}


	function nuevoComentario()
	{
		$this->seguridadController->esUser();
		$id_plato = $_POST['id_plato'];
		$this->view->mostrarFormComentario($id_plato);
	}

}
?>
