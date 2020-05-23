<a href="./select.php">Powrot</a></br>

<?php

session_start();

if (!isset($_SESSION['login'])) {
    header ('Location: login.php?error=3');
    exit;
}

$connection = new mysqli('localhost', 'root', '', 'baza_testowa');

if (mysqli_connect_errno() != 0) {
    echo '<a href="./select.php">Powrot</a></br>';
    echo 'Blad polaczenia: ' . mysqli_connect_error();
    exit;
}

$sql = "delete from klienci where id = $_GET[id_s]";

$connection -> query($sql);

echo 'Usunieto rekordow: ' . $connection->affected_rows;