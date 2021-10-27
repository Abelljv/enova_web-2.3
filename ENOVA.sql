-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.36-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para enova_bd
CREATE DATABASE IF NOT EXISTS `enova_bd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `enova_bd`;

-- Volcando estructura para tabla enova_bd.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.articulos: ~0 rows (aproximadamente)
DELETE FROM `articulos`;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `menu` varchar(50) NOT NULL DEFAULT '0',
  `grupo` varchar(50) DEFAULT NULL,
  `img` text,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.categorias: ~5 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `nombre`, `menu`, `grupo`, `img`) VALUES
	(1, 'Computadores', 'menu_computadores', 'grupo_computadores', 'assets/img/tienda/categorias/pcescritorio.jpg'),
	(2, 'Portatiles', 'menu_portatiles', 'grupo_portatiles', 'assets/img/tienda/categorias/portatiles.jpg'),
	(3, 'Camaras de Seguridad', '0', 'grupo_camaras', 'assets/img/tienda/categorias/camara.jpg\r\n'),
	(4, 'Imsumos de impresion', '0', 'grupo_insumos', 'assets/img/tienda/categorias/impresora.jpg'),
	(5, 'Accesorios de computadores', '0', 'grupo_accesorios', 'assets/img/tienda/categorias/accesorios.jpg');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.creditos
CREATE TABLE IF NOT EXISTS `creditos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `valor` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `articulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vivienda` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fpago` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombref` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidof` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccionf` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonof` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombrep` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidop` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccionp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonop` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombrec` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedulac` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccionc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonoc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombrecf` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidocf` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccioncf` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonocf` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombrecp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidocp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccioncp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonocp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permisoCont` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permiso1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permisoAdmin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla enova_bd.creditos: ~4 rows (aproximadamente)
DELETE FROM `creditos`;
/*!40000 ALTER TABLE `creditos` DISABLE KEYS */;
INSERT INTO `creditos` (`id`, `valor`, `articulo`, `fecha`, `descripcion`, `nombre`, `apellido`, `cedula`, `direccion`, `telefono`, `cargo`, `vivienda`, `fpago`, `nombref`, `apellidof`, `direccionf`, `telefonof`, `nombrep`, `apellidop`, `direccionp`, `telefonop`, `nombrec`, `apellidoc`, `cedulac`, `direccionc`, `telefonoc`, `nombrecf`, `apellidocf`, `direccioncf`, `telefonocf`, `nombrecp`, `apellidocp`, `direccioncp`, `telefonocp`, `permisoCont`, `permiso1`, `permisoAdmin`) VALUES
	(7, '70000000', 'Computador De Mesa', '2018-11-17', 'TABLET GRATIS', 'juan', 'Almanza', '123456789', 'normandia', '3185427178', '1', 'Vivienda', 'Semanal-8 dias', 'favian', 'Gonzalez', 'bersel', '3137076975', 'brayan', 'martinez', 'campiÃ±a', '31142524343', 'sebastian', 'morales', '25910705', 'villamady', '312456789', 'stolfo', 'nieto', 'la terrasa', '315248693', 'sebastian ', 'guzman', 'raton', '32152451455', 'APROBADO', 'YA CUMPLE', ''),
	(8, '800000', 'Computador De Mesa', '2018-11-15', 'tarjeta de red', 'MARIO ', 'gomez', '1102864157', 'CALLE 24 75 12', '2802264', '1', 'Vivienda', 'Semanal-8 dias', 'LUIS', 'torres', 'CL 45 78 98', '3004567891', 'OLGA', ' RODRIGUEZ', 'CLL 78 12 45', '30078941236', 'OSCAR', 'mendez', '789456123', 'cll 12 35 64', '3157894125', 'luis ', 'torres', 'cl 78 12 45', '30286417512', 'sebastian ', 'saltra', 'cll 34 12 38`', '323568798', 'En Espera', 'POR MOTIVOS EXTERNOS', ''),
	(10, '1000000', 'Camarra De Seguridad', '2018-11-20', 'LIBNOU', 'Pepito', 'Perez', '646', 'CALLE 24 75 12', '3012584796', '1', 'Vivienda', 'Quincenal-15 dias', 'OJPIHI', 'BUIOBBUO', 'BVIUO', '6/86', 'HBUB', '844', 'BUBUB', '4414', ' BI B', ' BJ', '56816', 'BNUB', '6464', 'JK', 'BIB', 'OU BOLB', '894+48', 'NOLNUONO', 'NONIONI', 'NONIO', '68168', 'Aprobado', 'Aprobado', ''),
	(11, '650000', 'Computador De Mesa', '2018-11-23', 'COMPUTADOR DE ESCRITORIO.MONITOR DE 19 PULGADAS', 'PEDRO', 'ALVAREZ', '25718272', 'CRA 43#48-13', '2713928', '4', 'Vivienda', 'Semanal-8 dias', 'EDUADRO', 'ALVAREZ', 'CRA 14#32-58', '321454588', 'MANUEL ', 'MENDEZ', 'CRA 15#32-25', '30215455', 'MIGUEL', 'MENDOZA', '3008371085', 'BARRIO CRESPO', '3271398', 'OSCAR ', 'MIZGER', 'CRA 25-63-32', '365145245', 'MANUEL', 'MEDRANO', 'CRA 15#-24', '2713928', 'NIEGA', 'ESTA HERRADA LA INFORMACION', '');
