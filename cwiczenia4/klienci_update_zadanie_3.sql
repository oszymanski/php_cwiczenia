USE baza_testowa;

CREATE TABLE `baza_testowa`.`users` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `login` VARCHAR(100) UNIQUE NOT NULL , 
    `password` VARCHAR(100) NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO users (id, login, password)
VALUES (null, 'admin', 'test123'),
(null, 'superadmin', 'test123'),
(null, 'janusz', 'test123');