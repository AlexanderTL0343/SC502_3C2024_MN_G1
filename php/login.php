<?php
include("./config.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] =="POST"){
    $email = $_POST['Email'];
    $password =$_POST['Contrasena'];
    $_SESSION ['id_Usuario'] =$usuario;
 


    $consulta ="SELECT id_Usuario, email, Apellido1, rolID FROM usuarios WHERE Email = '$email' AND Contrasena = '$encrypted_data_with_iv'";
    $resultado = mysqli_query($conn, $consulta);

     // Verificar si se encontró una fila que coincida con las credenciales
     if ($filas = mysqli_fetch_array($resultado)) {
        // Guardar nombre, apellido, y UsuarioID en la sesión
        $_SESSION['Nombre'] = $filas['Nombre'];
        $_SESSION['Apellido'] = $filas['Apellido'];
        $_SESSION['id_Usuario'] = $filas['UsuarioID']; // Almacena el ID de usuario



        // Verificar el rol del usuario
        if ($filas['RolID'] === '1') {
            header("");
        } elseif ($filas['RolID'] === '2') {
            header("");
        }
    } else {
        header("Location: ../views/errorLogin.php");
    }
}


?>