<?php

function ordenaArray($vet) {
    if (is_array($vet)) {
        $trocou = TRUE;
        while ($trocou == TRUE) {
            $trocou = FALSE;
            for ($i = 1; $i < count($vet); $i++) {
                if ($vet[$i] < $vet[$i - 1]) {
                    $aux = $vet[$i];
                    $vet[$i] = $vet[$i - 1];
                    $vet[$i - 1] = $aux;
                    $trocou = TRUE;
                }
            }
        }
        return $vet;
    } else {
        return FALSE;
    }
}

function ordenaString(&$string) {
    if (is_string($string)) {
        $trocou = TRUE;
        while ($trocou) {
            $trocou = FALSE;
            for ($i = 1; $i < strlen($string); $i++) {
                if ($string[$i] < $string[$i - 1]) {
                    $aux = $string[$i];
                    $string[$i] = $string[$i - 1];
                    $string[$i - 1] = $aux;
                    $trocou = TRUE;
                }
            }
        }
    } else {
        return FALSE;
    }
}

function ordenaString2(&$string) {
    if (is_string($string)) {
        //transforma a String em array;
        $arrTemp = str_split($string);
        $arrTemp = ordenaArray($arrTemp);
        $string = implode("", $arrTemp);
    } else {
        return FALSE;
    }
}
