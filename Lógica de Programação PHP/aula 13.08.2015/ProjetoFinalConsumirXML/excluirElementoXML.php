<?php
$idNoticia = $_GET["id"];
include 'lib/XMLFunctions.php';

$arr = lerBaseXML("arquivo.xml");

foreach ($arr as $valor) {
    if ($valor->idNoticia == $idNoticia) {
        unset($valor);
    }
}
print_r($arr);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>            
        </title>
    </head>
    <body>
        <table class="table table-bordered">
            <?php
            for ($i = 0; $i < count($arr); $i++) {
                if (!empty($arr[$i])) {
                    echo "<tr><td><center><b>" . $arr[$i]->titulo . "</center></b></td></tr>";
                    echo "<tr><td><center>" . $arr[$i]->data . "</center></td></tr>";
                    echo "<tr><td><center>" . $arr[$i]->autor . "</center></td></tr>";
                    echo "<tr><td><center>" . $arr[$i]->conteudo . "</center></td></tr>";
                    echo "<tr><td><center><button class='btn btn-success' onclick=\"location.href='excluirElementoXML.php'\"  type='button'>Excluir</button></center><b></td></tr>";
                }
            }
            ?>
        </table> 
    </body>
</html>