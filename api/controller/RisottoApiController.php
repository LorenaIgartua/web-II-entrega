<?php

require_once('Api.php');
require_once('../model/ComentariosModel.php');
require_once ('controller/SeguridadApiController.php');
require_once ('view/LoginApiView.php');
require_once ('controller/LoginApiController.php');

class RisottoApiController extends Api
{
  protected $model;
  protected $view;
  private $seguridadController;

  function __construct()
  {
    parent::__construct();
    $this->model = new ComentariosModel();
    $this->view = new LoginApiView();
    $this->seguridadController = new SeguridadApiController();
  }

  public function obtenerComentarios ($url_params = [])
  {
    if (sizeof($url_params) == 1) {
      $id_plato = $url_params [0];
      $comentarios = $this->model->getComentarios($id_plato);
      $response = new stdClass();
      $response->comentarios = $comentarios;
      $response->status = 200;
      return $this->json_response($response, 200);
    }
    else {
      $comentarios = $this->model->getTodoslosComentarios();
      $response = new stdClass();
      $response->comentarios = $comentarios;
      $response->status = 200;
      return $this->json_response($response, 200);
    }

  }

  public function borrarComentario ($url_params = [])
  {
    $id_comentario = $url_params[0];
    $comentario = $this->model->deleteComentario($id_comentario);
    return $this->json_response($comentario, 200);
  }

  public function agregarComentario($url_params = [])
 {
   $body = json_decode($this->raw_data);
   $captcha = $body->captcha;
   $id_plato = $body->id_plato;
   $id_usuario = $body->id_usuario;
   $opinion = $body->opinion;
   $puntaje = $body->puntaje;
   // session_start();
   if ($captcha == $_SESSION["ResultadoCaptcha"]) {
     $comentario = $this->model->gravarComentario($id_plato, $id_usuario, $opinion, $puntaje);
     return $this->json_response($comentario, 200);
   }
   else {
       return $this->json_response(false, 404);
   }
 }

}
?>
