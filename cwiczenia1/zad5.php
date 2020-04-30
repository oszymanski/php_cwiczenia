<a href="/exercise">Powrot</a></br>

<?php
$range = $_POST['range'];

function displayNumbers($range) {
    for ($i=0; $i <= $range; $i++) { 
        echo $i . "</br>";
    }
}

displayNumbers($range);