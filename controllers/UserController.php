<?php
require_once '../models/UserModel.php';

switch ($_GET['op']) {
    case 'insertarUsuario':
        $usuario = new User();
        $usuario->setIdRol(isset($_POST['tipoUsuario']) ? trim($_POST['tipoUsuario']) : 0);
        $usuario->setIdProfesion(isset($_POST['profesion']) ? trim($_POST['profesion']) : 0);
        $usuario->setCedula(isset($_POST['cedula']) ? trim($_POST['cedula']) : "");
        $usuario->setNombre(isset($_POST['nombre']) ? trim($_POST['nombre']) : "");
        $usuario->setApellido1(isset($_POST['apellido1']) ? trim($_POST['apellido1']) : "");
        $usuario->setApellido2(isset($_POST['apellido2']) ? trim($_POST['apellido2']) : "");
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
            exit;
        } else {
            $response = array();
            $response[] = [
                "status" => false,
                "message" => "Error al iniciar sesión"
            ];
            echo json_encode($response);
        }
        break;

    case 'obtenerProfesiones':
        $usuario = new User();
        $res = $usuario->obtenerProfesiones();

        $response = array();
        $response[] = [
            "status" => true,
            "message" => "Profesiones obtenidas",
            "datos" => $res
        ];

        echo json_encode($response);
        break;

    case 'insertarRedes':
        $usuario = new User();

        $idUsuario = $_SESSION['usuario']['idUsuario'];
 
            $usuario-> setId($idUsuario); 
            $usuario->setInstagram(isset($_POST['instagram']) ? trim($_POST['instagram']) : 0);
            $usuario->setFacebook(isset($_POST['facebook']) ? trim($_POST['facebook']) : 0);

            //var_dump($idUsuario);

        if ($usuario->insertarRedes() == true) { //true es la respuesta del modelo al insertar la cita

            $response = array();
            $response[] = [
                "status" => true,
                "message" => "Redes  insertadas exitosamente"
            ];
            echo json_encode($response);
        } else {
            $response = array();
            $response[] = [
                "status" => false,
                "message" => "Error al insertar las Redes"
            ];
            echo json_encode($response);
        }
        break;
        case 'editar':
            
            $id = isset($_SESSION['usuario']['idUsuario']) ? $_SESSION['usuario']['idUsuario'] : null;
            if ($id === null) {
                echo 2; // Retorna error si no se encuentra el ID en la sesión
                break;
            }
        
            $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
            $direccion = isset($_POST["direccion"]) ? trim($_POST["direccion"]) : "";
            $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";
            $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
            $instagram = isset($_POST["instagram"]) ? trim($_POST["instagram"]) : "";
            $facebook = isset($_POST["facebook"]) ? trim($_POST["facebook"]) : "";
            $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : "";
            $imagen_url = isset($_POST["imagen"]) ? trim($_POST["imagen"]) : "";
            $profesion = isset($_POST["profesion"]) ? trim($_POST["profesion"]) : "";
        
            $usuario = new User();
            $usuario->setId($id);
            $usuario->setNombre($nombre);
            $usuario->setDireccion($direccion);
            $usuario->setTelefono($telefono);
            $usuario->setEmail($email);
            $usuario->setInstagram($instagram);
            $usuario->setFacebook($facebook);
            $usuario->setCedula($cedula);
            $usuario->setImagenUrl($imagen_url);
            $usuario->setIdProfesion($profesion);
        
            $modificados = $usuario->modificarUsuario();
            if ($modificados > 0) {
                echo 1;
            } else {
                echo 0;
            }
            break;
}
