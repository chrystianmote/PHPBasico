<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title> Excluindo Elemento XML </title>
    </head>
    <body>
        <table class="table table-bordered">
            <?php
            include 'lib/XMLFunctions.php';

            $arr = lerBaseXML("arquivo.xml");
            for ($i = 0; $i < count($arr); $i++) {
                echo "<tr><td><center><b>" . $arr[$i]->titulo . "</center></b></td></tr>";
                echo "<tr><td><center>" . $arr[$i]->data . "</center></td></tr>";
                echo "<tr><td><center>" . $arr[$i]->autor . "</center></td></tr>";
                echo "<tr><td><center>" . $arr[$i]->conteudo . "</center></td></tr>";
                echo "<tr><td><center><button class='btn btn-success' onclick=\"location.href='excluirElementoXML.php?id="
                . $arr[$i]->idNoticia . "'\" type='button'>Excluir</button></center><b></td></tr>";
            }
            ?>
        </table> 
    </body>
</html>

<!--onclick=\"location.href='excluirElementoXML.php'\"-->