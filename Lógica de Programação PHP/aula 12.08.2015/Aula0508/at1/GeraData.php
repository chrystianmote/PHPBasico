<?php

if (!empty($_POST)) {
    if (isset($_POST)) {
        $dia = $_POST["txtDia"];
        $mes = $_POST["txtMes"];
        $ano = $_POST["txtAno"];
        $vetMeses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho",
            "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

        if (($dia > 31) || ($ano < 1000)) {
            echo "Data Inválida";
        } else {
            switch ($mes) {
                case 01:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 02:

                    if ($dia < 29) {
                        echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    } else if ($dia == 29) {
                        if (($ano % 4 == 0) && ($ano % 100 == 0) && ($ano % 400 == 0)) {
                            echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                        } else {
                            echo "Data Inválida";
                        }
                    } else {
                        echo "Data Inválida";
                    }
                    break;
                case 03:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 04:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 05:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 06:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 07:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 08:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 09:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 10:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 11:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                case 12:
                    echo $dia . " de " . $vetMeses[$mes - 1] . " de " . $ano;
                    break;
                default:
                    echo "Data Inválida";
                    break;
            }
        }
    } else {
        echo "Digite os campos!";
    }
} else {
    echo "Digite os campos!";
}





