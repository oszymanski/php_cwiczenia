<a href="./">Powrot</a></br>

<?php

$id = $_POST['id'];

$connection = new mysqli('localhost', 'root', '', 'baza_testowa');

if (mysqli_connect_errno() != 0) {
    echo 'Blad polaczenia' . mysqli_connect_error();
    exit;
}

$sql = "DELETE FROM studenci WHERE Id_studenta = $id";

$result = $connection->query($sql);

if ($result == false) {
    echo 'Nie udalo sie wykonac zapytania: ' . $connection->error;
    echo $sql;
    $connection->close();
    exit;
}

echo "Usunieto studenta";