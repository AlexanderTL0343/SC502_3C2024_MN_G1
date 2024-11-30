<?php
    require_once '../config/Conexion.php';

    Class User extends Conexion{
        protected static $conn;
        private $id;
        private $cedula;
        private $nombre;
        private $apellido1;
        private $email;
        private $contrasena;
        private $edad;
        private $direccion;
        private $telefono;


        //Constructor
        public function __construct(){}

        //Getters
        public function getId(){
            return $this->id;
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
        public function getEmail(){
            return $this->email;
        }
        public function getContrasena(){
            return $this->contrasena;
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

        //Setters
        public function setId($id){
            $this->id = $id;
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
        public function setEmail($email){
            $this->email = $email;
        }
        public function setContrasena($contrasena){
            $this->contrasena = $contrasena;
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

        //----------------Métodos-----------------

        public static function getConexion(){
            self::$conn = Conexion::conectar();
        }

        public static function desconectar(){
            self::$conn = null;
        }

        public function insertarUsuario(){
            $SQL = "INSERT INTO usuarios(cedula,nombre,apellido1,email,contrasena,edad,direccion,telefono) VALUES(?,?,?,?,?,?,?,?)";

            try {
                self::getConexion();
                $res = self::$conn->prepare($SQL);
                $res->bindParam(1, $this->cedula);
                $res->bindParam(2, $this->nombre);
                $res->bindParam(3, $this->apellido1);
                $res->bindParam(4, $this->email);
                $res->bindParam(5, $this->contrasena);
                $res->bindParam(6, $this->edad);
                $res->bindParam(7, $this->direccion);
                $res->bindParam(8, $this->telefono);
                
                $res->execute();
                self::desconectar();
                return true;
                          
            } catch (PDOException $Exception) {
                self::desconectar();//Esto lo robe del ejemplo crud
                $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );
                return json_encode($error);
            }
        }
    }
?>