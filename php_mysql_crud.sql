-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2019 a las 11:42:35
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_mysql_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `IdAdmin` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `AP` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AM` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`IdAdmin`, `Nombre`, `AP`, `AM`, `email`, `password`, `Fecha_Nacimiento`) VALUES
(1, 'Pedro', 'Garcia', 'Robles', 'pdd@d.com', '12345', '2019-10-17'),
(2, 'Pedro', 'Garcia', 'Robles', 'pdd@d.com', '12345', '2019-10-17'),
(3, 'Juan', 'Perez', 'Rodriguez', 'juan@123.com', '123', '2019-12-02'),
(4, 'carlos', 'dd', 'ff', 'dd@we.com', 'dd', '2019-11-27'),
(5, 'as', 'as', 'as', 'as@123', '12', '2019-12-04'),
(6, 'ghdgtg', 'gterg', 'trwg', 'r@dsds', 'sds', '2019-12-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncias`
--

CREATE TABLE `denuncias` (
  `id` int(11) NOT NULL,
  `tipo` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comentario` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` mediumblob DEFAULT NULL,
  `latitud` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitud` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Pendiente',
  `IdUsuario` int(11) DEFAULT NULL,
  `IdAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `denuncias`
--

INSERT INTO `denuncias` (`id`, `tipo`, `fecha_hora`, `comentario`, `imagen`, `latitud`, `longitud`, `status`, `IdUsuario`, `IdAdmin`) VALUES
(163, 'Falla de Alumbrado', '2019-12-06 09:35:46', 'gdgd', '', '24.14684719325296', '-110.32841616943358', 'Pendiente', NULL, NULL),
(170, 'Animal Muerto', '2019-12-06 10:40:54', 'dfsd', '', '24.151154748361584', '-110.31948977783202', 'Pendiente', NULL, NULL),
(171, 'Incendio en Terreno Baldio', '2019-12-06 10:41:03', 'fefef', '', '24.141991229779244', '-110.2843850262451', 'Pendiente', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `AP` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AM` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `AP`, `AM`, `email`, `password`, `Fecha_Nacimiento`) VALUES
(169, 'Carlos', 'dd', 'dd', 'oliver@123.com', 'dd', '2019-12-03'),
(170, 'Carlos', 'dd', 'dd', 'oliver@123.com', 'dd', '2019-12-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indices de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdAdmin` (`IdAdmin`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `IdAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `denuncias_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `denuncias_ibfk_2` FOREIGN KEY (`IdAdmin`) REFERENCES `administrador` (`IdAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
