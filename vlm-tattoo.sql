-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2021 a las 17:26:44
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vlm-tattoo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `telefono`, `password`, `email`, `roles`) VALUES
(6, 'prueba', 'prueba', 0, '$argon2id$v=19$m=65536,t=4,p=1$RWU1Ry5iT0pkMG9EZ0VEdg$KcB/n1M4HppVppFdbTHxtg67izG50Jg74724+DIIX74', 'prueba@prueba.es', '[\"Cliente\"]'),
(8, 'Pol', 'Gispert', 608857693, '$argon2id$v=19$m=65536,t=4,p=1$TEMyLjhYcDdlNGR3S21tYw$+WFN0ITJ0vXYY1KODtv2cWllQi7N02AUtEvWi8TnBP0', 'pgispert23@gmail.com', '[\"Cliente\"]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `talla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposito` decimal(4,2) NOT NULL,
  `tatuador_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `talla`, `descripcion`, `deposito`, `tatuador_id`, `cliente_id`, `imagen`, `fecha_inicio`, `fecha_final`) VALUES
(8, 'pequeño', 'tatuaje en el brazo', '10.00', 2, 6, 'img.jpg', '2021-05-12 10:00:00', '2021-05-12 12:00:00'),
(9, 'grande', 'tatuaje en la espalda', '30.00', 2, 6, 'hola.jpg', '2021-05-11 20:22:18', '2021-05-11 21:22:18'),
(10, 'Grande', '1,2 en modo diablo', '0.00', 2, 6, 'ignacio-609c1e05a5c2a.jpg', '2016-01-01 00:00:00', '2016-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatuador`
--

CREATE TABLE `tatuador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tatuador`
--

INSERT INTO `tatuador` (`id`, `nombre`, `apellidos`, `dni`, `password`, `email`, `roles`) VALUES
(2, 'admin', 'admin', '00000000W', '$argon2id$v=19$m=65536,t=4,p=1$UFllVWtYbWpvcS5IY3hqbg$aSX0BwK04JxV4w1X6XVV0eJfLdVQkBQyxH4hIty/nD8', 'admin@admin.es', '[\"Tatuador\"]');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F41C9B25E7927C74` (`email`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_188D2E3BAF566C4A` (`tatuador_id`),
  ADD KEY `IDX_188D2E3BDE734E51` (`cliente_id`);

--
-- Indices de la tabla `tatuador`
--
ALTER TABLE `tatuador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5152B3D8E7927C74` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tatuador`
--
ALTER TABLE `tatuador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_188D2E3BAF566C4A` FOREIGN KEY (`tatuador_id`) REFERENCES `tatuador` (`id`),
  ADD CONSTRAINT `FK_188D2E3BDE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
