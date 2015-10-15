<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Efetuando Matrícula</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  #codMatricula,#stStatus,#dtMatricula{
	width:110px;  
  }
  #codAluno,#codCurso{
	width:310px;   
  }
</style>
</head>
<body>
<?php
//Conectando
  require("conectar.php");
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
  
  $listaAlunos = "SELECT codigoAluno,nomeAluno FROM ALUNO WHERE statusAluno!='inativo';";
  $listaCursos = "SELECT codigoCurso,nomeCurso,dataInicio FROM CURSO WHERE statusCurso='em aberto';";  
  
  $aluno = mysql_query($listaAlunos);
  $curso = mysql_query($listaCursos);
  
  //Gerando o código para cadastro
  $ultimo = "SELECT MAX(codigoMatricula) FROM MATRICULA;"; 
  $ultimaMatricula = mysql_query($ultimo);  
  $array = mysql_fetch_array($ultimaMatricula);
  $ultimo = $array[0]+1;  
  require("menu.php");
  echo 
  '<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading"><h3><img src="images/sign-up48.png">MATRICULANDO ALUNO</h3></div>
    <div class="panel-body">	
	<form method="post" action="efetuarMatricula.php">
	<table class="table">';
	echo '<tr><td width="100px">
	        <label for="codMatricula">Código: </label>
		  </td><td>
	        <input type="text" class="form-control" name="codMatricula" id="codMatricula" size="4" readonly="readonly" value="'.$ultimo.'">
		  </td></tr>';
		  echo '<tr><td>
	        <label for="codAluno">Aluno: </label>
		  </td><td> 
		  <select name="codAluno" id="codAluno" class="form-control">';
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
		  <select name="codCurso" id="codCurso" class="form-control">';
          while($array = mysql_fetch_array($curso))
	      {  
		     echo '<option value="'.$array['codigoCurso'].'">'.$array['nomeCurso'].'</option>';			
	      }		  	  	 	  
          echo '</select>';
		  echo '</td></tr> 
		  <tr><td><strong>Data: </strong></td><td>
			<input type="text" name="dtMatricula" id="dtMatricula" class="form-control" readonly="readonly" size="7" value="'.date("Y-m-d").'">
		  </td></tr>
		  <tr><td><strong>Status: </strong></td><td>
		  	<select name="stStatus" id="stStatus" class="form-control">
			  <option value="Fechada">Fechada</option>
			  <option value="Aberta">Aberta</option>
			  <option value="Fechada">Cancelada</option>
			</select>
		  </td></tr>	  
		  </table>
          <button name="btCadastrar" class="btn btn-sm btn-info" 
        type="submit" value="a"><img src="images\accept.png">Cadastrar</button>
          <button name="btCancelar" class="btn btn-sm btn-warning" 
        type="button" value="c"><img src="images\delete.png">Cancelar</button>			
  </form></div></div></div>';
	        
//Encerrando a conexão com o Servidor  
  mysql_close($conexao);
	
?>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>