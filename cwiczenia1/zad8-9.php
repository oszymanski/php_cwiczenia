<a href="/exercise">Powrot</a></br>

<?php
$size = $_POST['size'];
$color = $_POST['color'];
$aliquot = $_POST['aliquot'];
$displayBorder = $_POST['displayBorder'] == '1'; 
$title = $_POST['title'];

echo "<h2>$title</h2>";

if ($displayBorder) {
    echo "<table border=1>";
}
else {
    echo "<table>";
}

echo "<tr>";
for ($i=0; $i < $size; $i++) { 
    echo "<td>" . $i . "</td>";
}
echo "</tr>";

for ($i=1; $i < $size; $i++) { 
    echo "<tr>";

    echo "<td>" . $i . "</td>";

    for ($j=1; $j < $size; $j++) { 
        $res = $i * $j;
        if ($res % $aliquot == 0) {
            echo "<td style=background-color:$color>" . $res . "</td>";
        } else {
            echo "<td>" . $res . "</td>";
        }
    }
    echo "</tr>";
}