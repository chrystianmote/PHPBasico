<html>
<head>
<title></title>
</head>
<body>
<?php
//Estabelecendo conexão com o Servidor Local
  $conexao = mysql_connect("localhost","root","");
//Verificando a conexão com o Servidor
  if(!$conexao)
  {
	die("Não foi possível se conectar ao Servidor. Erro encontrado: ".mysql_error());
  }
  
//Comando executados caso a conexão seja estabelecida com sucesso
    
  mysql_set_charset('utf8',$conexao);
  
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
  
  $comando = 'SELECT * FROM ALUNO';
  $alunos = mysql_query($comando);
  
  echo '<table cellspacing="0">';
  while($array = mysql_fetch_array($alunos))
  {
	echo '<tr';
	if($array['codigoAluno'] % 2 != 0){
	   echo " bgcolor='#CCC' >";}
	else{
	   echo " bgcolor='#FFF' >";}
	   
	echo '<td>'.$array['codigoAluno'].'</td>';
	echo '<td>'.$array['nomeAluno'].'</td>';
	echo '</tr>';  
  }
  echo '</table>';
//Encerrando a conexão com o Servidor  
  mysql_close($conexao);
?>
</body>
</html>