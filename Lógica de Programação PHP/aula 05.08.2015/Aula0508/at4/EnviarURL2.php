<?php
$vetor = $_GET;

$somaPos = $somaNeg = 0;
$mediaPos = $somaNeg = 0;
$contPos = $contNeg = 0;
echo "Possui ".count($vetor)."  de quantidade";
foreach ($vetor as $valor) {
    if ($valor > 0) {
        $somaPos += $valor; 
        $contPos++;
    }
    else
    {
        $somaNeg += $valor;
        $contNeg++;
    }
    
}
echo "<br>";
echo "A soma dos valores Positivos é ". $somaPos;
echo "<br>";
echo "A soma dos valores Negativos é ". $somaNeg;
echo "<br><br><br><br>";
$mediaPos = $somaPos/$contPos;
$mediaNeg = $somaNeg/$contNeg;
echo "A média dos valores Positivos é: ".$mediaPos;
echo "<br>";
echo "A média dos valores Negativos é: ".$mediaNeg;
echo "<br>";


