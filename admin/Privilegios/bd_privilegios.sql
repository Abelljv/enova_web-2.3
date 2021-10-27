-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.17-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para privilegios
CREATE DATABASE IF NOT EXISTS `privilegios` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `privilegios`;

-- Volcando estructura para tabla privilegios.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` double NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `url` varchar(256) DEFAULT NULL,
  `texto_Alt` varchar(80) DEFAULT NULL,
  `ancho` int(5) unsigned DEFAULT NULL,
  `alto` int(5) unsigned DEFAULT NULL,
  `idPadre` int(10) unsigned NOT NULL,
  `icono` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla privilegios.items: 51 rows
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `descripcion`, `url`, `texto_Alt`, `ancho`, `alto`, `idPadre`, `icono`) VALUES
	(1.1, 'Crear Usuarios', 'c_usuarios.php', 'Crear usuarios', 750, 420, 1, 1),
	(1.2, 'Modificar Usuarios', 'm_usuarios.php', 'Modificar usuario', 950, 500, 1, 2),
	(1.3, 'Privilegios de Usuarios', 'privilegios.php', 'Privilegios de usurio', 525, 585, 1, 4),
	(2.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 250, 780, 2, 2),
	(3.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 750, 275, 3, 1),
	(3.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 850, 400, 3, 2),
	(3.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 850, 400, 3, 3),
	(4.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 750, 375, 4, 1),
	(4.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 650, 410, 4, 2),
	(4.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 750, 275, 4, 3),
	(5.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 740, 270, 5, 1),
	(5.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 800, 480, 5, 2),
	(5.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 800, 450, 5, 3),
	(6.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 740, 270, 6, 1),
	(6.2, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 760, 400, 6, 3),
	(7.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 500, 295, 7, 1),
	(7.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 600, 410, 7, 2),
	(7.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 500, 160, 7, 3),
	(8.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 800, 325, 8, 1),
	(8.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 800, 400, 8, 2),
	(8.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 800, 400, 8, 3),
	(9.1, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 700, 250, 9, 2),
	(10.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 740, 300, 10, 1),
	(10.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 600, 300, 10, 2),
	(10.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 650, 200, 10, 3),
	(11.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 740, 270, 11, 1),
	(11.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 800, 450, 11, 3),
	(12.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 650, 250, 12, 1),
	(12.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 650, 300, 12, 2),
	(12.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 650, 300, 12, 3),
	(13.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 740, 350, 13, 1),
	(13.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 600, 410, 13, 2),
	(13.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 650, 200, 13, 3),
	(14.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 580, 275, 14, 1),
	(14.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 580, 320, 14, 2),
	(14.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 500, 160, 14, 3),
	(15.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 740, 350, 15, 1),
	(15.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 740, 410, 15, 2),
	(15.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 740, 250, 15, 3),
	(16.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 740, 270, 16, 1),
	(16.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 760, 400, 16, 2),
	(16.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 760, 400, 16, 3),
	(17.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 500, 295, 17, 1),
	(17.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 600, 410, 17, 2),
	(17.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 500, 160, 17, 3),
	(18.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 500, 295, 18, 1),
	(18.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 600, 410, 18, 2),
	(18.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 500, 160, 18, 3),
	(19.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 500, 295, 19, 1),
	(19.2, 'Descripcion de la Seccion 2', 'Link del formulario', 'Texto Alternativo', 600, 410, 19, 2),
	(19.3, 'Descripcion de la Seccion 3', 'Link del formulario', 'Texto Alternativo', 500, 160, 19, 3);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Volcando estructura para tabla privilegios.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla privilegios.menus: 19 rows
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `descripcion`) VALUES
	(1, 'Usuarios'),
	(2, 'Sección 1'),
	(3, 'Sección 2'),
	(4, 'Sección 3'),
	(5, 'Sección 4'),
	(6, 'Sección 5'),
	(7, 'Sección 6'),
	(8, 'Sección 7'),
	(9, 'Sección 8'),
	(10, 'Sección 9'),
	(11, 'Sección 10'),
	(12, 'Sección 11'),
	(13, 'Sección 12'),
	(14, 'Sección 13'),
	(15, 'Sección 14'),
	(16, 'Sección 15'),
	(17, 'Sección 16'),
	(18, 'Sección 17'),
	(19, 'Sección 18');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Volcando estructura para tabla privilegios.privilegios
CREATE TABLE IF NOT EXISTS `privilegios` (
  `usuario` varchar(80) NOT NULL,
  `idItem` double NOT NULL DEFAULT '0',
  `idPadre` int(10) unsigned NOT NULL,
  PRIMARY KEY (`usuario`,`idItem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla privilegios.privilegios: 57 rows
