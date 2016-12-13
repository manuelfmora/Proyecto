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