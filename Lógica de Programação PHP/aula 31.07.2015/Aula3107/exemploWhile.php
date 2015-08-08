<?php

$n = $_POST["numero"];

$a = 0;

echo "<table border=1> <tr>";
while ($a <= $n) {
    echo "<td>".$a."</td>" ;
    //$a += 1;    
    $a++;//incremento de 1
}
echo "</tr> </table>";

