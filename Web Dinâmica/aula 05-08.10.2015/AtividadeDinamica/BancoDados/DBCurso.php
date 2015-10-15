<?php

function AbrirConnectionCurso() {
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



function MaiorIDCurso() {
    $conexao = AbrirConnectionCurso();

    $sql = "SELECT MAX(codigoCurso) ";
    $sql .= "FROM Curso;";

    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $idCurso = array($array[0]);
    }
    mysql_close($conexao);
    return $idCurso;
}

function InserirCurso($dados) {

    $conexao = AbrirConnectionCurso();

    $sql = "INSERT INTO Curso VALUES ";
    $sql .= "({0},'{1}','{2}','{3}','{4}',{5});";

    for ($i = 0; $i < 6; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function AlterarCurso($dados) {
    $conexao = AbrirConnectionCurso();

    $sql = "UPDATE Curso c SET ";
    $sql .= "c.nomeCurso = '{1}',";
    $sql .= "c.dataInicio = '{2}',";
    $sql .= "c.dataTermino = '{3}',";
    $sql .= "c.statusCurso = '{4}',";
    $sql .= "c.codigoProfessor = {5} ";
    $sql .= "WHERE c.codigoCurso = {0};";

    for ($i = 0; $i < 6; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}


function ExcluirCurso($id) {
    $conexao = AbrirConnectionCurso();

    $sql = "DELETE FROM Curso WHERE codigoCurso = " . $id . ";";
    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ExcluirMatriculaCurso($id) {
    $conexao = AbrirConnectionCurso();

    $sql = "DELETE FROM Matricula WHERE codigoCurso = " . $id . ";";
    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}


function ConsultarUmCurso($id) {
    $conexao = AbrirConnectionCurso();

    $sql = "SELECT c.* FROM Curso c WHERE c.codigoCurso = " . $id . ";";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $curso = array($array[0], $array[1], $array[2], $array[3],
            $array[4], $array[5]);
    }
    mysql_close($conexao);
    return $curso;
}

function ConsultarCursos() {
    $conexao = AbrirConnectionCurso();

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

function ConsultarCursosAbertos() {
    $conexao = AbrirConnectionCurso();

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

function ExibirListaCursosAbertos() {
    $conexao = AbrirConnectionCurso();

    $sql = "SELECT * FROM Curso WHERE statusCurso = 'Em Aberto';";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $cursos = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $cursos[$i] = array($array[0], $array[1],$array[2], 
                $array[3],$array[4], $array[5]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $cursos;
}