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

                    $mat = $_POST;
                    if (isset($mat["txtCod"])) {

                        $dados = array($mat["txtCod"], $mat["sltAluno"], $mat["sltCurso"], 
                            $mat["txtDataCadastro"],$mat["sltStatus"]);
                        if(InserirMatricula($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Efetuar Matricula");
                                        $("#texto").append("Matricula Efetuada com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>   


                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Efetuar Matricula");
                                        $("#texto").append("Matricula Não Efetuada!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>
                            <?php
                        }
                    }
                    if (isset($mat["update"])) {
                        $dados = array($mat["update"], $mat["sltAluno"], $mat["sltCurso"], 
                            $mat["txtDataCadastro"],$mat["sltStatus"]);
                        if (AlterarMatricula($dados)) {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Matricula");
                                        $("#texto").append("Matricula Alterada com Sucesso!");
                                        $("#texto").css("margin", 0);
                                        $("#message").modal();
                                });</script>                           
                            <?php
                        } else {
                            ?>
                            <script>
                                        $(document).ready(function () {
                                $("#titulo").append("Alteração de Matricula");
                                        $("#texto").append("Matricula não foi Alterada!");
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
                                    <button type="button" onclick="location.href = 'listaAlterarMatricula.php'" class="btn btn-default" data-dismiss="modal">Fechar</button>
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
