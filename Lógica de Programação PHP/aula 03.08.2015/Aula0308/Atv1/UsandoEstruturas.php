
<html>
    <head>
        <title>Exercício 1 e 2</title>        
    </head>
    <body>
        <p>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo $i;
                echo "&Tab;";
            }
            ?>
        </p>
        
        <p>
            <?php
            for ($i = 10; $i >= 1; $i--) {
                echo $i;
                echo "&Tab;";
            }
            ?>
        </p>

        <p>
            <?php
            $cont = 1;
            while ($cont <= 10) {
                echo $cont;
                echo "&Tab;";
                $cont++;
            }
            ?>
        </p>
        
        <p>
            <?php
            $cont = 10;
            do{
                echo $cont;
                echo "&Tab;";
                $cont--;
            }while ($cont >= 1);
            ?>
        </p>

    </body>
</html>

