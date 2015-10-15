<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cunsultando Matricula</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="images/backgroundEscolar3.jpg">
<?php
//Conectando
  require("conectar.php");
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
  
  $listaAlunos = "SELECT codigoAluno,nomeAluno FROM ALUNO WHERE statusAluno!='inativo';";
  $listaCursos = "SELECT DISTINCT codigoCurso,nomeCurso,dataInicio FROM CURSO;";  
  
  $aluno = mysql_query($listaAlunos);
  $curso = mysql_query($listaCursos);
  
  //Gerando o código para cadastro
  //$ultimo = "SELECT MAX(codigoMatricula) FROM MATRICULA;"; 
  //$ultimaMatricula = mysql_query($ultimo);  
  //$array = mysql_fetch_array($ultimaMatricula);
  //$ultimo = $array[0]+1;  
  require("menu.php");
  echo 
  '<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading"><img src="images/sign-up48.png">CONSULTA MATRICULA DE ALUNOS</div>
    <div class="panel-body">
	<form method="post" action="resConsultaMatricula.php">
	<table class="table">';
	echo '<tr><td width="100px">
	        <label for="codMatricula">Código: </label>
		  </td><td>
	        <input type="text" name="codMatricula" id="codMatricula"
			size="4" value="">
		  </td></tr>';
		  echo '<tr><td>
	        <label for="codAluno">Aluno: </label>
		  </td><td> 
		  <select name="codAluno">';
		  echo '<option value="">&nbsp;</option>';
		  //Listando os Alunos
          while($array = mysql_fetch_array($aluno))
	      {  
		     echo '<option value="'.$array['codigoAluno'].'">'.$array['nomeAluno'].'</option>';			
	      }		  	  	 	  
          echo '</select>';
		  //Listando os Cursos
		  echo '<tr><td>
	        <label for="codCurso">Curso: </label>
		  </td><td> 
		  <select name="codCurso">';
		  echo '<option value="">&nbsp;</option>';
          while($array = mysql_fetch_array($curso))
	      {  
		     echo '<option value="'.$array['codigoCurso'].'">'.$array['nomeCurso'].'</option>';			
	      }		  	  	 	  
          echo '</select>';
		  echo '</td></tr> 
		  <tr><td><strong>Data: </strong></td><td>
			<input type="date" size="7" name="dtInicial">
			<input type="date" size="7" name="dtFinal">
		  </td></tr>
		  <tr><td><strong>Status: </strong></td><td>
		  	<select name="stStatus">
			  <option value="">&nbsp;</option>
			  <option value="Fechada">Fechada</option>
			  <option value="Aberta">Aberta</option>
			  <option value="Cancelada">Cancelada</option>
			</select>
		  </td></tr>	  
		  </table>
          <button name="btConsultar" class="btn btn-sm btn-warning" 
        type="submit"><img src="images/search.png" width="24" height="24">Consultar</button>		
  </form></div></div></div>';
	        
//Encerrando a conexão com o Servidor  
  mysql_close($conexao);
	
?>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>