/*!40000 ALTER TABLE `creditos` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.estadocredito
CREATE TABLE IF NOT EXISTS `estadocredito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.estadocredito: ~2 rows (aproximadamente)
DELETE FROM `estadocredito`;
/*!40000 ALTER TABLE `estadocredito` DISABLE KEYS */;
INSERT INTO `estadocredito` (`id`, `nombre`, `id_nombre`) VALUES
	(1, 'En Espera', 'En Espera'),
	(2, 'Aprobado', 'Aprobado'),
	(3, 'Denegado', 'Denegado');
/*!40000 ALTER TABLE `estadocredito` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.finan_articulo
CREATE TABLE IF NOT EXISTS `finan_articulo` (
  `id_articulo` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_art` varchar(50) NOT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.finan_articulo: ~4 rows (aproximadamente)
DELETE FROM `finan_articulo`;
/*!40000 ALTER TABLE `finan_articulo` DISABLE KEYS */;
INSERT INTO `finan_articulo` (`id_articulo`, `nombre`, `id_art`) VALUES
	(1, 'Computador De Mesa', 'Computador De Mesa'),
	(2, 'Portatiles', 'Portatiles'),
	(3, 'Camarra De Seguridad', 'Camarra De Seguridad'),
	(4, 'Otros..', 'Otros..');
/*!40000 ALTER TABLE `finan_articulo` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.fpago
CREATE TABLE IF NOT EXISTS `fpago` (
  `id_pago` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_pa` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.fpago: ~4 rows (aproximadamente)
DELETE FROM `fpago`;
/*!40000 ALTER TABLE `fpago` DISABLE KEYS */;
INSERT INTO `fpago` (`id_pago`, `nombre`, `id_pa`) VALUES
	(1, 'Semanal-8 dias', 'Semanal-8 dias'),
	(2, 'Quincenal-15 dias', 'Quincenal-15 dias'),
	(3, 'Mensual-30 dias', 'Mensual-30 dias'),
	(4, 'Otro..', 'Otro..');
/*!40000 ALTER TABLE `fpago` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.grupo_accesorios
CREATE TABLE IF NOT EXISTS `grupo_accesorios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `referencia` varchar(250) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `condicion` varchar(50) NOT NULL,
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
  CONSTRAINT `grupo_accesorios_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla enova_bd.grupo_accesorios: ~3 rows (aproximadamente)
DELETE FROM `grupo_accesorios`;
/*!40000 ALTER TABLE `grupo_accesorios` DISABLE KEYS */;
INSERT INTO `grupo_accesorios` (`id`, `nombre`, `referencia`, `marca`, `color`, `condicion`, `material`, `img`, `precio`, `oferta`, `descripcion`, `cantidad`, `fecha_ingreso`, `id_categoria`) VALUES
	(22, 'Diademas', '32GH-4', 'SONY', 'Negro', 'Nuevo', 'Plastico', 'assets/img/tienda/productos/accesorios/sony-MDR-XB9501B-frontal-min.png', 120000, '0', 'Ninguna', 30, '2018-06-06', 5),
	(23, 'Diademas', '32GH-4', 'SONY', 'Negro', 'Nuevo', 'Plastico', 'assets/img/tienda/productos/accesorios/sony-MDR-XB9501B-frontal-min.png', 120000, '0', 'Ninguna', 30, '2018-06-06', 5),
	(24, 'Diademas', '32GH-4', 'SONY', 'Negro', 'Nuevo', 'Plastico', 'assets/img/tienda/productos/accesorios/sony-MDR-XB9501B-frontal-min.png', 120000, '0', 'Ninguna', 30, '2018-06-06', 5);
