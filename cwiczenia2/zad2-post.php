<a href="./">Powrot</a></br>

<?php

require_once("auto.php");

$marka = $_POST['marka'];
$model = $_POST['model'];
$kolor = $_POST['kolor'];
$predkosc = $_POST['predkosc'];
$funkcja = $_POST['funkcja'];
$wartosc = $_POST['wartosc'];

$auto = new auto($marka, $model, $kolor, $predkosc);

if ($funkcja === 'przyspiesz') {
    $auto->przyspiesz($wartosc);
}
else if ($funkcja === 'zwolnij') {
    $auto->zwolnij($wartosc);
}
else {
    echo "Wybrano nieprawidlowa funkcje";
}