<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!empty($_POST["valor"])) {
    
    
    $valor = $_POST["valor"];
    echo "O Atencessor de ".$valor." é ";
    
    $valor = $valor - 1;
    echo "<h2> " . $valor . "</h2>";
    
} else {
    echo "<h2><font color='red'>Valor inválido</font></h2>";
}