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
                    include '../BancoDados/DBProfessor.php';

                    $professor = $_POST;
                    if (isset($professor["txtCod"])) {

                        $dados = array($professor["txtCod"], $professor["txtNome"], $professor["txtEnd"], $professor["txtCid"],
                            $professor["sltUF"], $professor["txtCEP"], $professor["txtTel"], $professor["txtEmail"]);
                        if (InserirProfessor($dados)) {
                            ?>
                            <script>
                                $(document).ready(function () {
                                    $("#titulo").append("Adicionar Professor");
                                    $("#texto").append("Professor Inserido com Sucesso!");
                                    $("#texto").css("margin", 0);
                                    $("#message").modal();
                                });</script>   


                            <?php
                        } else {
                            ?>
                            <script>
                                $(document).ready(function () {
                                    $("#titulo").append("Adicionar Professor");
                                    $("#texto").append("Professor não Inserido!");
                                    $("#texto").css("margin", 0);
                                    $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
                    if (isset($_GET["remove"])) {
                        $id = $_GET["remove"];
                        $excluido = FALSE;
                        if (ExcluirProfessor($id)) {
                            $excluido = TRUE;
                        } else if (ExcluirCursoProfessor($id)) {
                            if (ExcluirProfessor($id)) {
                                $excluido = TRUE;
                            }
                        } else if (ExcluirMatriculaCursoProfessor($id)) {
                            if (ExcluirCursoProfessor($id)) {
                                if (ExcluirProfessor($id)) {
                                    $excluido = TRUE;
                                }
                            }
                        }

                        if ($excluido) {
                            ?>
                            <script>
                                $(document).ready(function () {
                                    $("#titulo").append("Exclusão de Professor");
                                    $("#texto").append("Professor Removido com Sucesso!");
                                    $("#texto").css("margin", 0);
                                    $("#message").modal();
                                });</script>
                            <?php
                        } else {
                            ?>
                            <script>
                                $(document).ready(function () {
                                    $("#titulo").append("Exclusão de Professor");
                                    $("#texto").append("Professor não Removido!");
                                    $("#texto").css("margin", 0);
                                    $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
                    if (isset($professor["update"])) {
                        $dados = array($professor["update"], $professor["txtNome"], $professor["txtEnd"], $professor["txtCid"],
                            $professor["sltUF"], $professor["txtCEP"], $professor["txtTel"], $professor["txtEmail"]);
                        if (AlterarProfessor($dados)) {
                            ?>
                            <script>
                                $(document).ready(function () {
                                    $("#titulo").append("Alteração de Professor");
                                    $("#texto").append("Professor Alterado com Sucesso!");
                                    $("#texto").css("margin", 0);
                                    $("#message").modal();
                                });</script>                           
                            <?php
                        } else {
                            ?>
                            <script>
                                $(document).ready(function () {
                                    $("#titulo").append("Alteração de Professor");
                                    $("#texto").append("Professor Nao foi Alterado!");
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
                                    <button type="button" onclick="location.href = 'listaAlterarProfessor.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
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