/*!40000 ALTER TABLE `grupo_accesorios` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_camaras: ~0 rows (aproximadamente)
DELETE FROM `grupo_camaras`;
/*!40000 ALTER TABLE `grupo_camaras` DISABLE KEYS */;
INSERT INTO `grupo_camaras` (`id`, `nombre`, `modelo`, `referencia`, `marca`, `color`, `condicion`, `resolucion`, `led`, `material`, `img`, `precio`, `oferta`, `descripcion`, `cantidad`, `fecha_ingreso`, `id_categoria`) VALUES
	(1, 'Camara Seguridad', 'Dahua Tipo Domo', '32GH-4', 'Dahua', 'Blanco', 'Nuevo', '2840 x 1980', 12, 'Plastico', 'assets/img/tienda/productos/camaras/camara-ccd-sony-domo-exterior.jpg', 54000, '0', 'Ninguna', 25, '2018-06-15', 3);
/*!40000 ALTER TABLE `grupo_camaras` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.grupo_computadores
CREATE TABLE IF NOT EXISTS `grupo_computadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `condicion` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `board` varchar(50) NOT NULL,
  `procesador` varchar(50) NOT NULL,
  `velocidad_procesador` varchar(50) NOT NULL,
  `puertos` varchar(50) NOT NULL,
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
  `fecha_ingreso` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grupo_compu_categorias` (`id_categoria`),
  CONSTRAINT `FK_grupo_compu_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_computadores: ~2 rows (aproximadamente)
DELETE FROM `grupo_computadores`;
/*!40000 ALTER TABLE `grupo_computadores` DISABLE KEYS */;
INSERT INTO `grupo_computadores` (`id`, `nombre`, `modelo`, `marca`, `color`, `condicion`, `descripcion`, `board`, `procesador`, `velocidad_procesador`, `puertos`, `sistema_operativo`, `memoria`, `tipo_memoria`, `disco_duro`, `monitor`, `pulgada`, `resolucion`, `teclado`, `mouse`, `fuente`, `unidad`, `precio`, `oferta`, `img`, `fecha_ingreso`, `cantidad`, `id_categoria`) VALUES
	(1, 'Computador de escritorio', 'Lenovo all in one', 'Lenovo', 'Blanco', 'Nuevo', 'Ninguna hasta el momento', 'Asrock 34hg-56', 'intel core i7', '3.9 ghz', '5', 'Windos 10', '32 gb', 'DDR3', 'SSD 250 GB', 'LCD', '14 Pugadas', '2840 x 1980', 'Usb', 'Inalambrico', 'Atx750 Watts 2024', 'Unidad interna DVD SONY', 2300000, 0, 'assets/img/tienda/productos/computadorespcescritorio.jpg', '2018-06-19', 22, 1),
	(2, 'dada', 'ihiohoi', 'hih', 'ihi', 'ihi', 'bjb', 'iibib', 'bbub', 'bibu', '8', 'Windos 10', 'buib', 'bii', 'ibi', 'bib', 'ibi', '1000  1300', 'dfdqs', 'iubiu', 'bbu', 'bubu', 2500000, 0, 'assets/img/tienda/productos/computadores/11.jpg', '2018-08-16', 6, 5);
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
  `fecha_ingreso` date NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__categorias` (`id_categoria`),
  CONSTRAINT `FK__categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_insumos: ~2 rows (aproximadamente)
