-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-08-2020 a las 17:39:06
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
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
-- Base de datos: `degir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `email_admin` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass_admin` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `pass_admin`) VALUES
(1, 'admin@gmail.com', '6797f82f504379e72c59879b12594d39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `id_distrito` int NOT NULL,
  `nom_distrito` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`id_distrito`, `nom_distrito`, `descripcion`, `estado`) VALUES
(1, 'distrito 1', 'Seccion para Recojo de Basura', 1),
(2, 'distrito 2', 'Seccion de Inspeccion mas Bulnerable', 1),
(3, 'distrito 3', 'Sector donde menor basura exitente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int NOT NULL,
  `nom_funcionario` varchar(80) DEFAULT NULL,
  `app_funcionario` varchar(80) DEFAULT NULL,
  `apm_funcionario` varchar(80) DEFAULT NULL,
  `cel_funcionario` int DEFAULT NULL,
  `email_funcionario` varchar(200) DEFAULT NULL,
  `nick_funcionario` varchar(50) DEFAULT NULL,
  `pass_funcionario` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `group_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_group` int NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_group`, `nombre`, `descripcion`) VALUES
(1, 'funcionario', 'Encargado de verificar los reclamos'),
(2, 'inspector', 'Encargado de realizar las inspecciones en los puntos de acopio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inspector`
--

CREATE TABLE `inspector` (
  `id_users` int NOT NULL,
  `nick_user` varchar(100) DEFAULT NULL,
  `pass_user` varchar(250) DEFAULT NULL,
  `email_user` varchar(250) DEFAULT NULL,
  `telef_user` varchar(20) DEFAULT NULL,
  `foto` longblob NOT NULL,
  `nom_user` varchar(80) DEFAULT NULL,
  `apell_user` varchar(100) DEFAULT NULL,
  `ci_user` int DEFAULT NULL,
  `exp_user` enum('lp','bn','szc','or','chqq','cbba','trj','pn','pt') DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `group_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id_obs` int NOT NULL,
  `nom_observaciones` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id_reclamo` int NOT NULL,
  `latitud` varchar(20) DEFAULT NULL,
  `longitud` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `imagen` longblob,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `atendido` tinyint(1) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `zona_id` int DEFAULT NULL,
  `observacion_id` int DEFAULT NULL,
  `subobservacion_id` int DEFAULT NULL,
  `distrito_id` int DEFAULT NULL,
  `users_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subobservaciones`
--

CREATE TABLE `subobservaciones` (
  `id_subobs` int NOT NULL,
  `nom_subobservaciones` varchar(200) DEFAULT NULL,
  `obs_id` int DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id_zona` int NOT NULL,
  `nom_zona` varchar(150) DEFAULT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id_distrito`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `group_id` (`group_id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_group`);

--
-- Indices de la tabla `inspector`
--
ALTER TABLE `inspector`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `fk_group` (`group_id`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_obs`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id_reclamo`),
  ADD KEY `zona_id` (`zona_id`),
  ADD KEY `observacion_id` (`observacion_id`),
  ADD KEY `subobservacion_id` (`subobservacion_id`),
  ADD KEY `distrito_id` (`distrito_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indices de la tabla `subobservaciones`
--
ALTER TABLE `subobservaciones`
  ADD PRIMARY KEY (`id_subobs`),
  ADD KEY `obs_id` (`obs_id`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id_distrito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_group` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inspector`
--
ALTER TABLE `inspector`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_obs` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id_reclamo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subobservaciones`
--
ALTER TABLE `subobservaciones`
  MODIFY `id_subobs` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id_zona` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `grupo` (`id_group`);

--
-- Filtros para la tabla `inspector`
--
ALTER TABLE `inspector`
  ADD CONSTRAINT `fk_group` FOREIGN KEY (`group_id`) REFERENCES `grupo` (`id_group`);

--
-- Filtros para la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `reclamo_ibfk_1` FOREIGN KEY (`zona_id`) REFERENCES `zona` (`id_zona`),
  ADD CONSTRAINT `reclamo_ibfk_2` FOREIGN KEY (`observacion_id`) REFERENCES `observaciones` (`id_obs`),
  ADD CONSTRAINT `reclamo_ibfk_3` FOREIGN KEY (`subobservacion_id`) REFERENCES `subobservaciones` (`id_subobs`),
  ADD CONSTRAINT `reclamo_ibfk_4` FOREIGN KEY (`distrito_id`) REFERENCES `distrito` (`id_distrito`),
  ADD CONSTRAINT `reclamo_ibfk_5` FOREIGN KEY (`users_id`) REFERENCES `inspector` (`id_users`);

--
-- Filtros para la tabla `subobservaciones`
--
ALTER TABLE `subobservaciones`
  ADD CONSTRAINT `subobservaciones_ibfk_1` FOREIGN KEY (`obs_id`) REFERENCES `observaciones` (`id_obs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
