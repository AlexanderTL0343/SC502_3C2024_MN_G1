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
    private $email;
    private $contrasena;
    private $edad;
    private $direccion;
    private $telefono;


    //Constructor
    public function __construct() {}

    //Getters
    public function getId()
    {
        return $this->id;
    }
    public function getIdRol()
    {
        return $this->idRol;
    }
    public function getCedula()
    {
        return $this->cedula;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido1()
    {
        return $this->apellido1;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getContrasena()
    {
        return $this->contrasena;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    //Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
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
            self::desconectar(); //Esto lo robe del ejemplo crud
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }


    public function iniciarSesion2($email, $contrasena){
        $SQL = "SELECT ID_USUARIOS,NOMBRE_ROL,CEDULA,NOMBRE,APELLIDO1,EMAIL,CONTRASENA,EDAD,DIRECCION,TELEFONO,FECHA_REGISTRO
                FROM USUARIOS U INNER JOIN ROLES R 
                ON U.ID_ROL_FK = R.ID_ROL WHERE EMAIL = ? AND CONTRASENA = ?";     
        try{
            self::getConexion();
            $res = self::$conn->prepare($SQL);
            $res->bindParam(1, $email);
            $res->bindParam(2, $contrasena);
            $res->execute();
            self::desconectar();
            $res = $res->fetch();

            if ($res) {
                $_SESSION['usuario'] = ['idUsuario' => $res['ID_USUARIOS'],
                                        'nombreRol' => $res['NOMBRE_ROL'],
                                        'cedula' => $res['CEDULA'],
                                        'nombre' => $res['NOMBRE'],
                                        'apellido1' => $res['APELLIDO1'],
                                        'email' => $res['EMAIL'],
                                        'contrasena' => $res['CONTRASENA'],
                                        'edad' => $res['EDAD'],
                                        'direccion' => $res['DIRECCION'],
                                        'telefono' => $res['TELEFONO'],
                                        'fecha_registro' => $res['FECHA_REGISTRO']
                                        ];

                //$_SESSION['Rol'] = $res['NOMBRE_ROL'];
                
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
