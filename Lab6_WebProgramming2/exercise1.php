<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$input = $_POST["number"];

function multiply($a, $b) {
    return $a * $b;
}

echo "<table border = 1>";
for ($i = 1; $i <= $input; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $input; $j++) {
        echo "<td>" . multiply($i, $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>