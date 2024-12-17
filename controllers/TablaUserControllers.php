<?php
include '../models/TablaUser.php';

switch ($_GET['op']) {
    case 'LlenarTablaUser':
        $tabla = new TablaUser();
        $clientes = $tabla->listarTablaUser();
        $data = array();
        foreach ($clientes as $reg) {
            $data[] = array(
                "0" => $reg->getId(),
                "1" => $reg->getNombre(),
                "2" => $reg->getEdad(),
                "3" => $reg->getEmail(),
                "4" => $reg->getProfesion(),
                "5" => $reg->getFechaRegistro(),
                "6" => $reg->getIdRol(),
                "7" => '<button class="btn btn-warning" id="modificarUsuario">Modificar</button> '
                        
            );
        }
        $resultados = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($resultados);
        break;
        case 'editar':
            $id = isset($_POST["ID_USUARIO_PK"]) ? trim($_POST["ID_USUARIO_PK"]) : "";
            $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
            $nombre = isset($_POST["NOMBRE_USUARIO"]) ? trim($_POST["NOMBRE_USUARIO"]) : "";
            $edad = isset($_POST["edad"]) ? trim($_POST["edad"]) : "";
            $profesion = isset($_POST["profesion"]) ? trim($_POST["profesion"]) : "";
            $idRol = isset($_POST["id_rol_fk"]) ? trim($_POST["id_rol_fk"]) : "";
        
            $usuario = new TablaUser();
            $usuario->setId($id);
            $encontrado = $usuario->verificarExistenciaDb();
        
            if ($encontrado == 1) {
                $usuario->llenarCampos($id);
                $usuario->setNombre($nombre);
                $usuario->setEdad($edad);
                $usuario->setProfesion($profesion);
                $usuario->setIdRol($idRol);
                $usuario->setEmail($email);
        
                $modificados = $usuario->actualizarUsuario();
                if ($modificados > 0) {
                    echo 1;
                } else {
                    echo 0;
                }
            } else {
                echo 2; 
            }
        break;
        
}
?>