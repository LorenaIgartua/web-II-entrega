<?php

include_once '../libs/Smarty.class.php';

class LoginApiView

{

protected $smarty;

function __construct()
  {
  $this->smarty = new Smarty();
  $this->smarty->assign('titulo', 'API PARA COMENTARIOS');
  }

function mostrarLogin($error = '')
  {
  $this->smarty->assign('error', $error);
  return $this->smarty->display('templates/login.tpl');
  }

}
?>
