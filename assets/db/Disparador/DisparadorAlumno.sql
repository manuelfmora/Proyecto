
/*Diparador Insertar fecha actual en la tabla Alumno*/

DROP TRIGGER IF EXISTS `alumno_BINS`;
USE `deporientacion`;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` TRIGGER `alumno_BINS` BEFORE INSERT ON `alumno` FOR EACH ROW
   BEGIN
        set new.fecha_inser=now();     
    END
	$$