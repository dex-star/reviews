<?php

	NuevoProducto($_POST['id_producto'], $_POST['producto'], $_POST['descripcion']);

	function NuevoProducto($id_prod, $nom, $descrip)
	{
		include 'conexion.php';
		$consulta= "INSERT INTO USUARIOS (id_producto, nombre, descripcion) VALUES ('".$id_prod."', '".$nom."', '".$descrip."') ";
		$conexion->query($consulta) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='tabla.php';
</script>
