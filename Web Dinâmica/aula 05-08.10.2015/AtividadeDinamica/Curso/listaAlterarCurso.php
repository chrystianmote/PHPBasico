<?php
include '../BancoDados/DBCurso.php';
include '../BancoDados/DBProfessor.php';
?>
<html>
    <head>
        <title>Alteração e Exclusão</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function EnviarCodigo(id)
            {
                $("#btnApagar").click(
                        function () {
                            location.href = 'ValidacaoCurso.php?remove=' + id
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
                    $cursos = ConsultarCursos();
                    $professores = ExibirListaProfessores();
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th colspan="7">
                        <center>
                            <h1> Alteração de Cursos </h1>
                        </center>
                        </th>
                        </tr>
                        <tr style="color:#FFF; background-color: #5bc0de;" >
                            <th>Código</th>
                            <th>Nome do Curso</th>
                            <th>Data de Início</th>
                            <th>Data de Término</th>
                            <th>Status</th>
                            <th>Instrutor</th>
                            <th><center>Ação</center></th>
                        </tr>  
                        <?php
                        if (count($cursos) != 0) {
                            for ($i = 0; $i < count($cursos); $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < 6; $j++) {
                                    if ($j != 5) {
                                        echo "<td>";
                                        print_r($cursos[$i][$j]);
                                        echo "</td>";
                                    } else {
                                        echo "<td>" . ConsultarNomeProfessor($cursos[$i][5]) . "</td>";
                                    }
                                }

                                echo "<td><center><button onclick='EnviarCodigo(" . ($cursos[$i][0]) . ");'  class='btn btn-info' 
                                    data-toggle='modal' data-target='#message'type='button'>Excluir</button><b>";
                                echo " <button class='btn btn-info' onclick=\"location.href='cadastroCurso.php?id="
                                . ($cursos[$i][0]) . "'\" type='button'>Editar</button></center><b></td></tr>";
                                echo "</td>";
                            }
                            ?>
                            <tr>
                                <td colspan="7">
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
                                        <button type="button" onclick="location.href = 'cadastroCurso.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                    ?>
                    <div class="modal fade" id="message" role="dialog">
                        <div class="modal-dialog"> 
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Exclusão de Curso</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Você realmente deseja excluir este Curso??<br/>
                                        Todas as Matriculas vinculadas a ele serão excluidas.                                        
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" id="btnApagar" onclick="" class="btn btn-default" data-dismiss="modal">Apagar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


