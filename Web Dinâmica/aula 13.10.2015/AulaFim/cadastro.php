<?php
 
include "config.php";
 
if($acao==usuario){
 
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$nivel = $_POST["nivel"];
 
 
$sql = mysql_query("INSERT INTO  tabela (usuario, senha, nivel) VALUES (UPPER('$usuario'), md5('$senha'), '$nivel')", $conexao) or die("Erro: " . mysql_error()); // faço a inserção no banco de dados.
 
if(($sql) > 0){
echo "Cadastro do usuário completo.";
}
else{
echo "erro ao tentar cadastrar o usuário.";
}
}
?>