<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* include: inclui um arquivo dentro do script, e
         * repete a inclusão quantas vezes chamado
         * include_once: inclui um arquivo apenas um vez.
         * caso seja chamado em outro momento, não efetuar
         * outra inclsão         */
        include_once 'functions/mat.php';
        $n = 5;
      
        $r = cuboComRetorno($n);
        echo "<h2>Cubo de " . $n . " = " . $r . "</h2>";

        echo "<h2>Cubo de 7 = " . cuboComRetorno(7) . "</h2>";

        echo "<hr/>";

        $n = 5;
        $e = 4;
        $r = eleva($n, $e);
        echo "<h2>" . $n . " elevado  = " . $r . "</h2>";

        echo "<hr/>";

        $n = 7;
        inverteSinal($n);
        echo "<h2>Novo valor de n " . $n . "</h2>";

        
        ?>
    </body>
</html>
