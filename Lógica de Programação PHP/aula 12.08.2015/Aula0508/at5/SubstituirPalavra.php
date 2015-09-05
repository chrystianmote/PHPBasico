<?php

if (!empty($_POST["txtFrase"]) || !empty($_POST["txtVelha"])
        || !empty($_POST["txtNova"])) {

    $frase = strtoupper($_POST["txtFrase"]);
    $palavravelha = strtoupper($_POST["txtVelha"]);
    $palavranova = strtoupper($_POST["txtNova"]);

    $frase = str_replace($palavravelha, $palavranova, $frase);

    echo $frase;
}
else
    header ("Location: Erro.html");
        
        
