<?php
if (!empty($_POST["numCarros"]) &&
        !empty($_POST["totalVendas"]) &&
        !empty($_POST["salFixo"]) &&
        !empty($_POST["comissao"])) {

    $salario = $_POST["salFixo"] + $_POST["totalVendas"] * 5 / 100;
    $salario += $_POST["comissao"] * $_POST["numCarros"];
    ?>

    <table>
        <tr>
            <td>Número de Carros Venvidos</td>
            <td><b><?php echo $_POST["numCarros"]; ?></b></td>        
        </tr>
        <tr>
            <td>Total em Vendas</td>
            <td><b>R$ <?php echo number_format($_POST["totalVendas"], 2, ",", ""); ?></b></td>
        </tr>
        <tr>
            <td>Salário Fixo</td>
            <td><b>R$ <?php echo number_format($_POST["salFixo"], 2, ",", ""); ?></b></td>
        </tr>
        <tr>
            <td>Comissão</td>
            <td><b>R$ <?php echo number_format($_POST["comissao"], 2, ",", ""); ?></b></td>
        </tr>
        <tr>
            <td>Salário Final</td>
            <td><b>R$ <?php echo number_format($salario, 2, ",", ""); ?></b></td>
        </tr>

    </table>

    <?php
} else {
    echo "<h2><font color='red'>Valor inválido</font></h2>";
}