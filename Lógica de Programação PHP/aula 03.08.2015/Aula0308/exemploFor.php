<?php

$n = $_GET["quant"];

echo "<table>";
for ($i = 0; $i < $n; $i++) {
    if ($i % 2 == 0) {
        echo "<tr>";
        echo "<td bgcolor='blue'>";
        echo "<font color='white'>" . $i . "</font>";
        echo "</td>";
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td bgcolor='red'>";
        echo "<font color='white'>" . $i . "</font>";
        echo "</td>";
        echo "</tr>";
    }
}
echo "</table>";
