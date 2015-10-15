<?php
  $conexao = mysql_connect("localhost","root","");
  if(!$conexao)
  {
	die("Não foi possível se conectar ao Servidor. Erro encontrado: ".mysql_error());
  } 
  mysql_set_charset('utf8',$conexao);
  
?>
