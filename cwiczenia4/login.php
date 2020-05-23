<?php

$errors = array(
    1 => "Błąd połączenia",
    2 => "Zły login lub hasło",
    3 => "Sesja wygasla"
);

echo "<h3>Logowanie</h3>";

if (isset($_GET['error']) && $errors[$_GET['error']] != null) {
    $error = $errors[$_GET['error']];
    echo "<h4 style='color:red'>$error</h4>";
}

echo "<form id='client-form' method='POST' action='login_action.php' enctype='multipart/form-data'>
    <label for='login'>Login</label>
    <input type='text' maxlength='100' name='login' required />

    <label for='password'>Haslo</label>
    <input type='password' maxlength='100' name='password' required />

    <input type='submit' value='Zaloguj' />
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