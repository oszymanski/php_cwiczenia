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

$sql = "update klienci set nazwisko=?, imie=?, data_urodzenia=?, liczba_dzieci=?, plec=?,
        kraj=?, miasto=?, czy_jest_vipem=?
        where id=$_POST[id]";

$prep = $connection -> prepare($sql);

$prep -> bind_param('sssisssi',
    $_POST['surname'],
    $_POST['name'],
    $_POST['birthday'],
    $_POST['children_amount'],
    $_POST['gender'],
    $_POST['country'],
    $_POST['city'],
    $_POST['is_vip'],
);

$prep -> execute();

echo "Zmodyfikowano: " . $prep -> affected_rows . " klientow";