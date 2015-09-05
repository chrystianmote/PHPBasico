<html>
    <head>
        <title>Exercício Primo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php
        $num = $_POST["txtNumero"];
        $col = 0;
        ?>
        <table class="table table-bordered"> 
            <tr>
                <?php
                $primoCol = false;
                $vetorPrimos = mostraPrimos($num);
                for ($i = 1; $i <= $num; $i++) {
                    for ($j = 0; $j < count($vetorPrimos); $j++) {
                        if ($i == $vetorPrimos[$j]) {
                            $primoCol = true;
                            echo "<td style='color: blue' ><center><b>" . $vetorPrimos[$j] . "</b></center></td>";
                            $col++;
                        }
                    }
                    if (!$primoCol) {
                        echo "<td><center><b>" . $i . "</b></center></td>";
                        $col++;
                    }
                    if ($col == 10) {
                        $col = 0;
                        echo"</tr> <tr>";
                    }
                    $primoCol = false;
                }
                ?>
            </tr> 
        </table>
    </body>
</html>

<?php

function mostraPrimos($num) {

    $vetorNum = array();

    for ($i = 3; $i <= $num; $i+=2) {
        if (verificaPrimos($i)) {
            $vetorNum[] = $i;
        }
    }
    return $vetorNum;
}

function verificaPrimos($numero) {
    $primo = TRUE;
    $raizNum = +number_format(sqrt($numero), 0);
    for ($i = 2; $i <= $raizNum; $i++) {
        if ($numero % $i == 0) {
            $primo = FALSE;
        }
    }
    return $primo;
}
