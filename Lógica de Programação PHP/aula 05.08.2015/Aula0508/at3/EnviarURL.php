<?php
$vetor = $_GET;
$soma = 0;
echo "Possui ".count($vetor)."  de quantidade";
foreach ($vetor as $valor) {
    $soma += $valor; 
}
echo "<br>";
echo "A soma dos valores é ". $soma;
echo "<br>";
$media = $soma/count($vetor);
echo "A média dos valores é: ".$media;