DELETE FROM `grupo_insumos`;
/*!40000 ALTER TABLE `grupo_insumos` DISABLE KEYS */;
INSERT INTO `grupo_insumos` (`id`, `nombre`, `marca`, `referencia`, `cantidad`, `descripcion`, `precio`, `oferta`, `img`, `fecha_ingreso`, `id_categoria`) VALUES
	(1, 'Cartucho de impresion color negro', 'Hp', 'GH-12', 85, 'Ninguna', 34000, -2, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-06-15', 4),
	(2, 'Cartucho de impresion', 'HP', 'fhk-34-rg', 30, 'Ninguno', 35000, 0, 'assets/img/tienda/productos/insumos/u_00779416.jpg', '2018-06-14', 4);
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
  `fecha_ingreso` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grupo_pcs_categorias` (`id_categoria`),
  CONSTRAINT `FK_grupo_pcs_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.grupo_portatiles: ~2 rows (aproximadamente)
DELETE FROM `grupo_portatiles`;
/*!40000 ALTER TABLE `grupo_portatiles` DISABLE KEYS */;
INSERT INTO `grupo_portatiles` (`id`, `nombre`, `modelo`, `marca`, `procesador`, `velocidad_procesador`, `sistema_operativo`, `memoria`, `tipo_memoria`, `disco_duro`, `pulgada`, `pantalla`, `resolucion`, `peso`, `conectividad`, `color`, `condicion`, `tecnologia`, `bateria`, `tipo_bateria`, `descripcion`, `precio`, `oferta`, `img`, `fecha_ingreso`, `cantidad`, `id_categoria`) VALUES
	(1, 'Portatil SONY', '15-bs017la', 'SONY', 'Intel Core i7', '3.9 ghz', 'Seleccione el sistema operativos', '8 GB', 'DDR4', '512 SSD', '14 Pugadas', 'LED 4K', '1200 x 1280', '3 kg', 'WIFI, BLUETOOHT', 'Negro', 'Nuevo', 'Full HD', '5000 mlA', 'Litio, Ion', 'Ninguna', 1400000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-06-15', 50, 2),
	(2, 'Portatil Hp', 'All-in-one', 'HP', 'intel core i7', '3,0Ghz', 'Seleccione el sistema operativos', '8 GB', 'DDR4', 'SSD 250 GB', '14 Pugadas', 'LED 4K', '1200 x 1280', '1,5kg', 'bluethoo, WIFI, Lan', 'Negro', 'Nuevo', 'Full HD', '5000 mlA', 'Litio, Ion', 'Ninguno', 2300000, 0, 'assets/img/tienda/productos/portatiles/2EG28PA-1.png', '2018-06-15', 5, 2);
/*!40000 ALTER TABLE `grupo_portatiles` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.items
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

-- Volcando datos para la tabla enova_bd.items: 14 rows
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `descripcion`, `url`, `texto_Alt`, `ancho`, `alto`, `idPadre`, `icono`) VALUES
	(1.1, 'Crear Usuarios', '../uploadInfo/usuarios/crear_usuarios.php', 'Crear Usuarios', 1750, 1420, 1, 1),
	(1.2, 'Modificar Usuarios', '../uploadInfo/usuarios/listar_usuarios.php', 'Modificar Usuario', 1950, 1500, 1, 2),
	(1.3, 'Privilegios de Usuarios', '../admin/Privilegios/privilegios.php', 'Privilegios de Usurio', 1525, 1585, 1, 4),
	(2.1, 'Descripcion de Computadores', 'computadores/listar_computadores.php', 'Listar Computadores', 750, 275, 2, 3),
	(3.1, 'Descripcion de Portatiles', 'portatiles/listar_portatiles.php', 'Listar Portatiles', 750, 275, 3, 1),
	(4.1, 'Descripcion de Camaras', 'camaras/listar_camaras.php', 'Listar Camaras', 750, 375, 4, 2),
	(5.1, 'Descripcion de Insumos', 'insumosImpresion/listar_insumos.php', 'Listar Insumos', 740, 270, 5, 3),
	(6.1, 'Descripcion de Accesorios', 'accesorios/listar_accesorios.php', 'Listar Accesorios', 740, 270, 6, 1),
	(7.1, 'Descripcion de Baner de Inicio', 'slider/listar_slider.php', 'Listar Slider', 500, 295, 7, 2),
	(8.1, 'Descripcion de Baner de Servicios', 'slider_servicios/listar_sliderService.php', 'Texto Alternativo', 800, 325, 8, 3),
	(9.1, 'Descripcion de  Baner de Creditos', 'creditos/listar_credito.php', 'Listar SilderServicios', 700, 250, 9, 1),
	(10.1, ' Descripcion de Creditos_En_Proceso', 'creditos/listar_credito2.php', 'Creditos_En_Proceso', 740, 300, 10, 2),
	(12.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 1650, 1250, 12, 1),
	(11.1, 'Descripcion de la Seccion 1', 'Link del formulario', 'Texto Alternativo', 650, 250, 11, 3);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla enova_bd.menus: 12 rows
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `descripcion`) VALUES
	(1, 'Usuarios'),
	(2, 'Deskop'),
	(3, 'Portatiles'),
	(4, 'Camaras'),
	(5, 'Insumos'),
	(6, 'Accesorios'),
	(7, 'Baner_Inicio'),
	(8, 'Baner_Servicio'),
	(9, 'Baner_Credito'),
	(10, 'Creditos_En_Proceso'),
	(11, 'Sección 11'),
	(12, 'Sección 12');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.menu_computadores
CREATE TABLE IF NOT EXISTS `menu_computadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.menu_computadores: ~0 rows (aproximadamente)
DELETE FROM `menu_computadores`;
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
DELETE FROM `menu_portatiles`;
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

-- Volcando estructura para tabla enova_bd.pcargo
CREATE TABLE IF NOT EXISTS `pcargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_c` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.pcargo: ~5 rows (aproximadamente)
DELETE FROM `pcargo`;
/*!40000 ALTER TABLE `pcargo` DISABLE KEYS */;
INSERT INTO `pcargo` (`id_cargo`, `nombre`, `id_c`) VALUES
	(1, '1', '1'),
	(2, '2', '2'),
	(3, '3', '3'),
	(4, '4', '4'),
	(5, 'Mas de 5', 'Mas de 5');
/*!40000 ALTER TABLE `pcargo` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.privilegios
CREATE TABLE IF NOT EXISTS `privilegios` (
  `usuario` varchar(80) NOT NULL,
  `idItem` double NOT NULL DEFAULT '0',
  `idPadre` int(10) unsigned NOT NULL,
  PRIMARY KEY (`usuario`,`idItem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla enova_bd.privilegios: 71 rows
DELETE FROM `privilegios`;
/*!40000 ALTER TABLE `privilegios` DISABLE KEYS */;
INSERT INTO `privilegios` (`usuario`, `idItem`, `idPadre`) VALUES
	('1', 10.1, 10),
	('5', 12.1, 12),
	('2', 1.1, 1),
	('2', 1.2, 1),
	('2', 1.3, 1),
	('5', 1.3, 1),
	('5', 1.2, 1),
	('5', 1.1, 1),
	('', 1.3, 1),
	('', 1.2, 1),
	('', 1.1, 1),
	('3', 19.3, 19),
	('3', 19.2, 19),
	('3', 19.1, 19),
	('3', 18.3, 18),
	('3', 18.2, 18),
	('3', 18.1, 18),
	('3', 17.3, 17),
	('3', 17.2, 17),
	('3', 17.1, 17),
	('3', 16.3, 16),
	('3', 16.2, 16),
	('3', 16.1, 16),
	('3', 15.3, 15),
	('3', 15.2, 15),
	('3', 15.1, 15),
	('3', 14.3, 14),
	('3', 14.2, 14),
	('3', 14.1, 14),
	('3', 13.3, 13),
	('3', 13.2, 13),
	('3', 13.1, 13),
	('3', 12.3, 12),
	('3', 12.2, 12),
	('3', 12.1, 12),
	('3', 11.3, 11),
	('3', 11.2, 11),
	('3', 10.3, 10),
	('3', 10.2, 10),
	('3', 10.1, 10),
	('3', 9.1, 9),
	('3', 8.3, 8),
	('3', 8.2, 8),
	('3', 8.1, 8),
	('3', 7.3, 7),
	('3', 7.2, 7),
	('3', 7.1, 7),
	('3', 6.2, 6),
	('3', 6.1, 6),
	('3', 5.3, 5),
	('3', 5.2, 5),
	('3', 5.1, 5),
	('3', 4.3, 4),
	('3', 4.2, 4),
	('3', 4.1, 4),
	('3', 3.3, 3),
	('3', 3.2, 3),
	('3', 3.1, 3),
	('3', 1.1, 1),
	('3', 1.2, 1),
	('3', 1.3, 1),
	('5', 11.1, 11),
	('5', 10.1, 10),
	('5', 9.1, 9),
	('5', 8.1, 8),
	('5', 7.1, 7),
	('5', 6.1, 6),
	('5', 5.1, 5),
	('5', 2.1, 2),
	('5', 3.1, 3),
	('5', 4.1, 4);
/*!40000 ALTER TABLE `privilegios` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.sistema_operativo
CREATE TABLE IF NOT EXISTS `sistema_operativo` (
  `id_so` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_so`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.sistema_operativo: ~5 rows (aproximadamente)
DELETE FROM `sistema_operativo`;
/*!40000 ALTER TABLE `sistema_operativo` DISABLE KEYS */;
INSERT INTO `sistema_operativo` (`id_so`, `nombre`) VALUES
	(1, 'Windos 10'),
	(2, 'Windows 8'),
	(3, 'Windows 7'),
	(4, 'Ubuntu'),
	(5, 'Mac OS');
/*!40000 ALTER TABLE `sistema_operativo` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.slider_credito
CREATE TABLE IF NOT EXISTS `slider_credito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.slider_credito: ~0 rows (aproximadamente)
DELETE FROM `slider_credito`;
/*!40000 ALTER TABLE `slider_credito` DISABLE KEYS */;
/*!40000 ALTER TABLE `slider_credito` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.slider_home
CREATE TABLE IF NOT EXISTS `slider_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.slider_home: ~3 rows (aproximadamente)
DELETE FROM `slider_home`;
/*!40000 ALTER TABLE `slider_home` DISABLE KEYS */;
INSERT INTO `slider_home` (`id`, `img`) VALUES
	(1, 'assets/img/slider_home/banner1.jpg'),
	(2, 'assets/img/slider_home/banner2.jpg'),
	(3, 'assets/img/slider_servicios/slider2_1.jpg');
/*!40000 ALTER TABLE `slider_home` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.slider_servicios
CREATE TABLE IF NOT EXISTS `slider_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla enova_bd.slider_servicios: ~3 rows (aproximadamente)
DELETE FROM `slider_servicios`;
/*!40000 ALTER TABLE `slider_servicios` DISABLE KEYS */;
INSERT INTO `slider_servicios` (`id`, `img`) VALUES
	(1, 'assets/img/slider_servicios/banner2.jpg'),
	(2, 'assets/img/slider_servicios/banner_2.jpg'),
	(3, 'assets/img/slider_servicios/slider2_1.jpg');
/*!40000 ALTER TABLE `slider_servicios` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.tvivienda
CREATE TABLE IF NOT EXISTS `tvivienda` (
  `id_vivienda` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_v` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_vivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.tvivienda: ~3 rows (aproximadamente)
DELETE FROM `tvivienda`;
/*!40000 ALTER TABLE `tvivienda` DISABLE KEYS */;
INSERT INTO `tvivienda` (`id_vivienda`, `nombre`, `id_v`) VALUES
	(1, 'Casa Propia', 'Casa Propia'),
	(2, 'Casa Familiar', 'Casa Familiar'),
	(3, 'Arendada', 'Arendada');
/*!40000 ALTER TABLE `tvivienda` ENABLE KEYS */;

-- Volcando estructura para tabla enova_bd.user_admin
CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla enova_bd.user_admin: ~5 rows (aproximadamente)
DELETE FROM `user_admin`;
/*!40000 ALTER TABLE `user_admin` DISABLE KEYS */;
INSERT INTO `user_admin` (`id`, `nombre`, `apellido`, `cedula`, `login`, `password`, `ciudad`, `estado`) VALUES
	(4, 'Fabian ', 'perez ortiz', '1102864195', '5', 'a87ff679a2f3e71d9181a67b7542122c', 'Sincelejo', 1),
	(5, 'luis', 'guerra', '110864195', '3', 'e4da3b7fbbce2345d7772b0674a318d5', 'sincelejo', 1),
	(12, 'juan sebastian', 'morales dorado', '1100789456', '2', 'c20ad4d76fe97759aa27a0c99bff6710', 'sincelejo', 1),
	(13, 'xxxxxxxxxx', 'perez', '1', '1', 'c51ce410c124a10e0db5e4b97fc2af39', 'sincelejo', 1),
	(14, 'sacarias', 'pilas', '110287456158', '6', 'aab3238922bcc25a6f606eb525ffdc56', 'monteria', 1);
/*!40000 ALTER TABLE `user_admin` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
