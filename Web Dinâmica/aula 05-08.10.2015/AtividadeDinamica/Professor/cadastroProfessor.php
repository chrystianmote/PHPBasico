<?php
if (!isset($_GET["id"])) {
    ?>
    <html>
        <head>
            <title>Cadastrar Professor</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../css/estilo.css">
            <script src="../js/jquery.min.js" type="text/javascript"></script>
            <script src="../js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../js/jquery.validate.js" type="text/javascript"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#frmProfessor").validate({
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
                            txtEnd: {
                                // campoEndereço será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, minlength: 10
                            },
                            txtCid: {
                                // campoCidade será obrigatório (required) 
                                required: true, minlength: 2
                            },
                            txtCEP: {
                                // campoCEP será obrigatório (required) e só aceita numeros
                                required: true, number: true
                            },
                            txtEmail: {
                                // campoResp será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, email: true
                            }

                        },
                        // Define as mensagens de erro para cada regra
                        messages: {
                            txtCod: {
                                required: "Digite o Código do Professor",
                                number: "Digite somente Números"
                            },
                            txtNome: {
                                required: "Digite o seu nome",
                                minlength: " Mínimo de 2 caracteres"
                            },
                            txtEnd: {
                                required: "Digite o seu Endereço",
                                minlength: "Mínimo de 10 caracteres"
                            },
                            txtCid: {
                                required: "Digite Sua cidade",
                                minlength: "Mínimo de 2 caracteres"
                            },
                            txtCEP: {
                                required: "Digite o seu cep",
                                number: "Somente números"
                            },
                            txtEmail: {
                                required: "Digite o seu email",
                                email: "Email Inválido"
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
                        <div id="divForm">
                            <form id="frmProfessor" name="frmProfessor" action="ValidacaoProfessor.php" method="post">

                                <?php
                                include '../BancoDados/DBProfessor.php';

                                $idProf = MaiorIDProfessor();
                                ?>

                                <table id="tableform">
                                    <tr>
                                        <td colspan="2"><h2><center> Cadastrar Professor</center></h2></td>
                                    </tr>
                                    <tr>
                                        <td><label>Código do Professor: </label></td>
                                        <td><input class="form-control" name="txtCod" id="txtCod" readonly="readonly" value="<?php echo ($idProf + 1); ?>" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Nome: </label></td>
                                        <td><input class="form-control" name="txtNome" id="txtNome" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Endereço: </label></td>
                                        <td><input class="form-control" name="txtEnd" id="txtEnd" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Cidade: </label></td>
                                        <td><input class="form-control" name="txtCid" id="txtCid" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>UF: </label></td>
                                        <td><select class="form-control" name="sltUF" id="sltUF">
                                                <option value="ES">Espírito Santo</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="SP">São Paulo</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label>CEP: </label></td>
                                        <td><input class="form-control" name="txtCEP" id="txtCEP" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Telefone: </label></td>
                                        <td><input class="form-control" name="txtTel" id="txtTel" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtEmail">Email: </label></td>
                                        <td><input class="form-control" name="txtEmail" id="txtEmail" type="text"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"><br />
                                            <br />
                                            <button class="btn btn-info" type="submit" > Cadastrar Professor </button>
                                            &nbsp;
                                            <button class="btn btn-default" type="reset" > Limpar </button>
                                            &nbsp;
                                            <button class="btn btn-default" type="button" onclick="location.href = 'http://localhost/chrystian/AtividadeDinamica/index.html'" > Voltar </button>
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
            <title>Alterar Professor</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../css/estilo.css">
            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="../js/jquery.validate.js" ></script>
            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $("#frmAlterarProfessor").validate({
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
                                                            txtEnd: {
                                                                // campoEndereço será obrigatório (required) e terá tamanho mínimo (minLength)
                                                                required: true, minlength: 10
                                                            },
                                                            txtCid: {
                                                                // campoCidade será obrigatório (required) 
                                                                required: true, minlength: 2
                                                            },
                                                            txtCEP: {
                                                                // campoCEP será obrigatório (required) e só aceita numeros
                                                                required: true, number: true
                                                            },
                                                            txtEmail: {
                                                                // campoResp será obrigatório (required) e terá tamanho mínimo (minLength)
                                                                required: true, email: true
                                                            }

                                                        },
                                                        // Define as mensagens de erro para cada regra
                                                        messages: {
                                                            txtCod: {
                                                                required: "Digite o Código do Professor",
                                                                number: "Digite somente Números"
                                                            },
                                                            txtNome: {
                                                                required: "Digite o seu nome",
                                                                minlength: " Mínimo de 2 caracteres"
                                                            },
                                                            txtEnd: {
                                                                required: "Digite o seu Endereço",
                                                                minlength: "Mínimo de 10 caracteres"
                                                            },
                                                            txtCid: {
                                                                required: "Digite Sua cidade",
                                                                minlength: "Mínimo de 2 caracteres"
                                                            },
                                                            txtCEP: {
                                                                required: "Digite o seu cep",
                                                                number: "Somente números"
                                                            },
                                                            txtEmail: {
                                                                required: "Digite o seu email",
                                                                email: "Email Inválido"
                                                            }
                                                        }
                                                    });

                                                });

                                                function SubmeterForm()
                                                {
                                                    $("#frmAlterarProfessor").submit();
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
                            <form id="frmAlterarProfessor" name="frmAlterarProfessor" action="ValidacaoProfessor.php" method="POST">
                                <?php
                                include '../BancoDados/DBProfessor.php';
                                $professor = ConsultarUmProfessor($_GET["id"]);
                                ?>
                                <input type="hidden" name="update" id="update" value="<?php print_r($professor[0]); ?>">
                                <table id="tableform">
                                    <tr>
                                        <td colspan="2"><h2><center> Alterar Professor</center></h2></td>
                                    </tr>
                                    <tr>
                                        <td><label>Código do Aluno: </label></td>
                                        <td><input class="form-control" value="<?php print_r($professor[0]); ?>" name="txtCod" disabled="disabled" id="txtCod" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Nome: </label></td>
                                        <td><input class="form-control" value="<?php print_r($professor[1]); ?>" name="txtNome" id="txtNome" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Endereço: </label></td>
                                        <td><input class="form-control" value="<?php print_r($professor[2]); ?>"name="txtEnd" id="txtEnd" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Cidade: </label></td>
                                        <td><input class="form-control" value="<?php print_r($professor[3]); ?>" name="txtCid" id="txtCid" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>UF: </label></td>
                                        <td><select class="form-control" name="sltUF" id="sltUF">
                                                <option value="ES"<?php echo Onselected("ES", $professor[4]); ?>>Espírito Santo</option>
                                                <option value="RJ"<?php echo Onselected("RJ", $professor[4]); ?>>Rio de Janeiro</option>
                                                <option value="MG"<?php echo Onselected("MG", $professor[4]); ?>>Minas Gerais</option>
                                                <option value="SP"<?php echo Onselected("SP", $professor[4]); ?>>São Paulo</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><label>CEP: </label></td>
                                        <td><input class="form-control" value="<?php print_r($professor[5]); ?>" name="txtCEP" id="txtCEP" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Telefone: </label></td>
                                        <td><input class="form-control" value="<?php print_r($professor[6]); ?>" name="txtTel" id="txtTel" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Email: </label></td>
                                        <td><input class="form-control" value="<?php print_r($professor[7]); ?>" name="txtEmail" id="txtEmail" type="text" placeholder="dd/MM/YYYY"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"><br />
                                            <br />
                                            <button class="btn btn-info" data-toggle="modal" data-target="#message" type="button" > Alterar Professor </button>
                                            &nbsp;
                                            <button class="btn btn-default" type="button" onclick="location.href = 'listaAlterarProfessor.php'" > Voltar </button></td>
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
                                <h4 class="modal-title">Alteração de Professor</h4>
                            </div>
                            <div class="modal-body">
                                <p>Você realmente deseja alterar os dados deste Professor??</p>
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
