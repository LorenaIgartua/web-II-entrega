<?php
class ComentariosModel extends Model
{


function gravarComentario ($id_plato, $id_usuario, $opinion, $puntaje)
{
  $sentencia = $this->db->prepare('INSERT INTO comentario(id_plato, id_usuario, opinion, puntaje) VALUES(?,?,?,?)');
  $sentencia->execute([$id_plato, $id_usuario, $opinion, $puntaje]);
  return $sentencia;
  }

  function getTodoslosComentarios ()
  {
    $sentencia = $this->db->prepare('SELECT * FROM comentario');
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

  function getComentarios ($id_plato)
  {
    $sentencia = $this->db->prepare('SELECT comentario.id_plato, comentario.id_comentario, comentario.opinion, comentario.puntaje, usuario.mail FROM comentario INNER JOIN usuario ON comentario.id_usuario = usuario.id_usuario WHERE id_plato = ?');
    $sentencia->execute([$id_plato]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

  function deleteComentario ($id_comentario)
  {
    $sentencia = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = ?');
    $sentencia->execute([$id_comentario]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


}

?>
