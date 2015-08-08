<html>
    <head>
        <title>Exercício 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php
        $n = $_POST["txtNumero"];
        $col = 0;
        $maxC = $_POST["txtColunas"];
        ?>
        <table class="table table-bordered"> 
            <tr>
                <?php
                for ($i = 1; $i <= $n; $i++) {
                    if ($i % 2 == 0) {
                        $col++;
                        echo "<td><center><b>" . $i . "</b></center></td>";
                        if ($col == $maxC) {
                            $col = 0;
                            echo"</tr> <tr>";
                        }
                    }
                }
                ?>
            </tr> 
        </table>
    </body>
</html>



