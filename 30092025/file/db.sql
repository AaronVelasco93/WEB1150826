-- CREAR LA BASE DE DATOS
CREATE DATABASE crud_app;

-- seleccion de base de datos
USE crud_app;

--CREAR LA TABLA DE USUARIO
CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);


INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('1', 'aaron', 'aaronvelasvea@aragon.unam.mx', '5626198295');

INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('2', 'Yenifer', 'yen@aragon.unam.mx', '41256398');