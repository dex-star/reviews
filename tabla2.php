<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <div id="contenido">
    	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
    		<thead>
    			<th>ID</th>
    			<th>nombre</th>
    			<th>Email</th>
    			<th> <a href="nuevo.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
    		</thead>

        <?php
          include "conexion.php";
          $sentecia="SELECT * FROM USUARIOS";
          $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
          while($fila=$resultado->fetch_assoc())
          {
            echo "<tr>";
              echo "<td>"; echo $fila['U_ID']; echo "</td>";
              echo "<td>"; echo $fila['U_NOMBRE']; echo "</td>";
              echo "<td>"; echo $fila['U_MAIL']; echo "</td>";
              echo "<td><a href='modificar.php?U_ID=".$fila['U_ID']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
              echo " <td><a href='eliminar.php?no=".$fila['ID_U']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
            echo "</tr>";
          }
        ?>

</body>
</html>
