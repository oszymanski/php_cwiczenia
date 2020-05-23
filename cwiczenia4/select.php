<a href="./logout.php">Wyloguj</a><br>

<?php

session_start();

if (!isset($_SESSION['login'])) {
    header ('Location: login.php?error=3');
    exit;
}



$connection = new mysqli('localhost', 'root', '', 'baza_testowa');

if (mysqli_connect_errno() != 0)
{
    echo 'Blad polaczenia: ' . mysqli_connect_error();
    exit;
}

$sql = 'SELECT * FROM klienci';

$result = $connection -> query($sql);

if ($result == false) {
    echo 'Wystapil blad podczas zapytania: ' . $sql;
}

echo '<table border><th>Nazwisko
    <th>Imie</th>
    <th>Plec</th>
    <th>Data urodzenia</th>
    <th>Liczba dzieci</th>
    <th>Kraj</th>
    <th>Miasto</th>
    <th>VIP</th>
    <th>Usuń</th>
    <th>Edytuj</th>';
while (($record = $result->fetch_assoc()) != null) {
    echo '<tr><td>' . $record['nazwisko'];
    echo '<td>' . $record['imie'];
    echo '<td>' . $record['plec'];
    echo '<td>' . $record['data_urodzenia'];
    echo '<td>' . $record['liczba_dzieci'];
    echo '<td>' . $record['kraj'];
    echo '<td>' . $record['miasto'];
    if ($record['czy_jest_vipem'] == true)
        echo '<td><input type="checkbox" checked onclick="return false;" /></td>';
    else
        echo '<td><input type="checkbox" onclick="return false;" /></td>';
    echo "<td><a href=delete.php?id_s=$record[id]>Usun</a></td>";
    echo "<td><a href=update.php?id_s=$record[id]>Edytuj</a></td>";
}
echo '</table>';
echo 'Wszystkich rekordow: ' . $result->num_rows;
echo '<a href="./insert.html" class="button" style="margin-left:6px">Dodaj rekord</a>';
