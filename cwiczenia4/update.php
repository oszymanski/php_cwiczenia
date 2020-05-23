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

$sql = "select * from klienci where id=$_GET[id_s]";
$result = $connection -> query($sql);

if ($result == false) {
    echo 'Blad wykonywania zapytania: ' . $sql;
    exit;
}

$record = $result -> fetch_assoc();

echo "<form id='client-form' method='POST' action='update_action.php'>
    <label for='name'>Imie</label>
    <input type='text' maxlength='100' name='name' value='$record[imie]' required />

    <label for='surname'>Nazwisko</label>
    <input type='text' maxlength='100' name='surname' value='$record[nazwisko]' required />

    <label for='birthday'>Data urodzenia</label>
    <input type='date' name='birthday' value='$record[data_urodzenia]' required />

 <label for='gender'>Plec</label>
    <select name='gender'>";
    echo "<option value='K' ";
    if ($record['plec'] == 'K') 
        echo "selected ";
    
    echo ">Kobieta</option>";
    echo "<option value='M' ";
    if ($record['plec'] == 'M') 
        echo "selected ";
    
    echo ">Mezczyzna</option>";
    echo "</select>

    <label for='children_amount'>Liczba dzieci</label>
    <input type='number' name='children_amount' min='0' max='20' value='$record[liczba_dzieci]' required />

    <label for='country'>Kraj</label>
    <input type='text' maxlength='100' name='country' value='$record[kraj]' required />

    <label for='city'>Miasto</label>
    <input type='text' maxlength='100' name='city' value='$record[miasto]' required />

    <label for='is_vip'>Czy jest VIPem</label>
    <input type=hidden name='is_vip' value='0' />";
    if ($record['czy_jest_vipem'] == true)
        echo "<input type='checkbox' name='is_vip' value='1' checked />";
    else 
        echo "<input type='checkbox' name='is_vip' value='1' />";

    echo "<input type='hidden' name='id' value='$record[id]' />

    <input type='submit' value='Aktualizuj' />
</form>";

?>

<style>
    #client-form {
        display: flex;
        flex-direction: column;
        padding-right: 75%;
    }

    input {
        margin-bottom: 4px;
    }
</style>