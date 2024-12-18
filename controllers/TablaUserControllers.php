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
                "7" => $reg->getEstado(),
                "8" => '<button class="btn btn-warning" id="modificarUsuario">Modificar</button>  '.
                '<button class="btn btn-danger" id="eliminarUsuario">Eliminar</button> '
                        
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
            $id = isset($_POST["Eid"]) ? trim($_POST["Eid"]) : "";

            $email = isset($_POST["Eemail"]) ? trim($_POST["Eemail"]) : "";
            $nombre = isset($_POST["Enombre"]) ? trim($_POST["Enombre"]) : "";
            $edad = isset($_POST["Eedad"]) ? trim($_POST["Eedad"]) : "";
            $profesion = isset($_POST["Eprofesion"]) ? trim($_POST["Eprofesion"]) : "";
            $rol = isset($_POST["Erol"]) ? trim($_POST["Erol"]) : "";
        
            $usuario = new TablaUser();

            $encontrado = $usuario->verificarExistenciaDb($id);

            if ($encontrado == 1) {
                $usuario->llenarCampos($id);
                $usuario->setNombre($nombre);
                $usuario->setEdad($edad);
                $usuario->setProfesion($profesion);
                $usuario->setIdRol($rol);
                $usuario->setEmail($email);
        
                $modificados = $usuario->actualizarUsuario();
                if ($modificados > 0) {
                    echo 1;
                } else {
                    echo 0;
                }
            } else {
                //print_r("ERROR DE CONTROLADOR");

                echo 2; 
            }
        break;
        
}
?>