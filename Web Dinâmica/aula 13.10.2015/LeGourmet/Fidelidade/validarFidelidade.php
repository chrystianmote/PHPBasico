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
                    include '../DBGourmet/BDFidelidade.php';

                    $fidelidade = $_POST;
                    if (isset($fidelidade["txtCod"])) {

                        $dados = array($fidelidade["txtCod"], $fidelidade["txtPrivilegio"], $fidelidade["txtCliente"],  $fidelidade["txtData"],
                            $fidelidade["txtEmail"], $fidelidade["txtPontos"], $fidelidade["txtUsuario"], $fidelidade["txtSenha"]);
                        if (InserirFidelidade($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Adicionar Fidelidade");
                                        $("#texto").append("Cadastro Efetuado com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>   


                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Adicionar Fidelidade");
                                        $("#texto").append("Cadastro não Efetuado!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
//                    if (isset($_GET["remove"])) {
//                        $id = $_GET["remove"];
//                        $excluido = FALSE;
//                        if (ExcluirAluno($id)) {
//                            $excluido = TRUE;
//                        } else if (ExcluirMatriculaAluno($id)) {
//                            if (ExcluirAluno($id)) {
//                                $excluido = TRUE;
//                            }
//                        }
//
//                        if ($excluido) {
//                            ?>
<!--                                    <script>
                                        $(document).ready(function () {
                                        $("#titulo").append("Exclusão de Aluno");
                                        $("#texto").append("Aluno Removido com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>-->
                            <?php
//                        } else {
//                            ?>
<!--                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Exclusão de Aluno");
                                        $("#texto").append("Aluno não Removido!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>-->
                            <?php
//                        }
//                    }
                    if (isset($fidelidade["update"])) {
                        $dados = array($fidelidade["update"], $fidelidade["txtCliente"], 
                            $fidelidade["txtData"], $fidelidade["txtEmail"], $fidelidade["txtSenha"]);
                        if (AlterarFidelidade($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Fidelidade");
                                        $("#texto").append("Fidelidade Alterado com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>                           
                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Fidelidade");
                                        $("#texto").append("Fidelidade Nao Alterado!");
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
                                    <button type="button" onclick="location.href = '../index.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
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
