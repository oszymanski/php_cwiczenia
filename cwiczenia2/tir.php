<?php

require_once("auto.php");

class tir extends auto {
    public $_ladownosc = 200;
    public $_aktualny_ladunek = 0;

    public function __construct($marka, $model, $kolor, $predkosc, $ladownosc, $aktualny_ladunek)
    {
        parent::__construct($marka, $model, $kolor, $predkosc);
        $this->_ladownosc = $ladownosc;
        $this->_aktualny_ladunek = $aktualny_ladunek;
    }
    
    public function zaladuj($wartosc)
    {
        $res = $this->_aktualny_ladunek + $wartosc;

        if ($res > $this->_ladownosc) {
            echo "Przekroczyles ladownosc tira";
        }
        else {
            echo "Zaladowano, aktualny ladunek: $res";
        }
    }

    public function wyladuj($wartosc)
    {
        $res = $this->_aktualny_ladunek - $wartosc;

        if ($res < 0) {
            echo "Ladunek tira nie moze byc ujemny";
        }
        else {
            echo "Rozladowano, aktualny ladunek: $res";
        }
    }
}