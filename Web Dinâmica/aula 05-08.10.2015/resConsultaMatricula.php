<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Matriculas Encontradas</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
//Capturando dados
$codigo = $_POST['codMatricula'];
$aluno = $_POST['codAluno'];
$curso = $_POST['codCurso'];
$inicio = $_POST['dtInicial'];
$fim  = $_POST['dtFinal'];
$status = $_POST['stStatus'];

//Verificando e definindo criterios de filtragem
//echo $codigo.' '.$aluno.' '.$curso.' '.$inicio.' '.$fim.' '.$status;
$pesquisa = 'SELECT m.codigoMatricula,a.nomeAluno,c.nomeCurso,m.dataMatricula, m.statusMatricula 
FROM MATRICULA m,ALUNO a,CURSO c 
WHERE a.codigoAluno = m.codigoAluno 
AND c.codigoCurso = m.codigoCurso ';
if($codigo!=''){
	$pesquisa = $pesquisa."AND m.codigoMatricula=$codigo";
}else{ 
  if($aluno!=''){
	$pesquisa = $pesquisa."AND a.codigoAluno=$aluno ";
  }
  if($curso!=''){
	$pesquisa = $pesquisa."AND c.codigoCurso=$curso ";  
  }
  if($inicio!='' && $fim!=''){
	$pesquisa = $pesquisa."AND (m.dataMatricula>='$inicio' 
	AND m.dataMatricula<='$fim') ";  
  }
  if($status!=''){
	$pesquisa = $pesquisa."AND m.statusMatricula='$status' ";  
  }
}
echo $pesquisa;
//Conectando
  require("conectar.php");
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
  
  //$listaAlunos = "SELECT codigoAluno,nomeAluno FROM ALUNO WHERE statusAluno!='inativo';";
  //$listaCursos = "SELECT codigoCurso,nomeCurso,dataInicio FROM CURSO WHERE statusCurso='em aberto';";  
  
  $matriculas = mysql_query($pesquisa);
  //$curso = mysql_query($listaCursos);

  require("menu.php");
  echo 
  '<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">MATRICULAS ENCONTRADAS</div>
    <div class="panel-body">	
    <table class="table table-striped" cellspacing="0">
    <thead>
      <tr>
        <th width="5%">Matrícula</th>
        <th width="40%">Nome do Aluno</th>
		<th width="25%">Curso</th>
		<th width="12%">Data</th>
		<th width="10%">Status</th>
        <th width="5%" colspan="2">Ação</th>
      </tr>
    </thead>
  ';
  while($array = mysql_fetch_array($matriculas))
  {
	echo '<tr>';	   
	echo '<td>'.$array['codigoMatricula'].'</td>';
	echo '<td>'.$array['nomeAluno'].'</td>';
	echo '<td>'.$array['nomeCurso'].'</td>';
	echo '<td>'.$array['dataMatricula'].'</td>';
	echo '<td>'.$array['statusMatricula'].'</td>';
	echo '<td>
	      <form method="get" action="alterarAluno.php">
	        <button name="btAlterar" class="btn btn-xs btn-default" type="submit" value='.$array['codigoMatricula'].'><img src="images\info.png"></button>
		  </form>
		  </td>
		  <td>
		  <form method="get" action="excluirAluno.php">
		    <button name="btExcluir" class="btn btn-xs btn-default" type="submit" value='.$array['codigoMatricula'].' onclick=""><img src="images\delete.png"></button>
			</form>
	</td>';
	echo '</tr>';  
  }
  echo '</table></div></div></div>';
//Encerrando a conexão com o Servidor  
  mysql_close($conexao);
	
?>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>