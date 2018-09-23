-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2018 a las 02:57:52
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
(1, '2018-05-14', 1, 6),
(2, '2018-05-14', 2, 6),
(3, '2018-05-14', 3, 6),
(4, '2018-05-14', 4, 6),
(5, '2018-05-14', 5, 6),
(6, '2018-05-14', 6, 6),
(7, '2018-05-14', 7, 6),
(8, '2018-05-14', 8, 6),
(9, '2018-05-14', 9, 6),
(10, '2018-05-14', 10, 6),
(11, '2018-05-14', 11, 6),
(12, '2018-05-14', 12, 6),
(13, '2018-05-14', 13, 6),
(14, '2018-05-14', 14, 6),
(15, '2018-05-14', 15, 6),
(16, '2018-05-14', 16, 6),
(17, '2018-05-14', 17, 6),
(18, '2018-05-14', 18, 6),
(19, '2018-05-14', 19, 6),
(20, '2018-05-14', 20, 6),
(21, '2018-05-16', 26, 6),
(22, '2018-05-30', 26, 6),
(23, '2018-05-30', 26, 6),
(24, '2018-06-04', 26, 6),
(25, '2018-06-04', 26, 6),
(26, '2018-09-03', NULL, 6),
(27, '2018-09-03', NULL, 6),
(28, '2018-09-03', NULL, 6),
(29, '2018-09-05', NULL, 6),
(30, '2018-09-05', NULL, 6),
(31, '2018-09-05', NULL, 6),
(32, '2018-09-17', 26, 6),
(33, '2018-09-18', 26, 6),
(34, '2018-09-18', 26, 6),
(35, '2018-09-18', 26, 6),
(36, '2018-09-19', 26, 6),
(37, '2018-09-19', 26, 6),
(38, '2018-09-19', 26, 6),
(39, '2018-09-19', 27, NULL),
(40, '2018-09-19', 27, 6),
(41, '2018-09-19', 27, 5);

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
(26, 'Andres Oswaldo', 'Henriquez Gomez', 'andresdosmil@gmail.com', '$2y$10$YYNa13jMdPTJQb08JlUPfuv1XrDmR6BXG1r3U.AZvALPykO9CZ..i', 'no-user.png', 0, NULL, '2018-09-21', 3595, 'c8d6l1eqh4dik52joln1qib0v7', 1, '06015522-1', '0614-040300-140-4', NULL, 'Estudia', 'Mi casa', NULL, NULL, 1, 3),
(27, 'Diego', 'Guzman', 'diego@gmail.com', '$2y$10$2wq05X7FNOtY2/ZRIpHpQe.3DygucJDCpV0.0Vv6Zz5Uxm/Gnpye6', NULL, 0, NULL, '2018-09-19', 9433, NULL, 2, '12345678-9', '1234-567890-876-9', NULL, 'Estudia', 'Casa', NULL, NULL, 1, 3);

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
(9, 'Esta es mi idea del proyecto', NULL, 2, 26),
(10, 'Mi idea del proyecto es...', '5ba558e857854.zip', 4, 26),
(11, 'El proyecto consiste en...', NULL, 2, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `id_descuento` int(11) NOT NULL,
  `descuento` double NOT NULL,
  `valor` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`id_descuento`, `descuento`, `valor`) VALUES
