<?php
if (!isset($_GET["id"])) {
    ?>
    <html>
        <head>
            <title>Cadastrar Curso</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
            <script src="../js/jquery.min.js" type="text/javascript"></script>
            <script src="../js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../js/jquery.validate.js" type="text/javascript"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#frmCurso").validate({
                        // Define as regras
                        rules: {
                            txtCod: {
                                // campoCogigo será obrigatório (required) e só aceita numeros
                                required: true, number: true
                            },
                            txtNome: {
                                // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, minlength: 2
                            },
                            txtDataInicio: {
                                // campoEndereço será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, date: true
                            },
                            txtDataTermino: {
                                // campoCidade será obrigatório (required) 
                                required: true, date: true
                            }

                        },
                        // Define as mensagens de erro para cada regra
                        messages: {
                            txtCod: {
                                required: "Digite o Código do Professor",
                                number: "Digite somente Números"
                            },
                            txtNome: {
                                required: "Digite o Nome do Curso",
                                minlength: " Mínimo de 2 caracteres"
                            },
                            txtDataInicio: {
                                required: "Digite a data de Início do Curso",
                                date: "Data Inválida"
                            },
                            txtDataTermino: {
                                required: "Digite a data de Término do Curso",
                                date: "Data Inválida"
                            }
                        }
                    });

                });

            </script>
            <style type="text/css">
                h2 {
                    margin: 30px auto;
                }
                * {
                    font-family: Arial;
                    font-size: 100%;
                }
                label {
                    display: block;
                    margin-top: 10px;
                }
                label.error {
                    float: none;
                    color: red;
                    margin: 0 .5em 0 0;
                    vertical-align: top;
                    font-size: 10px
                }
                p {
                    clear: both;
                }
                .submit {
                    margin-top: 1em;
                }
                em {
                    font-weight: bold;
                    padding-right: 1em;
                    vertical-align: top;
                }



                table tr td{

                    padding: 7px 0;
                }
                select
                {
                    width:174px;
                }

            </style>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div id="divForm" >
                            <form id="frmCurso" name="frmCurso" action="ValidacaoCurso.php" method="post">

                                <?php
                                include '../BancoDados/DBCurso.php';
                                include '../BancoDados/DBProfessor.php';
                                $professores = ExibirListaProfessores();
                                $idCurso = MaiorIDCurso();
                                ?>

                                <table id="tableform">
                                    <tr>
                                        <td colspan="2"><h2><center> Cadastrar Novo Curso</center></h2></td>
                                    </tr>
                                    <tr>
                                        <td><label>Código do Curso: </label></td>
                                        <td><input class="form-control" name="txtCod" id="txtCod" readonly="readonly" value="<?php echo ($idCurso[0] + 1); ?>" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Nome: </label></td>
                                        <td><input class="form-control" name="txtNome" id="txtNome" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Data de Início: </label></td>
                                        <td><input class="form-control" name = "txtDataInicio" value=""  id = "txtDataInicio" type = "text" placeholder = "YYYY-mm-dd" > </td>
                                    </tr>
                                    <tr>
                                        <td><label>Data de Término: </label></td>
                                        <td><input class="form-control" name = "txtDataTermino" value=""  id = "txtDataTermino" type = "text" placeholder = "YYYY-mm-dd" > </td>
                                    </tr>
                                    <tr>
                                        <td><label>Status do Curso: </label></td>
                                        <td><select class="form-control" name="sltStatus" id="sltStatus">
                                                <option value="Em Aberto">Em Aberto</option>
                                                <option value="Concluído">Concluído</option>
                                                <option value="Em Andamento">Em Andamento</option>
                                                <option value="Cancelado">Cancelado</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label>Instrutor do Curso: </label></td>
                                        <td><select class="form-control" name="sltInstrutor" id="sltInstrutor">
                                                <option value="">Selecionar Instrutor...</option>
                                                <?php
                                                for ($i = 0; $i < count($professores); $i++) {
                                                    print_r('<option value="' . $professores[$i][0] . '">');
                                                    print_r($professores[$i][1]);
                                                    echo '</option>';
                                                }
                                                ?>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <br />
                                            <br />
                                    <center>
                                            <button class="btn btn-info" type="submit" > Cadastrar Curso </button>
                                            &nbsp;
                                            <button class="btn btn-default" type="reset" > Limpar </button>
                                            &nbsp;
                                            <button class="btn btn-default" type="button" onclick="location.href = 'http://localhost/chrystian/AtividadeDinamica/index.html'" > Voltar </button>
                                    </center>    
                                    </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </body>
    </html>
    <?php
} else {
    ?>

    <html>
        <head>
            <title>Alterar Curso</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="../js/jquery.validate.js" ></script>
            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $("#frmCurso").validate({
                                                        // Define as regras
                                                        rules: {
                                                            txtCod: {
                                                                // campoCogigo será obrigatório (required) e só aceita numeros
                                                                required: true, number: true
                                                            },
                                                            txtNome: {
                                                                // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
                                                                required: true, minlength: 2
                                                            },
                                                            txtDataInicio: {
                                                                // campoEndereço será obrigatório (required) e terá tamanho mínimo (minLength)
                                                                required: true, date: true
                                                            },
                                                            txtDataTermino: {
                                                                // campoCidade será obrigatório (required) 
                                                                required: true, date: true
                                                            }

                                                        },
                                                        // Define as mensagens de erro para cada regra
                                                        messages: {
                                                            txtCod: {
                                                                required: "Digite o Código do Professor",
                                                                number: "Digite somente Números"
                                                            },
                                                            txtNome: {
                                                                required: "Digite o Nome do Curso",
                                                                minlength: " Mínimo de 2 caracteres"
                                                            },
                                                            txtDataInicio: {
                                                                required: "Digite a data de Início do Curso",
                                                                date: "Data Inválida"
                                                            },
                                                            txtDataTermino: {
                                                                required: "Digite a data de Término do Curso",
                                                                date: "Data Inválida"
                                                            }
                                                        }
                                                    });

                                                });

                                                function SubmeterForm()
                                                {
                                                    $("#frmAlterarCurso").submit();
                                                }
            </script>
            <style type="text/css">
                h2 {
                    margin: 30px auto;
                }
                * {
                    font-family: Arial;
                    font-size: 100%;
                }
                label {
                    display: block;
                    margin-top: 10px;
                }
                label.error {
                    float: none;
                    color: red;
                    margin: 0 .5em 0 0;
                    vertical-align: top;
                    font-size: 10px
                }
                p {
                    clear: both;
                }
                .submit {
                    margin-top: 1em;
                }
                em {
                    font-weight: bold;
                    padding-right: 1em;
                    vertical-align: top;
                }



                table tr td{

                    padding: 7px 0;
                }
                select
                {
                    width:174px;
                }

            </style>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div id="divForm"> 

                            <form id="frmAlterarCurso" name="frmAlterarCurso" action="ValidacaoCurso.php" method="POST">
                                <?php
                                include '../BancoDados/DBCurso.php';
                                include '../BancoDados/DBProfessor.php';
                                $professores = ExibirListaProfessores();
                                $curso = ConsultarUmCurso($_GET["id"]);
                                ?>
                                <input type="hidden" name="update" id="update" value="<?php print_r($curso[0]); ?>">

                                <table id="tableform">
                                    <tr>
                                        <td colspan="2"><h2><center> Alterar Curso</center></h2></td>
                                    </tr>
                                    <tr>
                                        <td><label>Código do Aluno: </label></td>
                                        <td><input class="form-control" value="<?php print_r($curso[0]); ?>" name="txtCod" disabled="disabled" id="txtCod" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Nome: </label></td>
                                        <td><input class="form-control" value="<?php print_r($curso[1]); ?>" name="txtNome" id="txtNome" type="text"></td>
                                    </tr>





                                    <tr>
                                        <td><label>Data de Início: </label></td>
                                        <td><input class="form-control" name = "txtDataInicio" value="<?php print_r($curso[2]); ?>"  id = "txtDataInicio" type = "text" placeholder = "YYYY-mm-dd" > </td>
                                    </tr>
                                    <tr>
                                        <td><label>Data de Término: </label></td>
                                        <td><input class="form-control" name = "txtDataTermino" value="<?php print_r($curso[3]); ?>"  id = "txtDataTermino" type = "text" placeholder = "YYYY-mm-dd" > </td>
                                    </tr>
                                    <tr>
                                        <td><label>Status do Curso: </label></td>
                                        <td><select class="form-control" name="sltStatus" id="sltStatus">
                                                <option value="Em Aberto"<?php echo Onselected("Em Aberto", $curso[4]); ?>>Em Aberto</option>
                                                <option value="Concluído"<?php echo Onselected("Concluído", $curso[4]); ?>>Concluído</option>
                                                <option value="Andamento"<?php echo Onselected("Andamento", $curso[4]); ?>>Em Andamento</option>
                                                <option value="Cancelado"<?php echo Onselected("Cancelado", $curso[4]); ?>>Cancelado</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label>Instrutor do Curso: </label></td>
                                        <td><select class="form-control" name="sltInstrutor" id="sltInstrutor">
                                                <?php
                                                for ($i = 0; $i < count($professores); $i++) {
                                                    print_r('<option value="' . $professores[$i][0] . '" ' . Onselected($professores[$i][0], $curso[5]) . '>');
                                                    print_r($professores[$i][1]);
                                                    echo '</option>';
                                                }
                                                ?>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <br />
                                            <br />
                                    <center>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#message" type="button" > Alterar Curso </button>
                                        &nbsp;
                                        <button class="btn btn-default" type="button" onclick="location.href = 'listaAlterarCurso.php'" > Voltar </button></td>
                                    </center>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="modal fade" id="message" role="dialog">
                    <div class="modal-dialog"> 
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Alteração de Curso</h4>
                            </div>
                            <div class="modal-body">
                                <p>Você realmente deseja alterar os dados deste Curso??</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" id="btnAlterar" onclick="SubmeterForm();" class="btn btn-default" data-dismiss="modal">Alterar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>


    <?php
}

function Onselected($option, $op) {

    if ($option == $op) {
        return "selected";
    } else {
        return "";
    }
}