DELETE FROM `privilegios`;
/*!40000 ALTER TABLE `privilegios` DISABLE KEYS */;
INSERT INTO `privilegios` (`usuario`, `idItem`, `idPadre`) VALUES
	('5', 19.3, 19),
	('5', 19.2, 19),
	('5', 19.1, 19),
	('5', 18.3, 18),
	('5', 18.2, 18),
	('5', 18.1, 18),
	('5', 17.3, 17),
	('5', 17.2, 17),
	('5', 17.1, 17),
	('5', 16.3, 16),
	('5', 16.2, 16),
	('5', 16.1, 16),
	('5', 15.3, 15),
	('5', 15.2, 15),
	('5', 15.1, 15),
	('5', 14.3, 14),
	('5', 14.2, 14),
	('5', 14.1, 14),
	('5', 13.3, 13),
	('5', 13.2, 13),
	('5', 13.1, 13),
	('5', 12.3, 12),
	('5', 12.2, 12),
	('5', 12.1, 12),
	('5', 11.3, 11),
	('5', 11.2, 11),
	('5', 10.3, 10),
	('5', 10.2, 10),
	('5', 10.1, 10),
	('5', 9.1, 9),
	('5', 8.3, 8),
	('5', 8.2, 8),
	('5', 8.1, 8),
	('5', 7.3, 7),
	('5', 7.2, 7),
	('5', 7.1, 7),
	('5', 6.2, 6),
	('5', 6.1, 6),
	('5', 5.3, 5),
	('5', 5.2, 5),
	('5', 5.1, 5),
	('5', 4.3, 4),
	('5', 4.2, 4),
	('5', 4.1, 4),
	('5', 3.3, 3),
	('5', 3.2, 3),
	('5', 3.1, 3),
	('5', 2.2, 2),
	('5', 1.3, 1),
	('5', 1.2, 1),
	('5', 1.1, 1),
	('1', 1.1, 1),
	('1', 1.2, 1),
	('1', 3.1, 3),
	('1', 3.2, 3),
	('1', 5.1, 5),
	('1', 5.2, 5),
	('abelalmnza', 1.1, 1),
	('abelalmnza', 1.2, 1),
	('abelalmnza', 1.3, 1);
/*!40000 ALTER TABLE `privilegios` ENABLE KEYS */;

-- Volcando estructura para tabla privilegios.user_admin
CREATE TABLE IF NOT EXISTS `user_admin` (
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `login` varchar(80) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `activo` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla privilegios.user_admin: 2 rows
DELETE FROM `user_admin`;
/*!40000 ALTER TABLE `user_admin` DISABLE KEYS */;
INSERT INTO `user_admin` (`nombre`, `apellidos`, `login`, `password`, `email`, `activo`) VALUES
	('Fernando J', 'Diaz M', '5', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'fernandodiaz_19@hotmail.com', 1),
	('Juan Carlos', 'Perez Acosta', '1', '356a192b7913b04c54574d18c28d46e6395428ab', 'juan@hotmail.com', 1),
	('abel', 'almanza', 'abelalmnza', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'biscaino21@gmail.com', 1);
/*!40000 ALTER TABLE `user_admin` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
