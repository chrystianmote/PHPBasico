<?php

$lista = $_POST;
$pesquisa = $_POST["valorProc"];
$total = (count($lista) - 1);
$encontrado = false;
for ($i = 0; $i < $total; $i++) {
    if ($pesquisa == $lista[$i]) {
        echo " O Elemento '".$pesquisa."' foi encontrado no input " . $i. " <br>";
        $encontrado =true;
    }
}
if (!$encontrado) {
    echo " Elemento não foi encontrado na posição";
}

