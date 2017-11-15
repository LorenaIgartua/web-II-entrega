

<?php
class UsuarioView extends View

{
function mostrarLogin($error = '')
  {
  $this->smarty->assign('error', $error);
  return $this->smarty->display('templates/login.tpl');
  }



function crearUsuario()
{
  return $this->smarty->display('templates/altaUsuario.tpl');
}

}
?>
