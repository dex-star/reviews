<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <div id="contenido">
    <table>
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th><a href="nuevo.php"><button type="button" class="btn btn-info">Nuevo</button></a></th>
      </thead>

      <?php
      include "php/conexion.php";
      $consulta="SELECT * FROM USUARIOS";
      $resultado=$conexion->query($consulta) or die (mysqli_error($conexion));
      while($filas=$resultado->fetch_assoc()){
        echo "<tr>";
        echo "<td>"; echo $filas['U_ID'];echo "</td>";
        echo "<td>"; echo $filas['U_NOMBRE'];echo "</td>";
        echo "<td>"; echo $filas['U_MAIL'];echo "</td>";
        echo "<td>  <a href='modificar.php?U_ID=".$filas['U_ID']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
        echo "<td> <a href='eliminar.php?U_ID=".$filas['U_ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }
      ?>

    </table>
  </div>
</body>
</html>
