<?php

function AbrirConnectionMenu() {
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

function ConsultarMenusPorCategoria($cat) {
    $conexao = AbrirConnectionMenu();

    $sql = "SELECT idMenu,Nome,Preco,Tempo,Pontos FROM Menu ";
    $sql.= "WHERE Categoria = '".$cat ."';";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $menus = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $menus[$i] = array($array[0], $array[1], $array[2], $array[3], $array[4]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $menus;
}

function ConsultarMenusPorSelecao($cat) {
    $conexao = AbrirConnectionMenu();

    $sql = "SELECT Nome,Preco,Tempo,Pontos FROM Menu ";
    $sql.= "WHERE Categoria = '".$cat ."';";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $menus = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $menus[$i] = array($array[0], $array[1], $array[2], $array[3], $array[4]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $menus;
}
