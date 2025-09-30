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

INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('3', 'Yorch', 'yorch@aragon.unam.mx', '234224323');
INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('4', 'Jonthan', 'jonathan@aragon.unam.mx', '234234234');
INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('5', 'Maria del Carmen', 'carmen@aragon.unam.mx', '4456546546');
INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('6', 'Felipe Eleazar', 'apa@aragon.unam.mx', '43452124');