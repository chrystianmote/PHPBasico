<?php
if (!empty($_POST["salario"]) &&
        !empty($_POST["reajuste"])) {

    //$novo_salario = $_POST["salario"] + ($_POST["salario"]*$_POST["reajuste"]/100);

    $novo_salario = $_POST["salario"];

    //$novo_salario = $novo_salario + ($novo_salario * $_POST["reajuste"] / 100);

    $novo_salario += ( $novo_salario * $_POST["reajuste"] / 100);
    
?>

<table>
    <tr>
        <td>Salário Antigo</td>
        <td><b><?php echo $_POST["salario"]; ?></b></td>        
    </tr>
    <tr>
        <td>Novo Salário</td>
        <td><b><?php echo $novo_salario; ?></b></td>
    </tr>
        
</table>

<?php

} else {
    echo "<h2><font color='red'>Valor inválido</font></h2>";
}