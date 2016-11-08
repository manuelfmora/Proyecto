-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2016 a las 19:51:52
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
-- Estructura de tabla para la tabla `alumnado`
--

CREATE TABLE `alumnado` (
  `idAlumnado` int(11) NOT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `nie` int(7) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `fechaNacimiento` datetime DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `fotoAlumnado` varchar(45) DEFAULT NULL,
  `Consejo_Orientador_idConsejo_Orientador` int(11) NOT NULL,
  `Transito_idTransito` int(11) NOT NULL,
  `Trayect_Acad_idTrayect_Acad` int(11) NOT NULL,
  `nombreT1` varchar(80) DEFAULT NULL,
  `dniT1` varchar(9) DEFAULT NULL,
  `nombreT2` varchar(80) DEFAULT NULL,
  `dniT2` varchar(9) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `poblacion` varchar(45) DEFAULT NULL,
  `cod_provincia` varchar(45) DEFAULT NULL,
  `telefono1` int(9) DEFAULT NULL,
  `telefono2` int(9) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `situacion` varchar(45) DEFAULT NULL,
  `implicacion_escolar` varchar(45) DEFAULT NULL,
  `provincias_cod` char(2) NOT NULL,
  `provincias_cod1` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo_orientador`
--

CREATE TABLE `consejo_orientador` (
  `idConsejo_Orientador` int(11) NOT NULL,
  `opciones` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_salud`
--

CREATE TABLE `datos_salud` (
  `idDatos_Salud` int(11) NOT NULL,
  `datos_medicos` varchar(100) DEFAULT NULL,
  `datos_psicologicos` varchar(100) DEFAULT NULL,
  `informes` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistas`
--

CREATE TABLE `entrevistas` (
  `idEntrevistas` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `asistentes` varchar(20) DEFAULT NULL,
  `temas` varchar(100) DEFAULT NULL,
  `acuerdos` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  `Alumnado_Consejo_Orientador_idConsejo_Orientador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidasad`
--

CREATE TABLE `medidasad` (
  `idMedidasAD` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_ini` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `neae`
--

CREATE TABLE `neae` (
  `idNeae` int(11) NOT NULL,
  `censo` varchar(45) DEFAULT NULL,
  `ev_ps` varchar(100) DEFAULT NULL COMMENT 'Evaluacion Psicopedagogica PDF',
  `dic_es` varchar(100) DEFAULT NULL COMMENT 'Dictamen de Escolarizacion PDF',
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolos`
--

CREATE TABLE `protocolos` (
  `idProtocolos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `ceip` varchar(80) DEFAULT 'colegio procedencia',
  `repeticiones` int(1) DEFAULT NULL,
  `ncc` varchar(45) DEFAULT 'nivel competencia curricular',
  `area_suspensa` varchar(45) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayect_acad`
--

CREATE TABLE `trayect_acad` (
  `idTrayect_Acad` int(11) NOT NULL,
  `ano_academico` varchar(9) NOT NULL,
  `grupo` varchar(4) NOT NULL,
  `evaluaciones` varchar(30) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `pendientes` varchar(45) DEFAULT NULL COMMENT 'Asignaturas pendientes.',
  `promocion` varchar(15) NOT NULL,
  `titulacion` varchar(2) DEFAULT NULL,
  `fecha_ev` datetime DEFAULT NULL,
  `propuesta` varchar(20) DEFAULT NULL,
  `inte_grup` varchar(45) DEFAULT NULL COMMENT 'Integracion Grupal',
  `tutor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_alumnado`
--

CREATE TABLE `usuario_has_alumnado` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  `Alumnado_Consejo_Orientador_idConsejo_Orientador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnado`
--
ALTER TABLE `alumnado`
  ADD PRIMARY KEY (`idAlumnado`,`Consejo_Orientador_idConsejo_Orientador`,`provincias_cod`,`provincias_cod1`),
  ADD KEY `fk_Alumnado_Consejo_Orientador1_idx` (`Consejo_Orientador_idConsejo_Orientador`),
  ADD KEY `fk_Alumnado_Transito1_idx` (`Transito_idTransito`),
  ADD KEY `fk_Alumnado_Trayect_Acad1_idx` (`Trayect_Acad_idTrayect_Acad`),
  ADD KEY `fk_Alumnado_provincias1_idx` (`provincias_cod`),
  ADD KEY `fk_Alumnado_provincias2_idx` (`provincias_cod1`);

--
-- Indices de la tabla `consejo_orientador`
--
ALTER TABLE `consejo_orientador`
  ADD PRIMARY KEY (`idConsejo_Orientador`);

--
-- Indices de la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
  ADD PRIMARY KEY (`idDatos_Salud`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  ADD KEY `fk_Datos_Salud_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`);

--
-- Indices de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD PRIMARY KEY (`idEntrevistas`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  ADD KEY `fk_Entrevistas_Alumnado1` (`Alumnado_idAlumnado`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  ADD KEY `fk_Entrevistas_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`);

--
-- Indices de la tabla `medidasad`
--
ALTER TABLE `medidasad`
  ADD PRIMARY KEY (`idMedidasAD`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  ADD KEY `fk_MedidasAD_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`);

--
-- Indices de la tabla `neae`
--
ALTER TABLE `neae`
  ADD PRIMARY KEY (`idNeae`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  ADD KEY `fk_Neae_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`);

--
-- Indices de la tabla `protocolos`
--
ALTER TABLE `protocolos`
  ADD PRIMARY KEY (`idProtocolos`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  ADD KEY `fk_Protocolos_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `transito`
--
ALTER TABLE `transito`
  ADD PRIMARY KEY (`idTransito`);

--
-- Indices de la tabla `trayect_acad`
--
ALTER TABLE `trayect_acad`
  ADD PRIMARY KEY (`idTrayect_Acad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuario_has_alumnado`
--
ALTER TABLE `usuario_has_alumnado`
  ADD PRIMARY KEY (`Usuario_idUsuario`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  ADD KEY `fk_Usuario_has_Alumnado_Alumnado1` (`Alumnado_idAlumnado`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  ADD KEY `fk_Usuario_has_Alumnado_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  ADD KEY `fk_Usuario_has_Alumnado_Usuario1_idx` (`Usuario_idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnado`
--
ALTER TABLE `alumnado`
  MODIFY `idAlumnado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
  MODIFY `idDatos_Salud` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `idEntrevistas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `transito`
--
ALTER TABLE `transito`
  MODIFY `idTransito` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnado`
--
ALTER TABLE `alumnado`
  ADD CONSTRAINT `fk_Alumnado_Consejo_Orientador1` FOREIGN KEY (`Consejo_Orientador_idConsejo_Orientador`) REFERENCES `consejo_orientador` (`idConsejo_Orientador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumnado_Transito1` FOREIGN KEY (`Transito_idTransito`) REFERENCES `transito` (`idTransito`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumnado_Trayect_Acad1` FOREIGN KEY (`Trayect_Acad_idTrayect_Acad`) REFERENCES `trayect_acad` (`idTrayect_Acad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumnado_provincias1` FOREIGN KEY (`provincias_cod`) REFERENCES `provincias` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alumnado_provincias2` FOREIGN KEY (`provincias_cod1`) REFERENCES `provincias` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
  ADD CONSTRAINT `fk_Datos_Salud_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  ADD CONSTRAINT `fk_Entrevistas_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`) REFERENCES `alumnado` (`idAlumnado`, `Consejo_Orientador_idConsejo_Orientador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `medidasad`
--
ALTER TABLE `medidasad`
  ADD CONSTRAINT `fk_MedidasAD_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `neae`
--
ALTER TABLE `neae`
  ADD CONSTRAINT `fk_Neae_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `protocolos`
--
ALTER TABLE `protocolos`
  ADD CONSTRAINT `fk_Protocolos_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_alumnado`
--
ALTER TABLE `usuario_has_alumnado`
  ADD CONSTRAINT `fk_Usuario_has_Alumnado_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`) REFERENCES `alumnado` (`idAlumnado`, `Consejo_Orientador_idConsejo_Orientador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_has_Alumnado_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
