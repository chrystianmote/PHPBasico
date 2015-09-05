<?php
$idNoticia = $_GET["id"];
include 'lib/XMLFunctions.php';
$removeu = removerNoticiaXML($idNoticia, "arquivo.xml");
if (!$removeu) {
//
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <title>            
            </title>
        </head>
        <body>

            <h1>
                NAO HÁ NOTÍCIAS NA NOSSA PÁGINA
            </h1>
        </body>
    </html>
    <?php
}