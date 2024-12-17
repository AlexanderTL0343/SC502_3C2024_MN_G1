<?php
require_once '../models/UserModel.php';

switch ($_GET['op']) {
    case 'insertarUsuario':
        $usuario = new User();
        $usuario->setIdRol(isset($_POST['tipoUsuario']) ? trim($_POST['tipoUsuario']) : 0);
        $usuario->setCedula(isset($_POST['cedula']) ? trim($_POST['cedula']) : "");
        $usuario->setNombre(isset($_POST['nombre']) ? trim($_POST['nombre']) : "");
        $usuario->setApellido1(isset($_POST['apellido1']) ? trim($_POST['apellido1']) : "");
        $usuario->setApellido2(isset($_POST['apellido2']) ? trim($_POST['apellido2']) : "");
        $usuario->setProfesion(isset($_POST['profesion']) ? trim($_POST['profesion']) : "");
        $usuario->setEdad(isset($_POST['edad']) ? trim($_POST['edad']) : 0);
        $usuario->setDireccion(isset($_POST['direccion']) ? trim($_POST['direccion']) : "");
        $usuario->setTelefono(isset($_POST['telefono']) ? trim($_POST['telefono']) : 0);
        $usuario->setEmail(isset($_POST['email']) ? trim($_POST['email']) : "");
        $usuario->setContrasena(isset($_POST['contrasena']) ? trim($_POST['contrasena']) : "");
        $usuario->setImagenUrl(isset($_FILES['imagen']) ? $_FILES['imagen']['name'] : "");


        if ($usuario->insertarUsuario() == true) { //true es la respuesta del modelo al insertar la cita

            $response = array();
            $response[] = [
                "status" => true,
                "message" => "Usuario insertado exitosamente"
            ];
            echo json_encode($response);
        } else {
            $response = array();
            $response[] = [
                "status" => false,
                "message" => "Error al insertar un usuario"
            ];
            echo json_encode($response);
        }
        break;

    case 'iniciarSesion':
        $usuario = new User();
        $usuario->setEmail(isset($_POST['email']) ? trim($_POST['email']) : "");
        $usuario->setContrasena(isset($_POST['contrasena']) ? trim($_POST['contrasena']) : "");

        if ($usuario->iniciarSesion2($usuario->getEmail(), $usuario->getContrasena()) == true) {

            $response = array();
            $response[] = [
                "status" => true,
                "message" => "Sesión iniciada",
                "nombre" => $_SESSION['usuario']['nombre'],
                "nombreRol" => $_SESSION['usuario']['nombreRol'] //revisar si eliminar
            ];
            echo json_encode($response);
        } else {
            $response = array();
            $response[] = [
                "status" => false,
                "message" => "Error al iniciar sesión"
            ];
            echo json_encode($response);
        }
        break;

    case 'editar':
        $id = isset($_POST["ID_USUARIO_PK"]) ? trim($_POST["ID_USUARIO_PK"]) : "";
        $email = isset($_POST["EMAIL"]) ? trim($_POST["EMAIL"]) : "";
        $nombre = isset($_POST["NOMBRE_USUARIO"]) ? trim($_POST["NOMBRE_USUARIO"]) : "";
        $image = isset($_POST["IMAGEN_URL"]) ? trim($_POST["IMAGEN_URL"]) : "";
        $telefono = isset($_POST["TELEFONO"]) ? trim($_POST["TELEFONO"]) : "";
        $facebook = isset($_POST["FACEBOOK"]) ? trim($_POST["FACEBOOK"]) : "";
        $direccion = isset($_POST["DIRECCION"]) ? trim($_POST["DIRECCION"]) : "";
        $profesion = isset($_POST["PROFESION"]) ? trim($_POST["PROFESION"]) : "";
        $instagram = isset($_POST["INSTAGRAM"]) ? trim($_POST["INSTAGRAM"]) : "";

        $usuario = new User();
        $usuario->setEmail($email);
        $encontrado = $usuario->verificarExistenciaDb();
        if ($encontrado == 1) {
            $usuario->llenarCampos($id);

            $usuario->setEmail($email);
            $usuario->setNombre($nombre);
            $usuario->setImagenUrl($image);
            $usuario->setTelefono($telefono);
            $usuario->setFacebook($facebook);
            $usuario->setInstagram($instagram);
            $usuario->setDireccion($direccion);
            $usuario->setProfesion($profesion);
            $modificados = $usuario->actualizarUsuario();
            if ($modificados > 0) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 2;
        }
}
break;
