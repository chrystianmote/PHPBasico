<?php
// session_start inicia a sessão 
session_start(); 
// as variáveis login e senha recebem os dados digitados na página anterior 
$login = $_POST['login']; 
$senha = md5($_POST['senha']); 



// Conectando ao banco. 
  require("conectar.php");
//Abrindo o Banco de Dados dbEscola
  mysql_select_db('dbescola');
// A vriavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios 
$sql = "SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'";
$result = mysql_query($sql); 
echo $sql;
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina listarAluno.php ou retornara para a pagina do formulário inicial para que se possa tentar novamente realizar o login */ 
if(mysql_num_rows($result) > 0 ) 
{ $_SESSION['login'] = $login; 
  $_SESSION['senha'] = $senha; 
  header('location:listarAluno.php'); 
} else{ unset ($_SESSION['login']); 
        unset ($_SESSION['senha']); 
//		header('location:index.php'); 
} 

?>