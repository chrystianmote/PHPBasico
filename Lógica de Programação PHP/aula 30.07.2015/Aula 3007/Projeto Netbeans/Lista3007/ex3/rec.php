<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!empty($_POST["validos"]) || !empty($_POST["nulos"]) || !empty($_POST["brancos"])) {

    $b = $_POST["brancos"];
    $n = $_POST["nulos"];
    $v = $_POST["validos"];

    $total = $b + $n + $v;

    $b = $b * 100 / $total;
    $n = $n * 100 / $total;
    $v = $v * 100 / $total;
 ?>

<table>
    <tr>
        <td>Votos válidos</td>
        <td><?php echo $v?></td>        
    </tr>
    <tr>
        <td>Votos em branco</td>
        <td><?php echo $b?></td>        
    </tr>
    <tr>
        <td>Votos nulos</td>
        <td><?php echo $n?></td>
    </tr>
    <tr>
        <td>Total</td>
        <td><?php echo $total?></td>
    </tr>
</table>

 <?php
} else {
    echo "<h2><font color='red'>Valor inválido</font></h2>";
}