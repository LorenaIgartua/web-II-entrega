<?php
class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [

      'comentarios#POST'=> 'RisottoApiController#agregarComentario',
      'comentarios#DELETE'=> 'RisottoApiController#borrarComentario',
      'comentarios#GET'=> 'RisottoApiController#obtenerComentarios',
      'login#GET' => 'LoginApiController#iniciarSesion',
      'verificarUsuario#POST'=> 'LoginApiController#verificarUsuario',
      'logout#GET'=> 'LoginApiController#cerrarSesion'

    ];
}
?>
