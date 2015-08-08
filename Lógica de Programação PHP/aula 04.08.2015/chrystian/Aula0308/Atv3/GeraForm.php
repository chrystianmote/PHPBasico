<?php
$quant = $_POST["txtQuant"];

if (isset($quant)) {
    if (!empty($quant)) {
        ?>
        <html>
            <head>
                <title>Exercicio 3</title>
            </head>
            <body>
                <form action="RealizaProc.php" method="POST"> 
                    <p>
                        Escreva o que vc quiser!
                    </p>
                    <?php
                    for ($i = 0; $i < $quant; $i++) {
                         echo "Digite: <input type='text' name=" . $i . ">";
                         echo "<br>";
                    }
                    ?>
                    <br><br><br>
                    Pesquisar Valor: <input type="text" name="valorProc" >
                    <input type="submit" value="Pesquisar" >
                </form>
            </body>
        </html>
        <?php
    }
}


