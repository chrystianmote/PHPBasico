<?php

// session_start inicia a sessão session_start(); 
// as variáveis login e senha recebem os dados digitados na página anterior 
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados. 
$con = mysql_connect("127.0.0.1", "root", "") or die("Sem conexão com o servidor");
$select = mysql_select_db("usuteste") or die("Sem acesso ao DB, Entre em contato com o Administrador");
// A vriavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios 
$sql = "SELECT * FROM Usuario WHERE (login = '{0}' AND senha = '{1}');";

$sql = str_replace("{0}", $login, $sql);
$sql = str_replace("{1}", $senha, $sql);

$result = mysql_query($sql);
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, 
 * se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou 
 * retornara para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if (mysql_num_rows($result) > 0) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    var_dump($_SESSION['login']);
    var_dump($_SESSION['senha']);

    //header('location:site.php');
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    echo $sql;
    header('location:index.php');
}
?>
