CREATE DATABASE baza_testowa;

USE baza_testowa;

CREATE TABLE `baza_testowa`.`studenci` ( 
    `Id_studenta` INT NOT NULL AUTO_INCREMENT , 
    `Imie` VARCHAR(100) NOT NULL , 
    `Nazwisko` VARCHAR(100) NOT NULL , 
    `Data_urodzenia` DATE NOT NULL , 
    `Plec` ENUM('K','M') NOT NULL , 
    `Liczba_dzieci` INT NOT NULL DEFAULT '0' , 
    `Czy_pobiera_stypendium` BOOLEAN NOT NULL , 
    PRIMARY KEY (`Id_studenta`)
) ENGINE = InnoDB;

insert into studenci (Id_studenta, Imie, Nazwisko, Data_urodzenia, Plec, Liczba_dzieci, Czy_pobiera_stypendium) 
values (null, 'Oskar', 'Szymanski', '1993-09-23', 'M', 0, true),
(null, 'Janusz', 'Boruta', '1950-05-03', 'M', 8, false),
(null, 'Janina', 'Kulig', '1986-01-02', 'K', 2, true);



