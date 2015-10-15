<?php
  $valor1 = $_POST['txtValor1'];
  $valor2 = $_POST['txtValor2'];  
  $opcao  = $_POST['op'];
if($opcao == 'M'){
	 echo 'Média dos valores: '.($valor1 + $valor2)/2; 
  }else{
    switch ($opcao){
    case 'A':
      echo 'Resultado da Adição: '.($valor1 + $valor2);
	  break;
	case 'S':
	  echo 'Resultado da Subtração: '.($valor1 - $valor2);
	  break; 
	case 'P':
	  echo 'Resultado do Produto: '.($valor1 * $valor2);
	  break;
	case 'D':
	  echo 'Resultado da Divisão: '.($valor1 / $valor2);
	  break;
	case 'R':
	  echo 'Resto da Divisão: '.($valor1 % $valor2);
	  break;  
	case 'Q':
	  if($valor1 <= $valor2){
		 while($valor1 <= $valor2){
		   echo $valor1.' ';
		   $valor1++;
		 }
	  }else{
		 while($valor1 >= $valor2){
		   echo $valor1.' ';
		   $valor1--;
		 } 
	  }
    }
  }
  
?>