<?php
require_once '../models/UserModel.php';

switch ($_GET['op']) {
    case 'getDatosGraficos':
        $usuario = new User();
        $datos = $usuario->obtenerDatosGraficos();
        echo $datos;
        break;

    case 'getUsuariosPorEdad':
        $usuario = new User();
        $datos = $usuario->obtenerUsuariosPorEdad();
        echo $datos;
        break;
   
}
