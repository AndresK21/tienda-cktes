-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2018 a las 03:17:52
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cktes`
--
CREATE DATABASE IF NOT EXISTS `cktes` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `cktes`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `inic_sesion_admin` (IN `p0` VARCHAR(120), IN `p1` VARCHAR(80))  NO SQL
SELECT Count(*) FROM empleado WHERE id_permiso = 1 AND correo_electronico = (p0) AND contrasena = (p1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inic_sesion_usuario` (IN `p0` VARCHAR(120), IN `p1` VARCHAR(80))  NO SQL
SELECT Count(*) FROM empleado WHERE id_permiso = 2 AND correo_electronico = (p0) AND contrasena = (p1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ventas_cliente` (IN `p0` INT)  NO SQL
SELECT detalle_carrito.cantidad, productos.nombre, carrito.fecha FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN productos USING(id_producto) WHERE id_cliente = (p0)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `estado_carrito` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `fecha`, `id_cliente`, `estado_carrito`) VALUES
(1, '2018-05-14', 1, NULL),
(2, '2018-05-14', 2, NULL),
(3, '2018-05-14', 3, NULL),
(4, '2018-05-14', 4, NULL),
(5, '2018-05-14', 5, NULL),
(6, '2018-05-14', 6, NULL),
(7, '2018-05-14', 7, NULL),
(8, '2018-05-14', 8, NULL),
(9, '2018-05-14', 9, NULL),
(10, '2018-05-14', 10, NULL),
(11, '2018-05-14', 11, NULL),
(12, '2018-05-14', 12, NULL),
(13, '2018-05-14', 13, NULL),
(14, '2018-05-14', 14, NULL),
(15, '2018-05-14', 15, NULL),
(16, '2018-05-14', 16, NULL),
(17, '2018-05-14', 17, NULL),
(18, '2018-05-14', 18, NULL),
(19, '2018-05-14', 19, NULL),
(20, '2018-05-14', 20, NULL),
(21, '2018-05-16', NULL, NULL),
(22, '2018-05-30', NULL, NULL),
(23, '2018-05-30', NULL, 5),
(24, '2018-06-04', NULL, NULL),
(25, '2018-06-04', NULL, 5),
(26, '2018-09-03', NULL, NULL),
(27, '2018-09-03', NULL, 5),
(28, '2018-09-03', NULL, NULL),
(29, '2018-09-05', NULL, 6),
(30, '2018-09-05', NULL, 5),
(31, '2018-09-05', NULL, 5),
(32, '2018-09-17', 26, NULL),
(33, '2018-09-17', 26, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_electronico` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `url_imagen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contador` int(2) NOT NULL,
  `fecha_bloqueo` datetime DEFAULT NULL,
  `fecha_registro` date NOT NULL,
  `autenticacion` int(4) DEFAULT NULL,
  `ip` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_autenticacion` int(2) NOT NULL,
  `dui` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `nrc` varchar(18) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividad` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `encargado` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo_encargado` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_tipo_cliente` int(11) DEFAULT NULL,
  `estado_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombres`, `apellidos`, `correo_electronico`, `contrasena`, `url_imagen`, `contador`, `fecha_bloqueo`, `fecha_registro`, `autenticacion`, `ip`, `estado_autenticacion`, `dui`, `nit`, `nrc`, `actividad`, `direccion`, `encargado`, `cargo_encargado`, `id_tipo_cliente`, `estado_cliente`) VALUES
