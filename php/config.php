<?php

$servername = "127.0.0.1";//La ip de todos base
$username = "root";//usuario del workbench
$password = "2527";//contrasena del workbench
$database = "proyectosql";//Nombre de base datos

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}else{
    echo"Conexion con exito";
}

?>