<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterando</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
  $codAluno = $_GET['btAlterar'];
//Conectando
  require("conectar.php");
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
  
  $comando = "SELECT * FROM ALUNO WHERE codigoAluno='$codAluno'";

  $aluno = mysql_query($comando);

  require("menu.php");
  echo 
  '<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">ALTERAR ALUNO</div>
    <div class="panel-body">
	<form method="post" action="updateAluno.php">
	<table class="table">';
    $array = mysql_fetch_array($aluno);  
	echo '<tr><td width="100px">
	        <label for="codAluno">Código: </label>
		  </td><td>
	        <input type="text" name="codAluno" id="codAluno" 
	        readonly="readonly" value="'.$array['codigoAluno'].'" 
			size="3">
		  </td></tr>';
	echo '<tr><td>
	        <label for="nmAluno">Aluno: </label>
		  </td><td>
	        <input type="text" name="nmAluno" id="nmAluno" 
	        value="'.$array['nomeAluno'].'"
			size="40">
		  </td></tr>';
	echo '<tr><td>
	        <label for="edAluno">Logradouro: </label>
		  </td><td>
	        <input type="text" name="edAluno" id="edAluno" 
	        value="'.$array['endAluno'].'"
			size="60">
		  </td></tr>';
	echo '<tr><td>
	        <label for="cdAluno">Cidade: </label>
		  </td><td>
	        <input type="text" name="cdAluno" id="cdAluno" 
	        value="'.$array['cidAluno'].'"
			size="30">
		  </td></tr>';	  
	echo '<tr><td>
	        <label for="etEstado">Estado: </label>
		  </td><td> 
			<select name="etEstado">
			  <option>'.$array['estAluno'].'</option>
			</select>
		  </td></tr>';	  
	echo '<tr><td>
	        <label for="cpAluno">CEP: </label>
		  </td><td>
	        <input type="text" name="cpAluno" id="cpAluno" 
	        value="'.$array['cepAluno'].'"
			size="10">
		  </td></tr>';
	echo '<tr><td>
	        <label for="tlAluno">Telefone: </label>
		  </td><td>
	        <input type="text" name="tlAluno" id="tlAluno" 
	        value="'.$array['telAluno'].'"
			size="10">
		  </td></tr>';
	echo '<tr><td>
	        <label for="dnAluno">Nascimento: </label>
		  </td><td>
	        <input type="text" name="dnAluno" id="dnAluno" 
	        value="'.$array['nascimentoAluno'].'"
			size="10">
		  </td></tr>';
	echo '<tr><td>
	        <label for="rpAluno">Responsável: </label>
		  </td><td>
	        <input type="text" name="rpAluno" id="rpAluno" 
	        value="'.$array['responsavelAluno'].'"
			size="30">
		  </td></tr>';
	echo '<tr><td>
	        <label for="stAluno">Status: </label>
		  </td><td> 
			<select name="stAluno">
			  <option>'.$array['statusAluno'].'</option>
			</select>
		  </td></tr>';		  	  	 	  
  echo '</table>
        <button name="btAlterar" class="btn btn-sm btn-info" 
        type="submit" value="a">Alterar</button>
        <button name="btCancelar" class="btn btn-sm btn-warning" 
        type="button" value="c">Cancelar</button>			
  </form></div></div></div>';
 
	        
//Encerrando a conexão com o Servidor  
  mysql_close($conexao);
	
?>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>