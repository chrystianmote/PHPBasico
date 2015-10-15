
<?php
	$limite = 100;
	$cont = 1;
	do{
		echo $cont. ' ';
		$cont++;
	}while($cont <= $limite);
	
	echo '<br />';
	$c = 1;
	for($c; $c <= $limite; $c++){
		echo $c.' ';
	}
	
	$texto = 'um texto qualquer';
	echo '<br /><br />';
	echo '<p>'.$texto.'</p>';
	echo 'Total de caracteres: '.strlen($texto);
	echo '<p>Frase com a primeira letra em maiúscula</p>'.ucfirst($texto);
	echo '<p>Substituindo a palavra TEXTO pela palavra PEIXE </p>'.str_replace('texto','peixe',strtoupper($texto));
	echo '<p>Frase toda em maiúscula</p>'.strtoupper($texto);
	echo '<p>Frase toda em minúscula</p>'.strtolower($texto);
	echo '<br /><br />';
	
	function ParOuImpar($num)
	{
		if($num % 2 ==0)
		{
			echo $num. ", é par!";
		}
		else
		{
			echo $num. ", é impar!";
		}
	}
	ParOuImpar(10);
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
</body>
</html>