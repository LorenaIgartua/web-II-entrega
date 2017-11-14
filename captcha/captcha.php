<?php
	session_start();

	// Creo los valores aleatorios y guardo el resultado
	$Valor1 = rand(1,9);
	$Valor2 = rand(1,9);
	$_SESSION["ResultadoCaptcha"] = $Valor1 + $Valor2;

	// Creo una imagen vacia de 120x30 a la que pintaremos el fondo transparente y los valores en negro
	$Imagen = imagecreatetruecolor(90, 30);
	$Color_Fondo = imagecolorallocate($Imagen, 236, 151, 31);
	imagefill($Imagen, 0, 0, $Color_Fondo);
	$Color_Texto = imagecolorallocate($Imagen, 255, 255, 255);
	imagestring($Imagen, 5, 10, 6,  $Valor1." + ".$Valor2." =", $Color_Texto);
	// Cabecera para la imagen PNG
	header('Content-Type: image/png');

	// Imprimo la imagen
	imagepng($Imagen);

	// Liberar memoria
	imagedestroy($Imagen);
?>
