-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-11-2021 a las 13:20:36
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int NOT NULL,
  `Nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Equipo` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Nacionalidad` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Edad` int NOT NULL,
  `Altura` int NOT NULL,
  `Nacimiento` date NOT NULL,
  `Imagen` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `Nombre`, `Equipo`, `Nacionalidad`, `Edad`, `Altura`, `Nacimiento`, `Imagen`) VALUES
(1, 'Pau Gasol', 'LA Lakers', 'Española', 41, 216, '1990-07-06', 'pau.jpg'),
(2, 'Giannis Antetokounmpo', 'Milwaukee Bucks', 'Griega', 26, 211, '1994-12-06', 'giannis.jpg'),
(3, 'Kobe Bryant', 'LA Lakers', 'Estadounidenses', 41, 198, '1978-08-23', 'kobe.jpg'),
(4, 'Stephen Curry', 'Golden Street Warriors', 'Estadounidense', 33, 191, '1988-03-14', 'curry.jpg'),
(5, 'Russel Westbrook', 'Oklahoma City Thunder', 'Estadounidense', 32, 191, '1988-11-12', 'westbrook.jpg'),
(6, 'Jayson Tatum', 'Boston Celtics', 'Estadounidense', 23, 203, '1998-03-03', 'tatum.jpg'),
(7, 'Ja Morant', 'Memphis Grizzlies', 'Estadounidense', 22, 191, '1999-08-10', 'morant.jpg'),
(8, 'Luka Doncic', 'Dallas Mavericks', 'Eslovena', 22, 201, '1999-02-28', 'luka.jpg'),
(9, 'Kahwhi Leonard', 'LA Clippers', 'Estadounidense', 30, 201, '1991-06-29', 'kahwhi.jpg'),
(10, 'Zion Williamson', 'New Orlean Pelicans', 'Estadounidense', 21, 198, '2000-07-06', 'zion.jpg');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;