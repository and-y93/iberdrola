-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2018 a las 15:54:59
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_events`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_msg`
--

CREATE TABLE `contact_msg` (
  `id_contact` int(10) NOT NULL,
  `name_contact` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `subname_contact` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email_contact` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `city_contact` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cp_contact` int(10) NOT NULL,
  `subject_contact` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `text_contact` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_cat`
--

CREATE TABLE `event_cat` (
  `id_cat` int(10) NOT NULL,
  `name_cat` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `event_cat`
--

INSERT INTO `event_cat` (`id_cat`, `name_cat`) VALUES
(1, 'Categoria 1'),
(2, 'Categoria 2'),
(3, 'Categoria 3'),
(4, 'Categoria 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_list`
--

CREATE TABLE `event_list` (
  `id_event` int(10) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `name_event` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ini_event` date NOT NULL,
  `fin_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `event_list`
--

INSERT INTO `event_list` (`id_event`, `id_cat`, `name_event`, `ini_event`, `fin_event`) VALUES
(1, 1, 'Party', '2018-06-01', '2018-06-02'),
(2, 2, 'PArty 2', '2018-06-28', '2018-06-30'),
(3, 4, 'Evento', '2018-06-19', '2018-06-20'),
(4, 2, 'Evento 4', '2018-06-17', '2018-06-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contact_msg`
--
ALTER TABLE `contact_msg`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indices de la tabla `event_cat`
--
ALTER TABLE `event_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `event_list`
--
ALTER TABLE `event_list`
  ADD PRIMARY KEY (`id_event`,`id_cat`),
  ADD KEY `Cat` (`id_cat`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contact_msg`
--
ALTER TABLE `contact_msg`
  MODIFY `id_contact` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_cat`
--
ALTER TABLE `event_cat`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `event_list`
--
ALTER TABLE `event_list`
  MODIFY `id_event` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `event_list`
--
ALTER TABLE `event_list`
  ADD CONSTRAINT `Cat` FOREIGN KEY (`id_cat`) REFERENCES `event_cat` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
