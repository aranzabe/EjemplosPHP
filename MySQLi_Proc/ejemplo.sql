-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-10-2017 a las 09:49:52
-- Versión del servidor: 5.5.57-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ejemplo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `DNI` varchar(10) NOT NULL DEFAULT '',
  `Nombre` varchar(45) DEFAULT NULL,
  `Tfno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`DNI`, `Nombre`, `Tfno`) VALUES
('1000B', 'DAM2', '121312'),
('101A', 'DAM1', '32344'),
('101B', 'Harpo', '999999'),
('1A', 'Menganito', '423423'),
('300C', 'Groucho', '15465'),
('30C', 'ASIR2', '8999'),
('45D', 'SMR', '23423432');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
