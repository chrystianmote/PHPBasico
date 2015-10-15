<?php
$valor = $_POST;
$result = 0;
if(!empty($valor) && ($valor["txtNum1"]!=0) && ($valor["txtNum2"]!=0))
{
	if(isset($valor["soma"]))
	{
		$result = $valor["txtNum1"] + $valor["txtNum2"];
		echo  "<h2> O valor da Soma é: ".$result."</h2>";
	}
	if(isset($valor["sub"]))
	{
		$result = $valor["txtNum1"] - $valor["txtNum2"];
		echo  "<h2> O valor da Subtração é: ". number_format($result,2)."</h2>";
	}
	if(isset($valor["mult"]))
	{
		$result = $valor["txtNum1"] * $valor["txtNum2"];
		echo  "<h2> O valor da Multiplicação é: ".$result."</h2>";
	}
	if(isset($valor["rest"]))
	{
		$result = $valor["txtNum1"] % $valor["txtNum2"];
		echo  "<h2> O valor do resto da divisão é: ".$result."</h2>";
	}
	if(isset($valor["div"]))
	{
		$result = $valor["txtNum1"] / $valor["txtNum2"];
		echo  "<h2> O valor da Divisão é: ".number_format($result,2)."</h2>";
	}
	if(isset($valor["med"]))
	{
		$result = ($valor["txtNum1"] + $valor["txtNum2"]) / 2;
		echo  "<h2> O valor da Média é: ".number_format($result,2)."</h2>";
	}
	
	if(isset($valor["seq"]))
	{	
		if($valor["txtNum1"] < $valor["txtNum2"])
		{
			$result = $valor["txtNum1"];
			while ($result < $valor["txtNum2"])
			{
				$result++;
				echo $result. "  ";
			}
		}
		else{ 
			$result = $valor["txtNum1"];
			while ($result > $valor["txtNum2"])
			{
				$result--;
				echo $result. "  ";
			}
		}
	}
}
else
{
	echo  "<h2> Digite os valores nas Caixas reservadas! </h2>";
}


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