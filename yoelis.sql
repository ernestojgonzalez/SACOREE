﻿-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2012 a las 03:38:39
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `yoelis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `codigo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `modelo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `marca` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cantidad` varchar(100) CHARACTER SET latin1 NOT NULL,
  `archivo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `num_reg` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num_reg`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tabla que describe los equipos de la empresa' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `cedula` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(500) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(500) CHARACTER SET latin1 NOT NULL,
  `cargo` varchar(500) CHARACTER SET latin1 NOT NULL,
  `horario` varchar(50) CHARACTER SET latin1 NOT NULL,
  `archivo` varchar(150) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='personal de la empresa';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE IF NOT EXISTS `piezas` (
  `id_parte_pieza` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(100) NOT NULL,
  `pieza` text NOT NULL,
  `codigoPieza` varchar(100) CHARACTER SET latin1 NOT NULL,
  `marca` varchar(100) CHARACTER SET latin1 NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `cantidadPieza` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `composicion` varchar(255) NOT NULL,
  PRIMARY KEY (`id_parte_pieza`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='piezas de los equipos' AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
