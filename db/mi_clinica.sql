-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2019 a las 00:17:57
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mi_clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `cat_tipo_usuarios` (
`id_tipo_usuario` int(10) unsigned NOT NULL,
  `tipo_usuario` varchar(45) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cat_tipo_usuarios`
--

INSERT INTO `cat_tipo_usuarios` (`id_tipo_usuario`, `tipo_usuario`, `descripcion`) VALUES
(1, 'administrador', 'Es el que tiene todos los privilegios en el sistema'),
(2, 'doctor', 'Es el encargado de llevar las consultas de los pacientes'),
(3, 'enfermera', 'Es la encargada de llevar el registro de pacientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_identificacion`
--

CREATE TABLE IF NOT EXISTS `ficha_identificacion` (
`num_ficha` int(11) unsigned NOT NULL,
  `fecha_hora_elaboracion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_interrogatorio` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_acompanante` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ape_paterno_acompanante` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ape_materno_acompanante` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `parentesco_acompanante` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `estado_civil` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `lugar_origen` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `localidad_residencia` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `municipio_residencia` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `estado_residencia` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `colonia_residencia` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `calle_residencia` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `num_exterior` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `num_interior` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `escolaridad` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `carrera` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `ocupacion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `religion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tel_movil` int(10) DEFAULT NULL,
  `tel_casa` int(10) DEFAULT NULL,
  `correo_electronico` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `id_medico` int(10) unsigned NOT NULL,
  `id_enfermera` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `ficha_identificacion`
--

INSERT INTO `ficha_identificacion` (`num_ficha`, `fecha_hora_elaboracion`, `tipo_interrogatorio`, `nombre_acompanante`, `ape_paterno_acompanante`, `ape_materno_acompanante`, `parentesco_acompanante`, `estado_civil`, `lugar_origen`, `localidad_residencia`, `municipio_residencia`, `estado_residencia`, `colonia_residencia`, `calle_residencia`, `num_exterior`, `num_interior`, `escolaridad`, `carrera`, `ocupacion`, `religion`, `tel_movil`, `tel_casa`, `correo_electronico`, `id_medico`, `id_enfermera`) VALUES
(9, '1988-09-30 15:33:04', 'Indirecto', 'chido', 'chido', 'chido', 'chido', 'Viudo(a)', 'aaaaa2chido', 'aaaaa3chido', 'chido', 'chido', 'chido', 'chido', 'chido', 'chido', 'Otro posgrado', 'chido', 'chido', 'chido', 2147483647, 2147483647, 'chido@gmail.com', 3, 5),
(10, '2019-04-08 13:37:10', 'Directo', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'Casado(a)', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'Primaria', 'eeeee', 'eeeee', 'eeeee', 2147483647, 2134234234, 'luisame90@gmail.com', 3, 5),
(11, '2019-04-08 13:43:00', 'Directo', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'Soltero(a)', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'Primaria', 'bbbbbb', 'bbbbbb', 'bbbbbb', 2134124314, 2134213423, 'luisame90@gmail.com', 2, 5),
(12, '2019-04-08 13:46:29', 'Directo', 'wwww', 'wwww', 'wwww', 'wwww', 'Casado(a)', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'Ninguna', 'wwww', 'wwww', 'wwww', 2134124314, 2134213423, 'luisame90@gmail.com', 2, 5),
(13, '2019-04-08 12:45:27', 'Directo', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'Soltero(a)', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'Ninguna', 'zzzzz', 'zzzzz', 'zzzzz', 2134124314, 2134213423, 'luisame90@gmail.com', 2, 5),
(14, '2019-04-08 17:31:30', 'Directo', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'Soltero(a)', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'Primaria', 'bbbbbb', 'bbbbbb', 'bbbbbb', 2134124314, 2134213423, 'luisame90@gmail.com', 2, 5),
(15, '2019-04-10 00:00:00', 'Directo', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'Soltero(a)', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', '', 'Ninguna', 'PPPPPP', 'PPPPPP', 'PPPPPP', 1432421423, 2147483647, 'luisame90@gmail.com', 3, 5),
(16, '2019-04-10 15:22:29', 'Directo', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Casado(a)', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Primaria', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 2147483647, 2147483647, 'luisame90@gmail.com', 2, 5),
(17, '2019-04-10 15:22:49', 'Directo', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Casado(a)', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Primaria', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 2147483647, 2147483647, 'luisame90@gmail.com', 2, 5),
(18, '2019-04-10 15:24:48', 'Directo', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Casado(a)', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Primaria', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 2147483647, 2147483647, 'luisame90@gmail.com', 2, 5),
(19, '2019-04-10 15:26:35', 'Directo', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Casado(a)', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Primaria', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 2147483647, 2147483647, 'luisame90@gmail.com', 2, 5),
(20, '2019-04-10 00:00:00', 'Directo', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Casado(a)', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Primaria', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 2147483647, 2147483647, 'luisame90@gmail.com', 2, 5),
(21, '2019-04-10 00:00:00', 'Directo', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'Casado(a)', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'Primaria', 'YYYYYY', 'YYYYYY', 'YYYYYY', 2147483647, 2147483647, 'luisame90@gmail.com', 2, 5),
(22, '2019-04-11 00:00:00', 'Directo', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'Casado(a)', 'MMMMM', 'México', 'México', 'México', 'México', 'México', 'México', 'México', 'Primaria', 'MMMMM', 'MMMMM', 'MMMMM', 2147483647, 2147483647, 'MMMMM@gmail.com', 2, 5),
(23, '2019-04-11 00:00:00', 'Directo', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'Casado(a)', 'QWQWQW', 'Totutla', 'Totutla', 'Totutla', 'Totutla', 'Totutla', 'Totutla', 'Totutla', 'Ninguna', 'QWQWQW', 'QWQWQW', 'QWQWQW', 1241234123, 2147483647, 'QWQWQW@gmail.com', 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` varchar(14) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ape_paterno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ape_materno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `genero` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(10) NOT NULL,
  `num_ficha` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre`, `ape_paterno`, `ape_materno`, `genero`, `fecha_nacimiento`, `edad`, `num_ficha`) VALUES
('aaaaa', 'aaaaa', 'aaaa', 'aaaaa', 'Hombre', '2019-04-04', 3, 9),
('bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'Hombre', '2019-04-11', 13, 11),
('eeeee', 'eeeee', 'eeeee', 'eeeee', 'Hombre', '2019-04-05', 4, 10),
('FFFF020202', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Hombre', '2019-04-11', 1, 20),
('FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'Hombre', '2019-04-11', 1, 16),
('MMMM050505', 'José', 'García', 'Cortés', 'Hombre', '2019-04-10', 11, 22),
('QWQW070707', 'Pepe', 'El', 'Toro', 'Hombre', '2019-04-05', 7, 23),
('RBQW030303', 'Alfonso', 'Huerta', 'Paez', 'Hombre', '2019-04-04', 0, 15),
('wwww', 'wwww', 'wwww', 'wwww', 'Hombre', '2019-04-06', 2, 12),
('YYYY010101', 'rrrá', 'YYYYYY', 'YYYYYY', 'Hombre', '2019-04-11', 1, 21),
('zzzzz1', 'zzzzz', 'zzzzz', 'zzzzz', 'Hombre', '2019-04-06', 2, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signos_vitales`
--

CREATE TABLE IF NOT EXISTS `signos_vitales` (
`id_signos_vitales` int(11) unsigned NOT NULL,
  `peso` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `talla` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `IMC` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `tension_arterial` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `FC` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `FR` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `abdomen` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `cadera` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `ICC` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `SpO2` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `GLIC` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `Temperatura` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `num_ficha` int(11) unsigned DEFAULT NULL,
  `id_paciente` varchar(14) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `signos_vitales`
--

INSERT INTO `signos_vitales` (`id_signos_vitales`, `peso`, `talla`, `IMC`, `tension_arterial`, `FC`, `FR`, `abdomen`, `cadera`, `ICC`, `SpO2`, `GLIC`, `Temperatura`, `num_ficha`, `id_paciente`) VALUES
(1, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 9, NULL),
(2, 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 10, NULL),
(3, 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 'bbbbbb', 11, NULL),
(4, 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', 12, NULL),
(5, 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 'zzzzz', 13, NULL),
(6, 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 'PPPPPP', 15, NULL),
(7, 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 'FFFFFFF', 20, NULL),
(8, 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 'YYYYYY', 21, NULL),
(9, 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 'MMMMM', 22, NULL),
(10, 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 'QWQWQW', 23, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(10) unsigned NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ape_paterno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ape_materno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `genero` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `especialidad` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_usuario` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `id_tipo_usuario` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `ape_paterno`, `ape_materno`, `genero`, `especialidad`, `nombre_usuario`, `password`, `id_tipo_usuario`) VALUES
(1, 'Juan', 'Ramirez', 'Torres', 'Masculino', '', 'admin', '12345', 1),
(2, 'Jorge', 'López', 'Morales', 'Masculino', 'Médico General', 'Jorge123', '12345', 2),
(3, 'Hugo', 'Martinez', 'García', 'Masculino', 'Médico cirujano', 'Hugo123', '12345', 2),
(4, 'Ana', 'Toral', 'Huesca', '', '', 'Ana123', '12345', 3),
(5, 'Itzel', 'Herrera', 'Rodriguez', '', '', 'Itzel123', '12345', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_tipo_usuarios`
--
ALTER TABLE `cat_tipo_usuarios`
 ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `ficha_identificacion`
--
ALTER TABLE `ficha_identificacion`
 ADD PRIMARY KEY (`num_ficha`), ADD KEY `fk_ficha_identificacion_usuarios1_idx` (`id_medico`), ADD KEY `fk_ficha_identificacion_usuarios2_idx` (`id_enfermera`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
 ADD PRIMARY KEY (`id_paciente`), ADD KEY `FK_paciente_ficha_identificacion_idx` (`num_ficha`);

--
-- Indices de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
 ADD PRIMARY KEY (`id_signos_vitales`), ADD KEY `fk_signos_vitales_ficha_identificacion1_idx` (`num_ficha`), ADD KEY `fk_signos_vitales_usuarios1_idx` (`id_paciente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `fk_usuarios_cat_tipo_usuarios1_idx` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_tipo_usuarios`
--
ALTER TABLE `cat_tipo_usuarios`
MODIFY `id_tipo_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ficha_identificacion`
--
ALTER TABLE `ficha_identificacion`
MODIFY `num_ficha` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
MODIFY `id_signos_vitales` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ficha_identificacion`
--
ALTER TABLE `ficha_identificacion`
ADD CONSTRAINT `fk_ficha_identificacion_usuarios1` FOREIGN KEY (`id_medico`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ficha_identificacion_usuarios2` FOREIGN KEY (`id_enfermera`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
ADD CONSTRAINT `FK_paciente_ficha_identificacion` FOREIGN KEY (`num_ficha`) REFERENCES `ficha_identificacion` (`num_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
ADD CONSTRAINT `fk_signos_vitales_ficha_identificacion1` FOREIGN KEY (`num_ficha`) REFERENCES `ficha_identificacion` (`num_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_signos_vitales_pacientes1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `fk_usuarios_cat_tipo_usuarios1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `cat_tipo_usuarios` (`id_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
