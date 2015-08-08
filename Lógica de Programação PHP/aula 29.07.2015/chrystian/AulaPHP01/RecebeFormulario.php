<?php

if (!empty($_POST)) {
    
    $valore = $_POST["txtNumero"];
    if ($valore % 2 == 0) {
        echo "É Par!";
    } else {
        echo "É Impar!";
    }
}


