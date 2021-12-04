-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 21:40:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena_edu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `Num_Documento` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Grupo` varchar(255) NOT NULL,
  `Curso` varchar(255) NOT NULL,
  `Numficha` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Numcelular` varchar(255) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz_llam_atencion`
--

CREATE TABLE `aprendiz_llam_atencion` (
  `Num_Documento` varchar(255) NOT NULL,
  `id_llamatencion` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` varchar(255) NOT NULL,
  `paragrafo` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) NOT NULL,
  `Numcelular` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamados_de_atencion`
--

CREATE TABLE `llamados_de_atencion` (
  `id_llamatencion` bigint(20) NOT NULL,
  `Id_reglamentofk` varchar(255) NOT NULL,
  `Id_instructorfk` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reglamento`
--

CREATE TABLE `reglamento` (
  `id` varchar(255) NOT NULL,
  `id_articulo` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `articulo` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Tipo` varchar(255) DEFAULT NULL,
  `Fecha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sede` bigint(20) NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `id_sede`, `rol`, `email`, `password`, `fecha_registro`, `estado`, `fecha`) VALUES
(1, 'cordinador academico', 1, 'admin', 'sena.educ@sena.com', '123456789', '2021-07-16', 'Activo', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`Num_Documento`);

--
-- Indices de la tabla `aprendiz_llam_atencion`
--
ALTER TABLE `aprendiz_llam_atencion`
  ADD KEY `Id_aorendizfk` (`Num_Documento`),
  ADD KEY `Id_llamado_atencionfk` (`id_llamatencion`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD UNIQUE KEY `articulonum` (`id`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `llamados_de_atencion`
--
ALTER TABLE `llamados_de_atencion`
  ADD PRIMARY KEY (`id_llamatencion`),
  ADD KEY `Id_reglamentofk` (`Id_reglamentofk`),
  ADD KEY `Id_instructorfk` (`Id_instructorfk`),
  ADD KEY `Id_reglamentofk_2` (`Id_reglamentofk`);

--
-- Indices de la tabla `reglamento`
--
ALTER TABLE `reglamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `agency_id` (`id_sede`),
  ADD KEY `id_sede` (`id_sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `llamados_de_atencion`
--
ALTER TABLE `llamados_de_atencion`
  MODIFY `id_llamatencion` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendiz_llam_atencion`
--
ALTER TABLE `aprendiz_llam_atencion`
  ADD CONSTRAINT `aprendiz_llam_atencion_ibfk_1` FOREIGN KEY (`Num_Documento`) REFERENCES `aprendiz` (`Num_Documento`),
  ADD CONSTRAINT `aprendiz_llam_atencion_ibfk_2` FOREIGN KEY (`id_llamatencion`) REFERENCES `llamados_de_atencion` (`id_llamatencion`);

--
-- Filtros para la tabla `llamados_de_atencion`
--
ALTER TABLE `llamados_de_atencion`
  ADD CONSTRAINT `llamados_de_atencion_ibfk_1` FOREIGN KEY (`Id_instructorfk`) REFERENCES `instructor` (`id`),
  ADD CONSTRAINT `llamados_de_atencion_ibfk_2` FOREIGN KEY (`Id_reglamentofk`) REFERENCES `reglamento` (`id`);

--
-- Filtros para la tabla `reglamento`
--
ALTER TABLE `reglamento`
  ADD CONSTRAINT `reglamento_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
