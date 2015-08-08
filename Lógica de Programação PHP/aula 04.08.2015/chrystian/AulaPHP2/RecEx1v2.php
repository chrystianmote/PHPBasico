<?php

echo "<br><h3> Situação do Aluno </h3>";
$n1 = $n2 = $n3 = $n4 = 0;
if (!empty($_POST["txtNota1"]) && !empty($_POST["txtNota2"]) &&
        !empty($_POST["txtNota3"]) && !empty($_POST["txtNota4"])) {
    $n1 = $_POST["txtNota1"];
    $n2 = $_POST["txtNota2"];
    $n3 = $_POST["txtNota3"];
    $n4 = $_POST["txtNota4"];
    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    echo "<p>A média obtida foi: <b>" . $media . "</b> </p>";

    if ($media >= 7) {
        echo "<p>Aprovado ! </p>";
    } else if ($media >= 5) {
        echo "<p>Recuperação ! </p>";
    } else
        echo "<p>Reprovado ! </p>";
} else {
    var_dump($_POST);
    echo "<p>Calculo não efetuado por falta de nota!</p>";
}
    