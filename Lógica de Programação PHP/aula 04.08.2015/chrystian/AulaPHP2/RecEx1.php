<?php

if (isset($_POST["txtNota1"])) {
    echo "A posição Nota1 do array POST existe ('está setado')<br><br>";
    if (empty($_POST["txtNota1"])) {
        echo "posição Nota1 do array POST está vazio!";
    } else {
        echo "posição Nota1 do array POST não está vazio!";
    }
}
echo "<br><br>";
echo "<br><br>";
if (empty($_POST)) {
    echo "O array POST está vazio!";
}
/* A função print_r() exibe o conteúdo completo de qualquer array */
print_r($_POST);
echo "<pre>";
var_dump($_POST);
echo "</pre>";



echo "<br><h3> Situação do Aluno </h3>";
$n1 = $n2 = $n3 = $n4 = 0;
if (!empty($_POST["txtNota1"])) {
    $n1 = $_POST["txtNota1"];
}
if (!empty($_POST["txtNota2"])) {
    $n2 = $_POST["txtNota2"];
}
if (!empty($_POST["txtNota3"])) {
    $n3 = $_POST["txtNota3"];
}
if (!empty($_POST["txtNota4"])) {
    $n4 = $_POST["txtNota4"];
}
$media = ($n1 + $n2 + $n3 + $n4) / 4;

echo "<p>A média obtida foi: <b>".$media."</b> </p>";

if ($media>=7) {
    echo "<p>Aprovado ! </p>";
}
else if ($media>=5) {
    echo "<p>Recuperação ! </p>";
}
else 
     echo "<p>Reprovado ! </p>";
?>