(1, 'Joseph', 'Mcpherson', 'Etiam@Namconsequat.org', 'lacus. Ut', 'justo nec', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 4),
(2, 'Skyler', 'Ferguson', 'montes.nascetur@hotmail.org', 'eu enim.', 'Morbi', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 3),
(3, 'Armand', 'Mason', 'vel.convallis@orcitinciduntadipiscing.co.uk', 'euismod', 'ac turpis', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 3),
(4, 'Oprah', 'Joseph', 'ultricies.ornare.elit@risusodio.co.uk', 'tellus eu', 'orci', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 3),
(5, 'Nola', 'Reed', 'lacinia@laoreetipsumCurabitur.co.uk', 'vel est', 'auctor', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 3),
(6, 'Cleo', 'Larsen', 'auctor.ullamcorper@est.net', 'a', 'volutpat. Nulla', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 3),
(7, 'Connor', 'Flowers', 'cubilia.Curae@velit.org', 'ac turpis', 'a,', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 4),
(8, 'Scott', 'Ballard', 'at.iaculis@musDonec.org', 'bibendum', 'congue, elit', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 3),
(9, 'Dylan', 'Orr', 'sit.amet@auctorveliteget.com', 'semper', 'pede. Nunc', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 3),
(10, 'Jessica', 'Collier', 'interdum.non@loremauctor.net', 'id, ante.', 'nibh', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 4),
(11, 'Steel', 'Massey', 'Vivamus.euismod@hotmail.org', 'a, dui.', 'enim, gravida', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 3),
(12, 'Ignatius', 'Huffman', 'volutpat.Nulla@ultrices.ca', 'est', 'ipsum.', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 3),
(13, 'Haley', 'Mccarthy', 'non.feugiat@lobortisquam.edu', 'vehicula aliquet', 'justo eu', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 3),
(14, 'Warren', 'Mejia', 'et.magnis@augueeutellus.co.uk', 'sollicitudin', 'nulla vulputate', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 3),
(15, 'Madaline', 'Brown', 'vehicula@imperdietnec.net', 'elit,', 'Donec', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 4),
(16, 'Anastasia', 'Frost', 'tincidunt.dui@eget.edu', 'porttitor scelerisque', 'vel', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 4),
(17, 'Fleur', 'Lopez', 'eu.elit.Nulla@laoreet.net', 'dolor', 'Aenean', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 3),
(18, 'Justin', 'Blackburn', 'congue@necleoMorbi.net', 'tempor arcu.', 'Quisque purus', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 1, 4),
(19, 'Elizabeth', 'Blackburn', 'urna@musDonecdignissim.ca', 'Mauris nulla.', 'varius', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 4),
(20, 'Nelle', 'Spears', 'libero.Integer.in@turpis.ca', 'magna.', 'iaculis quis,', 0, NULL, '0000-00-00', NULL, NULL, 0, '', '', NULL, '', '', NULL, NULL, 2, 3),
(26, 'Andres Oswaldo', 'Henriquez Gomez', 'andresdosmil@gmail.com', '$2y$10$6V75oVqho/4StPh9wr94/OTCwXCmyawlmcl1QTokNTxOKciZy0RFW', 'no-user.png', 0, NULL, '2018-09-17', 3595, '89j7j9lh1165govv1il2vllph5', 1, '06015522-1', '0614-040300-140-4', NULL, 'Estudia', 'Mi casa', NULL, NULL, 1, 3);

--
-- Disparadores `clientes`
--
DELIMITER $$
CREATE TRIGGER `cliente-carrito` AFTER INSERT ON `clientes` FOR EACH ROW BEGIN

DECLARE cliente1 int;
DECLARE fecha1 date;

SET cliente1 = (SELECT MAX(id_cliente) FROM clientes);
SET fecha1 = CURRENT_DATE;

INSERT INTO carrito(fecha, id_cliente) VALUES(fecha1, cliente1);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo`
--

CREATE TABLE `desarrollo` (
  `id_desarrollo` int(11) NOT NULL,
  `mensaje` varchar(550) COLLATE utf8_spanish_ci NOT NULL,
  `archivo` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_tipo_desarrollo` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `desarrollo`
--

