<html>
<head>
<title>Título da Página</title>
</head>
<?php
/*Estabelecendo conexao com Servidor*/
  $conexao = mysql_connect("localhost","root","");
/*Verificando se a conexao foi estabelecida*/
  if(!$conexao){
	die('Nao foi possivel conectar ao Servidor de Dados. Erro detectado: '.mysql_error());
  }
/*Difinindo o padrao de codificacao*/
  mysql_set_charset('utf8',$conexao);
/*Abrindo o Banco de Dados*/  
  mysql_select_db("dbestudo");
/*Definindo criterio de seleção de dados*/  
  $consulta = "SELECT * FROM FORNECEDOR";
/*Selecionando dados da entidade Fornecedor*/  
  $fornecedor = mysql_query($consulta);

  echo "<table cellspacing='0'>";  
  while($array = mysql_fetch_array($fornecedor))
  {
	$resto = $array['idFornecedor'] % 2;	  
	echo "<tr ";
	if($resto == 0){
	  echo "bgcolor='#CCC'>";
	}else{
	  echo "bgcolor='#FFF'>";
	}  
  	echo "<td>".$array['idFornecedor']."</td>";
	echo "<td>".$array['nome']."</td>";
	echo "</tr>";  
  }
  echo "</table>";
  mysql_close($conexao);
?>

</html>