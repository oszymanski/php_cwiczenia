<?php

class auto
{
    public $_marka = "Nieznana";
    public $_model = "Nieznany";
    public $_kolor = "Nieznany";
    public $_predkosc = 5;

    public function __construct($marka, $model, $kolor, $predkosc)
    {
        $this->_marka = $marka;
        $this->_model = $model;
        $this->_kolor = $kolor;
        $this->_predkosc = $predkosc;
    }

    public function zwolnij($wartosc)
    {
        $res = $this->_predkosc - $wartosc;

        if ($res < 0) {
            echo "Nie mozesz zwolnic ponizej 0 km/h";
        } else {
            $this->_predkosc = $res;
            echo "Samochod zwolnil do $res km/h";
        }
    }

    public function przyspiesz($wartosc)
    {
        $res = $this->_predkosc + $wartosc;

        if ($res > 140) {
            echo "Nie mozesz przekroczyc predkosci powyzej 140 km/h";
        } else {
            echo "Samochod przyspieszyl do $res km/h";
        }
    }
}
