-- donde exista una BD con el mismo nombre la elimina
drop schema if exists `veterinaria`;

-- se crear la DB 
create schema  if not exists `veterinaria` default  character set utf8 collate  utf8_spanish2_ci;
USE `veterinaria`; 

-- se crea la tabla Usuario
CREATE TABLE usuario (
    id_empleado INT PRIMARY KEY AUTO_INCREMENT, -- Clave empleado (PK) autoincremental
    nombre_completo VARCHAR(100) NOT NULL,      -- Nombre completo del usuario
    correo VARCHAR(100) NOT NULL UNIQUE,        -- Correo electrónico único
    numero VARCHAR(20),                         -- Número de teléfono opcional
    password VARCHAR(255) NOT NULL,             -- Contraseña
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP -- Fecha de registro con valor por defecto
);

-- se crea la tabla mascota
CREATE TABLE mascota (
    id_mascota INT PRIMARY KEY ,        -- Clave mascota (PK) autoincremental
    nombre VARCHAR(50) NOT NULL,                      -- Nombre de la mascota
    edad INT,                                         -- Edad de la mascota
    tipo VARCHAR(50),                                 -- Tipo de mascota (ej.: perro, gato)
    raza VARCHAR(50),                                 -- Raza de la mascota
    color VARCHAR(50),                                -- Color de la mascota
    peso DECIMAL(5,2),                                -- Peso de la mascota en kg
    fecha_ingreso DATETIME DEFAULT CURRENT_TIMESTAMP, -- Fecha de ingreso con valor por defecto
    nombre_dueno VARCHAR(100) NOT NULL              -- Nombre del dueño
);

-- inserción de datos
INSERT INTO usuario (nombre_completo, correo, numero, password) VALUES
('Juan Pérez', 'juan.perez@example.com', '5551234567', 'password1'),
('Ana Gómez', 'ana.gomez@example.com', '5559876543', 'password2'),
('Carlos López', 'carlos.lopez@example.com', '5556781234', 'password3'),
('María Sánchez', 'maria.sanchez@example.com', '5554321987', 'password4'),
('Luis Fernández', 'luis.fernandez@example.com', '5558765432', 'password5');

INSERT INTO mascota (id_mascota, nombre, edad, tipo, raza, color, peso, nombre_dueno) VALUES
(1, 'Firulais', 3, 'Perro', 'Labrador', 'Marrón', 25.50, 'Juan Pérez'),
(2, 'Michi', 2, 'Gato', 'Siames', 'Blanco', 4.20, 'Ana Gómez'),
(3, 'Rex', 5, 'Perro', 'Pastor Alemán', 'Negro', 30.00, 'Carlos López'),
(4, 'Bolita', 1, 'Conejo', 'Enano', 'Gris', 2.50, 'María Sánchez'),
(5, 'Luna', 4, 'Gato', 'Persa', 'Negro', 4.00, 'Luis Fernández'),
(6, 'Tommy', 3, 'Perro', 'Bulldog', 'Blanco', 23.50, 'Juan Pérez'),
(7, 'Manchas', 6, 'Perro', 'Dálmata', 'Blanco y Negro', 27.00, 'Ana Gómez'),
(8, 'Kiki', 2, 'Ave', 'Loro', 'Verde', 0.90, 'Carlos López'),
(9, 'Pelusa', 3, 'Gato', 'Angora', 'Gris', 3.80, 'María Sánchez'),
(10, 'Max', 7, 'Perro', 'Golden Retriever', 'Dorado', 29.00, 'Luis Fernández');