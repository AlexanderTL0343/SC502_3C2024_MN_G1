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

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function getProfesion()
    {
        return $this->profesion;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function getFacebook()
    {
        return $this->facebook;
    }

    public function getInstagram()
    {
        return $this->instagram;
    }

    public function getFechaRegistro()
    {
        return $this->fecha_registro;
    }

    public function getImagenUrl()
    {
        return $this->imagen_url;
    }

    //----------------Setters-----------------

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

    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;
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

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
    }

    public function setFechaRegistro($fecha_registro)
    {
        $this->fecha_registro = $fecha_registro;
    }

    public function setImagenUrl($imagen_url)
    {
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
            $res->bindParam(1, $this->idRol);
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

    public function iniciarSesion2($email, $contrasena)
    {
        $SQL = "SELECT ID_USUARIO_PK,NOMBRE_ROL,CEDULA_USUARIO,NOMBRE_USUARIO,APELLIDO1,APELLIDO2,
        PROFESION,EDAD,DIRECCION,TELEFONO,EMAIL,CONTRASENA,FACEBOOK,INSTAGRAM,FECHA_REGISTRO,IMAGEN_URL
        FROM USUARIOS U INNER JOIN ROLES R  ON U.ID_ROL_FK = R.ID_ROL_PK
        WHERE EMAIL = ? AND CONTRASENA = ?";
        try {
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
        } catch (PDOException $Exception) {
            self::desconectar(); //Esto lo robe del ejemplo crud
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }
    public function llenarCampos($id)
    {
        $query = "SELECT * FROM usuarios where id=:ID_USUARIO_PK";
        try {
            self::getConexion();
            $resultado = self::$conn->prepare($query);
            $resultado->bindParam(":ID_USUARIO_PK", $id, PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $this->setId($encontrado['ID_USUARIO_PK']);
                $this->setNombre($encontrado['NOMBRE_USUARIO']);
                $this->setEmail($encontrado['EMAIL']);
                $this->setProfesion($encontrado['PROFESION']);
                $this->setTelefono($encontrado['TELEFONO']);
                $this->setFacebook($encontrado['FACEBOOK']);
                $this->setInstagram($encontrado['INSTAGRAM']);
                $this->setDireccion($encontrado['DIRECCION']);
            }
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();;
            return json_encode($error);
        }
    }

    public function actualizarUsuario()
    {
        $query = "update USUARIOS set nombre=:NOMBRE_USUARIO',telefono=:TELEFONO,email=:EMAIL,instagram=:INSTAGRAM,facebook=:FACEBOOK,profesion=:PROFESION,imagen_url=:IMAGEN_URL,direccion=:DIRECCION
        where id=:ID_USUARIO_PK and email=:EMAIL";
        try {
            self::getConexion();
            $id = $this->getId();
            $email = $this->getEmail();
            $imagen_url = $this->getImagenUrl();
            $instagram = $this->getInstagram();
            $facebook = $this->getFacebook();
            $profesion = $this->getProfesion();
            $nombre = $this->getNombre();
            $telefono = $this->getTelefono();
            $direccion = $this->getDireccion();
            $resultado = self::$conn->prepare($query);
            $resultado->bindParam(":EMAIL", $email, PDO::PARAM_STR);
            $resultado->bindParam(":DIRECCION", $direccion, PDO::PARAM_STR);
            $resultado->bindParam(":INSTAGRAM", $instagram, PDO::PARAM_STR);
            $resultado->bindParam(":FACEBOOK", $facebook, PDO::PARAM_STR);
            $resultado->bindParam(":IMAGEN_URL", $imagen_url, PDO::PARAM_STR);
            $resultado->bindParam(":PROFESION", $profesion, PDO::PARAM_STR);
            $resultado->bindParam(":TELEFONO", $telefono, PDO::PARAM_STR);
            $resultado->bindParam(":NOMBRE_USUARIO", $nombre, PDO::PARAM_STR);
            $resultado->bindParam(":ID_USUARIO_PK", $id, PDO::PARAM_INT);
            self::$conn->beginTransaction(); //desactiva el autocommit
            $resultado->execute();
            self::$conn->commit(); //realiza el commit y vuelve al modo autocommit
            self::desconectar();
            return $resultado->rowCount();
        } catch (PDOException $Exception) {
            self::$conn->rollBack();
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return $error;
        }
    }
    public function verificarExistenciaDb()
    {
        $query = "SELECT * FROM USUARIOS where email=:EMAIL";
        try {
            self::getConexion();
            $resultado = self::$conn->prepare($query);
            $email = $this->getEmail();
            $resultado->bindParam(":EMAIL", $email, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            $encontrado = false;
            foreach ($resultado->fetchAll() as $reg) {
                $encontrado = true;
            }
            return $encontrado;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return $error;
        }
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //aqui pintamos los graficos 

    public function obtenerDatosGraficos()
    {
        $SQL = "SELECT count(*) as cantidad, NOMBRE_ROL FROM USUARIOS INNER JOIN ROLES ON USUARIOS.ID_ROL_FK = ROLES.ID_ROL_PK GROUP BY NOMBRE_ROL";
        try {
            self::getConexion();
            $res = self::$conn->prepare($SQL);
            $res->execute();
            self::desconectar();

            return $res->fetchAll();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode(["status" => false, "message" => $error]);
        }
    }

    public function obtenerUsuariosPorEdad()
    {
        $SQL = "SELECT count(*) as CANTIDAD, EDAD FROM USUARIOS GROUP BY EDAD";
        try {
            self::getConexion();
            $res = self::$conn->prepare($SQL);
            $res->execute();
            self::desconectar();

            return $res->fetchAll();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode(["status" => false, "message" => $error]);
        }
    }

    public function obtenerUsuariosPorProfesion()
    {
        $SQL = "SELECT  PROFESION,  COUNT(*) AS CANTIDAD FROM  USUARIOS GROUP BY PROFESION ORDER BY CANTIDAD;";
        try {
            self::getConexion();
            $res = self::$conn->prepare($SQL);
            $res->execute();
            self::desconectar();

            return $res->fetchAll();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode(["status" => false, "message" => $error]);
        }
    }
}

//codigo para probar que el modelo pinte los datos
//$usuario = new User();
//$resultado = $usuario->obtenerUsuariosPorProfesion();

//if (is_array($resultado)) {
    //foreach ($resultado as $fila) {
       // echo "Profesión: " . $fila['PROFESION'] . " - CANTIDAD: " . $fila['CANTIDAD'] . PHP_EOL;
   // }
//} else {
 //   echo "Error: " . $resultado;
//}