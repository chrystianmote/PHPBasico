<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar Aluno</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<script language="javascript" type="text/javascript">
    var codExc;
    function dfCodExc(cod)
	{
		codExc=cod;
		
	}

	function confirmar(aluno) {
		return confirm('Confirma exclusão do(a) aluno(a): '+aluno+'?');
	};
	
	function enviar()
  {
	  alert(codExc);
	  var novaURL = 'http://localhost/AulaPHP/excluirAluno.php?'+codExc;
      $(window.document.location).attr('href',novaURL);
	 //$("#frmExcluir").submit(); 
  };
</script>
<?php 
session_start(); 
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) 
{ unset($_SESSION['login']); 
  unset($_SESSION['senha']); 
  header('location:index.php');
} 
  $logado = $_SESSION['login']; 
?>


</head>

<body>
  <?php
//Conectando
  require("conectar.php");
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
//Selecionando os dados dos alunos  
  $comando = 'SELECT * FROM ALUNO';
  $alunos = mysql_query($comando);
  
  require("menu.php");
  echo 
  '<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading"><img src="images/users.png" width="42" height="42">ALUNOS CADASTRADOS</div>
    <div class="panel-body">	
    <table class="table table-striped" cellspacing="0">
    <thead>
      <tr>
        <th width="5%">Código</th>
        <th width="85%">Nome do Aluno</th>
        <th width="10%" colspan="2">Ação</th>
      </tr>
    </thead>
  ';
  while($array = mysql_fetch_array($alunos))
  {
	echo '<tr>';	   
	echo '<td>'.$array['codigoAluno'].'</td>';
	echo '<td>'.$array['nomeAluno'].'</td>';
	echo '<td>
	      <form method="get" action="alterarAluno.php">
	        <button name="btAlterar" class="btn btn-xs btn-default" type="submit" value='.$array['codigoAluno'].'><img src="images\info.png">Alterar</button>
		  </form>
		  </td>
		  <td>
		  <form id="frmExcluir" method="get" action="excluirAluno.php">
		    <button name="btExcluir" class="btn btn-xs btn-default" data-toggle="modal" data-target="#mdExcluir" onclick="dfCodExc('.$array['codigoAluno'].')" type="button" value='.$array['codigoAluno'].'><img src="images\delete.png">Excluir</button>
			
<!-- Modal -->
  <div class="modal fade" id="mdExcluir" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mensagem</h4>
        </div>
        <div class="modal-body">
          <p>Confirma ação de exclusão dos dados digitados?</p>
        </div>
        <div class="modal-footer">
          <button id="btEnviar" type="submit" class="btn btn-success" data-dismiss="modal" onclick="enviar()">Sim</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Não</button>
        </div>
      </div>      
    </div>
  </div>			
			
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