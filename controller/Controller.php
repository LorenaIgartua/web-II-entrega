

<?php
define('HOME', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');
define('INICIOSESION', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/iniciarSesion');
define('CERRARSESION', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/cerrarSesion');
define('MENU', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/menuUsuario');
define('ADMIN', 1);
define('USER', 0);
define('VISITANTE', 0);


class Controller

{
protected $view;
protected $model;
}

?>
