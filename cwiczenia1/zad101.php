<a href="./">Powrot</a></br>

<?php

$size = $_POST['size'];
$color = $_POST['color'];

$table = new tabliczka_mnozenia($size, $color);
$table->display();

class tabliczka_mnozenia
{
    private $_size = 2;
    private $_color;

    public function __construct($size, $color)
    {
        $this->_size = $size;
        $this->_color = $color;
    }

    public function display()
    {
        echo "<table border=1 style=background-color:$this->_color>";

        echo "<tr>";
        for ($i = 0; $i < $this->_size; $i++) {
            echo "<td>" . $i . "</td>";
        }
        echo "</tr>";

        for ($i = 1; $i < $this->_size; $i++) {
            echo "<tr>";

            echo "<td>" . $i . "</td>";

            for ($j = 1; $j < $this->_size; $j++) {
                $res = $i * $j;
                echo "<td>" . $res . "</td>";
            }
            echo "</tr>";
        }
    }
}
