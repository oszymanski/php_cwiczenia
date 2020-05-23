USE baza_testowa;

ALTER TABLE klienci ADD COLUMN miasto varchar(100);
ALTER TABLE klienci ADD COLUMN kraj varchar(100);
ALTER TABLE klienci ADD COLUMN czy_jest_vipem boolean DEFAULT False NOT NULL;
