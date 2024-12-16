<?php
session_start();
require_once '../config/Conexion.php';

class TablaPubli extends Conexion
{

    protected static $cnx;
    private $idPublicacionPk;
    private $idUsuarioFk;
    private $estado;
    private $tituloPublicacion;
    private $descripcion;
    private $fechaPublicacion;
    private $ubicacion;
    private $precioAprox;

    public function __construct() {}

    //Metodos de conexion y desconexion 

    public static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar()
    {
        self::$cnx = null;
    }

    // metodos set y get 

    public  function  getIdPublicacionesPk()
    {
        return $this->idPublicacionPk;
    }

    public  function  getIdUsuarioFk()
    {
        return $this->idUsuarioFk;
    }
    public  function  getEstado()
    {
        return $this->estado;
    }
    public  function  getTituloPublicacion()
    {
        return $this->tituloPublicacion;
    }
    public  function  getDescripcion()
    {
        return $this->descripcion;
    }
    public  function  getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }
    public  function  getUbicacion()
    {
        return $this->ubicacion;
    }
    public  function  getPrecioAprox()
    {
        return $this->precioAprox;
    }

    public function setIdPublicacionesPk($idPublicacionPk){
        $this->idPublicacionPk = $idPublicacionPk;
    }
    public function setIdUsuarioFk($idUsuarioFk){
        $this->idUsuarioFk = $idUsuarioFk;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setTituloPublicacion($tituloPublicacion){
        $this->tituloPublicacion = $tituloPublicacion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion = $fechaPublicacion;
    }
    public function setUbicacion($ubicacion){
        $this->ubicacion = $ubicacion;
    }
    public function setPrecioAprox($precioAprox){
        $this->precioAprox = $precioAprox;
    }

    //funcion para listar la tabla de los usuarios 

    public function listarTablaPubli()
    {
        $query = "SELECT * from publicaciones ";
        $arr = array();
        try {
            self::getConexion();
            
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $client = new TablaPubli();
                $client->setIdPublicacionesPk($encontrado['ID_PUBLICACION_PK']);
                $client->setIdUsuarioFk($encontrado['ID_USUARIO_FK']);
                $client->setTituloPublicacion($encontrado['TITULO_PUBLICACION']);
                $client->setDescripcion($encontrado['DESCRIPCION']);
                $client->setFechaPublicacion($encontrado['FECHA_PUBLICACION']);
                $client->setUbicacion($encontrado['UBICACION']);
                $client->setPrecioAprox($encontrado['PRECIO_APROX']);
                $client->setEstado($encontrado['ESTADO']);
                $arr[] = $client;
            }
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }
}

?>