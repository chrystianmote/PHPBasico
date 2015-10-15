<?php
if (!isset($_GET["id"])) {
    ?>
    <html>
        <head>
            <title>Cadastrar Aluno</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="js/jquery.validate.js" ></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#frmAluno").validate({
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
                            txtResp: {
                                // campoResp será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, minlength: 2
                            },
                            txtStatus: {
                                // campoStatus será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, minlength: 2
                            }

                        },
                        // Define as mensagens de erro para cada regra
                        messages: {
                            txtCod: {
                                required: "Digite o Código do Aluno",
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
                            txtResp: {
                                required: "Digite o seu nome do seu Responsável",
                                minlength: "Mínimo de 2 caracteres"
                            },
                            txtStatus: {
                                required: "Digite o Status do Aluno Cadastrado",
                                minlength: "Mínimo de 2 caracteres"
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h2> Cadastrar Aluno</h2>
                        <form id="frmAluno" name="frmAluno" action="ValidacaoAluno.php" method="post">
                            <table width="500px">
                                <tr>
                                    <td><label>Código do Aluno: </label></td>
                                    <td><input name="txtCod" id="txtCod" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Nome: </label></td>
                                    <td><input name="txtNome" id="txtNome" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Endereço: </label></td>
                                    <td><input name="txtEnd" id="txtEnd" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Cidade: </label></td>
                                    <td><input name="txtCid" id="txtCid" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>UF: </label></td>
                                    <td><select name="sltUF" id="sltUF">
                                            <option value="ES">Espírito Santo</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="SP">São Paulo</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><label>CEP: </label></td>
                                    <td><input name="txtCEP" id="txtCEP" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Telefone: </label></td>
                                    <td><input name="txtTel" id="txtTel" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Data de Nascimento: </label></td>
                                    <td><input name="txtDataNasc" id="txtDataNasc" type="text" placeholder="dd/MM/YYYY"></td>
                                </tr>
                                <tr>
                                    <td><label> Responsável: </label></td>
                                    <td><input name="txtResp" id="txtResp" type="text"></td>
                                </tr>

                                <tr>
                                    <td><label> Status: </label></td>
                                    <td><select name="sltStatus" id="sltUF">
                                            <option value="Ativo">Ativo</option>
                                            <option value="Inativo">Inativo</option>
                                            <option value="Aprovado">Aprovado</option>
                                            <option value="Reprovado">Reprovado</option>
                                        </select></td>
                                </tr>

                                <tr>
                                    <td colspan="2"><br />
                                        <br />
                                        <button class="btn btn-info" type="submit" > Cadastrar Aluno </button>
                                        &nbsp;
                                        <button class="btn btn-default" type="reset" > Limpar </button>
                                        &nbsp;
                                        <button class="btn btn-default" type="button" onclick="location.href = 'index.html'" > Voltar </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    <?php
} else {
    ?>

    <html>
        <head>
            <title>Alterar Aluno</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="js/jquery.validate.js" ></script>
            <script type="text/javascript">
                                            $(document).ready(function () {
                                                $("#frmAluno").validate({
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
                                                        txtResp: {
                                                            // campoResp será obrigatório (required) e terá tamanho mínimo (minLength)
                                                            required: true, minlength: 2
                                                        },
                                                        txtStatus: {
                                                            // campoStatus será obrigatório (required) e terá tamanho mínimo (minLength)
                                                            required: true, minlength: 2
                                                        }

                                                    },
                                                    // Define as mensagens de erro para cada regra
                                                    messages: {
                                                        txtCod: {
                                                            required: "Digite o Código do Aluno",
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
                                                        txtResp: {
                                                            required: "Digite o seu nome do seu Responsável",
                                                            minlength: "Mínimo de 2 caracteres"
                                                        },
                                                        txtStatus: {
                                                            required: "Digite o Status do Aluno Cadastrado",
                                                            minlength: "Mínimo de 2 caracteres"
                                                        }
                                                    }
                                                });

                                            });

                                            function SubmeterForm()
                                            {
                                                $("#frmAlterarAluno").submit();
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h2> Alterar Aluno</h2>
                        <form id="frmAlterarAluno" name="frmAlterarAluno" action="ValidacaoAluno.php" method="POST">
                            <?php
                            include './BancoDados/DBUtil.php';
                            $aluno = ConsultarUmAluno($_GET["id"]);
                            ?>
                            <input type="hidden" name="update" id="update" value="<?php print_r($aluno[0][0]); ?>">

                            <table width="500px">
                                <tr>
                                    <td><label>Código do Aluno: </label></td>
                                    <td><input value="<?php print_r($aluno[0][0]); ?>" name="txtCod" disabled="disabled" id="txtCod" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Nome: </label></td>
                                    <td><input value="<?php print_r($aluno[0][1]); ?>" name="txtNome" id="txtNome" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Endereço: </label></td>
                                    <td><input value="<?php print_r($aluno[0][2]); ?>"name="txtEnd" id="txtEnd" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Cidade: </label></td>
                                    <td><input value="<?php print_r($aluno[0][3]); ?>" name="txtCid" id="txtCid" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>UF: </label></td>
                                    <td><select name="sltUF" id="sltUF">
                                            <option value="ES"<?php echo Onselected("ES", $aluno[0][4]); ?>>Espírito Santo</option>
                                            <option value="RJ"<?php echo Onselected("RJ", $aluno[0][4]); ?>>Rio de Janeiro</option>
                                            <option value="MG"<?php echo Onselected("MG", $aluno[0][4]); ?>>Minas Gerais</option>
                                            <option value="SP"<?php echo Onselected("SP", $aluno[0][4]); ?>>São Paulo</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><label>CEP: </label></td>
                                    <td><input value="<?php print_r($aluno[0][5]); ?>" name="txtCEP" id="txtCEP" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Telefone: </label></td>
                                    <td><input value="<?php print_r($aluno[0][6]); ?>" name="txtTel" id="txtTel" type="text"></td>
                                </tr>
                                <tr>
                                    <td><label>Data de Nascimento: </label></td>
                                    <td><input value="<?php print_r($aluno[0][7]); ?>" name="txtDataNasc" id="txtDataNasc" type="text" placeholder="dd/MM/YYYY"></td>
                                </tr>
                                <tr>
                                    <td><label> Responsável: </label></td>
                                    <td><input value="<?php print_r($aluno[0][8]); ?>" name="txtResp" id="txtResp" type="text"></td>
                                </tr>

                                <tr>

                                    <td><label> Status: </label></td>
                                    <td><select name="sltStatus" id="sltStatus">
                                            <option value="Ativo"<?php echo Onselected("Ativo", $aluno[0][9]); ?>>Ativo</option>
                                            <option value="Inativo"<?php echo Onselected("Inativo", $aluno[0][9]); ?>>Inativo</option>
                                            <option value="Aprovado"<?php echo Onselected("Aprovado", $aluno[0][9]); ?>>Aprovado</option>
                                            <option value="Reprovado"<?php echo Onselected("Reprovado", $aluno[0][9]); ?>>Reprovado</option>
                                        </select></td>
                                </tr>

                                <tr>
                                    <td colspan="2"><br />
                                        <br />
                                        <button class="btn btn-info" data-toggle="modal" data-target="#message" type="button" > Alterar Aluno </button>
                                        &nbsp;
                                        <button class="btn btn-default" type="button" onclick="location.href = 'listaAlterarAluno.php'" > Voltar </button></td>
                                </tr>
                            </table>

                        </form>
                        <div class="col-md-4"></div>
                    </div>
                </div>

                <div class="modal fade" id="message" role="dialog">
                    <div class="modal-dialog"> 
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Alteração de Aluno</h4>
                            </div>
                            <div class="modal-body">
                                <p>Você realmente deseja alterar os dados deste Aluno??</p>
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
