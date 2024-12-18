<?php
include '../models/TablaCategorias.php';


switch ($_GET['op']) {
 case 'LlenarTablaCate':
    $tabla = new TablaCate();
    $clientes = $tabla->listarTablaCate();
    $data = array();
    foreach ($clientes as $reg) {
        $data[] = array(
            "0" => $reg->getIdCategoriaPk(),
            "1" => $reg->getNombreCategoria(),
            "2" => $reg->getDescripcion(),
            "3" => '<button class="btn btn-warning" id="modificarCategoria">Modificar</button>  '.
                                '<button class="btn btn-danger" id="eliminarCategoria">Eliminar</button> '
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

    case 'insertar':
        $id = isset($_POST["Cid"]) ? trim($_POST["Cid"]) : "";
        $nombre = isset($_POST["Cnombre"]) ? trim($_POST["Cnombre"]) : "";
        $descripcion = isset($_POST["Cdescripcion"]) ? trim($_POST["Cdescripcion"]) : "";
        $tabla = new TablaCate();
        $tabla->setIdCategoriaPk($id);
        $encontrado = $tabla->verificarExistenciaDb($id); 
        if ($encontrado == false) {
            $tabla->setIdCategoriaPk($id);
            $tabla->setNombreCategoria($nombre);
            $tabla->setDescripcion($descripcion);
            $tabla->guardarCategoria();
            if($tabla->verificarExistenciaDb($id)){ 
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