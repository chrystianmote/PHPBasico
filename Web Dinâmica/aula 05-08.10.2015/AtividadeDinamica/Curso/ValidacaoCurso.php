<html>
    <head>
        <title>Validando...</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php
                    include '../BancoDados/DBCurso.php';

                    $curso = $_POST;
                    if (isset($curso["txtCod"])) {

                        $dados = array($curso["txtCod"], $curso["txtNome"], $curso["txtDataInicio"], $curso["txtDataTermino"],
                            $curso["sltStatus"], $curso["sltInstrutor"]);
                        if (InserirCurso($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Adicionar Curso");
                                        $("#texto").append("Curso Inserido com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>   


                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Adicionar Curso");
                                        $("#texto").append("Curso não Inserido!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
                    if (isset($_GET["remove"])) {
                        $id = $_GET["remove"];
                        $excluido = FALSE;
                        if (ExcluirCurso($id)) {
                            $excluido = TRUE;
                        } else if (ExcluirMatriculaCurso($id)) {
                            if (ExcluirCurso($id)) {
                                $excluido = TRUE;
                            }
                        }

                        if ($excluido) {
                            ?>
                                    <script>
                                        $(document).ready(function () {
                                        $("#titulo").append("Exclusão de Curso");
                                        $("#texto").append("Curso Removido com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Exclusão de Curso");
                                        $("#texto").append("Curso não Removido!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
                    if (isset($curso["update"])) {
                        $dados = array($curso["update"], $curso["txtNome"], $curso["txtDataInicio"], $curso["txtDataTermino"],
                            $curso["sltStatus"], $curso["sltInstrutor"]);
                        if (AlterarCurso($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Curso");
                                        $("#texto").append("Curso Alterado com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>                           
                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Curso");
                                        $("#texto").append("Curso Nao foi Alterado!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>                            
                            <?php
                        }
                    }
                    ?>

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
                                    <button type="button" onclick="location.href = 'listaAlterarCurso.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>

