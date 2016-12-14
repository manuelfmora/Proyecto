
////////////////////////

DELIMITER $$
CREATE TRIGGER `deporientacion`.`tr_creafecha` BEFORE INSERT ON `deporientacion`.`alumno`
    FOR EACH ROW BEGIN
        SET NEW.fecha_Inser = NOW()       
    END $$
DELIMITER ;1970-12-28

DELIMITER $$
CREATE TRIGGER `deporientacion`.`tr_creafecha` BEFORE INSERT ON `deporientacion`.`alumno`
    FOR EACH ROW BEGIN
        INSERT INTO usuario (fecha_Inser) VALUES (1970-12-28)      
    END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER 'deporientacion45' BEFORE INSERT ON 'alumno'
    FOR EACH ROW BEGIN
        INSERT INTO alumno (fecha_Inser) VALUES ('1970-12-28')      
    END $$
DELIMITER ;

CREATE TRIGGER before_employee_update AFTER UPDATE ON alumno FOR EACH ROW BEGIN INSERT INTO alumno SET action = 'update', datos_medicos = "asd"; END


DROP TRIGGER IF EXISTS `before_employee_update`;
CREATE DEFINER=`root`@`localhost` TRIGGER `before_employee_update` BEFORE INSERT ON `alumno` 
FOR EACH ROW INSERT INTO alumno (nombre, apellidos, Usuario_idUsuario) VALUES ("2","2","1")