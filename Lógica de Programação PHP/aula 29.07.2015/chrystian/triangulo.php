<?php 
	//$_GET[];
	
	echo "digite base <br>"; 
	$base = $_GET["base"];
	echo "digite altura <br>"; 
	$altura = $_GET["altura"];
	
	if($base<=$altura){
		$area = $base * $altura / 2;
		$val = "Triângulo";
	}
	else
	{
		$area = $base * $altura;
		$val = "Retângulo";
	}
	
	echo "Resultado do ". $val . ": ".($area);
?>