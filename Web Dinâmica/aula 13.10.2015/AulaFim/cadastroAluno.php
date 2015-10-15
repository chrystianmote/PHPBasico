<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Alunos</title>
<meta http-equiv="refresh" content="5;URL=cadastrar_aluno.php">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php
  //Capturando os dados postados
    $codigo 	= $_POST['codAluno'];
    $aluno 		= $_POST['nmAluno'];
	$logradouro = $_POST['edAluno'];
	$cidade 	= $_POST['cdAluno'];
	$estado 	= $_POST['etEstado'];
	$cep 		= $_POST['cpCep'];
	$telefone 	= $_POST['tlTelefone'];
	$nascimento = $_POST['dtNascimento'];
	$responsavel= $_POST['rpResponsavel'];
	$status 	= $_POST['stStatus'];
  //Imprimindo os dados
  /*echo '
    Código: '.$codigo.'<br />
	Nome: '.$aluno.'<br />
	Logradouro: '.$logradouro.'<br /> 
	Cidade: '.$cidade.'<br />
	Estado: '.$estado.'<br />
	CEP: '.$cep.'<br />
	Telefone: '.$telefone.'<br />
	Nascimento: '.$nascimento.'<br />
	Responsável: '.$responsavel.'<br />
	Status: '.$status.'<br />
  ';*/	

  //Cadastrando os dados	
	$cadastro = "INSERT INTO aluno VALUES (
	$codigo,
	'$aluno',
	'$logradouro',
	'$cidade',
	'$estado',
	'$cep',
	'$telefone',
	'$nascimento',
	'$responsavel',
	'$status');";
	//echo $cadastro;

  //Conectando com Servidor
  require("conectar.php");
  
  //Abrindo o Banco de Dados
  mysql_select_db("dbescola");
	
  //Cadastrando o aluno
  if(mysql_query($cadastro))
  {
	  echo '<div class="panel panel-success">
            <div class="panel-heading"><h3>SUCESSO</h3></div>
            <div class="panel-body">	
	          Os dados da(o) aluna(o) <strong>'.$aluno.'</strong> foram salvos com sucesso!!!
			</div>
	      </div>';  
  }else{
	echo '<div class="panel panel-danger">
            <div class="panel-heading"><h3>ERRO</h3></div>
            <div class="panel-body">	
	          <strong>MENSAGEM:</strong> '.mysql_error().'
			</div>
	      </div>';
  }	
  
  //Fechando a Conexao 
  mysql_close($conexao);
  ?>
</body>
</html>