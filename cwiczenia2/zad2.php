<a href="./">Powrot</a></br>

<?php

require_once('auto.php');

$auto = new auto("Skoda", "Fabia", "Czerwony", 50);

?>

<form id="auto-form" method="POST" action="zad2-post.php">
    <label for="marka">Marka:</label>
    <input type="text" value="<?php echo "$auto->_marka"; ?>" name="marka" />
    
    <label for="model">Model:</label>
    <input type="text" value="<?php echo "$auto->_model"; ?>" name="model" />

    <label for="kolor">Kolor:</label>
    <input type="text" value="<?php echo "$auto->_kolor"; ?>" name="kolor" />

    <label for="predkosc">Predkosc:</label>
    <input type="number" value="<?php echo "$auto->_predkosc"; ?>" name="predkosc" style="margin-bottom:10px;" />

    <select id="function" name="funkcja">
        <option value="zwolnij">Zwolnij</option>
        <option value="przyspiesz">Przyspiesz</option>
    </select>

    <label for="value">O ile:</label>
    <input type="number" name="wartosc" required />

    <input type="submit" value="Wykonaj">
</form>

<style>
    #auto-form {
        display: flex;
        flex-direction: column;
        padding-right: 75%;
    }
</style>