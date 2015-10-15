<?php
function AbrirConnectionPedido() {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbgourmet") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }

    return $conexao;
}

