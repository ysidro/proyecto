-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-04-2013 a las 06:15:37
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom_categoria` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nom_categoria`) VALUES
(1, 'celulares'),
(2, 'tablas'),
(3, 'laptops'),
(4, 'UPS'),
(8, 'USB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenProducto`
--

CREATE TABLE IF NOT EXISTS `imagenProducto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombreImagen` varchar(100) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nombreImagen` (`nombreImagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `imagenProducto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) unsigned DEFAULT NULL,
  `nomb_marca` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ct_producto` (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `id_cat`, `nomb_marca`) VALUES
(1, 1, 'Iphone'),
(3, 1, 'Motorola'),
(4, 1, 'Alcatel'),
(5, 1, 'Nokia'),
(6, 1, 'Blackberry'),
(7, 1, 'Samsung'),
(8, 4, 'IBM'),
(10, 1, 'Acer'),
(11, 4, 'OMEGA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `marca_id` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `cantidad` int(11) DEFAULT NULL,
  `comentario` text,
  `serie` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `marca_id` (`marca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `marca_id`, `precio`, `fecha`, `cantidad`, `comentario`, `serie`) VALUES
(10, 3, 500, NULL, 50, 'estÃ¡n al 2x1  Barato no?', 'V3'),
(12, 1, 32000, NULL, 5, 'el mejor celular que podras comprar', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clave` tinytext NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `clave`, `estado`) VALUES
(1, 'ysidro', 'almonte.ysidro@gmail.com', 'fc5364bf9dbfa34954526becad136d4b', 'activo');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `TK_categoria_marca` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id`);
