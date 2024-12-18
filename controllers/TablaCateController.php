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