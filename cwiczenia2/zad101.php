<a href="./">Powrot</a></br>

<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$birtday = $_POST['birthday'];
$gender = $_POST['gender'];
$children_amount = $_POST['children_amount'];
$is_scholar = $_POST['is_scholar'] == '1';

//obejscie problemu
if ($is_scholar)
    $is_scholar = 'true';
else
    $is_scholar = 'false';

$connection = new mysqli('localhost', 'root', '', 'baza_testowa');

if (mysqli_connect_errno() != 0) {
    echo 'Blad polaczenia' . mysqli_connect_error();
    exit;
}

$sql = "INSERT INTO studenci (Imie, Nazwisko, Data_urodzenia, Plec, Liczba_dzieci, Czy_pobiera_stypendium) 
    VALUES ('$name', '$surname', '$birtday', '$gender', $children_amount, $is_scholar)";

$result = $connection->query($sql);

if ($result == false) {
    echo 'Nie udalo sie wykonac zapytania: ' . $connection->error;
    echo $sql;
    $connection->close();
    exit;
}

echo "Dodano studenta";
