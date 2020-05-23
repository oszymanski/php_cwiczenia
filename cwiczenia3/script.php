<a href="./">Powrot</a></br>

<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$id = $_POST['id'];
$method = $_POST['method'];

if ($method == 'mysqli') {
    $connection = new mysqli('localhost', 'root', '', 'baza_testowa');

    if (mysqli_connect_errno() != 0) {
        echo 'Błąd połączenia: ' . mysqli_connect_error();
    }

    $sql = 'update studenci set Imie=?, Nazwisko=? where Id_studenta=?';

    $prep = $connection -> prepare($sql);

    $prep -> bind_param('ssi', $name, $surname, $id);
    $prep -> execute();

    echo 'Zaktualizowano: ' . $prep -> affected_rows . ' studentow';

}
elseif ($method == 'pdo') {
    $connection = new PDO('mysql:host=localhost;dbname=baza_testowa', 'root', '');

    $sql = 'update studenci set Imie=:name, Nazwisko=:surname where Id_studenta=:id';

    $prep = $connection -> prepare($sql);
    $prep -> bindValue(':name',$name, PDO::PARAM_STR);
    $prep -> bindValue(':surname',$surname, PDO::PARAM_STR);
    $prep -> bindValue(':id',$id, PDO::PARAM_INT);

    $result = $prep -> execute();

    echo 'Zaktualizowano: ' . $prep -> rowCount() . ' studentow';
}
else {
    echo 'Wybrano nieprawidlowa metode';
}