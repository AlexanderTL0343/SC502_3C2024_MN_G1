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

}
?>