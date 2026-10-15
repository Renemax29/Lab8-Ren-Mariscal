
DROP DATABASE IF EXISTS lab8_web;
CREATE DATABASE lab8_web CHARACTER SET utf8mb4;
USE lab8_web;

CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cedula VARCHAR(20) NOT NULL UNIQUE,
    nombre VARCHAR(60) NOT NULL,
    apellido VARCHAR(60) NOT NULL,
    codigo VARCHAR(8) NOT NULL,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO estudiantes (cedula, nombre, apellido, codigo)
VALUES ('8-1015-1565', 'René', 'Mariscal', 'TEMP0000');
