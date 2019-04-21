-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2019 a las 08:13:46
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
  `tipo_usuario` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
  `fecha_hora_elaboracion` datetime DEFAULT NULL,
  `tipo_interrogatorio` varchar(10) DEFAULT NULL,
  `nombre_acompanante` varchar(50) DEFAULT NULL,
  `ape_paterno_acompanante` varchar(50) DEFAULT NULL,
  `ape_materno_acompanante` varchar(50) DEFAULT NULL,
  `parentesco_acompanante` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(50) DEFAULT NULL,
  `lugar_origen` varchar(100) DEFAULT NULL,
  `localidad_residencia` varchar(50) DEFAULT NULL,
  `municipio_residencia` varchar(50) DEFAULT NULL,
  `estado_residencia` varchar(50) DEFAULT NULL,
  `colonia_residencia` varchar(50) DEFAULT NULL,
  `calle_residencia` varchar(50) DEFAULT NULL,
  `num_exterior` varchar(50) DEFAULT NULL,
  `num_interior` varchar(50) DEFAULT NULL,
  `escolaridad` varchar(50) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `tel_movil` char(10) DEFAULT NULL,
  `tel_casa` char(10) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `id_medico` int(10) unsigned NOT NULL,
  `id_enfermera` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `ficha_identificacion`
--

