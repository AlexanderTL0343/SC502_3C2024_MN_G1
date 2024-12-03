<?php
session_start();
require_once '../config/Conexion.php';

class User extends Conexion
{
    protected static $conn;
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


    //Constructor
    public function __construct() {}

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

    //----------------Métodos-----------------

    public static function getConexion()
    {
        self::$conn = Conexion::conectar();
    }

    public static function desconectar()
    {
        self::$conn = null;
    }

    public function insertarUsuario()
    {
        $SQL = "INSERT INTO USUARIOS(ID_ROL_FK,CEDULA_USUARIO, NOMBRE_USUARIO, APELLIDO1, APELLIDO2, PROFESION, EDAD, DIRECCION, TELEFONO, EMAIL, CONTRASENA, IMAGEN_URL) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

        try {
            self::getConexion();
            $res = self::$conn->prepare($SQL);
            $res->bindParam(1,$this->idRol);
            $res->bindParam(2, $this->cedula);
            $res->bindParam(3, $this->nombre);
            $res->bindParam(4, $this->apellido1);
            $res->bindParam(5, $this->apellido2);
            $res->bindParam(6, $this->profesion);
            $res->bindParam(7, $this->edad);
            $res->bindParam(8, $this->direccion);
            $res->bindParam(9, $this->telefono);
            $res->bindParam(10, $this->email);
            $res->bindParam(11, $this->contrasena);
            $res->bindParam(12, $this->imagen_url);

            $res->execute();
            self::desconectar();
            return true;
        } catch (PDOException $Exception) {
            self::desconectar(); //Esto lo robe del ejemplo crud
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }


    public function iniciarSesion2($email, $contrasena){
        $SQL = "SELECT ID_USUARIO_PK,NOMBRE_ROL,CEDULA_USUARIO,NOMBRE_USUARIO,APELLIDO1,APELLIDO2,
        PROFESION,EDAD,DIRECCION,TELEFONO,EMAIL,CONTRASENA,FACEBOOK,INSTAGRAM,FECHA_REGISTRO,IMAGEN_URL
        FROM USUARIOS U INNER JOIN ROLES R  ON U.ID_ROL_FK = R.ID_ROL_PK
        WHERE EMAIL = ? AND CONTRASENA = ?";
        try{
            self::getConexion();
            $res = self::$conn->prepare($SQL);
            $res->bindParam(1, $email);
            $res->bindParam(2, $contrasena);
            $res->execute();
            self::desconectar();
            $res = $res->fetch();
            
            if ($res) {
                $_SESSION['usuario'] = 
                [
                    'idUsuario' => $res['ID_USUARIO_PK'],
                    'nombreRol' => $res['NOMBRE_ROL'],
                    'cedula' => $res['CEDULA_USUARIO'],
                    'nombre' => $res['NOMBRE_USUARIO'],
                    'apellido1' => $res['APELLIDO1'],
                    'apellido2' => $res['APELLIDO2'],
                    'profesion' => $res['PROFESION'],
                    'edad' => $res['EDAD'],
                    'direccion' => $res['DIRECCION'],
                    'telefono' => $res['TELEFONO'],
                    'email' => $res['EMAIL'],
                    'contrasena' => $res['CONTRASENA'],
                    'facebook' => $res['FACEBOOK'],
                    'instagram' => $res['INSTAGRAM'],
                    'fecha_registro' => $res['FECHA_REGISTRO'],
                    'imagen_url' => $res['IMAGEN_URL']
                ]; 
                               
                return true;
            }
            return false;
        }catch(PDOException $Exception){
            self::desconectar(); //Esto lo robe del ejemplo crud
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );
            return json_encode($error);
        }

    }
}
