<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="5;URL=listarAluno.php">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Exclusão de Alunos</title>
</head>
<body>
  <div class="container">
<?php
  $codAluno = $_GET['btExcluir'];
  echo 'Resultado:'.$codAluno;	
//Conectando
  require("conectar.php");
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
  
  $comando = "DELETE FROM ALUNO WHERE codigoAluno='$codAluno'";
  $comando2 = "DELETE FROM MATRICULA WHERE codigoAluno='$codAluno'";
  if($aluno = mysql_query($comando)){
	  echo '<div class="panel panel-success">
            <div class="panel-heading"><h3>SUCESSO</h3></div>
            <div class="panel-body">	
	          Aluno excluido com sucesso!!!
			</div>
	      </div>';
  }else if($aluno = mysql_query($comando2)){
	  //Excluindo o Aluno
	  $aluno = mysql_query($comando);
	  echo '<div class="panel panel-success">
            <div class="panel-heading"><h3>SUCESSO</h3></div>
            <div class="panel-body">	
	          Aluno excluido com sucesso!!!
			</div>
	      </div>';
  }else{
	  echo '<div class="panel panel-danger">
            <div class="panel-heading"><h3>ERRO</h3></div>
            <div class="panel-body">	
	          <strong>ERRO:</strong> '.mysql_error().'
			</div>
	      </div>';	
  }
  ?>
  </div>
</body>
</html>