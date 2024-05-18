DROP SCHEMA IF EXISTS `ProyectoSI`;
CREATE SCHEMA IF NOT EXISTS `ProyectoSI` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE `ProyectoSI`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` text NOT NULL,
  `email` text NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (1, 'Carlos','5672893415', 'Carlos@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (2, 'Andrea','5510213257', 'Andrea@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (3, 'Daira', '5587989015', 'Daira@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (4, 'Frutis','5678963215', 'Frutis@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (5, 'Marin','5673285639', 'Marin@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (6, 'Alan','5572398567', 'Alan@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (7, 'Alejandro','5634217865', 'Alejandro@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (8, 'Dairo','5574437267', 'Dairo@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (9, 'Yandel','5542538643','Yandel@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (10, 'Axel','5542275175', 'Axel@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (11, 'Max','5743875645', 'Max@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (12, 'Derek','5542756413', 'Derek@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (13, 'Ale','5598764175', 'Ale@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (14, 'Valeria','5542865375','Valeria@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (15, 'Desiree','5678432798', 'Desiree@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (16, 'Yoselin','5542237539', 'Yoselin@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (17, 'Jimena','5576890043', 'Jimena@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (18, 'Ernesto','5542756475', 'Ernesto@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (19, 'brenda','5674279064', 'brenda@gmail.com', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`email`, `password`)  VALUES (20, 'brandon','5678996430', 'brandon@gmail.com', '123456');


