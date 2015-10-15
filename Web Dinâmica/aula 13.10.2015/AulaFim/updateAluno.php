<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="5;URL=listarAluno.php">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Confirmação de Alteração</title>
</head>
<body>
  <div class="container">
<?php
  //Capturando os dados postados
    $codigo 	= $_POST['codAluno'];
    $aluno 		= $_POST['nmAluno'];
	$logradouro = $_POST['edAluno'];
	$cidade 	= $_POST['cdAluno'];
	$estado 	= $_POST['etEstado'];
	$cep 		= $_POST['cpAluno'];
	$telefone 	= $_POST['tlAluno'];
	$nascimento = $_POST['dnAluno'];
	$responsavel= $_POST['rpAluno'];
	$status 	= $_POST['stAluno'];

  //Atualizando os dados	
	$atualizar = "UPDATE aluno SET 
	nomeAluno='$aluno',
	endAluno='$logradouro',
	cidAluno='$cidade',
	estAluno='$estado',
	cepAluno='$cep',
	telAluno='$telefone',
	nascimentoAluno='$nascimento',
	responsavelAluno='$responsavel',
	statusAluno='$status'
	WHERE codigoAluno='$codigo';";
  //echo $atualizar;

  //Conectando com Servidor
  require("conectar.php");
  
  //Abrindo o Banco de Dados
  mysql_select_db("dbescola");
	
  //Cadastrando o aluno
  if(mysql_query($atualizar))
  {
	echo '<div class="panel panel-success">
            <div class="panel-heading"><h3>SUCESSO</h3></div>
            <div class="panel-body">	
	          Os dados da(o) aluna(o) <strong>'.$aluno.'</strong> foram atualizados com sucesso!!!
			</div>
	      </div>';  
  }else{
	echo '<div class="panel panel-danger">
            <div class="panel-heading"><h3>ERRO</h3></div>
            <div class="panel-body">	
	          <strong>MENSAGEM:</strong> '.$atualizar.'
			</div>
	      </div>';  
  };	
  
  //Fechando a Conexao 
  mysql_close($conexao);  
?>
  </div>
</body>
</html>