INSERT INTO `desarrollo` (`id_desarrollo`, `mensaje`, `archivo`, `id_tipo_desarrollo`, `id_cliente`) VALUES
(1, 'Este es un mensaje de la idea', '5b16b00a15f44.zip', 1, 26),
(2, 'Otro mensaje de idea', '5b16b00a15f44.zip', 2, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_carrito`
--

CREATE TABLE `detalle_carrito` (
  `id_detalle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_carrito` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_carrito`
--

INSERT INTO `detalle_carrito` (`id_detalle`, `cantidad`, `id_carrito`, `id_producto`) VALUES
(1, 7, 14, 13),
(2, 7, 8, 4),
(3, 3, 9, 18),
(4, 4, 19, 1),
(5, 9, 11, 12),
(6, 4, 18, 20),
(7, 3, 15, 19),
(8, 6, 2, 7),
(9, 3, 18, 5),
(10, 7, 2, 1),
(11, 5, 14, 10),
(12, 4, 7, 19),
(13, 4, 1, 16),
(14, 8, 10, 8),
(15, 2, 14, 3),
(16, 7, 20, NULL),
(17, 10, 12, 14),
(18, 10, 10, 15),
(19, 6, 13, 10),
(20, 7, 6, 3),
(21, 7, 1, 1),
(22, 1, 29, 1),
(23, 4, 29, 8),
(24, 2, 33, 2);

--
-- Disparadores `detalle_carrito`
--
DELIMITER $$
CREATE TRIGGER `cantidad-productos` AFTER INSERT ON `detalle_carrito` FOR EACH ROW BEGIN

DECLARE cantidad1 int;
DECLARE producto1 int;

SET cantidad1 = (SELECT cantidad FROM detalle_carrito WHERE id_detalle = (SELECT MAX(id_detalle) FROM detalle_carrito));

SET producto1 = (SELECT id_producto FROM detalle_carrito WHERE id_detalle = (SELECT MAX(id_detalle) FROM detalle_carrito));

UPDATE productos Set cantidad = cantidad - cantidad1 WHERE id_producto = producto1;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombres` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `estado` int(2) DEFAULT NULL,
  `fecha_bloqueo` datetime DEFAULT NULL,
  `contador` int(2) NOT NULL,
  `ip` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `autenticacion` int(4) DEFAULT NULL,
  `estado_autenticacion` int(2) NOT NULL,
  `id_permiso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombres`, `apellidos`, `imagen`, `correo_electronico`, `contrasena`, `fecha_registro`, `estado`, `fecha_bloqueo`, `contador`, `ip`, `autenticacion`, `estado_autenticacion`, `id_permiso`) VALUES
(26, 'Andres Oswaldo', 'Henriquez Gomez', '5b89f9e4877c5.jpg', 'andresdosmil@gmail.com', '$2y$10$tEESMEYYQL60.NSsPwamLuSN8zRtC1ZFQOm3l5jBsmbN34TEgf3IS', '2018-09-18 00:00:00', 1, '2018-09-01 09:10:42', 0, 'vg903rshjejod7n5etidpeqlg0', 5126, 1, 1),
(27, 'hola', 'hola', '5ba006510bcda.png', 'andresdosmilg@gmailc.om', '$2y$10$tfhq4ifrqW1LAuOkLIIgRePyo42.0V/FqF6W0WaSl3FEgc0cUDRZu', '2018-09-17 00:00:00', 0, '2018-09-17 01:54:39', 0, NULL, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`, `id_tipo_estado`) VALUES
(1, 'En existencia', 1),
(2, 'Sin existencias', 1),
(3, 'Activo', 3),
(4, 'Inactivo', 3),
(5, 'En proceso', 4),
(6, 'Finalizado', 4),
(7, 'Pedido nuevo', 5),
(8, 'Completado', 5),
(9, 'Importacion nueva', 6),
(10, 'Importacion completada', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `importacion_especial`
--

CREATE TABLE `importacion_especial` (
  `id_importacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_estimada` date DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `importacion_especial`
--

INSERT INTO `importacion_especial` (`id_importacion`, `fecha`, `nombre`, `cantidad`, `fecha_estimada`, `id_cliente`, `id_estado`) VALUES
(1, '2018-05-15', 'Este es el producto que necesitosfgdfadgsdtghsdhdfsfhsghdfz', 25, '2018-10-27', 9, 10),
(2, '2018-05-15', 'Este es otr', 25, '2018-12-14', 13, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuestos`
--

CREATE TABLE `impuestos` (
  `id_impuesto` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `valor` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `impuestos`
--

INSERT INTO `impuestos` (`id_impuesto`, `nombre`, `porcentaje`, `valor`) VALUES
(1, 'IVA', 13, '0.13'),
(2, 'El impuesto', 9, '0.09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejo_impuesto`
--

CREATE TABLE `manejo_impuesto` (
  `id_manejo` int(11) NOT NULL,
  `precio_final` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_impuesto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(1, 'Raspberry modificado'),
(2, 'Marca 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `archivo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_placa` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `fecha`, `id_cliente`, `id_empleado`, `id_estado`, `archivo`, `id_placa`, `cantidad`) VALUES
(1, '2018-07-11', 11, 26, 8, '5b16b00a15f44.zip', 2, 23),
(2, '2018-11-02', 12, 26, 7, '5b16b00a15f44.zip', 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `permiso` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `permiso`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `placa`
--

CREATE TABLE `placa` (
  `id_placa` int(11) NOT NULL,
  `capas` int(11) NOT NULL,
  `medida` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo_placa` int(11) DEFAULT NULL,
  `id_sustrato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `placa`
--

INSERT INTO `placa` (`id_placa`, `capas`, `medida`, `id_tipo_placa`, `id_sustrato`) VALUES
(1, 3, '125mm x 45mm ', 1, 1),
(2, 3, '45mm x 10mm', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentaciones`
--

CREATE TABLE `presentaciones` (
  `id_presentacion` int(11) NOT NULL,
  `presentacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `presentaciones`
--

INSERT INTO `presentaciones` (`id_presentacion`, `presentacion`) VALUES
(1, '10 unidades'),
(3, '100 unidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `url_imagen` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ficha_tecnica` varchar(550) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `precio_total` double(8,2) NOT NULL,
  `tamano` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_presentacion` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_tipo_producto` int(11) DEFAULT NULL,
  `id_impuesto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `url_imagen`, `descripcion`, `ficha_tecnica`, `cantidad`, `precio`, `precio_total`, `tamano`, `id_presentacion`, `id_proveedor`, `id_marca`, `id_estado`, `id_tipo_producto`, `id_impuesto`) VALUES
(1, 'Conan', 'ultricies', 'erat vitae risus. Duis a', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 18, 9.73, 10.61, '46381', 1, 1, 1, 2, 1, 2),
(2, 'Basia', 'dapibus', 'Aliquam nec enim. Nunc ut erat. Sed nunc est,', 'Lorem', 98, 4.69, 5.30, '29558', 3, 1, 2, 1, 1, 1),
(3, 'Abigail', 'et', 'orci sem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 250, 8.97, 10.14, '55284', 1, 2, 1, 1, 2, 1),
(4, 'Jasper', 'orci', 'nec, euismod in, dolor. Fusce feugiat.', 'Lorem ipsum dolor sit', 64, 6.13, 6.93, '37494', 3, 2, 2, 2, 1, 1),
(5, 'Julian', 'nisl', 'Donec porttitor tellus non magna. Nam ligula elit, pretium', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 46, 8.5, 9.61, '35709', 1, 1, 2, 2, 2, 1),
(7, 'Isadora', 'Nunc', 'enim consequat purus. Maecenas libero est,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 13, 6.39, 7.22, '44854', 1, 1, 1, 1, 1, 1),
(8, 'Ivan', 'Aliquam auctor,', 'mauris, rhoncus id, mollis nec,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 21, 1.99, 2.25, '80369', 1, 1, 2, 1, 2, 1),
(9, 'Orla', 'quam', 'tristique senectus et netus et malesuada fames ac turpis egestas.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 37, 8.24, 9.31, '70089', 1, 1, 2, 2, 1, 1),
(10, 'Colt', 'In nec', 'nulla. In tincidunt congue', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 14, 9.47, 10.70, '01601', 3, 1, 1, 1, 1, 1),
(11, 'Ulysses', 'dui quis', 'sed dolor. Fusce mi lorem, vehicula et,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 48, 4.81, 5.44, '77279', 1, 2, 1, 2, 2, 1),
(12, 'Candace', 'lectus. Cum', 'Sed auctor odio a purus. Duis elementum, dui quis accumsan', 'Lorem ipsum dolor sit amet, consectetuer', 25, 5.24, 5.92, '09190', 1, 1, 2, 2, 1, 1),
(13, 'Giacomo', 'ac', 'nisi dictum augue malesuada malesuada. Integer id', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 58, 2.47, 2.79, '24909', 1, 1, 1, 2, 1, 1),
(14, 'Ima', 'vulputate,', 'ornare tortor at risus. Nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 567, 8.25, 9.32, '35028', 1, 1, 2, 2, 2, 1),
(15, 'Ivan', 'molestie', 'lectus convallis est, vitae', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 49, 5.87, 6.63, '86512', 1, 1, 1, 1, 2, 1),
(16, 'Desiree', 'fermentum', 'dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 5, 1.28, 1.45, '98858', 1, 1, 2, 2, 1, 1),
(17, 'Candice', 'fringilla euismod', 'ridiculus mus. Proin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 29, 5.3, 5.99, '14795', 1, 2, 2, 1, 1, 1),
(18, 'Brianna', 'ut,', 'in, cursus et,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 48, 0.67, 0.76, '91704', 1, 1, 1, 1, 2, 1),
(19, 'Russell', 'enim. Mauris', 'velit. Aliquam', 'Lorem ipsum dolor sit', 21, 9.06, 10.24, '23157', 3, 1, 2, 1, 2, 1),
(20, 'Wade', 'Curabitur', 'risus. In mi pede, nonummy ut, molestie in, tempus eu,', 'Lorem ipsum', 74, 2.42, 2.73, '31103', 1, 1, 1, 2, 1, 1),
(22, 'Producto 2', '5b09e71c2a62a.jpg', 'hjb', 'jh', 24, 2.25, 2.54, '125 mm x 100 mm', 1, 1, 1, 1, 2, 1),
(25, 'Producto 2', '5b0d63b936750.jpg', 'huy', 'flu', 34, 2.25, 2.54, '125 mm x 10mm', 1, 1, 1, 1, 2, 1),
(26, 'Otra pintura', '5b0edf2dc83b5.jpg', 'vbv', 'cv', 23, 2.25, 2.54, '125 mm x 10mm', 1, 1, 1, 1, 2, 1),
(27, 'Prueba', '5ba12352756bf.jpg', 'ly', 'guygouygiu', 56, 5, 5.65, 'sgdfsñsaoigfnañeriohgre', 1, 1, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `proveedor`, `id_estado`) VALUES
(1, 'Proveedor 1', 3),
(2, 'Proveedor 2', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id_reservacion` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_estimada` date DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`id_reservacion`, `cantidad`, `fecha`, `hora`, `fecha_estimada`, `id_producto`, `id_cliente`, `id_estado`) VALUES
(1, 23, '2018-05-10', '11:10:06', '2018-11-23', 11, 15, 9),
(2, 12, '2018-05-14', '18:24:09', '2018-10-25', 12, 5, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sustrato`
--

CREATE TABLE `sustrato` (
  `id_sustrato` int(11) NOT NULL,
  `sustrato` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sustrato`
--

INSERT INTO `sustrato` (`id_sustrato`, `sustrato`) VALUES
(1, 'Baquelita'),
(2, 'Fibra de vidrio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id_tipo_cliente` int(11) NOT NULL,
  `tipo_cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id_tipo_cliente`, `tipo_cliente`) VALUES
(1, 'Natural'),
(2, 'Empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_desarrollo`
--

CREATE TABLE `tipo_desarrollo` (
  `id_tipo_desarrollo` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_desarrollo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_desarrollo`
--

INSERT INTO `tipo_desarrollo` (`id_tipo_desarrollo`, `descripcion`, `tipo_desarrollo`) VALUES
(1, 'Descripcion de lo que consiste el PCB arte', 'PCB arte'),
(2, 'Descripcion de lo que consiste el Industria Agro', 'Industria agro'),
(4, 'Descripcion de lo que consiste el Comercio servicios', 'Comercio servicios'),
(5, 'Descripcion de lo que consiste el Gobierno', 'Gobierno'),
(6, 'Descripcion de lo que consiste el Emprendedores', 'Emprendedores'),
(7, 'Descripcion de lo que consiste el Independientes', 'Independientes'),
(8, 'Descripcion de lo que consiste el Estudiantes', 'Estudiantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_estado`
--

CREATE TABLE `tipo_estado` (
  `id_tipo_estado` int(11) NOT NULL,
  `tipo_estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_estado`
--

INSERT INTO `tipo_estado` (`id_tipo_estado`, `tipo_estado`) VALUES
(1, 'Productos'),
(2, 'Pedidos'),
(3, 'Proveedores'),
(4, 'Carrito'),
(5, 'Manufacturacion'),
(6, 'Importacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_placa`
--

CREATE TABLE `tipo_placa` (
  `id_tipo_placa` int(11) NOT NULL,
  `tipo_placa` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_placa`
--

INSERT INTO `tipo_placa` (`id_tipo_placa`, `tipo_placa`) VALUES
(1, 'PCB básico 1 layer'),
(2, 'PCB básico 2 layer'),
(3, 'PCB intermedio 1 Layer	'),
(4, 'PCB intermedio 2 Layer	'),
(5, 'PCB Pro Layer 1'),
(6, 'PCB Pro Layer 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL,
  `tipo_producto` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tipo_producto`, `tipo_producto`) VALUES
(1, 'Importacion'),
(2, 'Producto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `id_valoracion` int(11) NOT NULL,
  `estrellas` int(11) DEFAULT NULL,
  `comentario` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoraciones`
--

INSERT INTO `valoraciones` (`id_valoracion`, `estrellas`, `comentario`, `id_producto`, `id_cliente`) VALUES
(1, 3, 'KJAUYFITF', 1, NULL),
(2, 3, 'xtrrthr', 8, NULL),
(13, 1, 'ipsum leo elementum sem, vitae aliquam eros turpis non enim.', NULL, 9),
(14, 3, 'Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi', 16, 18),
(15, 4, 'congue, elit sed consequat auctor, nunc nulla vulputate dui, nec', 5, 11),
(16, 3, 'Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc', 9, 12),
(17, 5, 'Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper', 5, 8),
(18, 3, 'ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis', 19, 9),
(19, 3, 'eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum', 12, 19),
(20, 5, 'vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh', 13, 11),
(21, 5, 'augue, eu tempor erat neque non quam. Pellentesque habitant morbi', 9, 18),
(22, 4, 'nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo', 4, 15),
(23, 3, 'faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare.', 22, 15),
(24, 3, 'Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum', 26, 5),
(25, 2, 'egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus', 16, 6),
(26, 4, 'dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget', 10, 16),
(27, 5, 'ipsum primis in faucibus orci luctus et ultrices posuere cubilia', 17, 5),
(28, 1, 'lorem eu metus. In lorem. Donec elementum, lorem ut aliquam', 25, 4),
(29, 1, 'sem, vitae aliquam eros turpis non enim. Mauris quis turpis', 20, 15),
(30, 1, 'Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus.', 25, 18),
(31, 5, 'ut eros non enim commodo hendrerit. Donec porttitor tellus non', 20, 2),
(32, 1, 'tempor, est ac mattis semper, dui lectus rutrum urna, nec', 14, 8),
(39, 5, 'ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis', 13, 13),
(40, 1, 'dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae,', 3, 15),
(41, 5, 'et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat', 13, 8),
(42, 2, 'porta elit, a feugiat tellus lorem eu metus. In lorem.', 4, 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `carrito_ibfk_1` (`id_cliente`),
  ADD KEY `estado_carrito` (`estado_carrito`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `correo_electronico` (`correo_electronico`),
  ADD KEY `clientes_ibfk_1` (`id_tipo_cliente`),
  ADD KEY `estado_cliente` (`estado_cliente`);

--
-- Indices de la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  ADD PRIMARY KEY (`id_desarrollo`),
  ADD KEY `desarrollo_ibfk_2` (`id_cliente`),
  ADD KEY `desarrollo_ibfk_3` (`id_tipo_desarrollo`);

--
-- Indices de la tabla `detalle_carrito`
--
ALTER TABLE `detalle_carrito`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `detalle_carrito_ibfk_1` (`id_carrito`),
  ADD KEY `detalle_carrito_ibfk_2` (`id_producto`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `correo_electronico` (`correo_electronico`),
  ADD KEY `empleado_ibfk_1` (`id_permiso`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `estado_ibfk_1` (`id_tipo_estado`);

--
-- Indices de la tabla `importacion_especial`
--
ALTER TABLE `importacion_especial`
  ADD PRIMARY KEY (`id_importacion`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `impuestos`
--
ALTER TABLE `impuestos`
  ADD PRIMARY KEY (`id_impuesto`);

--
-- Indices de la tabla `manejo_impuesto`
--
ALTER TABLE `manejo_impuesto`
  ADD PRIMARY KEY (`id_manejo`),
  ADD KEY `manejo_impuesto_ibfk_1` (`id_impuesto`),
  ADD KEY `manejo_impuesto_ibfk_2` (`id_producto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `pedido_ibfk_1` (`id_cliente`),
  ADD KEY `pedido_ibfk_2` (`id_empleado`),
  ADD KEY `pedido_ibfk_3` (`id_estado`),
  ADD KEY `pedido_ibfk_5` (`id_placa`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `placa`
--
ALTER TABLE `placa`
  ADD PRIMARY KEY (`id_placa`),
  ADD KEY `placa_ibfk_2` (`id_sustrato`),
  ADD KEY `placa_ibfk_3` (`id_tipo_placa`);

--
-- Indices de la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  ADD PRIMARY KEY (`id_presentacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `productos_ibfk_1` (`id_estado`),
  ADD KEY `productos_ibfk_2` (`id_marca`),
  ADD KEY `productos_ibfk_3` (`id_presentacion`),
  ADD KEY `productos_ibfk_4` (`id_proveedor`),
  ADD KEY `id_tipo_producto` (`id_tipo_producto`),
  ADD KEY `productos_ibfk_6` (`id_impuesto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `proveedores_ibfk_1` (`id_estado`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `reservaciones_ibfk_1` (`id_producto`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `sustrato`
--
ALTER TABLE `sustrato`
  ADD PRIMARY KEY (`id_sustrato`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id_tipo_cliente`);

--
-- Indices de la tabla `tipo_desarrollo`
--
ALTER TABLE `tipo_desarrollo`
  ADD PRIMARY KEY (`id_tipo_desarrollo`);

--
-- Indices de la tabla `tipo_estado`
--
ALTER TABLE `tipo_estado`
  ADD PRIMARY KEY (`id_tipo_estado`);

--
-- Indices de la tabla `tipo_placa`
--
ALTER TABLE `tipo_placa`
  ADD PRIMARY KEY (`id_tipo_placa`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tipo_producto`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `valoraciones_ibfk_1` (`id_cliente`),
  ADD KEY `valoraciones_ibfk_2` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  MODIFY `id_desarrollo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_carrito`
--
ALTER TABLE `detalle_carrito`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `importacion_especial`
--
ALTER TABLE `importacion_especial`
  MODIFY `id_importacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `impuestos`
--
ALTER TABLE `impuestos`
  MODIFY `id_impuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `manejo_impuesto`
--
ALTER TABLE `manejo_impuesto`
  MODIFY `id_manejo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `placa`
--
ALTER TABLE `placa`
  MODIFY `id_placa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  MODIFY `id_presentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id_reservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sustrato`
--
ALTER TABLE `sustrato`
  MODIFY `id_sustrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `id_tipo_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_desarrollo`
--
ALTER TABLE `tipo_desarrollo`
  MODIFY `id_tipo_desarrollo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_estado`
--
ALTER TABLE `tipo_estado`
  MODIFY `id_tipo_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_placa`
--
ALTER TABLE `tipo_placa`
  MODIFY `id_tipo_placa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`estado_carrito`) REFERENCES `estado` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_tipo_cliente`) REFERENCES `tipo_cliente` (`id_tipo_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`estado_cliente`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  ADD CONSTRAINT `desarrollo_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `desarrollo_ibfk_3` FOREIGN KEY (`id_tipo_desarrollo`) REFERENCES `tipo_desarrollo` (`id_tipo_desarrollo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_carrito`
--
ALTER TABLE `detalle_carrito`
  ADD CONSTRAINT `detalle_carrito_ibfk_1` FOREIGN KEY (`id_carrito`) REFERENCES `carrito` (`id_carrito`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id_permiso`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`id_tipo_estado`) REFERENCES `tipo_estado` (`id_tipo_estado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `importacion_especial`
--
ALTER TABLE `importacion_especial`
  ADD CONSTRAINT `importacion_especial_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `importacion_especial_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `manejo_impuesto`
--
ALTER TABLE `manejo_impuesto`
  ADD CONSTRAINT `manejo_impuesto_ibfk_1` FOREIGN KEY (`id_impuesto`) REFERENCES `impuestos` (`id_impuesto`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `manejo_impuesto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_5` FOREIGN KEY (`id_placa`) REFERENCES `placa` (`id_placa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `placa`
--
ALTER TABLE `placa`
  ADD CONSTRAINT `placa_ibfk_2` FOREIGN KEY (`id_sustrato`) REFERENCES `sustrato` (`id_sustrato`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `placa_ibfk_3` FOREIGN KEY (`id_tipo_placa`) REFERENCES `tipo_placa` (`id_tipo_placa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_presentacion`) REFERENCES `presentaciones` (`id_presentacion`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`id_tipo_producto`) REFERENCES `tipo_producto` (`id_tipo_producto`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_6` FOREIGN KEY (`id_impuesto`) REFERENCES `impuestos` (`id_impuesto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservaciones_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `valoraciones_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `valoraciones_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
