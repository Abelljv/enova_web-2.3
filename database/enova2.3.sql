-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para enova_bd
CREATE DATABASE IF NOT EXISTS `enova_bd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `enova_bd`;

-- Volcando estructura para tabla enova_bd.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.admin: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `correo`, `usuario`, `password`) VALUES
	(1, 'enova@enova.com', 'EnovaTecnologia', '40335cb06fa26ca747678ed704fcd2e9');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `menu` varchar(50) NOT NULL DEFAULT '0',
  `grupo` varchar(50) DEFAULT NULL,
  `img` text,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.categorias: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `nombre`, `menu`, `grupo`, `img`) VALUES
	(1, 'Computadores', 'menu_computadores', 'grupo_computadores', 'assets/img/tienda/categorias/pcescritorio.jpg'),
	(2, 'Portatiles', 'menu_portatiles', 'grupo_portatiles', 'assets/img/tienda/categorias/portatiles.jpg'),
	(3, 'Camaras de Seguridad', '0', 'grupo_camaras', 'assets/img/tienda/categorias/camara-ccd-sony-domo-exterior.jpg\r\n'),
	(4, 'Imsumos de impresion', '0', 'grupo_insumos', 'assets/img/tienda/categorias/insumos.jpg'),
	(5, 'Accesorios de computadores', '0', '', 'assets/img/tienda/categorias/portatiles.jpg');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.grupo_camaras
CREATE TABLE IF NOT EXISTS `grupo_camaras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `condicion` varchar(50) NOT NULL,
  `resolucion` varchar(50) NOT NULL,
  `led` int(11) NOT NULL,
  `material` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `precio` int(11) NOT NULL,
  `oferta` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grupo_camaras_categorias` (`id_categoria`),
  CONSTRAINT `FK_grupo_camaras_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_camaras: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_camaras` DISABLE KEYS */;
INSERT INTO `grupo_camaras` (`id`, `nombre`, `modelo`, `referencia`, `marca`, `color`, `condicion`, `resolucion`, `led`, `material`, `img`, `precio`, `oferta`, `descripcion`, `cantidad`, `fecha_ingreso`, `id_categoria`) VALUES
	(2, 'Camara Seguridad', 'ghk-23n', '', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 34000, '0', 'Ninguno', 34, '2018-05-25', 3),
	(3, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(4, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(5, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(6, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(7, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(8, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(9, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(10, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(11, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(12, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(13, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(14, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(15, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(16, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3),
	(17, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '1200 x 720', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 45000, '0', 'Ninguna', 34, '2018-05-22', 3);
/*!40000 ALTER TABLE `grupo_camaras` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.grupo_computadores
CREATE TABLE IF NOT EXISTS `grupo_computadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `condicion` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `board` varchar(50) NOT NULL,
  `procesador` varchar(50) NOT NULL,
  `puertos` varchar(50) NOT NULL,
  `velocidad_procesador` varchar(50) NOT NULL,
  `sistema_operativo` varchar(50) NOT NULL,
  `memoria` varchar(50) NOT NULL,
  `tipo_memoria` varchar(50) NOT NULL,
  `disco_duro` varchar(50) NOT NULL,
  `monitor` varchar(50) NOT NULL,
  `pulgada` varchar(50) NOT NULL,
  `resolucion` varchar(50) NOT NULL,
  `teclado` varchar(50) NOT NULL,
  `mouse` varchar(50) NOT NULL,
  `fuente` varchar(50) NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `img` text NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grupo_compu_categorias` (`id_categoria`),
  CONSTRAINT `FK_grupo_compu_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_computadores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_computadores` DISABLE KEYS */;
INSERT INTO `grupo_computadores` (`id`, `nombre`, `modelo`, `marca`, `color`, `condicion`, `descripcion`, `board`, `procesador`, `puertos`, `velocidad_procesador`, `sistema_operativo`, `memoria`, `tipo_memoria`, `disco_duro`, `monitor`, `pulgada`, `resolucion`, `teclado`, `mouse`, `fuente`, `unidad`, `precio`, `oferta`, `img`, `fecha_ingreso`, `cantidad`, `id_categoria`) VALUES
	(1, 'Computador Dell', 'optiplex 1100', 'Dell', 'Negro', 'Nuevo', 'Ninguna', 'Asrock', 'Intel i3', 'USB 3.0', '3.0', 'Windows 10', '8 GB ', 'DDR4', '1T Sata', 'LCD', '21 pulgadas', '1280 x 1200', 'Usb', 'Usb', '500V', 'Optoca DVD Sata', 1400000, 0, 'assets/img/tienda/productos/computadores/pcescritorio.jpg', '2018-05-09 19:29:48', 12, 1),
	(82, 'Portatil SONY', 'VAIO', 'Acer', 'Blanco', 'Nuevo', 'Ninguno', 'Asrock 76-gf-2', 'intel core i7', '6', '3.9 ghz', 'Windos 10', '8 GB', 'DDR4', 'SSD 250 GB', 'LCD', '14 Pugadas', '1200 x 1280', 'Usb', 'usb', 'Atx-750 Watts 20-24 Pines Para Computador', 'Unidad interna DVD HP', 2450000, 0, 'assets/img/tienda/productos/computadores/pcescritorio.jpg', '2018-05-31 00:00:00', 21, 1);
/*!40000 ALTER TABLE `grupo_computadores` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.grupo_insumos
CREATE TABLE IF NOT EXISTS `grupo_insumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `img` text NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__categorias` (`id_categoria`),
  CONSTRAINT `FK__categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_insumos: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_insumos` DISABLE KEYS */;
INSERT INTO `grupo_insumos` (`id`, `nombre`, `marca`, `referencia`, `cantidad`, `descripcion`, `precio`, `oferta`, `img`, `fecha_ingreso`, `id_categoria`) VALUES
	(1, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(2, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(3, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(4, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(5, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(6, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(7, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(8, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(9, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(10, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(11, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(12, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(13, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(14, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(15, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(16, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(17, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4),
	(18, 'Cartucho de impresiÃ³n', 'HP', 'GH-12', 50, 'Ninguno', 50000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-05-25 00:00:00', 4);
/*!40000 ALTER TABLE `grupo_insumos` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.grupo_portatiles
CREATE TABLE IF NOT EXISTS `grupo_portatiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `procesador` varchar(50) NOT NULL,
  `velocidad_procesador` varchar(50) NOT NULL,
  `sistema_operativo` varchar(50) NOT NULL,
  `memoria` varchar(50) NOT NULL,
  `tipo_memoria` varchar(50) NOT NULL,
  `disco_duro` varchar(50) NOT NULL,
  `pulgada` varchar(50) NOT NULL,
  `pantalla` varchar(50) NOT NULL,
  `resolucion` varchar(50) NOT NULL,
  `peso` varchar(50) NOT NULL,
  `conectividad` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `condicion` varchar(50) NOT NULL,
  `tecnologia` varchar(50) NOT NULL,
  `bateria` varchar(50) NOT NULL,
  `tipo_bateria` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `img` text NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grupo_pcs_categorias` (`id_categoria`),
  CONSTRAINT `FK_grupo_pcs_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_portatiles: ~22 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo_portatiles` DISABLE KEYS */;
INSERT INTO `grupo_portatiles` (`id`, `nombre`, `modelo`, `marca`, `procesador`, `velocidad_procesador`, `sistema_operativo`, `memoria`, `tipo_memoria`, `disco_duro`, `pulgada`, `pantalla`, `resolucion`, `peso`, `conectividad`, `color`, `condicion`, `tecnologia`, `bateria`, `tipo_bateria`, `descripcion`, `precio`, `oferta`, `img`, `fecha_ingreso`, `cantidad`, `id_categoria`) VALUES
	(1, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(2, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(3, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(4, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(5, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(6, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 1200000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(7, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 1200000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(8, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(9, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(10, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(11, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(158, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(159, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(160, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(161, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(162, 'Portatil', 'VAIO', 'SONY', 'intel core i7', '3.0Ghz', 'Windows 10', '32 gb', 'DDR4', '512 SSD + 2 TB DDS', '14 Pugadas', 'LED 4K', '2840 x 1980', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Plateado', 'Nuevo', 'Full HD', '5000 mlA', 'litio, ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/hp20160201273_1.png', '2018-05-24 00:00:00', 23, 2),
	(163, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 1200000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(164, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 1200000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(165, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(166, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(167, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2),
	(168, 'Portatil ', 'VAIO', 'SONY', 'Intel Core i7 Octava Generacion', '3.9 ghz', 'Windows 8', '32 gb', 'DDR3', 'SSD 250 GB', '14 Pulgadas', 'LCD', '1200 x 1280', '1,5kg', 'WIFI, BLUETOOHT, NFS, GPS, GLONASS', 'Negro', 'Nuevo', 'Full HD', '3500mlA', 'Litio, Ion', 'Ninguna', 2950000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-05-25 00:00:00', 21, 2);
/*!40000 ALTER TABLE `grupo_portatiles` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.menu_computadores
CREATE TABLE IF NOT EXISTS `menu_computadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.menu_computadores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `menu_computadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_computadores` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.menu_portatiles
CREATE TABLE IF NOT EXISTS `menu_portatiles` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `FK_menu_portatiles_categorias` (`id_categoria`),
  CONSTRAINT `FK_menu_portatiles_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.menu_portatiles: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `menu_portatiles` DISABLE KEYS */;
INSERT INTO `menu_portatiles` (`id_menu`, `menu`, `id_categoria`) VALUES
	(1, 'Sistema Operativo', 4),
	(2, 'Procesador', 4),
	(3, 'Memoria RAM', 4),
	(4, 'Disco Duro', 4),
	(5, 'Pantalla', 4),
	(6, 'Resolucion', 4),
	(7, 'Peso', 4),
	(8, 'Conectividad', 4),
	(9, 'Marca', 4),
	(10, 'Modelo', 4),
	(11, 'Tamaño de Pantalla', 4),
	(12, 'Color', 4),
	(13, 'Bateria', 4),
	(14, 'Tipo Bateria', 4),
	(15, 'Condicion', 4);
/*!40000 ALTER TABLE `menu_portatiles` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.sistema_operativo
CREATE TABLE IF NOT EXISTS `sistema_operativo` (
  `id_so` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_so`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.sistema_operativo: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `sistema_operativo` DISABLE KEYS */;
INSERT INTO `sistema_operativo` (`id_so`, `nombre`) VALUES
	(1, 'Windos 10'),
	(2, 'Windows 8'),
	(3, 'Windows 7'),
	(4, 'Ubuntu'),
	(5, 'Mac OS');
/*!40000 ALTER TABLE `sistema_operativo` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.slider_home
CREATE TABLE IF NOT EXISTS `slider_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.slider_home: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `slider_home` DISABLE KEYS */;
INSERT INTO `slider_home` (`id`, `img`) VALUES
	(1, 'assets/img/slider_home/slider1_1.jpg'),
	(2, 'assets/img/slider_home/slider2_1.jpg'),
	(3, 'assets/img/slider_home/slider3_1.jpg');
/*!40000 ALTER TABLE `slider_home` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
