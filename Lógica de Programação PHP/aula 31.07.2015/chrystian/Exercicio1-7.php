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
    $dist28 = ($vetor["txtEx5"] * 28)/100 ;
    $imp45 = ($vetor["txtEx5"] * 45)/100 ;;
    echo "<p> O Valor do carro para o Consumidor final é : <b>"
    .($vetor["txtEx5"] +  $dist28 + $imp45) ." Reais</b> </p>";
}
if (isset($vetor["txtEx6"])) {
    $bonus = ($vetor["txtEx6_1"] * $vetor["txtEx6_3"]);
    $comissao = (($vetor["txtEx6_2"] * 5 )/100);
    echo "<p> O Valor de Ganho para o Vendedor + bonus é : <b>"
    .(($vetor["txtEx6"] +  $bonus + $comissao)) ." Reais</b> </p>";
}
if (isset($vetor["txtEx7"])) {
    $fahrenheit = $vetor["txtEx7"];
    $celcius = (($fahrenheit - 32) / 1.8);
    
    echo "<p> O Valor convertido: <b>" . number_format($celcius, 1)  
            ." ºC</b> </p>";
}



//foreach ($vet as $pos => $n) {
//    if (empty($n)) {
//        continue;
//    }
//}

