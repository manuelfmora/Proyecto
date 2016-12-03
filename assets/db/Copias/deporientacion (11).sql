-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2016 a las 00:44:18
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deporientacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(11) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `nie` int(7) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `edad` int(2) DEFAULT NULL,
  `fotoAlumnado` varchar(45) DEFAULT NULL,
  `datos_medicos` varchar(100) DEFAULT NULL,
  `datos_psicologicos` varchar(100) DEFAULT NULL,
  `informe_medico` varchar(45) DEFAULT NULL COMMENT 'Informe medico en PDF',
  `nombreT1` varchar(80) NOT NULL,
  `nombreT2` varchar(80) DEFAULT NULL,
  `direccion` varchar(45) NOT NULL,
  `cp` int(5) NOT NULL,
  `poblacion` varchar(45) NOT NULL,
  `cod_provincia` char(2) DEFAULT NULL,
  `telefono1` int(9) NOT NULL,
  `telefono2` int(9) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL COMMENT 'Tipo de familia(Tradicional,Monoparental...)',
  `situacion` varchar(45) DEFAULT NULL,
  `implicacion_escolar` varchar(45) DEFAULT NULL,
  `curso` int(1) NOT NULL,
  `grupo` char(1) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `apellidos`, `nombre`, `nie`, `fechaNacimiento`, `edad`, `fotoAlumnado`, `datos_medicos`, `datos_psicologicos`, `informe_medico`, `nombreT1`, `nombreT2`, `direccion`, `cp`, `poblacion`, `cod_provincia`, `telefono1`, `telefono2`, `tipo`, `situacion`, `implicacion_escolar`, `curso`, `grupo`, `Usuario_idUsuario`) VALUES
