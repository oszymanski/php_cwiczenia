<a href="/exercise">Powrot</a></br>

<?php
$aliquot = $_GET['aliquot'];
$count = $_GET['count'];

echo "<table border=1>";
for ($i=0; $i <= 10; $i++) { 
    if ($i % $aliquot === 0) {
        echo "<tr>";

            echo "<td>" . $i . "</td";

        echo "</tr>";
    }
}
echo "</table>";