<?php
include '../BancoDados/DBAluno.php';
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
                    $aluno = ConsultarAlunos();
                    ?>
                    <table cellspacing="0" class="table table-striped">
                        <tr style="color:#FFF; background-color: #5bc0de;" >
                            <th>Código</th>
                            <th>Nome do Aluno</th>
                            <th>Endereço</th>
                            <th>Cidade</th>
                            <th>UF</th>
                            <th>CEP</th>
                            <th>Telefone</th>
                            <th>Data Nasc</th>
                            <th>Responsável</th>
                            <th>Status</th>
                        </tr>                      
                        <?php
                        if (count($aluno) != 0) {
                            for ($i = 0; $i < count($aluno); $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < count($aluno[0]); $j++) {
                                    if ($j != 7) {
                                        echo "<td>";
                                        print_r($aluno[$i][$j]);
                                        echo "</td>";
                                    }
                                    else{
                                        echo "<td>";
                                        print_r(RetornarData($aluno[$i][$j]));
                                        echo "</td>";
                                    }
                                }
                                echo "</tr>";
                            }
                            ?> 
                            <tr>
                                <td colspan="10">
                            <center>
                                <button class="btn btn-info" onclick="location.href = '../index.html'" > Voltar</button>
                            </center>
                            </td>                            
                            </tr>  
                        </table>
                        <?php
                    } else {
                        ?>
                        <script>
                            $(document).ready(function () {
                                $("#titulo").append("Listagem de Aluno");
                                $("#texto").append("Não Há Alunos no Sistema!");
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
                                        <button type="button" onclick="location.href = 'cadastroAluno.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
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
