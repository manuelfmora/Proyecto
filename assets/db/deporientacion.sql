/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : deporientacion

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-11-08 23:54:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alumnado
-- ----------------------------
DROP TABLE IF EXISTS `alumnado`;
CREATE TABLE `alumnado` (
  `idAlumnado` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(45) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `nie` int(7) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
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
  `provincias_cod1` char(2) NOT NULL,
  PRIMARY KEY (`idAlumnado`,`Consejo_Orientador_idConsejo_Orientador`,`provincias_cod`,`provincias_cod1`),
  KEY `fk_Alumnado_Consejo_Orientador1_idx` (`Consejo_Orientador_idConsejo_Orientador`),
  KEY `fk_Alumnado_Transito1_idx` (`Transito_idTransito`),
  KEY `fk_Alumnado_Trayect_Acad1_idx` (`Trayect_Acad_idTrayect_Acad`),
  KEY `fk_Alumnado_provincias1_idx` (`provincias_cod`),
  KEY `fk_Alumnado_provincias2_idx` (`provincias_cod1`),
  CONSTRAINT `fk_Alumnado_Consejo_Orientador1` FOREIGN KEY (`Consejo_Orientador_idConsejo_Orientador`) REFERENCES `consejo_orientador` (`idConsejo_Orientador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alumnado_Transito1` FOREIGN KEY (`Transito_idTransito`) REFERENCES `transito` (`idTransito`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alumnado_Trayect_Acad1` FOREIGN KEY (`Trayect_Acad_idTrayect_Acad`) REFERENCES `trayect_acad` (`idTrayect_Acad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alumnado_provincias1` FOREIGN KEY (`provincias_cod`) REFERENCES `provincias` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alumnado_provincias2` FOREIGN KEY (`provincias_cod1`) REFERENCES `provincias` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of alumnado
-- ----------------------------

-- ----------------------------
-- Table structure for consejo_orientador
-- ----------------------------
DROP TABLE IF EXISTS `consejo_orientador`;
CREATE TABLE `consejo_orientador` (
  `idConsejo_Orientador` int(11) NOT NULL,
  `opciones` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`idConsejo_Orientador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of consejo_orientador
-- ----------------------------

-- ----------------------------
-- Table structure for datos_salud
-- ----------------------------
DROP TABLE IF EXISTS `datos_salud`;
CREATE TABLE `datos_salud` (
  `idDatos_Salud` int(11) NOT NULL AUTO_INCREMENT,
  `datos_medicos` varchar(100) DEFAULT NULL,
  `datos_psicologicos` varchar(100) DEFAULT NULL,
  `informes` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  PRIMARY KEY (`idDatos_Salud`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  KEY `fk_Datos_Salud_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  CONSTRAINT `fk_Datos_Salud_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of datos_salud
-- ----------------------------

-- ----------------------------
-- Table structure for entrevistas
-- ----------------------------
DROP TABLE IF EXISTS `entrevistas`;
CREATE TABLE `entrevistas` (
  `idEntrevistas` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `asistentes` varchar(20) DEFAULT NULL,
  `temas` varchar(100) DEFAULT NULL,
  `acuerdos` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  `Alumnado_Consejo_Orientador_idConsejo_Orientador` int(11) NOT NULL,
  PRIMARY KEY (`idEntrevistas`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  KEY `fk_Entrevistas_Alumnado1` (`Alumnado_idAlumnado`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  KEY `fk_Entrevistas_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  CONSTRAINT `fk_Entrevistas_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`, `Alumnado_Consejo_Orientador_idConsejo_Orientador`) REFERENCES `alumnado` (`idAlumnado`, `Consejo_Orientador_idConsejo_Orientador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of entrevistas
-- ----------------------------

-- ----------------------------
-- Table structure for medidasad
-- ----------------------------
DROP TABLE IF EXISTS `medidasad`;
CREATE TABLE `medidasad` (
  `idMedidasAD` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_ini` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  PRIMARY KEY (`idMedidasAD`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  KEY `fk_MedidasAD_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  CONSTRAINT `fk_MedidasAD_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of medidasad
-- ----------------------------

-- ----------------------------
-- Table structure for neae
-- ----------------------------
DROP TABLE IF EXISTS `neae`;
CREATE TABLE `neae` (
  `idNeae` int(11) NOT NULL,
  `censo` varchar(45) DEFAULT NULL,
  `ev_ps` varchar(100) DEFAULT NULL COMMENT 'Evaluacion Psicopedagogica PDF',
  `dic_es` varchar(100) DEFAULT NULL COMMENT 'Dictamen de Escolarizacion PDF',
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  PRIMARY KEY (`idNeae`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  KEY `fk_Neae_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  CONSTRAINT `fk_Neae_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of neae
-- ----------------------------

-- ----------------------------
-- Table structure for protocolos
-- ----------------------------
DROP TABLE IF EXISTS `protocolos`;
CREATE TABLE `protocolos` (
  `idProtocolos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  PRIMARY KEY (`idProtocolos`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  KEY `fk_Protocolos_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`),
  CONSTRAINT `fk_Protocolos_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`) REFERENCES `alumnado` (`idAlumnado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of protocolos
-- ----------------------------

-- ----------------------------
-- Table structure for provincias
-- ----------------------------
DROP TABLE IF EXISTS `provincias`;
CREATE TABLE `provincias` (
  `cod` char(2) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `comunidad_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of provincias
-- ----------------------------
INSERT INTO `provincias` VALUES ('01', 'Alava', '16');
INSERT INTO `provincias` VALUES ('02', 'Albacete', '7');
INSERT INTO `provincias` VALUES ('03', 'Alicante', '10');
INSERT INTO `provincias` VALUES ('04', 'Almería', '1');
INSERT INTO `provincias` VALUES ('05', 'Avila', '8');
INSERT INTO `provincias` VALUES ('06', 'Badajoz', '11');
INSERT INTO `provincias` VALUES ('07', 'Balears (Illes)', '4');
INSERT INTO `provincias` VALUES ('08', 'Barcelona', '9');
INSERT INTO `provincias` VALUES ('09', 'Burgos', '8');
INSERT INTO `provincias` VALUES ('10', 'Cáceres', '11');
INSERT INTO `provincias` VALUES ('11', 'Cádiz', '1');
INSERT INTO `provincias` VALUES ('12', 'Castellón', '10');
INSERT INTO `provincias` VALUES ('13', 'Ciudad Real', '7');
INSERT INTO `provincias` VALUES ('14', 'Córdoba', '1');
INSERT INTO `provincias` VALUES ('15', 'Coruña (A)', '12');
INSERT INTO `provincias` VALUES ('16', 'Cuenca', '7');
INSERT INTO `provincias` VALUES ('17', 'Girona', '9');
INSERT INTO `provincias` VALUES ('18', 'Granada', '1');
INSERT INTO `provincias` VALUES ('19', 'Guadalajara', '7');
INSERT INTO `provincias` VALUES ('20', 'Guipzcoa', '16');
INSERT INTO `provincias` VALUES ('21', 'Huelva', '1');
INSERT INTO `provincias` VALUES ('22', 'Huesca', '2');
INSERT INTO `provincias` VALUES ('23', 'Jaén', '1');
INSERT INTO `provincias` VALUES ('24', 'León', '8');
INSERT INTO `provincias` VALUES ('25', 'Lleida', '9');
INSERT INTO `provincias` VALUES ('26', 'Rioja (La)', '17');
INSERT INTO `provincias` VALUES ('27', 'Lugo', '12');
INSERT INTO `provincias` VALUES ('28', 'Madrid', '13');
INSERT INTO `provincias` VALUES ('29', 'Málaga', '1');
INSERT INTO `provincias` VALUES ('30', 'Murcia', '14');
INSERT INTO `provincias` VALUES ('31', 'Navarra', '15');
INSERT INTO `provincias` VALUES ('32', 'Ourense', '12');
INSERT INTO `provincias` VALUES ('33', 'Asturias', '3');
INSERT INTO `provincias` VALUES ('34', 'Palencia', '8');
INSERT INTO `provincias` VALUES ('35', 'Palmas (Las)', '5');
INSERT INTO `provincias` VALUES ('36', 'Pontevedra', '12');
INSERT INTO `provincias` VALUES ('37', 'Salamanca', '8');
INSERT INTO `provincias` VALUES ('38', 'Santa Cruz de Tenerife', '5');
INSERT INTO `provincias` VALUES ('39', 'Cantabria', '6');
INSERT INTO `provincias` VALUES ('40', 'Segovia', '8');
INSERT INTO `provincias` VALUES ('41', 'Sevilla', '1');
INSERT INTO `provincias` VALUES ('42', 'Soria', '8');
INSERT INTO `provincias` VALUES ('43', 'Tarragona', '9');
INSERT INTO `provincias` VALUES ('44', 'Teruel', '2');
INSERT INTO `provincias` VALUES ('45', 'Toledo', '7');
INSERT INTO `provincias` VALUES ('46', 'Valencia', '10');
INSERT INTO `provincias` VALUES ('47', 'Valladolid', '8');
INSERT INTO `provincias` VALUES ('48', 'Vizcaya', '16');
INSERT INTO `provincias` VALUES ('49', 'Zamora', '8');
INSERT INTO `provincias` VALUES ('50', 'Zaragoza', '2');
INSERT INTO `provincias` VALUES ('51', 'Ceuta', '18');
INSERT INTO `provincias` VALUES ('52', 'Melilla', '19');

-- ----------------------------
-- Table structure for transito
-- ----------------------------
DROP TABLE IF EXISTS `transito`;
CREATE TABLE `transito` (
  `idTransito` int(11) NOT NULL AUTO_INCREMENT,
  `ceip` varchar(80) DEFAULT 'colegio procedencia',
  `repeticiones` int(1) DEFAULT NULL,
  `ncc` varchar(45) DEFAULT 'nivel competencia curricular',
  `area_suspensa` varchar(45) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTransito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transito
-- ----------------------------

-- ----------------------------
-- Table structure for trayect_acad
-- ----------------------------
DROP TABLE IF EXISTS `trayect_acad`;
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
  `tutor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTrayect_Acad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of trayect_acad
-- ----------------------------

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(45) DEFAULT NULL,
  `nombre_persona` varchar(45) DEFAULT NULL,
  `apellidos_persona` varchar(60) DEFAULT NULL,
  `correo` varchar(180) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `clave` varchar(260) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'admin', 'Manuel', 'Martin', 'mfmora2@gmail.com', null, '29056491Q', '$2y$10$xykd43d2SwZN99MFuWafd.aRVoKbve/EnS3lbaAC9wO.8ertH9y3e');

-- ----------------------------
-- Table structure for usuario_has_alumnado
-- ----------------------------
DROP TABLE IF EXISTS `usuario_has_alumnado`;
CREATE TABLE `usuario_has_alumnado` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Alumnado_idAlumnado` int(11) NOT NULL,
  `Alumnado_Familia_idFamilia` int(11) NOT NULL,
  `Alumnado_Consejo_Orientador_idConsejo_Orientador` int(11) NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`,`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  KEY `fk_Usuario_has_Alumnado_Alumnado1` (`Alumnado_idAlumnado`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  KEY `fk_Usuario_has_Alumnado_Alumnado1_idx` (`Alumnado_idAlumnado`,`Alumnado_Familia_idFamilia`,`Alumnado_Consejo_Orientador_idConsejo_Orientador`),
  KEY `fk_Usuario_has_Alumnado_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Usuario_has_Alumnado_Alumnado1` FOREIGN KEY (`Alumnado_idAlumnado`, `Alumnado_Consejo_Orientador_idConsejo_Orientador`) REFERENCES `alumnado` (`idAlumnado`, `Consejo_Orientador_idConsejo_Orientador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Alumnado_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario_has_alumnado
-- ----------------------------
