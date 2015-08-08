<?php

echo "Calcular a situação do aluno: <br>";
echo "Informe a nota pela URL com o nome 'nota' <br>";
echo '<br><br><br>';
$n = $_GET["nota"];

if ($n >= 7) {
    echo "O aluno está Aprovado";
}
else if($n >= 5){
    echo "O aluno está de recuperação";
}
else{
    echo "O Aluno está reprovado";
}
echo " com a nota ". $n ;

?>

