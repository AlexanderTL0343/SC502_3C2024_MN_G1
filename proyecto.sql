CREATE DATABASE proyectosql;
USE proyectosql;
/*------------------------------------------------Creacion de tablas------------------------------------------------*/
CREATE TABLE ROLES(
    ID_ROL_PK INT PRIMARY KEY AUTO_INCREMENT,
    NOMBRE_ROL VARCHAR(100) NOT NULL
);
CREATE TABLE USUARIOS(
    ID_USUARIO_PK INT PRIMARY KEY AUTO_INCREMENT,
    ID_ROL_FK INT,
    CEDULA_USUARIO INT NOT NULL,
    NOMBRE_USUARIO VARCHAR(100) NOT NULL,
    APELLIDO1 VARCHAR(100) NOT NULL,
    APELLIDO2 VARCHAR(100) NOT NULL,
    PROFESION VARCHAR(100) NOT NULL,
    EDAD INT NOT NULL,
    DIRECCION VARCHAR(300),
    TELEFONO VARCHAR(100),
    EMAIL VARCHAR(100) NOT NULL,
    CONTRASENA VARCHAR(100) NOT NULL,
    FACEBOOK VARCHAR(200),
    INSTAGRAM VARCHAR(200),
    FECHA_REGISTRO TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    IMAGEN_URL VARCHAR(300),
    /*POSIBLEMENTE A CAMBIAR*/
    FOREIGN KEY (ID_ROL_FK) REFERENCES ROLES(ID_ROL_PK)
);
CREATE TABLE CALIFICACION (
    ID_CALIFICACION_PK INT PRIMARY KEY AUTO_INCREMENT,
    ID_USUARIO_FK INT NOT NULL,
    PUNTUACION INT
);
CREATE TABLE PUBLICACIONES(
    ID_PUBLICACION_PK INT PRIMARY KEY AUTO_INCREMENT,
    ESTADO BOOLEAN,
    TITULO_PUBLICACION VARCHAR(100) NOT NULL,
    DESCRIPCION VARCHAR(1024) NOT NULL,
    FECHA_PUBLICACION TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    /*AGREGAR IMAGEN QUEDA PENDIENTE*/
    ID_USUARIO_FK INT NOT NULL,
    UBICACION VARCHAR(500) NOT NULL,
    PRECIO_APROX DOUBLE NOT NULL,
    ID_CALIFICACION_FK INT NOT NULL,
    FOREIGN KEY (ID_USUARIO_FK) REFERENCES USUARIOS(ID_USUARIO_PK),
    FOREIGN KEY (ID_CALIFICACION_FK) REFERENCES CALIFICACION(ID_CALIFICACION_PK)
);
/*------------------------------------------------INSERT DE PRUEBA------------------------------------------------*/
INSERT INTO ROLES(NOMBRE_ROL)
VALUES('ADMIN');
INSERT INTO ROLES(NOMBRE_ROL)
VALUES('POSTULANTE');
INSERT INTO ROLES(NOMBRE_ROL)
VALUES('RECLUTADOR');
SELECT *
FROM ROLES;
-- Insert 1
INSERT INTO USUARIOS(
        ID_ROL_FK,
        CEDULA_USUARIO,
        NOMBRE_USUARIO,
        APELLIDO1,
        APELLIDO2,
        PROFESION,
        EDAD,
        DIRECCION,
        TELEFONO,
        EMAIL,
        CONTRASENA
    )
VALUES (
        1,
        '123456789',
        'Brandon',
        'Aguirre',
        'Ortiz',
        'Ingeniero',
        19,
        'Calle Ficticia 123',
        '987654321',
        'test',
        'test'
    );
-- Insert 1
INSERT INTO USUARIOS(
        ID_ROL_FK,
        CEDULA_USUARIO,
        NOMBRE_USUARIO,
        APELLIDO1,
        APELLIDO2,
        PROFESION,
        EDAD,
        DIRECCION,
        TELEFONO,
        EMAIL,
        CONTRASENA
    )
VALUES (
        1,
        '123456789',
        'Juan',
        'Perez',
        'Lopez',
        'Ingeniero',
        30,
        'Calle Ficticia 123',
        '987654321',
        'juan.perez@example.com',
        'password'
    );
-- Insert 2
INSERT INTO USUARIOS(
        ID_ROL_FK,
        CEDULA_USUARIO,
        NOMBRE_USUARIO,
        APELLIDO1,
        APELLIDO2,
        PROFESION,
        EDAD,
        DIRECCION,
        TELEFONO,
        EMAIL,
        CONTRASENA
    )
VALUES (
        2,
        '987654321',
        'Maria',
        'Gomez',
        'Sanchez',
        'Medico',
        28,
        'Avenida Central 456',
        '654987123',
        'maria.gomez@example.com',
        'password'
    );
-- Insert 3
INSERT INTO USUARIOS(
        ID_ROL_FK,
        CEDULA_USUARIO,
        NOMBRE_USUARIO,
        APELLIDO1,
        APELLIDO2,
        PROFESION,
        EDAD,
        DIRECCION,
        TELEFONO,
        EMAIL,
        CONTRASENA
    )
VALUES (
        3,
        '456789123',
        'Carlos',
        'Martinez',
        'Ramirez',
        'Arquitecto',
        35,
        'Calle Real 789',
        '321654987',
        'carlos.martinez@example.com',
        'password'
    );
SELECT *
FROM USUARIOS;