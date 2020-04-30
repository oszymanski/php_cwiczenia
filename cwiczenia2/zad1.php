<?php

$count = $_POST['count'];

for ($i=1; $i <= $count; $i++) { 
    if ($i % 2 == 0) {
        echo "$i </br>";
    }
}