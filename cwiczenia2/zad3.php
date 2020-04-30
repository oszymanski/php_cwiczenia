<a href="./">Powrot</a></br>

<?php

require_once('tir.php');

$tir = new tir("Volvo", "Szybkie", "Czarny", 0, 150, 0);

?>

<form id="tir-form" method="POST" action="zad3-post.php">
    <label for="marka">Marka:</label>
    <input type="text" value="<?php echo "$tir->_marka"; ?>" name="marka" />
    
    <label for="model">Model:</label>
    <input type="text" value="<?php echo "$tir->_model"; ?>" name="model" />

    <label for="kolor">Kolor:</label>
    <input type="text" value="<?php echo "$tir->_kolor"; ?>" name="kolor" />

    <label for="predkosc">Predkosc:</label>
    <input type="number" value="<?php echo "$tir->_predkosc"; ?>" name="predkosc" />
    
    <label for="ladownosc">Ladownosc:</label>
    <input type="number" value="<?php echo "$tir->_ladownosc"; ?>" name="ladownosc" />

    <label for="aktualny_ladunek">Aktualny ladunek:</label>
    <input type="number" value="<?php echo "$tir->_aktualny_ladunek"; ?>" name="aktualny_ladunek"  style="margin-bottom:10px;" />

    <select id="function" name="funkcja">
        <option value="zwolnij">Zwolnij</option>
        <option value="przyspiesz">Przyspiesz</option>
        <option value="zaladuj">Zaladuj</option>
        <option value="wyladuj">Wyladuj</option>
    </select>

    <label for="value">Ile:</label>
    <input type="number" name="wartosc" required />

    <input type="submit" value="Wykonaj">
</form>

<style>
    #tir-form {
        display: flex;
        flex-direction: column;
        padding-right: 75%;
    }

    input {
        margin-bottom: 4px;
    }
</style>