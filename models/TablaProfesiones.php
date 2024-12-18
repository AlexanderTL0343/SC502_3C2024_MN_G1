<?php
session_start();
require_once '../config/Conexion.php';

class TablaProfe extends Conexion
{

    protected static $cnx;
    private $idProfesionPk; 
    private $nombreProfesion;

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

      public  function  getIdProfesionPk()
      {
          return $this->idProfesionPk;
      }
  
      public  function  getNombreProfesion()
      {
          return $this->nombreProfesion;
      }
  
      public function setIdProfesionPk($idProfesionPk){
          $this->idProfesionPk = $idProfesionPk;
      }
      public function setNombreProfesion($nombreProfesion){
          $this->nombreProfesion = $nombreProfesion;
      }

      public function listarTablaProfe()
      {
          $query = "SELECT * from Profesiones ";
          $arr = array();
          try {
              self::getConexion();
              
              $resultado = self::$cnx->prepare($query);
              $resultado->execute();
              self::desconectar();
              foreach ($resultado->fetchAll() as $encontrado) {
                  $client = new TablaProfe();
                  $client->setIdProfesionPk($encontrado['ID_PROFESION_PK']);
                  $client->setNombreProfesion($encontrado['NOMBRE_PROFESION']);
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

