<?php
include '../models/TablaCalificaciones.php';

switch ($_GET['op']) {

case 'LlenarTablaCali':
            $tabla = new TablaCali();
            $clientes = $tabla->listarTablaCali();
            $data = array();
            foreach ($clientes as $reg) {
                $data[] = array(
                    "0" => $reg->getIdCalificacionPk(),
                    "1" => $reg->getIdPublicacionFk(),
                    "2" => $reg->getIdUsuarioFk(),
                    "3" => $reg->getPuntuacion(),
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