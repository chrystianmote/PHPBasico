<?php

//função sem retorno
//não retorna (devolve) nenhum valor
//apenas executa uma tarefa
function cuboSemRetorno($valor) {
    $resultado = $valor * $valor * $valor;
    echo "<h2>Resultado " . $resultado . "</h2>";
}

//função com retorno
//devolve um resulvado para quem a chamou
//a chamada pode ser feita na atribuição de uma variável
//ou dentro de uma instrução de escrita, como o echo.
function cuboComRetorno($valor) {
    $resultado = $valor * $valor * $valor;
    return $resultado;
}

//função com parâmetro opcional
//pode ser usado um valor padrão qualquer
//ou um valor NULL.
//o valor utilizado substituirá o parâmetro dentro da função
function eleva($valor, $expoente = 2) {
    $resultado = 0;
    if ($expoente == 0) {
        $resultado = 1;
    } else {
        $negativo = false;
        if ($expoente < 0) {
            $negativo = true;
            $expoente *= -1;
        }

        $resultado = 1;
        while ($expoente > 0) {
            $resultado *= $valor;
            $expoente--;
        }

        if ($negativo) {
            $resultado = 1 / $resultado;
        }
    }
    return $resultado;
}

//função que modifica o valor do parâmetro
//utilizando "passagem por referência" 
//(que é diferente de "passagem por valor")
function inverteSinal(&$numero) {
    $numero *= -1;
}

//Exercício 1
/* Crie uma função data, com um parâmetro opcional.
  Por padrão, a função retorna a data atual no formato
  dd/mm/aaaa. Caso receba um parâmetro:
  – se for igual a “dd”, retorna apenas o dia;
  – se for igual a “mm”, retorna apenas o mês;
  – se for igual a “mês”, retorna apenas o mês por extenso;
  – se for igual a “aa”, retorna apenas o ano com dois dígitos;
  – se for igual a “aaaa”, retorna apenas o ano com 4 dígitos. */

/** *
 * @author Daniel <danieldeassis@gmail.com>
 * @param string $valor uma string que representa a parte de uma data, no padrão basileiro
 * @return mixed retorna a data ou parte dela, no padrão brasileiro, ou FALSE, caso o parâmetro seja inválido
 */
function data($valor = NULL) {
    if (!isset($valor)) {
        return date("d/m/Y");
    } else {
        $data = "";
        switch ($valor) {
            case "dd":
                $data.=date("d");
                break;
            case "mm":
                $data.=date("m");
                break;
            case "mês":
                $meses = array("janeiro", "fevereiro",
                    "março", "abril", "maio", "junho",
                    "julho", "agosto", "setembro", "outubro",
                    "novembro", "dezembro");
                //$meses[0]="janeiro";
                //$meses[1]="fevereiro";
                $data.= $meses[(date("m") - 1)];
                break;
            case "aa":
                $data.=date("y");
                break;
            case "aaaa":
                $data.=date("Y");
                break;
            default:
                return FALSE;
        }//final do switch

        return $data;
    }
}

/**
 * Exercício 2
 * Crie uma função media, que irá receber um array como
 * parâmetro, preenchido com números, e irá retornar a
 * média aritmética dos valores recebidos.
 * @param array $vet um array numérico
 * @return double a média dos números contidos em $vet
 */
function media($vet) {
    if (is_array($vet)) {
        $media = 0;
        foreach ($vet as $valor) {
            $media += $valor;
        }
        $media = $media / count($vet);
        return $media;
    } else {
        return FALSE;
    }
}
