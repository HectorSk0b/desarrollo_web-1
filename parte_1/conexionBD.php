<?php
$db_host='localhost';
$db_nombre = 'usuarios';
$db_usuario = 'root';
$db_contra = "";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (mysqli_connect_errno()) {
    echo "la conexion con la base de datos ha fallado";
    exit();
}

$consulta= "SELECT * FROM datos_personales";
$resultado = mysqli_query($conexion, $consulta);

while ($fila=mysqli_fetch_row($resultado)) {
    # code...
    //$fila = mysqli_fetch_row($resultado);

    echo $fila[0]." ";
    echo $fila[1]." ";
    echo $fila[2]." ";
    echo $fila[3]." ";
    echo "<br>";
}
mysqli_close($conexion);
?>
