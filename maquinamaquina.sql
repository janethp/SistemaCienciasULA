-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2016 a las 11:55:53
-- Versión del servidor: 5.1.73
-- Versión de PHP: 5.3.3-7+squeeze19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE IF NOT EXISTS `maquina` (
  `cod_maquina` varchar(5) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_maquina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `maquina`
--

INSERT INTO `maquina` (`cod_maquina`, `descripcion`) VALUES
('pc01', ''),
('pc02', ''),
('pc03', ''),
('pc04', ''),
('pc05', ''),
('pc06', ''),
('pc07', ''),
('pc08', ''),
('pc09', ''),
('pc10', ''),
('pc11', ''),
('pc12', ''),
('pc13', ''),
('pc14', ''),
('pc15', ''),
('pc16', ''),
('pc17', ''),
('pc18', ''),
('pc19', ''),
('pc20', ''),
('pc21', ''),
('pc22', '');
