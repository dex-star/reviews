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
                

        //php inicia aqui
        <?php
        include "php/conexion.php";
        $consulta="select * from USUARIOS";
        $resultado=mysql_query($consulta);
        while($filas=mysql_fetch_assoc($resultado)){
         echo "<tr>";   
            echo "<td>"; echo $filas['U_ID'];echo "</td>";
            echo "<td>"; echo $filas['U_NOMBRE'];echo "</td>";
            echo "<td>"; echo $filas['U_MAIL'];echo "</td>";
            echo "<td> <a href=''> </a></td>"; 
            
            
            echo "<td>"; echo $filas['U_MAIL'];echo "</td>";
        }
        ?>
        //php termina aqui
        </table>
    </div>
</body>

</html>
