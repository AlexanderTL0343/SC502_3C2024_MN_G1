<?php 

include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $apellido1 = $_POST['Apellido'];
    $email = $_POST['Email'];
    $password = $_POST['Contrasena'];
    $edad = $_POST['Edad'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];

 

    // Función de encriptación de contraseña
    $clave = "2527";


    // Preparar la sentencia SQL para evitar inyecciones SQL
    if ($stmt = $conn->prepare("INSERT INTO usuarios (Nombre, Apellido1,  Email, Contrasena, Edad, Direccion, Telefono) VALUES (?, ?,  ?, ?, ?, ?, ?)")) {
        // Asignar el valor de $Rol a un ID, si es necesario
        

        // Vincular parámetros
        $stmt->bind_param("ssssiss", $nombre, $apellido1,  $email, $password, $edad, $direccion, $telefono);

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            // Obtener el ID del usuario recién creado
            $usuarioID = $stmt->insert_id;

            // Guardar nombre, apellido, y UsuarioID en la sesión
            $_SESSION['Nombre'] = $nombre;
            $_SESSION['Apellido1'] = $apellido1;
            $_SESSION['UsuarioID'] = $usuarioID;

            // Redirigir al usuario a su perfil
            header("location: ../views/main.php");
            exit();
        } else {
            // Manejo de errores
            echo "Error al registrar el usuario: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia SQL: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método de solicitud no válido";
}
?>