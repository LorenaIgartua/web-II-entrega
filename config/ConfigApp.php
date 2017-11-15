<?php

class ConfigApp
{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
      '' =>  'RisottoController#index',
      'home' =>  'RisottoController#home',
      'nosotros' =>  'RisottoController#nosotros',
      'menuUsuario' =>  'RisottoController#menuUsuario',
      'nuevoComentario' => 'AdministradorController#nuevoComentario',
      'menuAdmin' =>  'AdministradorController#menuAdmin',
      'verPlato' => 'RisottoController#verPlato',
      'contacto' =>  'RisottoController#contacto',
      'iniciarSesion' =>  'UsuarioController#iniciarSesion',
      'verificarUsuario' =>  'UsuarioController#verificarUsuario',
      'cerrarSesion' => 'UsuarioController#cerrarSesion',

      'nuevoPlato' => 'AdministradorController#nuevoPlato',
      'agregarPlato' => 'AdministradorController#agregarPlato',
      'eliminarPlato' => 'AdministradorController#eliminarPlato',
      'eliminarImagen' => 'AdministradorController#eliminarImagen',
      'cargarPlato' => 'AdministradorController#cargarPlato', /// este es el que carga el formulario
      'actualizarPlato' => 'AdministradorController#actualizarPlato',
      'eliminarComentario' => 'AdministradorController#eliminarComentario',

      'nuevoMenu' => 'AdministradorController#nuevoMenu',
      'agregarMenu' => 'AdministradorController#agregarMenu',
      'eliminarMenu' => 'AdministradorController#eliminarMenu',
      'cargarMenu' => 'AdministradorController#cargarMenu', /// este es el que carga el formulario
      'actualizarMenu' => 'AdministradorController#actualizarMenu',

      'nuevoUsuario' => 'UsuarioController#nuevoUsuario',
      'registrar' => 'UsuarioController#registrar',
      'administrarUsuarios' => 'AdministradorController#administrarUsuarios',
      'editarUsuario' => 'AdministradorController#editarUsuario',
      'eliminarUsuario' => 'AdministradorController#eliminarUsuario'
  ];
}

 ?>
