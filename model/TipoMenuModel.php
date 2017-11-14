
<?php
class TipoMenuModel extends Model

	{
	function obtenerTipoMenu()
		{
		$sentencia = $this->db->prepare("Select * from tipo_menu order by nombre ASC");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

	function eliminarMenu($id_menu)
		{
		$sentencia = $this->db->prepare("Delete from tipo_menu where id_menu = ?");
		$sentencia->execute([$id_menu]);
		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

	function agregarMenu($nombre)
		{
		$sentencia = $this->db->prepare("INSERT INTO tipo_menu (nombre) VALUES (?)");
		$sentencia->execute([$nombre]);
		}

	function obtenerTipo($id_menu)
		{
		$sentencia = $this->db->prepare(" Select * from tipo_menu where id_menu = ? ");
		$sentencia->execute([$id_menu]);
		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

	function actualizarMenu($id_menu, $nombre)
		{
		$sentencia = $this->db->prepare("UPDATE `tipo_menu` SET `nombre` = ? WHERE `tipo_menu`.`id_menu` = ?");
		$sentencia->execute([$nombre, $id_menu]);
		}
	}

?>
