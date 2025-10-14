-- crear la base de datos
CREATE DATABASE crud_app;

-- selecionar DB
USE crud_app;

-- crear la tabla
CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefo VARCHAR(15) NOT NULL
);


