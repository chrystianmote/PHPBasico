<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!empty($_POST["base"]) || !empty($_POST["altura"])) {

    $b = $_POST["base"];
    $a = $_POST["altura"];
    $area = $b * $a;

    echo "<h1>Retângulo</h1>";
    echo "Base: <b>" . $b . "</b><br>";
    echo "Altura: <b>" . $a . "</b><br>";
    echo "Área: <b> " . $area . "</b><br>";
    
} else {
    echo "<h2><font color='red'>Valor inválido</font></h2>";
}