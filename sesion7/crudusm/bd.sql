-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2017 a las 06:09:42
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `telefono`, `fecha`) VALUES
(1, 'INGA REYES, CINTYA', 'JPHCIR1996@GMAIL.COM', '956413894', '2015-02-08'),
(2, 'RUELAS CARHUAMACA, JULY', 'JULY_AMOR_13@HOTAMIL.COM', '954918340', '2015-02-08'),
(3, 'ULLOA BERROCAL, ABIGAIL', 'DIANAUB1997@GMAIL.COM', '925307267', '2015-02-08'),
(4, 'ROMAN HERHUAY, MIRIAM YUFITH', 'MIRIAMHUAMAN_1997@HOTMAIL.COM', '939199636', '2015-02-08'),
(5, 'MARCO GAMARRA', 'PRUEBA@HOTMAIL.COM', '98989898', '2017-04-11'),
(6, 'ANTONIO BRAVO', 'TOÑO@PABRAVOYO.COM', '91929394', '2017-05-20'),
(7, 'ORDOÑEZ HUANAY, DIANA', 'DORDOÑEZ@YAHOO.COM', '93949595', '2014-02-02'),
(8, 'CULLANCO ACEVEDO, ANGEL', 'ACULLANCO@GMAIL.COM', '919293949', '2014-08-02'),
(9, 'GARCIA RAYMUNDO, ANDRES', 'AGARCIA@GMAIL.COM', '921921921', '2014-02-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
