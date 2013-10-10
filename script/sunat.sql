-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2013 a las 03:58:50
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sunat`
--
CREATE DATABASE IF NOT EXISTS `sunat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sunat`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penalty`
--

CREATE TABLE IF NOT EXISTS `penalty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruc` varchar(11) NOT NULL,
  `type_payment` varchar(150) NOT NULL,
  `tributary_period` date NOT NULL,
  `resolution` varchar(15) DEFAULT NULL,
  `tribute_code` int(11) NOT NULL,
  `payment` decimal(18,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ruc` (`ruc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `penalty`
--

INSERT INTO `penalty` (`id`, `ruc`, `type_payment`, `tributary_period`, `resolution`, `tribute_code`, `payment`) VALUES
(1, '10411907860', 'Fraccionamiento', '2013-10-05', '0230170512704', 8030, '450.00'),
(2, '10411907860', 'Fraccionamiento', '2013-10-04', '0230170512704', 8030, '600.00'),
(3, '10411907860', 'Tributo', '2013-10-03', NULL, 1011, '450.00'),
(4, '20251302511', 'Fraccionamiento', '2013-10-05', '0230170512704', 8030, '450.00'),
(5, '20251302511', 'Fraccionamiento', '2013-10-04', '0230170512704', 8030, '600.00'),
(6, '20251302511', 'Tributo', '2013-10-03', NULL, 1011, '500.00'),
(7, '20568005491', 'Fraccionamiento', '2013-10-05', '0230170512704', 8030, '450.00'),
(8, '20568005491', 'Fraccionamiento', '2013-10-04', '0230170512704', 8030, '200.00'),
(9, '20568005491', 'Tributo', '2013-10-03', NULL, 1011, '450.00'),
(10, '20356004770', 'Fraccionamiento', '2013-10-05', '0230170512704', 8030, '450.00'),
(11, '20356004770', 'Fraccionamiento', '2013-10-04', '0230170512704', 8030, '260.00'),
(12, '20356004770', 'Tributo', '2013-10-03', NULL, 1011, '450.00'),
(13, '20493020618', 'Fraccionamiento', '2013-10-05', '0230170512704', 8030, '450.00'),
(14, '20493020618', 'Fraccionamiento', '2013-10-04', '0230170512704', 8030, '600.00'),
(15, '20493020618', 'Tributo', '2013-10-03', NULL, 1011, '350.00'),
(16, '20526514841', 'Fraccionamiento', '2013-10-05', '0230170512704', 8030, '450.00'),
(17, '20526514841', 'Fraccionamiento', '2013-10-04', '0230170512704', 8030, '350.00'),
(18, '20526514841', 'Tributo', '2013-10-03', NULL, 1011, '600.50'),
(19, '20526516000', 'Fraccionamiento', '2013-10-05', '0230170512704', 8030, '450.00'),
(20, '20526516000', 'Fraccionamiento', '2013-10-04', '0230170512704', 8030, '6000.00'),
(21, '20526516000', 'Tributo', '2013-10-03', NULL, 1011, '500.50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
