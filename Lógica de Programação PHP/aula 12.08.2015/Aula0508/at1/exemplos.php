<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * função: strlen
         * conta quantos caracteres existem em uma palavra (string)
         */
        $frase = "Seu nome completo";
        $cont = strlen($frase);
        echo $cont;

        echo "<hr>";

        /**
         * função: strpos
         * procura uma substring dentro de uma string e retorna sua posição
         */
        $pos = strpos($frase, "nome");
        
        trim($frase);//Remove os espaços to incío e fim do texto.
        
        
        echo $pos;

        echo "<hr>";

        /**
         * função: str_replace
         * procura uma substring dentro de uma string, substitui-a por outra substring e retorna a nova string completa
         */
        $novafrase = str_replace("nome", "endereço", $frase);
        echo $novafrase;

        echo "<hr>";

        /**
         * função: substr
         * retorna uma substring dentro de uma string, de determinado comprimento, começando de uma determinada posição
         * Obs: no exemplo abaixo a posição inicial é 9 e o comprimento é 8.
         */
        $parte = substr($frase, 9, 8);
        echo $parte;
        
        echo "<hr>";
        
        /**
         * função: count
         * retorna o número de termos que existem em um array
         */
        $vetor = array(10,5,12,3,46,2,1);
        $cont = count($vetor);
        echo $cont;
        
        echo "<hr>";
        
        /**
         * percorrendo cada caractere de uma string
         */
        for($i=0; $i<  strlen($frase); $i++){
            echo $frase[$i]."<br>";
        }
        
        
        echo "<hr>";
        
        /**
         * percorrendo cada elemento de um array
         */
        foreach ($vetor as $key => $value) {
            echo $key."-".$value."<br>";
        }
        ?>
    </body>
</html>
