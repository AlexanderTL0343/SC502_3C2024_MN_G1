<?php
    require_once '../models/UserModel.php';

    switch ($_GET['op']) {
        case 'insertarUsuario':
            $usuario = new User();
            $usuario->setCedula(isset($_POST['cedula']) ? trim($_POST['cedula']) : "");
            $usuario->setNombre(isset($_POST['nombre']) ? trim($_POST['nombre']) : "");
            $usuario->setApellido1(isset($_POST['apellido1']) ? trim($_POST['apellido1']) : "");
            $usuario->setEmail(isset($_POST['email']) ? trim($_POST['email']) : "");
            $usuario->setContrasena(isset($_POST['contrasena']) ? trim($_POST['contrasena']) : "");
            $usuario->setEdad(isset($_POST['edad']) ? trim($_POST['edad']) : "");
            $usuario->setDireccion(isset($_POST['direccion']) ? trim($_POST['direccion']) : "");
            $usuario->setTelefono(isset($_POST['telefono']) ? trim($_POST['telefono']) : "");

            if ($usuario->insertarUsuario() == true) {//true es la respuesta del modelo al insertar la cita
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
    }
?>