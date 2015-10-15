<html>
    <head>
        <title>Validando...</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php
                    include './BancoDados/DBUtil.php';

                    $aluno = $_POST;
                    if (isset($aluno["txtCod"])) {

                        $dados = array($aluno["txtCod"], $aluno["txtNome"], $aluno["txtEnd"], $aluno["txtCid"],
                            $aluno["sltUF"], $aluno["txtCEP"], $aluno["txtTel"], $aluno["txtDataNasc"],
                            $aluno["txtResp"], $aluno["sltStatus"]);
                        if (InserirAluno($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Adicionar Aluno");
                                        $("#texto").append("Aluno Inserido com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>   


                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Adicionar Aluno");
                                        $("#texto").append("Aluno não Inserido!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
                    if (isset($_GET["remove"])) {
                        $id = $_GET["remove"];
                        $excluido = FALSE;
                        if (ExcluirAluno($id)) {
                            $excluido = TRUE;
                        } else if (ExcluirMatriculaAluno($id)) {
                            if (ExcluirAluno($id)) {
                                $excluido = TRUE;
                            }
                        }

                        if ($excluido) {
                            ?>
                                    <script>
                                        $(document).ready(function () {
                                        $("#titulo").append("Exclusão de Aluno");
                                        $("#texto").append("Aluno Removido com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Exclusão de Aluno");
                                        $("#texto").append("Aluno não Removido!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
                    if (isset($aluno["update"])) {
                        $dados = array($aluno["update"], $aluno["txtNome"], $aluno["txtEnd"], $aluno["txtCid"],
                            $aluno["sltUF"], $aluno["txtCEP"], $aluno["txtTel"], $aluno["txtDataNasc"],
                            $aluno["txtResp"], $aluno["sltStatus"]);
                        if (AlterarAluno($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Aluno");
                                        $("#texto").append("Aluno Alterado com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>                           
                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Aluno");
                                        $("#texto").append("Aluno Nao foi Alterado!");
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
                                    <button type="button" onclick="location.href = 'listaAlterarAluno.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
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