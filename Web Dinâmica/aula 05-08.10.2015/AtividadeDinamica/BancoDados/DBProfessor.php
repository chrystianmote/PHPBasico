<?php

function AbrirConnectionProfessor() {
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

function MaiorIDProfessor() {
    $conexao = AbrirConnectionProfessor();

    $sql = "SELECT MAX(codigoProfessor) ";
    $sql .= "FROM Professor;";

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

function InserirProfessor($dados) {

    $conexao = AbrirConnectionProfessor();

    $sql = "INSERT INTO Professor VALUES ";
    $sql .= "({0},'{1}','{2}','{3}','{4}','{5}','{6}','{7}');";

    for ($i = 0; $i < 8; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ExibirListaProfessores() {
    $conexao = AbrirConnectionProfessor();

    $sql = "SELECT codigoProfessor, nomeProfessor FROM Professor ;";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $professores = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $professores[$i] = array($array[0], $array[1]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $professores;
}

function ConsultarProfessores() {
    $conexao = AbrirConnectionProfessor();

    $sql = "SELECT * FROM Professor ;";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $professores = array();
        $i = 0;
        while ($array = mysql_fetch_array($dados)) {
            $professores[$i] = array($array[0], $array[1], $array[2], $array[3],
                $array[4], $array[5], $array[6], $array[7]);
            $i++;
        }
    }
    mysql_close($conexao);
    return $professores;
}


function ConsultarNomeProfessor($id) {
    $conexao = AbrirConnectionProfessor();

    $sql = "SELECT p.nomeProfessor FROM Professor p WHERE p.codigoProfessor = " . $id . ";";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $professor = $array[0];
    }
    mysql_close($conexao);
    return $professor;
}


function ConsultarUmProfessor($id) {
    $conexao = AbrirConnectionProfessor();

    $sql = "SELECT p.* FROM Professor p WHERE p.codigoProfessor = " . $id . ";";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $array = mysql_fetch_array($dados);
        $professor = array($array[0], $array[1], $array[2], $array[3],
            $array[4], $array[5], $array[6], $array[7]);
    }
    mysql_close($conexao);
    return $professor;
}

function AlterarProfessor($dados) {
    $conexao = AbrirConnectionProfessor();

    $sql = "UPDATE Professor p SET ";
    $sql .= "p.nomeProfessor = '{1}',";
    $sql .= "p.endProfessor = '{2}',";
    $sql .= "p.cidProfessor = '{3}',";
    $sql .= "p.estProfessor = '{4}',";
    $sql .= "p.cepProfessor = '{5}',";
    $sql .= "p.telProfessor = '{6}',";
    $sql .= "p.emailProfessor = '{7}' ";
    $sql .= "WHERE p.codigoProfessor = {0};";

    for ($i = 0; $i < 8; $i++) {
        $sql = str_replace("{" . $i . "}", $dados[$i], $sql);
    }

    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ExcluirProfessor($id) {
    $conexao = AbrirConnectionProfessor();

    $sql = "DELETE FROM Professor WHERE codigoProfessor = " . $id . ";";
    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ExcluirCursoProfessor($id) {
    $conexao = AbrirConnectionProfessor();

    $sql = "DELETE FROM Curso WHERE codigoProfessor = " . $id . ";";
    $resultado = mysql_query($sql);
    mysql_close($conexao);

    return $resultado;
}

function ExcluirMatriculaCursoProfessor($id) {
    $conexao = AbrirConnectionProfessor();

    $sql = "SELECT DISTINCT c.codigoCurso FROM Curso c, Matricula m, Professsor p WHERE (p.codigoProfessor = " . $id . ") ";
    $sql .= "AND (p.codigoProfessor = c.codigoProfessor) ";
    $sql .= "AND (m.codigocurso = c.codigoCurso);";
    $dados = mysql_query($sql);
    if ($dados === FALSE) {
        die("Erro na Consulta! " . mysql_error());
    } else {
        $i = 0;
        $idsCurso = array();
        while ($array = mysql_fetch_array($dados)) {
            $idsCurso[$i] = $array[0];
            $i++;
        }
    }
    if (count($idsCurso) > 0) {

        $sql = "DELETE FROM Matricula WHERE codigoCurso IN(";
        for ($i = 0; $i < count($idsCurso); $i++) {
            $sql .= $idsCurso[$i] . ",";
        }
        $sql .= ");";
        $sql = str_replace(",)", ")", $sql);
    }
    $resultado = mysql_query($sql);
    mysql_close($conexao);
    return $resultado;
}
