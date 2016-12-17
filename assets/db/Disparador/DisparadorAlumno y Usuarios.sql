
/*Diparador Insertar fecha actual en la tabla Alumno*/

DROP TRIGGER IF EXISTS `alumno_BINS`;
USE `deporientacion`;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` TRIGGER `alumno_BINS` BEFORE INSERT ON `alumno` FOR EACH ROW
   BEGIN
        set new.fecha_inser=now();     
    END
	$$

DROP TRIGGER IF EXISTS `usuario_B`;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` TRIGGER `usuario_B` BEFORE INSERT ON `usuario` FOR EACH ROW
   BEGIN
      set NEW.estado=('B');

   END
	$$