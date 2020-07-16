<?php

	$conexion = mysqli_connect("mysql.lncab.mx","lncabmx","iF!sZPaT","lncab_mx");

	// Check connection
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }


?>