(10, 'Mora Perez', 'Manuel', 12125, '1970-12-28', NULL, NULL, 'Ninguno', 'Nimguno', 'Sin insidencias', 'Manuel Mora', 'Inmaculada Ramos', 'Avda. Andalucia nº 85 2º', 21500, 'Gigraleón', '21', 959301125, 607535988, 'Monoparental', 'Estable', 'Estable', 2, 'B', 1),
(11, 'Ramos Bebia', 'Inmaculada', 54321, '1971-12-25', NULL, NULL, 'Ninguno', 'Ninguno', 'Aceptado', 'Luis Ramos', 'Antónia Bebia', 'Avda. Andalucia nº 85 2º', 21500, 'Gigraleón', '21', 959301125, 607535544, 'Normal', 'Normal', 'Normal', 3, 'C', 1),
(12, 'Mora Martin', 'Manuel Francisco', 12124, '1970-12-28', NULL, NULL, 'Ninguno', 'Ninguno', 'Ninguno', 'Inmaculada ', 'Pepe', 'Avda. Andalucía Nº85 2º', 21500, 'Gibraleón', '18', 959301156, 959301156, 'Ninguno', 'Ninguno', 'Ninguno', 2, 'A', 1),
(13, 'Martín Rodriguez', 'Alicia', 11111, '1970-12-28', NULL, NULL, 'n', 'n', 'n', 'Manuel Francisco', 'Manuel Francisco', 'Avda. Andalucía Nº85 2º', 21500, 'Gibraleón', '18', 959301156, 959301156, 'ghjgh', 'ghjg', 'ghjg', 1, 'A', 1),
(14, 'Perez', 'Alejandro', 22222, '1970-12-28', NULL, NULL, 'Ninguno', 'Ninguno', 'Ninguno', 'Manuel Francisco', 'Manuel Francisco', 'Avda. Andalucía Nº85 2º', 21500, 'Gibraleón', '03', 959301156, 959301156, 'Ninguno', 'Ninguno', 'Ninguno', 2, 'A', 1),
(15, 'Ramos Bebia', 'Inmaculada', 44444, '1970-12-28', NULL, NULL, 'Ninguno', 'Ninguno', 'Ninguno', 'Pepe', 'Pepe', 'Avda. Andalucía Nº25', 21500, 'Gibraleón', '11', 959302254, 959302254, 'Ninguno', 'Ninguno', 'Ninguno', 3, 'A', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo_orientador`
--

CREATE TABLE `consejo_orientador` (
  `idConsejo_Orientador` int(11) NOT NULL,
  `opciones` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistas`
--

CREATE TABLE `entrevistas` (
  `idEntrevistas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(45) NOT NULL,
  `asistentes` varchar(20) NOT NULL,
  `temas` varchar(100) DEFAULT NULL,
  `acuerdos` varchar(100) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrevistas`
--

INSERT INTO `entrevistas` (`idEntrevistas`, `fecha`, `motivo`, `asistentes`, `temas`, `acuerdos`, `idAlumno`) VALUES
(1, '1970-12-28', 'Motivo', 'Asistente', 'Temas', 'Acuerdos', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidasad`
--

CREATE TABLE `medidasad` (
  `idMedidasad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medidasad`
--

INSERT INTO `medidasad` (`idMedidasad`, `nombre`, `fecha_ini`, `fecha_fin`, `observaciones`, `idAlumno`) VALUES
(13, 'P.M.A.R.,P.E.', '1970-12-28', '1970-12-29', 'qwewr', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `neae`
--

CREATE TABLE `neae` (
  `idNeae` int(11) NOT NULL COMMENT 'Necesidades Especiales Apoyo Educativo',
  `censo` varchar(45) DEFAULT NULL,
  `ev_ps` varchar(100) DEFAULT NULL COMMENT 'Evaluacion Psicopedagogica PDF',
  `dic_es` varchar(100) DEFAULT NULL COMMENT 'Dictamen de Escolarizacion PDF',
  `idAlumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `neae`
--

INSERT INTO `neae` (`idNeae`, `censo`, `ev_ps`, `dic_es`, `idAlumno`) VALUES
(2, 'Prueba con menu cambiado', 'Prueba con menu cambiado', 'Prueba con menu cambiado', 11),
(5, 'DIS', 'ukfy', 'fukf', 14),
(6, 'DIS', 'Evaluación', 'Dictamen', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolos`
--

CREATE TABLE `protocolos` (
  `idProtocolos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `idAlumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `protocolos`
--

INSERT INTO `protocolos` (`idProtocolos`, `nombre`, `fecha_ini`, `fecha_fin`, `observaciones`, `idAlumno`) VALUES
(1, '', '1970-12-28 00:00:00', '1970-12-29 00:00:00', '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `cod` char(2) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `comunidad_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`cod`, `nombre`, `comunidad_id`) VALUES
('01', 'Alava', 16),
('02', 'Albacete', 7),
('03', 'Alicante', 10),
('04', 'Almería', 1),
('05', 'Avila', 8),
('06', 'Badajoz', 11),
('07', 'Balears (Illes)', 4),
('08', 'Barcelona', 9),
('09', 'Burgos', 8),
('10', 'Cáceres', 11),
('11', 'Cádiz', 1),
('12', 'Castellón', 10),
('13', 'Ciudad Real', 7),
('14', 'Córdoba', 1),
('15', 'Coruña (A)', 12),
('16', 'Cuenca', 7),
('17', 'Girona', 9),
('18', 'Granada', 1),
('19', 'Guadalajara', 7),
('20', 'Guipzcoa', 16),
('21', 'Huelva', 1),
('22', 'Huesca', 2),
('23', 'Jaén', 1),
('24', 'León', 8),
('25', 'Lleida', 9),
('26', 'Rioja (La)', 17),
('27', 'Lugo', 12),
('28', 'Madrid', 13),
('29', 'Málaga', 1),
('30', 'Murcia', 14),
('31', 'Navarra', 15),
('32', 'Ourense', 12),
('33', 'Asturias', 3),
('34', 'Palencia', 8),
('35', 'Palmas (Las)', 5),
('36', 'Pontevedra', 12),
('37', 'Salamanca', 8),
('38', 'Santa Cruz de Tenerife', 5),
('39', 'Cantabria', 6),
('40', 'Segovia', 8),
('41', 'Sevilla', 1),
('42', 'Soria', 8),
('43', 'Tarragona', 9),
('44', 'Teruel', 2),
('45', 'Toledo', 7),
('46', 'Valencia', 10),
('47', 'Valladolid', 8),
('48', 'Vizcaya', 16),
('49', 'Zamora', 8),
('50', 'Zaragoza', 2),
('51', 'Ceuta', 18),
('52', 'Melilla', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transito`
--

CREATE TABLE `transito` (
  `idTransito` int(11) NOT NULL,
  `ceip` varchar(80) NOT NULL DEFAULT 'colegio procedencia',
  `repeticiones` int(1) DEFAULT NULL,
  `ncc` varchar(45) NOT NULL DEFAULT 'nivel competencia curricular',
  `area_suspensa` varchar(45) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `transito`
--

INSERT INTO `transito` (`idTransito`, `ceip`, `repeticiones`, `ncc`, `area_suspensa`, `observaciones`, `idAlumno`) VALUES
(3, 'Datos CEIP', 2, 'Datos NCC', 'Datos Area Susupensa', '33333', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayect_acad`
--

CREATE TABLE `trayect_acad` (
  `idTrayect_Acad` int(11) NOT NULL,
  `ano_academico` varchar(9) NOT NULL,
  `evaluaciones` varchar(30) NOT NULL,
  `fecha_ev` date NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `pendientes` varchar(45) DEFAULT NULL COMMENT 'Asignaturas pendientes.',
  `promocion` varchar(15) NOT NULL,
  `titulacion` varchar(2) DEFAULT NULL,
  `propuesta` varchar(20) DEFAULT NULL,
  `inte_grup` varchar(45) DEFAULT NULL COMMENT 'Integracion Grupal',
  `tutor` varchar(45) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trayect_acad`
--

INSERT INTO `trayect_acad` (`idTrayect_Acad`, `ano_academico`, `evaluaciones`, `fecha_ev`, `observaciones`, `pendientes`, `promocion`, `titulacion`, `propuesta`, `inte_grup`, `tutor`, `idAlumno`) VALUES
(2, '2016/2017', 'Primera Evaluación', '1970-12-28', 'dDF', 'DSFADGAS', 'AFDSDSDS', 'FD', 'TREHT', 'TRHERT', 'ERTHETE', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre_usu` varchar(45) DEFAULT NULL,
  `nombre_persona` varchar(45) DEFAULT NULL,
  `apellidos_persona` varchar(60) DEFAULT NULL,
  `correo` varchar(180) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `clave` varchar(260) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre_usu`, `nombre_persona`, `apellidos_persona`, `correo`, `estado`, `dni`, `clave`) VALUES
(1, 'admin', 'Manuel Francisco', 'Martín', 'mfmora2@gmail.com', 'A', '29056491Q', '$2y$10$ry7sdyqRC1rIQEuz/YJB4enWWI0r9AE3pOizSMx1MBluKv9e6tmxa'),
(2, 'user', 'Manuel', 'Martín', 'mfmora2@gmail.com', 'A', '29056491Q', '$2y$10$4zxEdT0ijkDOChEVhgCYguy0a4Llq0LRGWDILtap./ijAyXe1p42y');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`,`Usuario_idUsuario`),
  ADD KEY `fk_Alumno_Usuario1_idx` (`Usuario_idUsuario`),
  ADD KEY `idAlumno` (`idAlumno`),
  ADD KEY `fk_Alumno_provincias` (`cod_provincia`);

--
-- Indices de la tabla `consejo_orientador`
--
ALTER TABLE `consejo_orientador`
  ADD PRIMARY KEY (`idConsejo_Orientador`),
  ADD KEY `FK_Alumno_Consejo_Orientador` (`idAlumno`);

--
-- Indices de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD PRIMARY KEY (`idEntrevistas`),
  ADD KEY `FK_Alumno_Entrevistas` (`idAlumno`);

--
-- Indices de la tabla `medidasad`
--
ALTER TABLE `medidasad`
  ADD PRIMARY KEY (`idMedidasad`),
  ADD KEY `FK_alumnos_medidasad` (`idAlumno`);

--
-- Indices de la tabla `neae`
--
ALTER TABLE `neae`
  ADD PRIMARY KEY (`idNeae`),
  ADD KEY `FK_alumnos_neae` (`idAlumno`);

--
-- Indices de la tabla `protocolos`
--
ALTER TABLE `protocolos`
  ADD PRIMARY KEY (`idProtocolos`),
  ADD KEY `FK_Alumno_Protocolos` (`idAlumno`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `transito`
--
ALTER TABLE `transito`
  ADD PRIMARY KEY (`idTransito`),
  ADD KEY `FK_Alumno_Transito` (`idAlumno`);

--
-- Indices de la tabla `trayect_acad`
--
ALTER TABLE `trayect_acad`
  ADD PRIMARY KEY (`idTrayect_Acad`),
  ADD KEY `FK_Alumno_TrayectAcad` (`idAlumno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `consejo_orientador`
--
ALTER TABLE `consejo_orientador`
  MODIFY `idConsejo_Orientador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `idEntrevistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `medidasad`
--
ALTER TABLE `medidasad`
  MODIFY `idMedidasad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `neae`
--
ALTER TABLE `neae`
  MODIFY `idNeae` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Necesidades Especiales Apoyo Educativo', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `protocolos`
--
ALTER TABLE `protocolos`
  MODIFY `idProtocolos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `transito`
--
ALTER TABLE `transito`
  MODIFY `idTransito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `trayect_acad`
--
ALTER TABLE `trayect_acad`
  MODIFY `idTrayect_Acad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_Alumno_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumno_provincias` FOREIGN KEY (`cod_provincia`) REFERENCES `provincias` (`cod`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `consejo_orientador`
--
ALTER TABLE `consejo_orientador`
  ADD CONSTRAINT `FK_Alumno_Consejo_Orientador` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD CONSTRAINT `FK_Alumno_Entrevistas` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `medidasad`
--
ALTER TABLE `medidasad`
  ADD CONSTRAINT `FK_Alumnos_Medidasad` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `neae`
--
ALTER TABLE `neae`
  ADD CONSTRAINT `FK_alumnos_neae` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `protocolos`
--
ALTER TABLE `protocolos`
  ADD CONSTRAINT `FK_Alumno_Protocolos` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `transito`
--
ALTER TABLE `transito`
  ADD CONSTRAINT `FK_Alumno_Transito` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `trayect_acad`
--
ALTER TABLE `trayect_acad`
  ADD CONSTRAINT `FK_Alumno_TrayectAcad` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
