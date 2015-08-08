<?php
$num = $_POST["txtNumero"];
//função que verifica as unidades, dezenas, centenas e milhares
//e retorna um texto em algarismos romanos
function NumeroRomano($numero) {
    if ($numero <= 0 || $numero > 3999) {
        return $numero;
    }

    $n = (int) $numero;
    $y = '';

    // Verifica as unidades de milhar e as centenas
    while (($n / 1000) >= 1) {
        $y .= 'M';//  " .= " é o acréscimo de caracteres.
        $n -= 1000;//Decrementação de valor ($n - 1000)
    }
    if (($n / 900) >= 1) {
        $y .= 'CM';
        $n -= 900;
    }
    if (($n / 500) >= 1) {
        $y .= 'D';
        $n -= 500;
    }
    if (($n / 400) >= 1) {
        $y .= 'CD';
        $n -= 400;
    }

    // verifica uma centena e as dezenas
    while (($n / 100) >= 1) {
        $y .= 'C';
        $n -= 100;
    }
    if (($n / 90) >= 1) {
        $y .= 'XC';
        $n -= 90;
    }
    if (($n / 50) >= 1) {
        $y .= 'L';
        $n -= 50;
    }
    if (($n / 40) >= 1) {
        $y .= 'XL';
        $n -= 40;
    }

    // Verifica uma dezena e as unidades
    while (($n / 10) >= 1) {
        $y .= 'X';
        $n -= 10;
    }
    if (($n / 9) >= 1) {
        $y .= 'IX';
        $n -= 9;
    }
    if (($n / 5) >= 1) {
        $y .= 'V';
        $n -= 5;
    }
    if (($n / 4) >= 1) {
        $y .= 'IV';
        $n -= 4;
    }

    // verifica uma unidade
    while ($n >= 1) {
        $y .= 'I';
        $n -= 1;
    }
    return $y;
}
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div style="font-family:cursive">
        <?php
        echo ("O número em Algarismos Romanos é: " . NumeroRomano($num));
        ?>
    </div>
</body>
</html>

