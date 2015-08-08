<?php

$lista = $_POST;
$pesquisa = $_POST["valorProc"];
$totalElementos = (count($lista) - 1);
$encontrado = false;
for ($i = 0; $i < $totalElementos; $i++) {
    if ($pesquisa == $lista[$i]) {
        echo "Elemento '".$pesquisa ."' foi encontrado na posição " . $i;
        echo "<br>";
        $encontrado = true;
    }
}
if (!$encontrado)
{
    echo "Elemento '".$pesquisa ."'não foi encontrado na lista";
}
