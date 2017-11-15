
<?php
define('INICIOSESION', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('COMENTARIOS', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/comentarios');
// define('CERRARSESION', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/logout');

abstract class Api {


  protected $model;
  protected $raw_data;

  function __construct(){
    $this->raw_data = file_get_contents("php://input");
  }

  protected function json_response($data, $status) {
    header("Content-Type: application/json");
    header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
    return json_encode($data);
  }

  private function _requestStatus($code){
      $status = array(
        200 => "OK",
        404 => "Not found",
        500 => "Internal Server Error"
      );
      return ($status[$code])? $status[$code] : $status[500];
    }
}

?>
