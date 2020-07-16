<?php

	require 'init.php';

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$contenido = $_POST['contenido'];

	//Imagen Thumbnail
	$nombre_imagen = $_FILES['imagen']['name'];
	$nombre_temporal = $_FILES['imagen']['tmp_name'];
	$tipo_archivo = $_FILES['imagen']['type'];

	$destino = "../images/img-new-thumb/" . $nombre_imagen;

	if ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png" || $tipo_archivo == "image/gif") {
		move_uploaded_file($nombre_temporal, $destino);
		echo "<br> La imagen Thumbnail se subio con exito.";
	}
	else{
		echo "El archivo subido no es una imagen.";
		exit();
		echo "<a href='admin.php'>Regresar.</a>";
	}
	//Imagen Thumbnail

	$consulta = mysqli_query($conexion, " INSERT INTO post (titulo_post, descripcion_post, fecha_post, imagen_post, contenido)
									VALUES('$titulo', '$descripcion', NOW(), '$nombre_imagen',  '$contenido')
										");

	if (!isset($consulta)){
		echo "<br>  Error al insertar los datos en la tabla";
		exit();
	}else{
		header('Location: ../blog-grid.php?created');
	}



?>