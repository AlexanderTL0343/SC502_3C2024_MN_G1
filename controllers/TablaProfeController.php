<?php
include '../models/TablaProfesiones.php';


switch ($_GET['op']) {
 case 'LlenarTablaProfe':
    $tabla = new TablaProfe();
    $clientes = $tabla->listarTablaProfe();
    $data = array();
    foreach ($clientes as $reg) {
        $data[] = array(
            "0" => $reg->getIdProfesionPk(),
            "1" => $reg->getNombreProfesion(),
            "2" => '<button class="btn btn-warning" id="modificarProfesion">Modificar</button>  '.
                                '<button class="btn btn-danger" id="eliminarProfesion">Eliminar</button> '
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