<?php

session_start();

if (isset($_SESSION['login'])) {
    header ('Location: select.php');
    exit;
}

echo $_POST['login'] . ' ' . $_POST['password'];

$connection = new mysqli('localhost', 'root', '', 'baza_testowa');

if (mysqli_connect_errno() != 0) {
    header('Location: login.php?error=1');
    exit;
}

$sql = "SELECT login, password 
        FROM users
        WHERE login = '$_POST[login]';";

$result = $connection -> query($sql);

if ($result == false) {
    header('Location: login.php?error=1');
    exit;
}

$record = $result -> fetch_assoc();

if ($record['login'] == null || $record['password'] == null ||  $record['password'] != $_POST['password']) {
    header('Location: login.php?error=2');
    exit;
}

session_start();
$_SESSION['login'] = $_POST['login'];
header('Location: select.php');