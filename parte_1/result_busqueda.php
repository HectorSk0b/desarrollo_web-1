<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>
    <?php
        require("conexion.php");

        $busqueda=$_GET["search"];
        $consulta= "SELECT * FROM producto where producto like '%$busqueda%'";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<table><tr><td>";
            echo $fila['id_producto']."</td><td>";
            echo $fila['producto']."</td><td>";
            echo $fila['precio']."</td><td></tr></table>";
            echo "<br>";
            echo "<br>";
        }
    ?>    
</body>
</html>
<?php

?>