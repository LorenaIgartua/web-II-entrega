
<?php
include_once 'view/View.php';
include_once 'model/Model.php';
include_once 'view/RisottoView.php';
include_once 'controller/SeguridadController.php';
include_once 'model/PlatoMenuModel.php';
include_once 'model/TipoMenuModel.php';
include_once 'model/ComentariosModel.php';

class RisottoController extends Controller
	{

	function __construct()
		{
		$this->view = new RisottoView();
		$this->tipoMenu = new TipoMenuModel();
		$this->platos = new PlatoMenuModel();
		$this->admin = new AdministradorController();
		$this->Comentarios = new ComentariosModel();
		}

	function index()
		{
		$this->view->mostrarIndex();
		}

	function home()
		{
		$this->view->mostrarHome();
		}

	function contacto()
		{
		$this->view->mostrarContacto();
		}

	function nosotros()
		{
		$this->view->mostrarNosotros();
		}

		function menuUsuario()
		{
			 if (isset($_SESSION['USER']) && ($_SESSION['PERFIL'] == ADMIN)) {
				 $this->admin->menuAdmin();
			 }
			else {
			$id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : null;
			$platos = $this->platos->obtenerPlatos($id_menu);
					if ($id_menu == null) {
						$tipo = $this->tipoMenu->obtenerTipoMenu();
					}
					else {
						$tipo = $this->tipoMenu->obtenerTipo($id_menu);
					}
			$this->view->mostrarMenu($tipo, $platos);
			}
		}

		function verPlato()   /// muestra el detalle de UN plato al Usuario
		{
			if (!isset ($_SESSION['USER']))
			{
				$id_plato = $_POST['id_plato'];
				$plato = $this->platos->obtenerPlato($id_plato);
				$tipos = $this->tipoMenu->obtenerTipoMenu();
				$comentarios = $this->Comentarios->getComentarios($id_plato);
				$this->view->mostrarVerPlatoUsuario($tipos, $plato, $error = '', $comentarios);
			}
			else
			{
				$id_plato = $_POST['id_plato'];
				$usuario = $_SESSION['USER'];
				$plato = $this->platos->obtenerPlato($id_plato);
				$tipos = $this->tipoMenu->obtenerTipoMenu();
				$this->view->mostrarVerPlatoUsuarioRegistrado($usuario, $tipos, $plato, $error = '');
			}
		}

	}

?>
