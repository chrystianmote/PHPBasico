<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrando Aluno</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  #codAluno{
	width:137px;  
  }
  td{
	padding-right:20px;  
  }
</style>
<script> 
  function enviar()
  {
	 $("#frmCadAluno").submit(); 
  };
</script>
<?php 
session_start(); 
if((!isset ($_SESSION['login']) == true) 
    and (!isset ($_SESSION['senha']) == true)) 
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
//Gerando o código para cadastro
  $ultimo = "SELECT MAX(codigoAluno) FROM ALUNO;"; 
  $ultimoAluno = mysql_query($ultimo);  
  $array = mysql_fetch_array($ultimoAluno);
  $ultimo = $array[0]+1; 
  require("menu.php");
?>
<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading"><h3><img src="images/users.png" width="42" height="42">CADASTRAR ALUNOS</h3></div>
    <div class="panel-body">	
    <form role="form" id="frmCadAluno" name="frmCadAluno" method="post" action="cadastroAluno.php">
    <table>
    <tr>
      <td>
      <div class="form-group">
        <label for="codAluno">Código:</label>
        <input type="text" class="form-control" name="codAluno" id="codAluno" readonly="readonly" value="<?php echo $ultimo; ?>"/>
      </div>
      </td>
      <td>
      <div class="form-group">
        <label for="nmAluno">Nome:</label>
        <input type="text" class="form-control" name="nmAluno" id="nmAluno" size="50" />
      </div>
      </td>
      </tr>
      <tr>
      <td colspan="2">
       <div class="form-group">
        <label for="edAluno">Logradouro:</label>
        <input name="edAluno" class="form-control" type="text" id="edAluno" size="70" />
        </div>
      </td>
      </tr>
      <tr>
      <td>
        <div class="form-group">
        <label for="etEstado">Estado:</label> 
        <select name="etEstado" class="form-control" id="etEstado">
        <option value="ES">Espírito Sando</option>
        <option value="MG">Minas Gerais</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="SP">São Paulo</option>
        </select>
        </div>
      </td>
      <td>
        <div class="form-group">
        <label for="cdAluno">Cidade:</label>
        <input name="cdAluno" class="form-control" type="text" id="cdAluno" size="30" />
        </div>
      </td>
      </tr>
      
      <tr>
      <td colspan="2">
      <table>
      <tr><td>
      <div class="form-group">
        <label for="cpCep">CEP:</label>
        <input name="cpCep" class="form-control" type="text" id="cpCep" size="7" />
      </div>
      </td>
      <td>
      <div class="form-group">
        <label for="tlTelefone">Telefone:</label>
        <input type="text" class="form-control" name="tlTelefone" id="tlTelefone" size="11" />
        </div>
      </td>
      <td>
      <div class="form-group">
        <label for="dtNascimento">Nascimento:</label>
        <input type="text" class="form-control" name="dtNascimento" id="dtNascimento" placeholder="yyyy-MM-dd" size="11" />
        </div>
      </td>
      </tr>
      </table>
      </td>
      </tr>
      <tr>
      <td>
      <div class="form-group">
        <label for="stStatus">Status:</label>
        <select name="stStatus" class="form-control" id="stStatus">
        <option value="Aprovado">Aprovado</option>
        <option value="Reprovado">Reprovado</option>
        <option value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option>
        </select>
        </div>
      </td>
      <td>
      <div class="form-group">
        <label for="rpResponsavel">Responsável: </label> 
        <input type="text" class="form-control" name="rpResponsavel" id="rpResponsavel" size="50" />
        </div>
      </td>
      </tr>
      
      <tr>
      <th colspan="2">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mdConfirma"><img src="images\accept.png">Cadastrar</button>
          <button name="btCancelar" class="btn btn-sm btn-warning" 
        type="button" value="c"><img src="images\delete.png">Cancelar</button>
      </th>
      </tr>
      </table>


<!-- Modal -->
  <div class="modal fade" id="mdConfirma" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mensagem</h4>
        </div>
        <div class="modal-body">
          <p>Confirma ação de salvar os dados digitados?</p>
        </div>
        <div class="modal-footer">
          <button id="btEnviar" type="submit" class="btn btn-success" data-dismiss="modal" onclick="enviar()">Sim</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Não</button>
        </div>
      </div>      
    </div>
  </div>      
      
</form>
</div>
</div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>
