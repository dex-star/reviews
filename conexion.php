<?php
	$conexion= new mysqli("dexreviews.com.mx", "germain", "K1ssmean1mal!", "reviews");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		printf("Estas conectado");
	}
?>
