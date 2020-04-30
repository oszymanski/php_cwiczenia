<a href="./">Powrot</a></br>

<?php
$range = $_POST['range'];
$capacity = $_POST['capacity'];

if ($range <= 0 || $capacity <= 0) {
    echo "Podano nieprawidlowe wartosci";
}
else {
    $burning = calculateBurning($capacity, $range);

    echo "Twoj pojazd spala srednio $burning litrow paliwa na 100 km";
}

function calculateBurning($capacity, $range) {
    return $burning = ($capacity / $range) * 100;
}