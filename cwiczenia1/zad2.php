<a href="./">Powrot</a></br>

<?php
$aliquot = $_POST['aliquot'];
$count = $_POST['count'];

echo "<table border=1>";
for ($i=0; $i <= 10; $i++) { 
    if ($i % $aliquot === 0) {
        echo "<tr>";

            echo "<td>" . $i . "</td>";

        echo "</tr>";
    }
}
echo "</table>";
