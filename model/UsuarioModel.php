

<?php
class UsuarioModel extends Model

{
function getUser($userName)
{
  $sentencia = $this->db->prepare("SELECT * from usuario where mail = ? limit 1");
  $sentencia->execute([$userName]);
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}


function agregarUsuario($mail, $hash, $perfil)
{
  $sentencia = $this->db->prepare("INSERT INTO usuario(mail, password, perfil) VALUES (?,?,?)");
  $sentencia->execute([$mail, $hash, $perfil]);
}

function obtenerUsuarios()
{
  $sentencia = $this->db->prepare("SELECT * from usuario ");
  $sentencia->execute([]);
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function eliminarUsuario($id_usuario)
{
	$sentencia = $this->db->prepare("Delete from usuario where id_usuario = ?");
	$sentencia->execute([$id_usuario]);
	return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerUsuario($id_usuario)
{
  $sentencia = $this->db->prepare("SELECT * from usuario where id_usuario = ?");
  $sentencia->execute([$id_usuario]);
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function editarUsuario($id_usuario, $perfil)
{
	$sentencia = $this->db->prepare("UPDATE usuario SET perfil=? where id_usuario = ?");
	$sentencia->execute([$perfil, $id_usuario]);
	return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

}
?>
