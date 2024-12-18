<?php
session_start();
require_once '../config/Conexion.php';

class TablaCate extends Conexion
{

    protected static $cnx;
    private $idCategorianPk; 
    private $nombreCategoria;
    private $descripcion;

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

      public  function  getIdCategoriaPk()
      {
          return $this->idCategorianPk;
      }
  
      public  function  getNombreCategoria()
      {
          return $this->nombreCategoria;
      }

      public  function  getDescripcion()
      {
          return $this->descripcion;
      }
  
      public function setIdCategoriaPk($idCategorianPk){
          $this->idCategorianPk = $idCategorianPk;
      }
      public function setNombreCategoria($nombreCategoria){
          $this->nombreCategoria = $nombreCategoria;
      }
      public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

      public function listarTablaCate()
      {
          $query = "SELECT * from CATEGORIAS ";
          $arr = array();
          try {
              self::getConexion();
              
              $resultado = self::$cnx->prepare($query);
              $resultado->execute();
              self::desconectar();
              foreach ($resultado->fetchAll() as $encontrado) {
                  $client = new TablaCate();
                  $client->setIdCategoriaPk($encontrado['ID_CATEGORIA_PK']);
                  $client->setNombreCategoria($encontrado['NOMBRE_CATEGORIA']);
                  $client->setDescripcion($encontrado['DESCRIPCION']);
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
