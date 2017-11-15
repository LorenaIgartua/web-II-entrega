
<?php
class PlatoMenuModel extends Model

	{


	function obtenerPlatos($id_menu)
		{
		if (isset($id_menu) && ($id_menu != ""))
		{
			$sentencia = $this->db->prepare('SELECT * from plato WHERE id_menu = ?');
			$sentencia->execute([$id_menu]);
			$platos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}
		else {
				$sentencia = $this->db->prepare('SELECT * from plato ');
				$sentencia->execute();
				$platos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
			}
	 $platosConImagenes = [];
		foreach ($platos as $plato) {
			$sentencia_imagenes = $this->db->prepare( 'select * from imagen where id_plato = ?');
			$sentencia_imagenes->execute([$plato['id_plato']]);
			$imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
			$plato['imagenes'] = $imagenes;
			$platosConImagenes[] = $plato;
		}
		return $platosConImagenes;
		}

	 function subirImagenes($imagenes)
	 {
		 $rutas = [];
		 if($imagenes[0]!=""){
			 foreach ($imagenes as $imagen) {
				 $destino_final = 'images/platos/' . uniqid() . '.jpg';
				 move_uploaded_file($imagen, $destino_final);
				 $rutas[]=$destino_final;
			 }
		 }
		 return $rutas;
	  }

	function agregarPlato($id_menu, $nombre, $descripcion, $valor, $rutaTempImagenes)
	{
			$sentencia = $this->db->prepare("INSERT INTO plato (id_menu, nombre, descripcion, valor) VALUES (?,?,?,?)");
			$sentencia->execute([$id_menu, $nombre, $descripcion, $valor]);
			$id_plato = $this->db->lastInsertId();
			$rutas = $this->subirImagenes($rutaTempImagenes);
			if(!empty($rutas)){
							$sentencia = $this->db->prepare("INSERT INTO imagen(id_plato, url) VALUES (?,?)");
							foreach ($rutas as $ruta) {
								$sentencia->execute([$id_plato,$ruta]);
								}
				}
		}

	function actualizarPlato($id_menu, $nombre, $descripcion, $valor, $id_plato, $rutaTempImagenes)
		{
		$sentencia = $this->db->prepare("UPDATE `plato` SET `id_menu` = ?, `nombre` = ?, `descripcion` = ?, `valor` = ? WHERE `plato`.`id_plato` = ?");
		$sentencia->execute([$id_menu, $nombre, $descripcion, $valor, $id_plato]);
		$rutas = $this->subirImagenes($rutaTempImagenes);
	  if(!empty($rutas)){
						$sentencia = $this->db->prepare("INSERT INTO imagen(id_plato, url) VALUES (?,?)");
						foreach ($rutas as $ruta) {
							$sentencia->execute([$id_plato,$ruta]);
							}
			}
		}

	function eliminarPlato($id_plato)
		{
		$sentencia = $this->db->prepare("DELETE FROM plato where id_plato = ?");
		$sentencia->execute([$id_plato]);
		}

	function eliminarImagen($id_imagen)
	{
		$sentencia = $this->db->prepare("DELETE FROM imagen where id_imagen = ?");
		$sentencia->execute([$id_imagen]);
	}

	function obtenerPlato($id_plato)
		{
			$sentencia = $this->db->prepare("Select * from plato where id_plato = ?");
			$sentencia->execute([$id_plato]);
			$plato = $sentencia->fetchAll(PDO::FETCH_ASSOC);
		 	$sentencia_imagenes = $this->db->prepare( 'select * from imagen where id_plato = ?');
			$sentencia_imagenes->execute([$id_plato]);
			$imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
			$plato['imagenes'] = $imagenes;
	 		return $plato;
		}

	function platosDisponiblesMenu($id_menu)
		{
		$sentencia = $this->db->prepare("Select count(*) from plato where id_menu = ?");
		$sentencia->execute([$id_menu]);
		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>
