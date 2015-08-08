<?php

$vetor = $_POST;

if(isset($vetor["txtEx1"]))
{
    echo "<p>O valor antecessor é : <b>" . ($vetor["txtEx1"] - 1) . "</b> </p>";
}
if(isset($vetor["txtEx2"]))
{
    echo "<p>Resultado da área é : <b>" 
    . ($vetor["txtEx2"]* $vetor["txtEx2_1"]) 
            . " m²</b> </p>";
}
if (isset($vetor["txtEx3"])) {
    $totalvotos = ($vetor["txtEx3"]+ 
            $vetor["txtEx3_1"]+$vetor["txtEx3_2"]);
    
    echo "<p>O Resultado do Total de votos são : <b>" 
    .  $totalvotos . " Votos</b> </p>";
    echo"<br>";
    echo "<p>A porcentagem do Total de votos válidos é : <b>" 
    . number_format(($vetor["txtEx3_2"]/$totalvotos)* 100,2) . " %</b> </p>";
     echo "<p>A porcentagem do Total de votos brancos é : <b>" 
    . number_format(($vetor["txtEx3"]/$totalvotos)* 100,2) . " %</b> </p>";
      echo "<p>A porcentagem do Total de votos nulos é : <b>" 
    . number_format(($vetor["txtEx3_1"]/$totalvotos)* 100,2) . " %</b> </p>";
}
if (isset($vetor["txtEx4"])) {
    $porcentagem = ($vetor["txtEx4_1"]/100);
    echo "<p> O Novo sálário do Funcionário é : <b>" 
    . ($vetor["txtEx4"] + ($vetor["txtEx4"] * $porcentagem )) 
            . " Reais</b> </p>";
}
if (isset($vetor["txtEx5"])) {
    $dist28 = $vetor["txtEx5"] 
            $imp45;
    echo "<p> O Valor do carro para o Consumidor final é : <b>"
    .  ."";
}


//foreach ($vet as $pos => $n) {
//    if (empty($n)) {
//        continue;
//    }
//}

