<?php
if (!empty($_POST["custo"])) {

    $custo = $_POST["custo"];
    $distribuidor = $custo*28/100;
    $impostos = $custo*45/100;
    $custofinal = $custo+$distribuidor+$impostos;

?>

<table>
    <tr>
        <td>Custo de Fábrica</td>
        <td><b><?php echo $custo; ?></b></td>        
    </tr>
    <tr>
        <td>Custo Final</td>
        <td><b><?php echo $custofinal; ?></b></td>
    </tr>
        
</table>

<?php

} else {
    echo "<h2><font color='red'>Valor inválido</font></h2>";
}