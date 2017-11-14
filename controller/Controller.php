

<?php
define('HOME', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');
define('INICIOSESION', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/iniciarSesion');
define('CERRARSESION', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/iniciarSesion');
define('MENU', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/menuUsuario');
// define('MENU', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/verPlato');
// define('MENUADMIN', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/menuAdmin');
define('ADMIN', 1);
define('VISITANTE', 0);


class Controller

{
protected $view;
protected $model;
}

?>
