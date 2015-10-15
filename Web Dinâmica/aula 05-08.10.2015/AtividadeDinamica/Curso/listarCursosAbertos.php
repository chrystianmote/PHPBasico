<?php
include '../BancoDados/DBCurso.php';
?>
<html>
    <head>
        <title>Bem vindo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js" ></script>

        <style type="text/css">

            *{
                font-size: 100%;
            }

        </style>


    </head>


    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $cursos = ExibirListaCursosAbertos();
                    ?>
                    <table cellspacing="0" class="table table-striped">
                        <tr style="color:#FFF; background-color: #5bc0de;" >
                            <th>Código</th>
                            <th>Nome do Curso</th>
                            <th>Data de Início</th>
                            <th>Data de Termino</th>
                            <th>Status</th>
                            <th><center>Ação</center></th>
                        </tr>                      
                        <?php
                        if (count($cursos) != 0) {
                            for ($i = 0; $i < count($cursos); $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < 5; $j++) {

                                    if ($j == 2 || $j == 3) {
                                        echo "<td>";
                                        print_r(RetornarData($cursos[$i][$j]));
                                        echo "</td>";
                                    } else {
                                        echo "<td>";
                                        print_r($cursos[$i][$j]);
                                        echo "</td>";
                                    }
                                }

                                echo "<td><center>";
                                echo " <button class='btn btn-info' onclick=\"location.href='../Matricula/cadastroMatricula.php'\"
                                    type='button'>Matricule-se</button></center><b></td></tr>";
                            }
                            ?> 
                            <tr>
                                <td colspan="10">
                            <center>
                                <button class="btn btn-primary btn-lg" onclick="location.href = 'http://localhost/chrystian/AtividadeDinamica/index.html'" > Voltar</button>
                            </center>
                            </td>                            
                            </tr>  
                        </table>
                        <?php
                    } else {
                        ?>
                        <script>
                            $(document).ready(function () {
                                $("#titulo").append("Listagem de Cursos");
                                $("#texto").append("Não Há Cursos no Sistema!");
                                $("#texto").css("margin", 0);
                                $("#message").modal();
                            });</script>


                        <div class="modal fade" id="message" role="dialog">
                            <div class="modal-dialog"> 
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 id="titulo" class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id="texto"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="location.href = 'cadastroCurso.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </body>
    </html>
    <?php
}

function RetornarData($data) {
    $datacortada = explode('-', $data);
    $dataFormatada = $datacortada[2] . '/' . $datacortada[1] . '/' . $datacortada[0];
    return $dataFormatada;
}