(2, 0, '0.00'),
(3, 15, '0.15'),
(5, 25, '0.25'),
(6, 50, '0.50'),
(7, 70, '0.70');

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
(24, 1, 33, 2),
(25, 3, 33, 8),
(26, 5, 35, 10),
(27, 3, 36, 10),
(28, 5, 37, 2),
(29, 1, 38, 2),
(30, 2, 38, 8),
(32, 4, 40, 10),
(33, 1, 41, 2);

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
(26, 'Andres Oswaldo', 'Henriquez Gomez', '5b89f9e4877c5.jpg', 'andresdosmil@gmail.com', '$2y$10$F7hi2jxGikTqAQQsAoMFuOFXHMZCjt9uWne4.YgjITkW2znXRtf0K', '2018-09-21 00:00:00', 1, NULL, 0, NULL, 4697, 1, 1),
(27, 'hola', 'hola', '5ba006510bcda.png', 'andresdosmilg@gmailc.om', '$2y$10$tfhq4ifrqW1LAuOkLIIgRePyo42.0V/FqF6W0WaSl3FEgc0cUDRZu', '2018-09-17 00:00:00', 1, '2018-09-17 01:54:39', 0, NULL, NULL, 1, 2),
(28, 'Diego Edgardo', 'Guzman', '5ba2595d25373.jpg', 'diego@gmail.com', '$2y$10$DytJ2O2qaKo8KdR7EuLrpelVqxopMrX9F7fJ73nJQsVv9qfGvQ3f2', '2018-09-19 00:00:00', 1, NULL, 0, NULL, NULL, 1, 1);

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
(1, '2018-05-15', 'Este es el producto que necesitosfgdfadgsdtghsdhdfs', 25, '2018-10-27', 9, 10),
(2, '2018-05-15', 'Este es otr', 25, '2018-12-14', 13, 9),
(3, '2018-09-19', 'sdfsdf', 34, '2018-09-19', 26, 9);

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
(7, '2018-09-21', 26, 26, 7, '5ba557eb7b97c.zip', 7, 23),
(8, '2018-09-21', 26, 26, 7, '5ba55c3465c2b.zip', 8, 23),
(9, '2018-09-21', 26, 26, 7, '5ba55c5a5faf9.zip', 9, 43),
(10, '2018-09-21', 26, 26, 7, '5ba55c6c90439.zip', 10, 23),
(11, '2018-09-21', 26, 26, 7, '5ba55c83e0cce.zip', 11, 12),
(12, '2018-09-21', 26, 26, 7, '5ba560af1524a.zip', 12, 342),
(13, '2018-09-21', 26, 26, 7, '5ba56111136cf.zip', 13, 12),
(14, '2018-09-21', 26, 26, 7, '5ba5618999c56.zip', 14, 21),
(15, '2018-09-21', 26, 26, 7, '5ba561df0af4e.zip', 15, 21),
(16, '2018-09-21', 26, 26, 7, '5ba568e2c5d11.zip', 16, 232),
(17, '2018-09-21', 26, 26, 7, '5ba56aa33b199.zip', 17, 12);

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
(2, 3, '45mm x 10mm', 2, 2),
(3, 43, 'iuI78uj', 3, 1),
(4, 23, 'srdtfyguh56', 3, 2),
(5, 23, 'awsfdgc4', 4, 2),
(6, 32, '3sw', 2, 2),
(7, 23, 'efsd', 4, 1),
(8, 234, 'a23w4se5xtf', 4, 2),
(9, 43, '234etrtxy', 5, 1),
(10, 32, 'q23a4wr', 3, 1),
(11, 12, '3a4', 6, 2),
(12, 324, 'a3w5er', 2, 1),
(13, 21, 'q23', 5, 1),
(14, 21, 'q23a', 4, 1),
(15, 12, 'q4w', 4, 1),
(16, 12, '34d5f6g7', 5, 1),
(17, 12, '2w', 3, 1);

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
  `id_impuesto` int(11) DEFAULT NULL,
  `id_descuento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `url_imagen`, `descripcion`, `ficha_tecnica`, `cantidad`, `precio`, `precio_total`, `tamano`, `id_presentacion`, `id_proveedor`, `id_marca`, `id_estado`, `id_tipo_producto`, `id_impuesto`, `id_descuento`) VALUES
(1, 'Conan222', 'ultricies', 'erat vitae risus. Duis agzdxfhcgvj', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 18, 8.5, 8.17, '46381', 1, 1, 1, 2, 1, 1, 3),
(2, 'Basia', 'dapibus', 'Aliquam nec enim. Nunc ut erat. Sed nunc est,', 'Lorem', 85, 4.69, 3.98, '29558', 3, 1, 2, 1, 1, 1, 5),
(3, 'Abigail', 'et', 'orci sem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque', 250, 8.97, 7.60, '55284', 1, 2, 1, 1, 2, 1, 5),
(4, 'Jasper', 'orci', 'nec, euismod in, dolor. Fusce feugiat.', 'Lorem ipsum dolor sit', 64, 6.13, 5.89, '37494', 3, 2, 2, 2, 1, 1, 3),
(5, 'Julian', 'nisl', 'Donec porttitor tellus non magna. Nam ligula elit, pretium', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 46, 8.5, 8.17, '35709', 1, 1, 2, 2, 2, 1, 3),
(7, 'Isadora', 'Nunc', 'enim consequat purus. Maecenas libero est,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet', 11, 6.39, 3.62, '44854', 1, 1, 1, 1, 1, 1, 6),
(8, 'Ivan', 'Aliquam auctor,', 'mauris, rhoncus id, mollis nec,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 13, 1.99, 1.68, '80369', 1, 1, 2, 1, 2, 1, 5),
(9, 'Orla', 'quam', 'tristique senectus et netus et malesuada fames ac turpis egestas.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 37, 8.24, 9.31, '70089', 1, 1, 2, 2, 1, 1, 5),
(10, 'Colt', 'In nec', 'nulla. In tincidunt congue', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 980, 9.47, 10.70, '01601', 3, 1, 1, 1, 1, 1, 2),
(11, 'Ulysses', 'dui quis', 'sed dolor. Fusce mi lorem, vehicula et,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 48, 4.81, 4.62, '77279', 1, 2, 1, 2, 2, 1, 3),
(12, 'Candace', 'lectus. Cum', 'Sed auctor odio a purus. Duis elementum, dui quis accumsan', 'Lorem ipsum dolor sit amet, consectetuer', 25, 5.24, 4.44, '09190', 1, 1, 2, 2, 1, 1, 5),
(13, 'Giacomo', 'ac', 'nisi dictum augue malesuada malesuada. Integer id', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 58, 2.47, 1.40, '24909', 1, 1, 1, 2, 1, 1, 6),
(14, 'Ima', 'vulputate,', 'ornare tortor at risus. Nunc', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 567, 8.25, 4.67, '35028', 1, 1, 2, 2, 2, 1, 6),
(15, 'Ivan', 'molestie', 'lectus convallis est, vitae', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien,', 49, 5.87, 5.64, '86512', 1, 1, 1, 1, 2, 1, 3),
(16, 'Desiree', 'fermentum', 'dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non,', 5, 1.28, 0.72, '98858', 1, 1, 2, 2, 1, 1, 6),
(17, 'Candice', 'fringilla euismod', 'ridiculus mus. Proin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 29, 5.3, 5.10, '14795', 1, 2, 2, 1, 1, 1, 3),
(18, 'Brianna', 'ut,', 'in, cursus et,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', 48, 0.67, 0.23, '91704', 1, 1, 1, 1, 2, 1, 7),
(19, 'Russell', 'enim. Mauris', 'velit. Aliquam', 'Lorem ipsum dolor sit', 21, 9.06, 10.24, '23157', 3, 1, 2, 1, 2, 1, 2),
(20, 'Wade', 'Curabitur', 'risus. In mi pede, nonummy ut, molestie in, tempus eu,', 'Lorem ipsum', 74, 2.42, 2.73, '31103', 1, 1, 1, 2, 1, 1, 2),
(22, 'Producto 2', '5b09e71c2a62a.jpg', 'hjb', 'jh', 24, 2.25, 1.91, '125 mm x 100 mm', 1, 1, 1, 1, 2, 1, 5),
(25, 'Producto 22345', '5b0d63b936750.jpg', 'huyfjh', 'flu', 34, 2.25, 1.28, '125 mm x 10mm', 1, 1, 1, 1, 2, 1, 6),
(26, 'Otra pintura', '5b0edf2dc83b5.jpg', 'vbv', 'cv', 23, 2.25, 2.54, '125 mm x 10mm', 1, 1, 1, 1, 2, 1, 2),
(27, 'Prueba', '5ba12352756bf.jpg', 'ly', 'guygouygiu', 56, 5, 4.24, 'sgdfsñsaoigfnañeriohgre', 1, 1, 1, 1, 2, 1, 5),
(28, 'yuvhbjiuij', '5ba1b6eb454d9.jpg', 'lubluhb', 'piubiubpiubp', 67, 5, 5.65, '6768yuhin', 1, 1, 2, 1, 2, 1, 2),
(29, 'argrth', '5ba1b74a7e8bc.jpg', 'sthsfgh', 'srthstrht', 46, 5, 5.65, 'sghfgh54', 1, 1, 1, 1, 2, 1, 2),
(30, 'rgtrsg', '5ba1b791d5525.jpg', 'srthstrh', 'htrshtrh', 46, 5, 5.37, 'sfghs6r', 1, 1, 1, 1, 2, 1, 2),
(31, 'afgaerg', '5ba1b7d538e0f.jpg', 'aregtr', 'hgstrh', 45, 5, 5.65, 'sdgh45', 1, 1, 2, 1, 2, 1, 2);

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
(2, 12, '2018-05-14', '18:24:09', '2018-10-25', 12, 5, 9),
(3, 2, '2018-09-18', '11:30:27', '2018-09-20', 8, 26, 9),
(4, 23, '2018-09-19', '09:24:00', '2018-09-20', 3, 26, 9);

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
(42, 2, 'porta elit, a feugiat tellus lorem eu metus. In lorem.', 4, 19),
(43, 4, 'Comentario', 10, 27);

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
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`);

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
  ADD KEY `productos_ibfk_6` (`id_impuesto`),
  ADD KEY `id_descuento` (`id_descuento`);

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
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  MODIFY `id_desarrollo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalle_carrito`
--
ALTER TABLE `detalle_carrito`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `importacion_especial`
--
ALTER TABLE `importacion_especial`
  MODIFY `id_importacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `impuestos`
--
ALTER TABLE `impuestos`
  MODIFY `id_impuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `placa`
--
ALTER TABLE `placa`
  MODIFY `id_placa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `presentaciones`
--
ALTER TABLE `presentaciones`
  MODIFY `id_presentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id_reservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
  ADD CONSTRAINT `productos_ibfk_6` FOREIGN KEY (`id_impuesto`) REFERENCES `impuestos` (`id_impuesto`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_7` FOREIGN KEY (`id_descuento`) REFERENCES `descuentos` (`id_descuento`) ON DELETE SET NULL ON UPDATE CASCADE;

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
