USE baza_testowa;

CREATE TABLE `baza_testowa`.`klienci` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `imie` VARCHAR(100) NOT NULL , 
    `nazwisko` VARCHAR(100) NOT NULL ,
    `plec` ENUM('K','M') NOT NULL ,  
    `data_urodzenia` DATE NOT NULL , 
    `liczba_dzieci` INT NOT NULL DEFAULT '0' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

insert into klienci (id, imie, nazwisko, plec, data_urodzenia, liczba_dzieci) 
values (null, 'Jacek', 'Abacki', 'M', '1993-09-23', 0),
(null, 'Ewa', 'Babcka', 'K', '2000-02-06', 2),
(null, 'Wojtek', 'Cacacki', 'M', '1990-02-02', 1),
(null, 'Monika', 'Dabacka', 'K', '1980-03-03', 3);
