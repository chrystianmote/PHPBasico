<?php

if (!empty($_GET)) {
    $vet = $_GET;
    $valor = 0;
    foreach ($vet as $v) {
        if ($v > $valor) {
            $valor = $v;
        }
    }
    echo "O maior é: " . $valor;
} else {
    echo "Está Vazio! Preencha os parâmetros!";
}
?>

