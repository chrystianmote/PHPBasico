<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $arr = array(10, 5, 11, 3, 1, 20, 2);
        include 'ordenacoes.php';
        $arr2 = ordenaArray($arr);

        echo "<pre>";
        print_r($arr);
        echo "<br>";
        print_r($arr2);
        echo "</pre>";
        ?>
    </body>
</html>
