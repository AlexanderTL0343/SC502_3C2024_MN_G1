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