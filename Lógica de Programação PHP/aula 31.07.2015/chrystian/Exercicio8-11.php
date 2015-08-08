<?php
$vetor = $_POST;

if (isset($vetor["txtEx8"])) {
    $quant = $vetor["txtEx1"];
    if ($quant >= 12) {

        echo "<p>Valor Total : <b>R$ "
        . number_format(1 * $quant, 2) . "</b> </p>";
    } else {
        echo "<p>Valor Total : <b>R$ "
        . number_format(1.30 * $quant, 2) . "</b> </p>";
    }
}
if (isset($vetor["txtEx9"])) {
    $valorhora = $vetor["txtEx2"];
    $horas = $vetor["txtEx2_1"];
    if ($horas <= 160) {
        echo "<p>O Valor Total Mensal : <b>R$ "
        . number_format($valorhora * $horas, 2) . "</b> </p>";
    } else {
        $totalNormal = $valorhora * 160;
        $horaExtra = $horas - 160;
        $totalExtra = ($valorhora * 1.5);
        echo "<p>Valor Total : <b>R$ "
        . number_format($totalNormal + $totalExtra, 2) . "</b> </p>";
    }
}

if (isset($vetor["txtEx10"])) {
    $salarioFixo = $vetor["txtEx3"];
    $vendas = $vetor["txtEx3_1"];
    if ($vendas <= 1500) {
        echo "<p>O Valor Total Mensal : <b>R$ "
        . number_format($salarioFixo + $vendas * 0.03, 2) . "</b> </p>";
    } else {
        echo "<p>O Valor Total Mensal : <b>R$ "
        . number_format($salarioFixo + (1500 * 0.03) +
                ($vendas - 1500) * 0.05, 2) . "</b> </p>";
    }
}

if (isset($vetor["txtEx11"])) {
    if (!empty($vetor["txtEx11"])) {
        $codigo = $vetor["txtEx11"];
        if ($codigo == "1234") {
            ?>
            <html>
                <head>
                    <title>
                        Solicitação de Senha
                    </title>
                </head>
                <body>
                    <div>
                        <form method="POST" action="Exercicio8-11.php">
                            <div>
                                Senha:
                                <input type="password" name="senha" size="10">
                            </div>
                            <div>
                                <input type="submit" value="Entrar" >                              
                            </div>
                        </form>
                    </div>
                </body>
            </html>


            <?php
        } else {
            echo "<h2><font color='red'> Campo digitado é inválido!"
            . " </font></h2>";
        }
    } else {
        echo "<h2><font color='red'> Campo Código Obrigatório! "
        . " </font></h2>";
    }
}

if (isset($vetor["senha"])) {
    if (!empty($vetor["senha"])) {
        if ($vetor["senha"] == "9999") {
            ?>

            <img src="img/formatado.jpg" alt=""/>


            <?php
        } else {
            echo "<h2><font color='red'> Senha Incorreta! "
            . " </font></h2>";
        }
    } else {
        echo "<h2><font color='red'> Campo Senha Obrigatório! "
        . " </font></h2>";
    }
}

