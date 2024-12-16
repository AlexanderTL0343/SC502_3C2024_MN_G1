<?php
include '../models/TablaPublicaciones.php';

switch ($_GET['op']) {

case 'LlenarTablaPubli':
                $tabla = new TablaPubli();
                $clientes = $tabla->listarTablaPubli();
                $data = array();
                foreach ($clientes as $reg) {
                    $data[] = array(
                        "0" => $reg->getIdPublicacionesPk(),
                        "1" => $reg->getIdUsuarioFk(),
                        "2" => $reg->getTituloPublicacion(),
                        "3" => $reg->getDescripcion(),
                        "4" => $reg->getFechaPublicacion(),
                        "5" => $reg->getUbicacion(),
                        "6" => $reg->getPrecioAprox(),
                        "7" => $reg->getEstado(),
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