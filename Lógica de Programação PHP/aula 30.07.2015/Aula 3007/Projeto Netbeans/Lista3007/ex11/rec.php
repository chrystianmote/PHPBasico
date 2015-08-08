<?php

if (isset($_POST["codigo"])) {
    if (!empty($_POST["codigo"])) {

        if ($_POST["codigo"] == "1234") {
            ?>
            <html>
                <head>
                    <title>Solicitação da Senha</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" 
                          content="width=device-width, initial-scale=1.0">
                </head>
                <body>
                    <div>
                        <form method="post" action="" >
                            <div>
                                Senha
                                <input type="password" name="senha" size="10">
                            </div>
                            <div>
                                <input type="submit">
                            </div>
                        </form>
                    </div>
                </body>
            </html>

            <?php
        } else {
            echo "<h2><font color='red'>"
            . "O código digitado é inválido"
            . "</font></h2>";
        }
    } else {
        echo "<h2><font color='red'>"
        . "Campo Código é Obrigatório"
        . "</font></h2>";
    }
}


if (isset($_POST["senha"])) {
    if (!empty($_POST)) {
        if ($_POST["senha"] == "9999") {
            echo("<img width='400' src='joinha.jpg'/>");
        } else {
            echo "<h2><font color='red'>"
            . "A senha está incorreta"
            . "</font></h2>";
        }
    } else {
        echo "<h2><font color='red'>"
        . "O campo Senha é Obrigatório"
        . "</font></h2>";
    }
}    