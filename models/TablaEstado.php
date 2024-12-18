ID_ESTADO_PK 
NOMBRE_ESTADO 
DESCRIPCION 
    <?php
session_start();
require_once '../config/Conexion.php';

class TablaEstados extends Conexion
{

    protected static $cnx;

}