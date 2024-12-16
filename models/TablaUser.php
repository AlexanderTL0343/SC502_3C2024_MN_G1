<?php
session_start();
require_once '../config/Conexion.php';

class TablaUser extends Conexion
{

    protected static $cnx;
    private $id;
    private $idRol;
    private $cedula;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $profesion;
    private $edad;
    private $direccion;
    private $telefono;
    private $email;
    private $contrasena;
    private $facebook;
    private $instagram;
    private $fecha_registro;
    private $imagen_url;

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

    public function getId(){
        return $this->id;
    }

    public function getIdRol(){
        return $this->idRol;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function getNombre(){
        return $this->nombre;    
    }

    public function getApellido1(){
        return $this->apellido1;
    }

    public function getApellido2(){
        return $this->apellido2;
    }

    public function getProfesion(){
        return $this->profesion;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getContrasena(){
        return $this->contrasena;
    }

    public function getFacebook(){
        return $this->facebook;
    }

    public function getInstagram(){
        return $this->instagram;
    }

    public function getFechaRegistro(){
        return $this->fecha_registro;
    }

    public function getImagenUrl(){
        return $this->imagen_url;
    }

    //----------------Setters-----------------

    public function setId($id){
        $this->id = $id;
    }

    public function setIdRol($idRol){
        $this->idRol = $idRol;
    }

    public function setCedula($cedula){
        $this->cedula = $cedula;    
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1){
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2){
        $this->apellido2 = $apellido2;
    }

    public function setProfesion($profesion){
        $this->profesion = $profesion;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setDireccion($direccion){ 
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setEmail($email){
        $this->email = $email; 
    }

    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    public function setFacebook($facebook){
        $this->facebook = $facebook;  
    }

    public function setInstagram($instagram){
        $this->instagram = $instagram;
    }

    public function setFechaRegistro($fecha_registro){
        $this->fecha_registro = $fecha_registro; 
    }

    public function setImagenUrl($imagen_url){
        $this->imagen_url = $imagen_url;
    }

    //funcion para listar la tabla de los usuarios 

    public function listarTablaUser()
    {
        $query = "SELECT * FROM usuarios ";
        $arr = array();
        try {
            self::getConexion();
            
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $client = new TablaUser();
                $client->setId($encontrado['ID_USUARIO_PK']);
                $client->setNombre($encontrado['NOMBRE_USUARIO']);
                $client->setEdad($encontrado['EDAD']);
                $client->setEmail($encontrado['EMAIL']);
                $client->setProfesion($encontrado['PROFESION']);
                $client->setFechaRegistro($encontrado['FECHA_REGISTRO']);
                $client->setIdRol($encontrado['ID_ROL_FK']);
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