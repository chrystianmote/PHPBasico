<?php

include 'functions/mat.php';

$arr = array(10, 9, 8.8, 7, 10);

$m = media($arr);

if ($m == FALSE) {
    echo "<h2>O parâmetro não era um array</h2>";
} else {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<h2>A média é " . $m . "</h2>";
}
