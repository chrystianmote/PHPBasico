<?php

function InserirAluno($dados) {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }

    $sql = "INSERT INTO Aluno VALUES ";
    $sql .= "({0},'{1}','{2}','{3}','{4}','{5}','{6}','{7}','{8}','{9}');";

    for ($i = 0; $i < 10; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ConsultarAlunos() {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }
    $sql = "SELECT * FROM Aluno ;";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $alunos = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $alunos[$i] = array($array[0], $array[1], $array[2], $array[3],
                $array[4], $array[5], $array[6], $array[7], $array[8], $array[9]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $alunos;
}


function ConsultarUmAluno($id)
{
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }
    $sql = "SELECT a.* FROM Aluno a WHERE a.codigoAluno = ". $id.";";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $alunos = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $alunos[$i] = array($array[0], $array[1], $array[2], $array[3],
                $array[4], $array[5], $array[6], $array[7], $array[8], $array[9]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $alunos;
}



function AlterarAluno($dados) {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }
    $sql = "UPDATE Aluno a SET ";
    $sql .= "a.nomeAluno = '{1}',";
    $sql .= "a.endAluno = '{2}',";
    $sql .= "a.cidAluno = '{3}',";
    $sql .= "a.estAluno = '{4}',";
    $sql .= "a.cepAluno = '{5}',";
    $sql .= "a.telAluno = '{6}',";
    $sql .= "a.nascimentoAluno = '{7}',";
    $sql .= "a.responsavelAluno = '{8}',";
    $sql .= "a.statusAluno = '{9}' ";
    $sql .= "WHERE a.codigoAluno = {0};";

    for ($i = 0; $i < 10; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ExcluirAluno($id) {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }

    $sql = "DELETE FROM Aluno WHERE codigoAluno = " . $id .";";
    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ExcluirMatriculaAluno($id) {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }

    $sql = "DELETE FROM Matricula WHERE codigoAluno = " . $id .";";
    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}


function ConsultarCursos() {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }
    $sql = "SELECT * FROM Curso ;";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $cursos = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $cursos[$i] = array($array[0], $array[1], $array[2], $array[3],
                $array[4], $array[5]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $cursos;
}


function InserirMatricula($dados) {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }

    $sql = "INSERT INTO Matricula VALUES ";
    $sql .= "({0},{1},{2},'{3}','{4}');";

    for ($i = 0; $i < 5; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}


function ConsultarCursosAbertos() {
    $conexao = mysql_connect("localhost", "root", "");
    if (!$conexao) {
        die("Não Houve Conexão com o servidor! " . mysql_error());
    }
    /* Define o tipo de caracter recebido */
    mysql_set_charset("utf8", $conexao);
    if (mysql_select_db("dbescola") === FALSE) {
        die("Não Houve Conexão com o BD! " . mysql_error());
    }
    $sql = "SELECT codigoCurso, nomeCurso FROM Curso WHERE statusCurso = 'Em Aberto';";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $cursos = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $cursos[$i] = array($array[0], $array[1]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $cursos;
}