INSERT INTO `ficha_identificacion` (`num_ficha`, `fecha_hora_elaboracion`, `tipo_interrogatorio`, `nombre_acompanante`, `ape_paterno_acompanante`, `ape_materno_acompanante`, `parentesco_acompanante`, `estado_civil`, `lugar_origen`, `localidad_residencia`, `municipio_residencia`, `estado_residencia`, `colonia_residencia`, `calle_residencia`, `num_exterior`, `num_interior`, `escolaridad`, `carrera`, `ocupacion`, `religion`, `tel_movil`, `tel_casa`, `correo_electronico`, `id_medico`, `id_enfermera`) VALUES
(1, '2019-04-20 11:56:25', 'Indirecto', 'Erick', 'Mora', 'Gutierrez', 'padre', 'Soltero(a)', 'Huatusco', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'Av2 Poniete', '200', '101', 'Universidad', 'Ing Sistemas computacionales', 'Programador', 'Cristiano', '2147483644', '7563552347', 'erick@hotmail.com', 2, 5),
(2, '2019-04-20 11:55:31', 'Directo', 'Victor', 'Ruiz', 'Gonzales', 'Padre', 'Casado(a)', 'Huatusco', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'Av3 Poniete', '100', '100', 'Primaria', 'contador', 'contador', 'catolica', '2413543532', '6745234254', 'aaaaaa@hotmail.com', 3, 5),
(3, '2019-04-20 11:55:57', 'Directo', 'Honorio', 'Herrera', 'Valdez', 'Tio', 'Casado(a)', 'Huatusco', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'Av4 Poniete', '250', '200', 'Primaria', 'ing alimentos', 'ing alimentos', 'catolica', '7845663245', '6576572233', 'eeeee@hotmail.com', 3, 5),
(4, '2019-04-20 11:44:19', 'Indirecto', 'Carlos', 'Beltran', 'Blanco', 'Tio', 'Casado(a)', 'Huatusco', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'Av5 Poniete', '258', '300', 'Primaria', 'Ing industrial', 'Ing industrial', 'catolica', '8865324537', '2345566769', 'GGGG@hotmail.com', 3, 5),
(5, '2019-04-09 00:00:00', 'Directo', 'Alejandro', 'Acosta', 'jimenes', 'primo', 'Casado(a)', 'Huatusco', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'Av6 Poniete', '1309', '400', 'Primaria', 'abogado', 'abogado', 'catolica', '6753257865', '7676673457', 'ZZZZZZ@hotmail.com', 3, 5),
(6, '2019-04-20 11:54:14', 'Directo', 'Ana', 'Cruz', 'Dias', 'Madre', 'Casado(a)', 'Huatusco', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'calle 13', '705', '500', 'Ninguna', 'veterinario', 'veterinario', 'catolica', '2345724245', '2345656765', 'maria@hotmail.com', 3, 5),
(7, '2019-04-20 11:56:50', 'Directo', 'Marcos', 'Moreno', 'Gutierrez', 'padre', 'Soltero(a)', 'Huatusco,Huatusco,Huatusco', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'calle 10', '100', '', 'Universidad', 'Ing Sistemas computacionales', 'Estudiante', 'catolica', '8652365632', '2147483647', 'mauricio@hotmail.com', 2, 5),
(8, '2019-04-21 00:54:50', 'Directo', 'Rolando', 'Huerta', 'Contreras', 'Padre', 'Soltero(a)', 'Huatusco,Huatusco,Veracruz', 'Huatusco', 'Huatusco', 'Veracruz', 'colonia centro', 'Av 3', '400', '', 'Primaria', 'preparatoria', 'Estudiante', 'Cristiano', '9424624523', '4525236786', 'rodolfo@hotmail.com', 2, 5),
(30, '2019-04-21 00:51:13', 'Directo', 'Teresa', 'Fernandez', 'Rosales', 'Madre', 'Soltero(a)', 'Huatusco,Huatusco,Veracruz', 'Huatusco', 'Huatusco', 'Veracruz', 'centro', '13 de mayo', '300', '', 'Preparatoria o Bachillerato', 'Ing civil', 'empleado', 'catolica', '5667412345', '5555555551', 'roberto@hotmail.com', 2, 5),
(31, '2019-04-21 00:47:12', 'Directo', 'Juan', 'Mendez', 'Altamirano', 'padre', 'Soltero(a)', 'M3M3M3', 'Huatusco', 'Huatusco', 'Huatusco', 'colonia centro', '15 de abril', '983', '', 'Secundaria', 'licenciado', 'licenciado', 'catolica', '6786634424', '1234123412', 'M3M3M3@hotmail.com', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `new_table`
--

CREATE TABLE IF NOT EXISTS `new_table` (
  `dato` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `new_table`
--

INSERT INTO `new_table` (`dato`, `fecha`) VALUES
(1, '2019-04-09 23:27:12'),
(20, '2019-04-20 11:36:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` varchar(14) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ape_paterno` varchar(50) NOT NULL,
  `ape_materno` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(10) NOT NULL,
  `num_ficha` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre`, `ape_paterno`, `ape_materno`, `genero`, `fecha_nacimiento`, `edad`, `num_ficha`) VALUES
('JFTW040502', 'Pedro', 'Romero', 'Vallejo', 'Hombre', '1988-09-30', 30, 1),
('MOER020312', 'Roberto', 'Mora', 'Fernandez', 'Hombre', '1988-01-12', 31, 30),
('MOER060606', 'Mauricio', 'Torres', 'Gomez', 'Hombre', '2000-01-12', 19, 7),
('OYRW010101', 'Carmen', 'Miranda', 'Torres', 'Mujer', '2000-04-03', 19, 4),
('RERS950221', 'Alberto', 'Del Río', 'Rosales', 'Hombre', '2000-01-03', 19, 31),
('RERS950222', 'Gabriel', 'Sanchez', 'Martinez', 'Hombre', '1995-05-10', 23, 2),
('RERS950225', 'Maria', 'Cruz', 'Lopez', 'Hombre', '2000-01-05', 19, 6),
('RERS950226', 'Rodolfo', 'Huerta', 'Sanchez', 'Hombre', '2003-02-12', 16, 8),
('RERS950229', 'Eduardo', 'Rosas', 'Moreno', 'Hombre', '1990-07-11', 28, 3),
('ZZZZ030303', 'Luis', 'Garcia', 'Romero', 'Hombre', '2000-04-05', 19, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signos_vitales`
--

CREATE TABLE IF NOT EXISTS `signos_vitales` (
`id_signos_vitales` int(11) unsigned NOT NULL,
  `peso` varchar(10) DEFAULT NULL,
  `talla` varchar(10) DEFAULT NULL,
  `IMC` varchar(10) DEFAULT NULL,
  `tension_arterial` varchar(10) DEFAULT NULL,
  `FC` varchar(10) DEFAULT NULL,
  `FR` varchar(10) DEFAULT NULL,
  `abdomen` varchar(10) DEFAULT NULL,
  `cadera` varchar(10) DEFAULT NULL,
  `ICC` varchar(10) DEFAULT NULL,
  `SpO2` varchar(10) DEFAULT NULL,
  `GLIC` varchar(10) DEFAULT NULL,
  `Temperatura` varchar(10) DEFAULT NULL,
  `num_ficha` int(10) unsigned DEFAULT NULL,
  `id_paciente` varchar(14) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `signos_vitales`
--

INSERT INTO `signos_vitales` (`id_signos_vitales`, `peso`, `talla`, `IMC`, `tension_arterial`, `FC`, `FR`, `abdomen`, `cadera`, `ICC`, `SpO2`, `GLIC`, `Temperatura`, `num_ficha`, `id_paciente`) VALUES
(1, '204', '204', '204', '204', '204', '204', '204', '204', '204', '204', '204', '204', 1, NULL),
(2, 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 2, NULL),
(3, 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 'eeeee', 3, NULL),
(4, 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 'GGGG', 4, NULL),
(5, 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 'ZZZZZZ', 5, NULL),
(6, 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 'LLLLLL', 6, NULL),
(7, '70', '1.70', '35', '120/70', '35', '40', '80', '9', '30', '30', '30', '36', 7, NULL),
(8, '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 8, NULL),
(12, '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 30, NULL),
(13, '65', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 'M3M3M3', 31, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(10) unsigned NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ape_paterno` varchar(50) NOT NULL,
  `ape_materno` varchar(50) NOT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `especialidad` varchar(100) DEFAULT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_tipo_usuario` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `ape_paterno`, `ape_materno`, `genero`, `especialidad`, `nombre_usuario`, `password`, `id_tipo_usuario`) VALUES
(1, 'Juan', 'Ramirez', 'Torres', 'Masculino', '', 'admin', '12345', 1),
(2, 'Jorge', 'Lopez', 'Morales', 'Masculino', 'Médico General', 'Jorge123', '12345', 2),
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
-- Indices de la tabla `new_table`
--
ALTER TABLE `new_table`
 ADD PRIMARY KEY (`dato`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
 ADD PRIMARY KEY (`id_paciente`), ADD KEY `FK_paciente_ficha_identificacion_idx` (`num_ficha`);

--
-- Indices de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
 ADD PRIMARY KEY (`id_signos_vitales`), ADD KEY `fk_signos_vitales_ficha_identificacion1_idx` (`num_ficha`), ADD KEY `fk_signos_vitales_pacientes1_idx` (`id_paciente`);

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
MODIFY `num_ficha` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
MODIFY `id_signos_vitales` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
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
