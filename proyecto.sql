CREATE DATABASE proyectosql;
USE proyectosql;

CREATE TABLE usuarios(
id_Usuarios int auto_increment primary key,
cedula  varchar(100) not null ,
nombre VARCHAR(100)NOT NULL,
apellido1 VARCHAR (100)NOT NULL,
email varchar (100) NOT NULL,
contrasena varchar (255)not null,
edad tinyint not null,
direccion varchar (255)not null,
telefono varchar (255)not null ,
fecha_registro timestamp default current_timestamp

);

ALTER TABLE usuarios 
DROP COLUMN fecha_nacimiento;



ALTER TABLE usuarios
ADD COLUMN telefono varchar (255)not null ;


CREATE TABLE trabajos (
    id_Trabajos int auto_increment primary key,
    descripcion_trabajo TEXT NOT NULL,
    tipo_trabajo VARCHAR(100) NOT NULL,
    id_Contratista INT NOT NULL,
    id_Empleado INT, -- Relación con la tabla empleados
    estado VARCHAR(50) DEFAULT 'Pendiente', -- Estado del trabajo
    fecha_trabajo timestamp default current_timestamp,
    FOREIGN KEY (id_Contratista) REFERENCES usuarios(id_Usuarios), 
    FOREIGN KEY (id_Empleado) REFERENCES usuarios(id_Usuarios) 
);

CREATE TABLE direcciones (
    id_Direccion int auto_increment primary key,
    id_Usuario int NOT NULL, -- Relación con la tabla usuarios
    pais VARCHAR(100) NOT NULL,
    provincia VARCHAR(100) NOT NULL,
    canton VARCHAR(100) NOT NULL,
    distrito VARCHAR(100),
    direccion_detallada VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_Usuario) REFERENCES usuarios(id_Usuarios)
);

CREATE TABLE facturas (
    id_Factura int auto_increment primary key,
    id_Trabajo int NOT NULL,
    id_Empleado int NOT NULL,
    cantidad DECIMAL(10,2) NOT NULL,
    fecha_pago timestamp default current_timestamp,
    metodo_pago VARCHAR(50),
    estado_pago VARCHAR(50) DEFAULT 'Pendiente',
    FOREIGN KEY (id_Trabajo) REFERENCES trabajos(id_Trabajos),
    FOREIGN KEY (id_Empleado) REFERENCES usuarios(id_Usuarios)
);

CREATE TABLE roles (
    id_Rol int auto_increment primary key,
    nombre_rol VARCHAR(50) NOT NULL
);

CREATE TABLE usuario_roles (
    id_Usuario int NOT NULL,
    id_Rol int NOT NULL,
    FOREIGN KEY (id_Usuario) REFERENCES usuarios(id_Usuarios),
    FOREIGN KEY (id_Rol) REFERENCES roles(id_Rol)
);

CREATE TABLE experiencias_laborales (
    id_Experiencia int auto_increment primary key,
    id_Empleado int NOT NULL,
    empresa VARCHAR(100),
    puesto VARCHAR(100),
    fecha_inicio DATE,
    fecha_fin DATE,
    descripcion TEXT,
    FOREIGN KEY (id_Empleado) REFERENCES usuarios(id_Usuarios)
);

CREATE TABLE calificaciones (
    id_Calificacion int auto_increment primary key,
    id_Trabajo int NOT NULL,
    id_Empleado int NOT NULL,
    calificacion INT NOT NULL,
    comentario TEXT,
    fecha_calificacion timestamp default current_timestamp,
    FOREIGN KEY (id_Trabajo) REFERENCES trabajos(id_Trabajos),
    FOREIGN KEY (id_Empleado) REFERENCES usuarios(id_Usuarios)
);

SELECT * FROM usuarios;
DELETE FROM usuarios;

