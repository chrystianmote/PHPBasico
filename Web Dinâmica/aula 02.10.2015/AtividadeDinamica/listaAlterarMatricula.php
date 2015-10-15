<?php
include './BancoDados/DBUtil.php';
?>
<html>
    <head>
        <title>Alteração</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function EnviarCodigo(id)
            {
                $("#btnApagar").click(
                        function () {
                            location.href = 'ValidacaoAluno.php?remove=' + id
                        }
                );
            }
        </script>
        <style type="text/css">
            * {
                font-size: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-ls-12">
                    <?php
                    $matriculas = ExibirListaMatriculas();
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th colspan="6">
                        <center>
                            <h1> Alteração de Matriculas </h1>
                        </center>
                        </th>
                        </tr>
                        <tr style="color:#FFF; background-color: #5bc0de;" >
                            <th>Código</th>
                            <th>Aluno</th>
                            <th>Curso</th>
                            <th>Data Matricula</th>
                            <th>Status Matricula</th>
                            <th><center>Ação</center></th>
                        </tr>  
                        <?php
                        if (count($matriculas) != 0) {
                            for ($i = 0; $i < count($matriculas); $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < 5; $j++) {
                                    echo "<td>";
                                    print_r($matriculas[$i][$j]);
                                    echo "</td>";
                                }
                                echo "<td><center>";
                                echo " <button class='btn btn-info' onclick=\"location.href='cadastroMatricula.php?id="
                                . ($matriculas[$i][0]) . "'\" type='button'>Editar</button></center><b></td></tr>";
                                echo "</td>";
                            }
                            ?>
                            <tr>
                                <td colspan="6">
                            <center>
                                <button class="btn btn-primary btn-lg" onclick="location.href = 'index.html'" > Voltar</button>
                            </center>
                            </td>                            
                            </tr>
                        </table>
                        <?php
                    } else {
                        ?>
                        <script>
                            $(document).ready(function () {
                                $("#titulo").append("Listagem de Matriculas");
                                $("#texto").append("Não Há Matrículas no Sistema!");
                                $("#texto").css("margin", 0);
                                $("#message2").modal();
                            });</script>

                        <div class="modal fade" id="message2" role="dialog">
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
                                        <button type="button" onclick="location.href = 'cadastroMatricula.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>


