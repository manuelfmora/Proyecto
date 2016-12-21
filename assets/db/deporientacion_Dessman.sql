-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2016 a las 14:27:08
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

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
  `fecha_inser` date DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `apellidos`, `nombre`, `nie`, `fechaNacimiento`, `edad`, `fotoAlumnado`, `datos_medicos`, `datos_psicologicos`, `informe_medico`, `nombreT1`, `nombreT2`, `direccion`, `cp`, `poblacion`, `cod_provincia`, `telefono1`, `telefono2`, `tipo`, `situacion`, `implicacion_escolar`, `curso`, `grupo`, `fecha_inser`, `Usuario_idUsuario`) VALUES
(21, 'Abreu Vázquez ', 'Manuel jesús', 1, '2000-03-25', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Ana Vazquezz Mena', 'Manuel Jesus ', 'C/ Jara 15', 21450, 'Cartaya', '21', 607870373, 607201520, 'Parental', 'Casados', 'Otros', 4, 'A', '2016-12-21', 1),
(22, 'Anani Perez', 'Anatoli', 2, '1998-11-10', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Olga Anani', 'Nichita Anani', 'C/ Averroes Nº 4', 21450, 'Cartaya', '21', 663250375, 642757348, ' Monoparental', 'Otros', 'Otros', 4, 'A', '2016-12-21', 1),
(23, 'Banciu', 'Nicoleta Petronela', 5, '1999-02-19', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Neagu Banciu', 'Geta Banciu', 'C/ Almirante Cervera', 21450, 'Cartaya', '21', 642453285, 642460402, 'Nuclear', 'Buena', 'Otros', 4, 'A', '2016-12-21', 1),
(24, 'Bayo Pereles', 'Patricia', 4, '1998-11-29', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Pereles Quintero', 'Juan Gabriel Bayo Vázquez', 'C/ Convento 58', 21450, 'Cartaya', '21', 658559359, 656460181, 'Nuclear', 'Otros', 'Otros', 4, 'A', '2016-12-21', 1),
(25, 'Bayo Rodriguez', 'Cristina', 6, '1998-07-08', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Carmen Rodrìguez Robledano', 'Sebastián Bayo González', 'Cartaya', 21450, 'Cartaya', '21', 672345693, 626614025, 'Nuclear', 'Otros', 'Otros', 4, 'A', '2016-12-21', 1),
(26, 'Algar Bendala', 'Margtarita', 7, '2000-07-31', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Margarita Bendala Riquelme', 'Bernardo Algar Morale', 'C/ Frailes nº 23', 21450, 'Crataya', '21', 619068307, 660698946, 'Nclear', 'Otrso', 'Otros', 4, 'B', '2016-12-21', 1),
(27, 'Botello Gracía ', 'Nieves', 8, '2000-04-12', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Nieves Gracia Rivero', 'Antonio Botello Hernández', 'C/ Ciudad Rodrigo Nº 18', 21450, 'Cartaya', '21', 686786927, 636858052, 'Nuclear', 'Otros', 'Otros', 4, 'B', '2016-12-21', 1),
(28, 'Ciocan', 'Samuel', 9, '2000-08-13', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Lunimita Laura Ciocam', 'Lulian Claudiu Ciocan', 'Urb. Rio Piedras 132 ', 21459, 'El Rompido', '21', 671428954, 647422005, 'Nuclear', 'Otros ', 'Otros', 4, 'B', '2016-12-21', 1),
(29, 'Diaz Moya', 'José carlos', 10, '2000-08-06', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Juana Moya Martínez', 'José Díaz Pereira', 'C/ Lentisco Nº 20', 21450, 'Cartaya', '21', 618518231, 959390738, 'Nuclear', 'Otros', 'Otros', 4, 'B', '2016-12-21', 1),
(30, 'Díaz Pereira', 'Teresa', 11, '1999-12-05', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Teresa  Pereira Suárez', 'Adolfo Díaz Jiménez', 'C/ Longerón  Nº97', 21459, 'El Rompido', '21', 959399182, 629028962, 'Nuclear', 'Otros', 'Otros', 4, 'B', '2016-12-21', 1),
(31, 'Bello Lorenzo', 'María', 13, '2000-01-12', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Lorenzo Rodriguez', 'Angel Bello Sánchez', 'C/ San Pedro Nº 79', 21450, 'Cartaya', '21', 686383076, 959390015, 'Nuclear', 'Otros', 'Otros', 4, 'C', '2016-12-21', 1),
(32, 'Caracciolo García ', 'Valeria', 16, '2000-01-19', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Filadelfo Caracciolo', 'Elisabeth García Guerra', 'C/ Cadiz Nº 6', 21459, 'El Rompido ', '21', 629291519, 959399489, 'Nuclear', 'Otros', 'Otros', 4, 'C', '2016-12-21', 1),
(33, 'Carbajo Macías', 'Pablo', 17, '2000-10-25', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Juana Macias Sayago', 'Daniel Carbajo León', 'C/ Sierra de Grazalema Nº 7', 21100, 'Punta Umbría', '21', 657667444, 615420470, 'Nuclear', 'Otros', 'Otros', 4, 'C', '2016-12-21', 1),
(34, 'Domínguez Fernández', 'Juan', 18, '2000-03-28', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Fernández  Palacios', 'Juan Domínguez Martín', 'C/ Jara Nº 1', 21450, 'Cartaya', '21', 620143396, 667422691, 'Nuclear', 'Otros', 'Otros', 4, 'C', '2016-12-21', 1),
(35, 'Abreu Vázquez  ', 'Manuel jesús', 19, '2000-03-25', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Ana Vazquezz Mena', 'Manuel Jesus', 'C/ Jara 15 ', 21450, 'Cartaya', '21', 607870373, 607201520, 'Nuclear', 'Otros', 'Otros', 3, 'A', '2016-12-21', 1),
(36, 'Anani Perez    ', 'Anatoli', 20, '1998-11-10', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Olga Anani', 'Nichita Anani', 'C/ Averroes Nº 4', 21450, 'Cartaya', '21', 663250375, 642757348, 'Monoparental', 'Otros', 'Otros', 3, 'A', '2016-12-21', 1),
(37, 'Banciu', ' Nicoleta Petronela', 21, '1999-02-19', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Neagu Banciu', 'Geta Banciu', 'C/ Almirante Cervera  Nº 20', 21450, 'Crataya', '21', 642453285, 642460402, 'Nuclear', 'Otros', 'Otros', 3, 'A', '2016-12-21', 1),
(38, 'Bayo Pereles', 'Patricia', 22, '1998-11-29', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Pereles Quintero', ' Juan Gabriel Bayo Vázquez', 'C/ Convento 58', 21450, 'Cataya', '21', 658559359, 656460181, 'Nuclear', 'Otros', 'Otros', 3, 'A', '2016-12-21', 1),
(39, 'Bayo Rodriguez', 'Cristina', 23, '1998-07-08', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Carmen Rodrìguez Robledano', 'Sebastián Bayo González', 'C/ Jara Nº45', 21450, 'Cartaya', '21', 672345693, 626614025, 'Nuclear', 'Otros', 'Otros', 3, 'A', '2016-12-21', 1),
(40, 'Algar Bendala', 'Margtarita', 321, '2000-07-31', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Margarita Bendala Riquelme', 'Bernardo Algar Morale', 'C/ Frailes nº 23', 21450, 'Cartaya', '21', 619068307, 660698946, 'Nuclear', 'Otros', 'Otros', 3, 'B', '2016-12-21', 1),
(41, 'Ciocan', 'Samuel', 322, '2000-08-13', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Lunimita Laura Ciocam', 'Lulian Claudiu Ciocan', 'Urb. Rio Piedras Nº 13', 21459, 'El Rompido', '21', 671428954, 647422005, 'Otros', 'Otros', 'Nuclear', 3, 'B', '2016-12-21', 1),
(42, 'Botello Gracía', 'Nieves', 323, '2000-04-12', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Nieves Gracia Rivero', 'Antonio Botello Hernández', 'C/ Ciudad Rodrigo Nº 18', 21450, 'Cartaya', '21', 686786927, 636858052, 'Nuclear', 'Otros', 'Otros', 3, 'B', '2016-12-21', 1),
(43, 'Diaz Moya', 'José carlos', 324, '2000-08-06', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Juana Moya Martínez', 'José Díaz Pereira', 'C/ Lentisco Nº 20 ', 21450, 'Cartaya', '21', 618518231, 959390738, 'Otros', 'Otros', 'Otros', 3, 'B', '2016-12-21', 1),
(44, 'Díaz Pereira', 'Teresa', 325, '1999-12-05', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Teresa Pereira Suárez', 'Adolfo Díaz Jiménez', 'C/ Longerón Nº97', 21459, 'El Rompido', '21', 959399182, 629028962, 'Otros', 'Otros', 'Otros', 3, 'B', '2016-12-21', 1),
(45, 'Bello Lorenzo', 'María', 331, '2000-01-12', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Lorenzo Rodriguez', 'Angel Bello Sánchez', 'C/ San Pedro Nº 79', 21450, 'Cartaya', '21', 686383076, 959390015, 'Otros', 'Otros', 'Otros', 3, 'C', '2016-12-21', 1),
(46, 'Caracciolo García', 'Valeria', 332, '2000-01-19', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Filadelfo Caracciolo', 'Elisabeth García Guerra', 'C/ Cadiz Nº 6', 21459, 'Punta Umbría', '21', 629291519, 959399489, 'Otros', 'Otros', 'Otros', 3, 'C', '2016-12-21', 1),
(47, 'Carbajo Macías', 'Pablo', 341, '2000-10-25', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Juana Macias Sayago', 'Daniel Carbajo León', 'C/ Sierra de Grazalema Nº 7', 21100, 'Cartaya', '21', 657667444, 615420470, 'Nuclear', 'Otros', 'Otros', 3, 'D', '2016-12-21', 1),
(48, 'Domínguez Fernández', 'Juan', 342, '2000-03-28', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Fernández Palacios', 'Juan Domínguez Martín', 'C/ Jara Nº 1', 21450, 'Cartaya', '21', 620143396, 667422691, 'Nuclear', 'Otros', 'Otros', 3, 'D', '2016-12-21', 1),
(49, 'Bayo Rodriguez', 'Cristina', 211, '1998-07-08', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Carmen Rodrìguez Robledano', 'Sebastián Bayo González', 'C/ Velazquez Nº 84', 21450, 'Cartaya', '21', 672345693, 626614025, 'Nuclear', 'Otros', 'Otros', 2, 'A', '2016-12-21', 1),
(50, 'Bayo Pereles', 'Patricia', 212, '1998-11-29', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Pereles Quintero', 'Juan Gabriel Bayo Vázquez', 'C/ Convento 58 ', 21450, 'Cartaya', '21', 658559359, 656460181, 'Nuclear', 'Otros', 'Otros', 2, 'A', '2016-12-21', 1),
(51, 'Algar Bendala', 'Margtarita', 221, '2000-07-21', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Margarita Bendala Riquelme', 'Bernardo Algar Morale', 'C/ Frailes nº 23', 21450, 'Cartaya', '21', 619068307, 660698946, 'Nuclear', 'Otros', 'Otros', 2, 'B', '2016-12-21', 1),
(52, 'Domínguez Fernández ', 'Juan', 231, '2000-03-28', NULL, NULL, 'Otros', 'Otros', 'Otros', 'María Fernández Palacios', 'Juan Domínguez Martín', 'C/ Jara Nº 1', 21450, 'Cartaya', '21', 620143396, 667422691, 'Nuclear', 'Otros', 'Otros', 2, 'C', '2016-12-21', 1),
(53, 'Caracciolo García', 'Valeria', 241, '2000-01-19', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Filadelfo Caracciolo', 'Elisabeth García Guerra', 'C/ Cadiz Nº 6', 21459, 'El Rompido', '21', 629291519, 959399489, 'Nuclear', 'Otros', 'Otros', 2, 'D', '2016-12-21', 1),
(54, 'Caracciolo García', ' Valeria', 111, '2000-01-19', NULL, NULL, '', '', '', 'Filadelfo Caracciolo', 'Elisabeth García Guerra', 'C/ Cadiz Nº 6 ', 21459, 'El Rompido', '21', 629291519, 959399489, 'Nuclear', 'Otros', 'Otros', 1, 'A', '2016-12-21', 1),
(55, 'García Caracciolo ', 'Antonia', 121, '2000-01-19', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Filadelfo Caracciolo', 'Elisabeth García Guerra', 'C/ Cadiz Nº 6', 21450, 'Cartaya', '21', 629291519, 959399489, 'Nuclear', 'OtrosNuclear', 'Otros', 1, 'B', '2016-12-21', 1),
(56, 'Diaz Moya', 'José carlos', 131, '2000-08-06', NULL, NULL, 'Otros', 'Otros', 'otros', 'Juana Moya Martínez', 'José Díaz Pereira', 'C/ Lentisco Nº 20 ', 21450, 'Carta', '21', 618518231, 959390738, 'Nuclear', 'Otros', 'Otros', 1, 'C', '2016-12-21', 1),
(57, 'Ciocan ', 'Samuel', 141, '2000-08-13', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Lunimita Laura Ciocam', 'Lulian Claudiu Ciocan', 'Urb. Rio Piedras Nº 13', 21450, 'Cartaya', '21', 671428954, 647422005, 'Nuclear', 'Otros', 'Otros', 1, 'D', '2016-12-21', 1),
(58, 'Ciocan', 'Samuel', 441, '2000-08-13', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Lunimita Laura Ciocam', 'Lulian Claudiu Ciocan', 'Urb. Rio Piedras Nº 13', 21450, 'Cartaya', '21', 671428954, 647422005, 'Nuclear', 'Otros', 'Otros', 4, 'C', '2016-12-21', 1),
(59, 'Ciocan', 'Samuel', 442, '2000-04-21', NULL, NULL, 'Otros', 'Otros', 'Otros', 'Lunimita Laura Ciocam', 'Lulian Claudiu Ciocan', 'Urb. Rio Piedras Nº 13', 21450, 'Cartaya', '21', 671428954, 671428954, 'Otros', 'Otros', 'Otros', 4, 'D', '2016-12-21', 1);

--
-- Disparadores `alumno`
--
DELIMITER $$
CREATE TRIGGER `alumno_BINS` BEFORE INSERT ON `alumno` FOR EACH ROW BEGIN
        set new.fecha_inser=now();     
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo_orientador`
--

CREATE TABLE `consejo_orientador` (
  `idConsejo_Orientador` int(11) NOT NULL,
  `opciones` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
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
(14, 'compensatoria,ACI', '2016-12-21', '2016-12-21', 'Otros', 27),
(15, 'compensatoria,ACI', '2016-12-21', '2016-12-21', 'Otros', 27),
(16, 'apoyo educativo,P.M.A.R.', '2016-11-28', '2016-11-29', 'otros', 21);

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
(7, 'DIS,Compensatoria', 'Otros', 'Otros', 21),
(8, 'DIS,Compensatoria', 'Otros', 'Otros', 21),
(9, 'DIS,AA.CC.', 'Otros', 'otros', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolos`
--

CREATE TABLE `protocolos` (
  `idProtocolos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `idAlumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `protocolos`
--

INSERT INTO `protocolos` (`idProtocolos`, `nombre`, `fecha_ini`, `fecha_fin`, `observaciones`, `idAlumno`) VALUES
(2, 'absentismo', '2016-12-21', '2016-12-22', 'Otros', 21);

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
(1, 'admin', 'Inmaculada Ramos Bebia', 'Ramos Bebia', 'mfmora2@gmail.com', 'A', '29056491Q', '$2y$10$aV1IIqE8FpvKzETXhEpO6utPqN32M12jaWs89oqMkwQ1PGFJ5aorG');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `usuario_B` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
      set NEW.estado=('B');

   END
$$
DELIMITER ;

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
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `consejo_orientador`
--
ALTER TABLE `consejo_orientador`
  MODIFY `idConsejo_Orientador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `entrevistas`
--
ALTER TABLE `entrevistas`
  MODIFY `idEntrevistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `medidasad`
--
ALTER TABLE `medidasad`
  MODIFY `idMedidasad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `neae`
--
ALTER TABLE `neae`
  MODIFY `idNeae` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Necesidades Especiales Apoyo Educativo', AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `protocolos`
--
ALTER TABLE `protocolos`
  MODIFY `idProtocolos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
