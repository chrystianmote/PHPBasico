<?php

function AbrirConnectionFidelidade() {
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

function MaiorIDFidelidade() {
    $conexao = AbrirConnectionFidelidade();

    $sql = "SELECT MAX(idFidelidade) ";
    $sql .= "FROM Fidelidade;";

    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $idProf = $array[0];
    }
    mysql_close($conexao);
    return $idProf;
}


function InserirFidelidade($dados) {

    $conexao = AbrirConnectionFidelidade();

    $sql = "INSERT INTO Fidelidade VALUES ";
    $sql .= "({0},{1},'{2}','{3}','{4}',{5},'{6}','{7}');";

    for ($i = 0; $i < 8; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}
function ConsultarUmFiel($id) {
    $conexao = AbrirConnectionFidelidade();

    $sql = "SELECT f.* FROM Fidelidade f WHERE f.idFidelidade = " . $id . ";";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $aluno = array($array[0], $array[1], $array[2], $array[3],
            $array[4], $array[5], $array[6], $array[7]);
    }
    mysql_close($conexao);
    return $aluno;
}
function AlterarFidelidade($dados) {
    $conexao = AbrirConnectionFidelidade();

    $sql = "UPDATE Fidelidade SET ";
    $sql .= "Cliente = '{1}',";
    $sql .= "DataCadastro = '{2}',";
    $sql .= "Email = '{3}',";
    $sql .= "Senha = '{4}' ";
    $sql .= "WHERE idFidelidade = {0};";

    for ($i = 0; $i < 5; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}