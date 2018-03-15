-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2018 a las 04:35:40
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `servicionegocios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rubro`
--

CREATE TABLE `tbl_rubro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicio`
--

CREATE TABLE `tbl_servicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rubro` int(11) NOT NULL,
  `id_suscripcion` int(11) NOT NULL,
  `detalles` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_suscripcion`
--

CREATE TABLE `tbl_suscripcion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `comision` decimal(11,2) NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `duracion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_suscripcion`
--

INSERT INTO `tbl_suscripcion` (`id`, `nombre`, `comision`, `descripcion`, `valor`, `duracion`) VALUES
(1, 'Mensual', '0.15', 'Se considerará 30 días', 10000, '30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `ap_paterno` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ap_materno` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `rut`, `nombres`, `ap_paterno`, `ap_materno`, `mail`, `user`, `pass`, `fecha_ingreso`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '2018-01-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_rubro`
--
ALTER TABLE `tbl_rubro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_rubro` (`id_rubro`),
  ADD KEY `PK_suscripcion` (`id_suscripcion`);

--
-- Indices de la tabla `tbl_suscripcion`
--
ALTER TABLE `tbl_suscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_rubro`
--
ALTER TABLE `tbl_rubro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_suscripcion`
--
ALTER TABLE `tbl_suscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  ADD CONSTRAINT `PK_rubro` FOREIGN KEY (`id_rubro`) REFERENCES `tbl_rubro` (`id`),
  ADD CONSTRAINT `PK_suscripcion` FOREIGN KEY (`id_suscripcion`) REFERENCES `tbl_suscripcion` (`id`);
COMMIT;
