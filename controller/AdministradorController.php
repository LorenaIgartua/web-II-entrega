
<?php
include_once 'view/MenuView.php';
include_once 'model/TipoMenuModel.php';
include_once 'model/PlatoMenuModel.php';
include_once 'model/LoginModel.php';
include_once 'model/ComentariosModel.php';
include_once 'controller/SeguridadController.php';

class AdministradorController extends Controller

	{
	// private $seguridadController;

	function __construct()
	{
		$this->view = new MenuView();
		$this->Comentarios = new ComentariosModel();
		$this->tipoMenu = new TipoMenuModel();
		$this->platos = new PlatoMenuModel();
		$this->usuarios = new LoginModel();
		// $this->seguridadController = new SeguridadController();
	}

	function menuAdmin($usuario)   /// muestra detalle de TODOS los platos al ADMINISTRADOR (incluye botones para editar y eliminar, y el navigationBarAdmin)
	{
		$id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null; // controlar
		$platos = $this->platos->obtenerPlatos($id_menu);
		if ($id_menu == null) {
			$tipos = $this->tipoMenu->obtenerTipoMenu();
		}
		else {
			$tipos = $this->tipoMenu->obtenerTipo($id_menu);
		}
		$this->view->mostrarMenuAdmin($tipos, $platos, $error = '');
	}

	function cargarPlato()   /// este es el que carga el formulario para su posterior modificacion
	{
			$id_plato = $_POST['id_plato'];
			$plato = $this->platos->obtenerPlato($id_plato);
			$tipo = $this->tipoMenu->obtenerTipoMenu();
			$comentarios = $this->Comentarios->getComentarios($id_plato);
			// $usuario = $_SESSION['USER'];
			// print_r ($comentarios);
			// die();
			$this->view->mostrarModificarPlatoAdmin ($tipo, $plato, $error = '', $comentarios);
	}

	function cargarMenu()     /// este es el que carga el formulario para su posterior modificacion
	{
		$id_menu = $_POST['id_menu'];
		$menu = $this->tipoMenu->obtenerTipo($id_menu);
		$this->view->mostrarModificarMenuAdmin($menu, $error = '');
	}


// PLATOS - ALTA, BAJA Y MODIFICACION
	function nuevoPlato ()   /// muestra el formulario para generar UN NUEVO plato
	{
			$tipos = $this->tipoMenu->obtenerTipoMenu();
			$this->view->mostrarAltaPlatoAdmin($tipos, $error = '');
		}

	function agregarPlato()
	{
		$id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : "";
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
		$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
		$valor = isset($_POST['valor']) ? $_POST['valor'] : "";
	 	$rutaTempImagenes = isset($_FILES['imagenes']['tmp_name']) ? $_FILES['imagenes']['tmp_name'] : "";
		if ( $nombre != "" ) //hay plato
		{
						if ( !empty($rutaTempImagenes[0]) )      //hay imagenes
						{
							if ($this->sonJPG($_FILES['imagenes']['type'])) {
								$tipo = $this->platos->agregarPlato($id_menu, $nombre, $descripcion, $valor, $rutaTempImagenes);
								header('Location: ' . MENU);
							}
							else {
								$error = 'Las imagenes deben ser JPG';
								$tipos = $this->tipoMenu->obtenerTipoMenu();
								$this->view->mostrarAltaPlatoAdmin($tipos, $error);
							}
						}
						else //plato sin imagenes
						{
							$tipo = $this->platos->agregarPlato($id_menu, $nombre, $descripcion, $valor, $rutaTempImagenes);
							header('Location: ' . MENU);
			 			}
		}
		$error = 'El plato debe tener un nombre';
		$tipos = $this->tipoMenu->obtenerTipoMenu();
		$this->view->mostrarAltaPlatoAdmin($tipos, $error);
	}

	function sonJPG($imagenesTipos)
	{
		foreach ($imagenesTipos as $tipo) {
			if($tipo != 'image/jpeg') {
				return false;
			}
		}
		return true;
	}

	function eliminarPlato()
	{
			$id_plato = $_POST['id_plato'];
			$this->platos->eliminarPlato($id_plato);
			header('Location: ' . MENU);
	}

	function eliminarImagen()
	{
			$id_imagen = $_POST['id_imagen'];
			$id_plato = $_POST['id_plato'];
			$this->platos->eliminarImagen($id_imagen);
			$plato = $this->platos->obtenerPlato($id_plato);
			$tipo = $this->tipoMenu->obtenerTipoMenu();
			$comentarios = $this->Comentarios->getComentarios($id_plato);
			$this->view->mostrarModificarPlatoAdmin($tipo, $plato, $error = '', $comentarios);
	}

	function actualizarPlato()
	{
		$id_plato = isset($_POST['id_plato']) ? $_POST['id_plato'] : "";
		$id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : 1; // acomodar
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
		$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
		$valor = isset($_POST['valor']) ? $_POST['valor'] : "";
		$rutaTempImagenes = isset($_FILES['imagenes']['tmp_name']) ? $_FILES['imagenes']['tmp_name'] : "";
		$tipo = $this->platos->actualizarPlato($id_menu, $nombre, $descripcion, $valor, $id_plato, $rutaTempImagenes);
		header('Location: ' . MENU);
	}


// TIPO DE PLATOS - ALTA, BAJA Y MODIFICACION
	function nuevoMenu ()   /// muestra el formulario para generar UN NUEVO tipo de platos
	{
		$this->view->mostrarAltaMenuAdmin($error = '');
	}

	function agregarMenu()
	{
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
		$this->tipoMenu->agregarMenu($nombre);
		header('Location: ' . MENU);
	}

	function eliminarMenu()
	{
		$id_menu = $_POST['id_menu'];
		if ($this->platos->platosDisponiblesMenu($id_menu)[0]['count(*)'] == 0)
			{
				$this->tipoMenu->eliminarMenu($id_menu);
				$tipos = $this->tipoMenu->obtenerTipoMenu();
				$platos = $this->platos->obtenerPlatos($id_menu);
				$this->view->mostrarMenuAdmin ($tipos, $platos, $error = '');
			}
		 else
			{
				$error = 'La categoria no debe contener platos';
				$tipos = $this->tipoMenu->obtenerTipoMenu();
				$platos = $this->platos->obtenerPlatos($id_menu = '');
				$this->view->mostrarMenuAdmin ($tipos, $platos, $error);
			}
	}

	function actualizarMenu()
	{
			$id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : 1; // acomodar
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
			$tipo = $this->tipoMenu->actualizarMenu($id_menu, $nombre);
			header('Location: ' . MENU);
	}


// USUARIOS - ALTA, BAJA Y MODIFICACION

	function administrarUsuarios ()     /// muestra la tabla de USUARIOS dados de alta
	{
			$users = $this->usuarios->obtenerUsuarios();
			$this->view->mostrarTablaUsuarios($users, $error = '');
	}

	function eliminarUsuario()
	{
		$id_usuario = $_POST['id_usuario'];
		if($id_usuario != 1) {
		$this->usuarios->eliminarUsuario($id_usuario);
		}
			$this->administrarUsuarios();
	}

	function eliminarComentario()
	{
		$id_comentario = $_POST['id_comentario'];
		$id_plato = $_POST['id_plato'];
		$this->Comentarios->deleteComentario ($id_comentario);
		$plato = $this->platos->obtenerPlato($id_plato);
		$tipo = $this->tipoMenu->obtenerTipoMenu();
		$comentarios = $this->Comentarios->getComentarios($id_plato);
		$this->view->mostrarModificarPlatoAdmin($tipo, $plato, $error = '', $comentarios);

	}

	function editarUsuario()
	{
		$id_usuario = $_POST['id_usuario'];
		if($id_usuario != 1) {
			$usuario = $this->usuarios->obtenerUsuario($id_usuario);
			if ($usuario[0]['perfil'] == 0 ) {
					$this->usuarios->editarUsuario($id_usuario, 1);
			}
			else {
				$this->usuarios->editarUsuario($id_usuario, 0);
			}
		}
		$this->administrarUsuarios();
	}



}
?>
