<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aula1 - PHP Dinamico</title>
</head>
<?php
 $usuario = "Chrystian";
 
 echo  "<h2> ".$usuario.", Seja Bem-vindo</h2>";
 
?>


<body>
<fieldset>
<legend> Cadastrar </legend>
<form action="AtividadePHP.php" method="post">

Numero 1: <input name="txtNum1" type="text"> <br />

Numero 2: <input name="txtNum2" type="text"> <br /><br /><br />

<button name="soma" type="submit">Soma</button>
<button name="sub" type="submit">Subtração</button>
<button name="div" type="submit">Divisão</button>
<button name="mult" type="submit">Multiplicação</button>
<button name="med" type="submit">Média</button>
<button name="rest" type="submit">Resto</button>
<button name="seq" type="submit">Sequencia</button>
</form>
</fieldset>
</body>
</html>