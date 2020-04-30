<a href="./">Powrot</a></br>

<?php

require_once("tir.php");

$marka = $_POST['marka'];
$model = $_POST['model'];
$kolor = $_POST['kolor'];
$predkosc = $_POST['predkosc'];
$ladownosc = $_POST['ladownosc'];
$aktualny_ladunek = $_POST['aktualny_ladunek'];
$funkcja = $_POST['funkcja'];
$wartosc = $_POST['wartosc'];

$tir = new tir($marka, $model, $kolor, $predkosc, $ladownosc, $aktualny_ladunek);

switch ($funkcja) {
    case 'przyspiesz':
        $tir->przyspiesz($wartosc);
        break;
    case 'zwolnij':
        $tir->zwolnij($wartosc);
        break;
    case 'zaladuj':
        $tir->zaladuj($wartosc);
        break;
    case 'wyladuj':
        $tir->wyladuj($wartosc);
        break;

    default:
        echo "Wybrano niepoprawna funkcje";
        break;
}
