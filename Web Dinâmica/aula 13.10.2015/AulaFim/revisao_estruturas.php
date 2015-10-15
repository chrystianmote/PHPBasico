<?php
  $limite = 100;
  $cont = 1;
  $texto = 'os alunos da turma 280';
//Utilizando estrutura de repetição FAÇA/ENQUANTO
  do{
	 echo $cont.' ';
	 $cont++; 
  }while($cont <= $limite);
  
  echo '<br /><br />';
//Utilizando estrutura de repetição PARA/FAÇA  
  for($i=1;$i<=$limite;$i++){
	 echo $i.' '; 
  }
  
  echo '<br /><br />';
//Imprimindo a Frase sem formatação
  echo '<p>'.$texto.'</p>';
  echo 'Total de caracteres: '.strlen($texto);
  echo '<p>Frase com a primeira letra em maiúscula</p>';
  echo ucfirst($texto);
  echo '<p>Substituindo a palavra ALUNOS pela palavra DISCENTES</p>';
  echo str_replace('alunos','discentes',$texto);
  echo '<p>Frase toda em Maiúsculas</p>';
  echo strtoupper($texto);
  
  echo '<br /><br />';
  function ParOuImpar($num)
  {
	if($num % 2 == 0)
	{
	  echo $num.' é PAR!';	
	}else{
	  echo $num.' é ÍMPAR!';		
	}
  }
  
  ParOuImpar(10);
?>