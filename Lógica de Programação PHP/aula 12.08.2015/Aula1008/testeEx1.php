<?php

include 'functions/mat.php';

$d = data();

if ($d == FALSE) {
    echo "<h2>parâmetro inválido</h2>";
} else {
    echo "<h2>" . $d . "</h2>";
}
