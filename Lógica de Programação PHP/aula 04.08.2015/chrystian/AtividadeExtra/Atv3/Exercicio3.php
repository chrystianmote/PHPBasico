<html>
    <head>
        <title>Exercício 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php
        $termo = $_POST["txtTermo"];
        $col = 0;
        $a = 1;
        $b = 1;
        ?>

        <table class="table table-bordered"> 
            <tr>

                <?php
                if ($termo <= 2) {
                    $c = 1;
                    echo "<td><center><b>" . $c . "</b></center></td>";
                } else {
                    $cont = 3;
                    while ($cont <= $termo) {
                        $col++;
                        $c = $a + $b;
                        if ($c == 2) {
                            echo "<td><center><b> 1 </b></center></td>";
                            echo "<td><center><b> 1 </b></center></td>";
                        }
                        echo "<td><center><b>" . $c . "</b></center></td>";
                        if ($col == 10) {
                            $col = 0;
                            echo"</tr> <tr>";
                        }
                        $a = $b;
                        $b = $c;
                        $cont++;
                    }
                }

//                for ($i = 0; $i < $termo; $i++) {
//                    $col++;
//                    //aqui é onde eu chamo a função enviando o valor de $i como pârametro.
//                    echo "<td><center><b>" . MetodoFibo($i) . "</b></center></td>";
//                }
//
//                // Função com um parâmetro.Essa função 
//                // retorna um numero da sequencia Fibonacci
//                function MetodoFibo($fib) {
//                    if ($fib < 2) {
//                        return 1;
//                    } else {
//                        return $fib = MetodoFibo($fib - 1) + MetodoFibo($fib - 2);
//                    }
//                }
//                
                ?>

            </tr> 
        </table>
    </body>
</html>


