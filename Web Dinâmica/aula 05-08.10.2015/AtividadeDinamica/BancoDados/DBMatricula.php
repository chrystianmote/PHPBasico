<?php

function AbrirConnectionMatricula() {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }

    return $conexao;
}

function InserirMatricula($dados) {
    $conexao = AbrirConnectionMatricula();

    $sql = "INSERT INTO Matricula VALUES ";
    $sql .= "({0},{1},{2},'{3}','{4}');";

    for ($i = 0; $i < 5; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ConsultarMatriculas() {
    $conexao = AbrirConnectionMatricula();

    $sql = "SELECT * FROM Matricula ;";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $matriculas[$i] = array($array[0], $array[1],
                $array[2], $array[3], $array[4]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $matriculas;
}

function ExibirListaMatriculas() {
    $conexao = AbrirConnectionMatricula();

    $sql = "SELECT m.codigoMatricula, a.nomeAluno , ";
    $sql .= "c.nomeCurso , m.dataMatricula, m.statusMatricula ";
    $sql .= "FROM Matricula m, Aluno a, Curso c ";
    $sql .= "WHERE (m.codigoAluno = a.codigoAluno) ";
    $sql .= "AND (m.codigoCurso = c.codigoCurso)  ";
    $sql .= "GROUP BY m.codigoMatricula; ";

    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $matriculas[$i] = array($array[0], $array[1],
                $array[2], $array[3], $array[4]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $matriculas;
}

function AlterarMatricula($dados) {
    $conexao = AbrirConnectionMatricula();

    $sql = "UPDATE Matricula SET ";
    $sql .= "statusMatricula = '{1}' ";
    $sql .= "WHERE codigoMatricula = {0};";

    $sql = str_replace("{0}", $dados[0], $sql);
    $sql = str_replace("{1}", $dados[1], $sql);


    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function MaiorIDMatricula() {
    $conexao = AbrirConnectionMatricula();

    $sql = "SELECT MAX(codigoMatricula) ";
    $sql .= "FROM Matricula;";

    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $idMat = array($array[0]);
    }
    mysql_close($conexao);
    return $idMat;
}

function ConsultarUmaMatricula($id) {
    $conexao = AbrirConnectionMatricula();

    $sql = "SELECT a.nomeAluno, c.nomeCurso, ";
    $sql .= "m.dataMatricula, m.statusMatricula ";
    $sql .= "FROM Matricula m, Aluno a, Curso c ";
    $sql .= "WHERE (m.codigoMatricula = {0}) ";
    $sql .= "AND (m.codigoAluno = a.codigoAluno)  ";
    $sql .= "AND (m.codigoCurso = c.codigoCurso);";

    $sql = str_replace("{0}", $id, $sql);
    
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $matricula = array($array[0], $array[1],
            $array[2], $array[3]);
    }
    mysql_close($conexao);
    return $matricula;
}
