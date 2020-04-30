<a href="./">Powrot</a></br>

<?php

$mezczyzna = new mezczyzna();
$mezczyzna->imie="Jan";
$mezczyzna->nazwisko="Kowalski";
$mezczyzna->wzrost = 180;
$mezczyzna->kolor_oczu = '#663300';
$mezczyzna->kolor_wlosow = '#ffff00';
$mezczyzna->kolor_skory = '#ffcc66';
$mezczyzna->poziom_testosteronu = "duzo";
$mezczyzna->ranga_w_call_of_duty = 150;
$mezczyzna->liczba_kart_do_pokemonow = 230;



echo "<h1?>Cechy mezczyzny</h1>";

echo "<ul>";

echo "<li>Imie: $mezczyzna->imie </li>";
echo "<li>nazwisko: $mezczyzna->nazwisko </li>";
echo "<li>wzrost: $mezczyzna->wzrost </li>";
echo "<li>kolor_oczu: $mezczyzna->kolor_oczu </li>";
echo "<li>kolor_wlosow: $mezczyzna->kolor_wlosow </li>";
echo "<li>poziom_testosteronu: $mezczyzna->poziom_testosteronu </li>";
echo "<li>ranga_w_call_of_duty: $mezczyzna->ranga_w_call_of_duty </li>";
echo "<li>liczba_kart_do_pokemonow: $mezczyzna->liczba_kart_do_pokemonow </li>";


class czlowiek {
    public $imie;
    public $nazwisko;
    public $wzrost;
    public $kolor_oczu;
    public $kolor_wlosow;
    public $kolor_skory;
}

class mezczyzna extends czlowiek {
    public $poziom_testosteronu;
    public $ranga_w_call_of_duty;
    public $liczba_kart_do_pokemonow;
}