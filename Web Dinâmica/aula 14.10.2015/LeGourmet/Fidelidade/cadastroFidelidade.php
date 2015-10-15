<?php
if (!isset($_GET["id"])) {
    ?>
    <html>
        <head>
            <title>Bem Vindo ao Cadastro</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="../js/jquery.validate.js" ></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#frmFidelidade").validate({
                        // Define as regras
                        rules: {
                            txtCod: {
                                // campoCogigo será obrigatório (required) e só aceita numeros
                                required: true, number: true
                            },
                            txtCliente: {
                                // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, minlength: 2
                            },
                            txtEmail: {
                                // campoEndereço será obrigatório (required) e terá tamanho mínimo (minLength)
                                required: true, email: true
                            },
                            txtUsuario: {
                                // campoCidade será obrigatório (required) 
                                required: true, minlength: 2
                            },
                            txtSenha: {
                                // campoCEP será obrigatório (required) e só aceita numeros
                                required: true, minlength: 2, maxlength: 6
                            }

                        },
                        // Define as mensagens de erro para cada regra
                        messages: {
                            txtCod: {
                                required: "Digite o Código",
                                number: "Digite somente Números"
                            },
                            txtCliente: {
                                required: "Digite o seu nome",
                                minlength: " Mínimo de 2 caracteres"
                            },
                            txtEmail: {
                                required: "Digite o seu Email",
                                email: "Email Inválido"
                            },
                            txtUsuario: {
                                required: "Digite Sue Login",
                                minlength: "Mínimo de 2 caracteres"
                            },
                            txtSenha: {
                                required: "Digite o sua senha",
                                minlength: "Senha entre 2 e 6 caracteres",
                                maxlength: "Senha entre 2 e 6 caracteres"
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
                    color: #FFF;
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
                #tableform{
                    width: 500px;
                    margin: 0 auto;

                }

                #principal{
                    background: url('../img/fastfood.jpg');
                    background-repeat: no-repeat;
                    background-size: 100%;


                }

                #frmFidelidade,#frmAlterarFidelidade
                {
                    margin-bottom: 0px;
                    padding-bottom: 20px;
                }
                #frmFidelidade h2,#frmAlterarFidelidade h2
                {
                    font-weight: bold;
                    color:#FF0;
                }
                #divForm{
                    margin: 20px auto;
                    background-image: url('../img/sombra.png');
                    background-repeat: repeat;
                    width: 550px;
                    height: auto;
                    margin-bottom: 20px;
                }

            </style>
        </head>
        <body>
            <div class="container-fluid" id="principal">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div  class="col-md-8">
                            <div id="divForm" >
                                <?php
                                include '../DBGourmet/BDFidelidade.php';

                                $codFiel = MaiorIDFidelidade();
                                ?>
                                <form id="frmFidelidade"  name="frmFidelidade" action="validarFidelidade.php" method="post">
                                    <table id="tableform">
                                        <tr>
                                            <td colspan="2"><h2><center> Cadastrar Fidelidade</center></h2></td>
                                        </tr>
                                        <tr>
                                            <td><label>Código: </label></td>
                                            <td><input readonly="readonly" value="<?php echo ($codFiel + 1); ?>" class="form-control" name="txtCod" id="txtCod" type="text">
                                                <input class="form-control" name="txtPrivilegio" id="txtPrivilegio" value="1" type="hidden">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Cliente: </label></td>
                                            <td><input class="form-control" name="txtCliente" id="txtCliente" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Data Cadastro: </label></td>
                                            <td><input readonly="readonly" class="form-control" name="txtData" id="txtData" type="text" value="<?php echo DataBanco(); ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Email: </label></td>
                                            <td><input class="form-control" name="txtEmail" id="txtEmail" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Login: </label></td>
                                            <td><input class="form-control" name="txtUsuario" id="txtUsuario" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Senha: </label></td>
                                            <td><input class="form-control" name="txtSenha" id="txtSenha" type="password">
                                                <input class="form-control" name="txtPontos" id="txtPontos" value="0" type="hidden">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <br />
                                                <br />
                                        <center> 
                                            <button class="btn btn-info" type="submit" > Cadastrar </button>
                                            &nbsp;
                                            <button class="btn btn-default" type="reset" > Limpar </button>
                                            &nbsp;
                                            <button class="btn btn-default" type="button" onclick="location.href = '../index.html'" > Voltar </button>
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
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="../js/jquery.validate.js" ></script>
            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $("#frmFidelidade").validate({
                                                        // Define as regras
                                                        rules: {
                                                            txtCod: {
                                                                // campoCogigo será obrigatório (required) e só aceita numeros
                                                                required: true, number: true
                                                            },
                                                            txtCliente: {
                                                                // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
                                                                required: true, minlength: 2
                                                            },
                                                            txtEmail: {
                                                                // campoEndereço será obrigatório (required) e terá tamanho mínimo (minLength)
                                                                required: true, email: true
                                                            },
                                                            txtUsuario: {
                                                                // campoCidade será obrigatório (required) 
                                                                required: true, minlength: 2
                                                            },
                                                            txtSenha: {
                                                                // campoCEP será obrigatório (required) e só aceita numeros
                                                                required: true, minlength: 2, maxlength: 6
                                                            }

                                                        },
                                                        // Define as mensagens de erro para cada regra
                                                        messages: {
                                                            txtCod: {
                                                                required: "Digite o Código",
                                                                number: "Digite somente Números"
                                                            },
                                                            txtCliente: {
                                                                required: "Digite o seu nome",
                                                                minlength: " Mínimo de 2 caracteres"
                                                            },
                                                            txtEmail: {
                                                                required: "Digite o seu Email",
                                                                email: "Email Inválido"
                                                            },
                                                            txtUsuario: {
                                                                required: "Digite Sue Login",
                                                                minlength: "Mínimo de 2 caracteres"
                                                            },
                                                            txtSenha: {
                                                                required: "Digite a sua senha",
                                                                minlength: "Senha entre 2 e 6 caracteres",
                                                                maxlength: "Senha entre 2 e 6 caracteres"
                                                            }
                                                        }
                                                    });

                                                });

                                                function SubmeterForm()
                                                {
                                                    $("#frmAlterarFidelidade").submit();
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
                    color: #FFF;
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
                #principal{
                    background: url('../img/fastfood.jpg');
                    background-repeat: no-repeat;
                    background-size: 100%;
                }
                #tableform{
                    width: 500px;
                    margin: 0 auto;

                }
                #frmAlterarFidelidade
                {
                    margin-bottom: 0px;
                    padding-bottom: 20px;
                }
                #frmAlterarFidelidade h2
                {
                    font-weight: bold;
                    color:#FF0;
                }
                #divForm{
                    margin: 20px auto;
                    background-image: url('../img/sombra.png');
                    background-repeat: repeat;
                    width: 550px;
                    height: auto;
                    margin-bottom: 20px;
                }

            </style>
        </head>
        <body>
            <div id="principal">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div id="divForm" >
                                <form id="frmAlterarFidelidade" name="frmAlterarFidelidade" action="validarFidelidade.php" method="POST">
                                    <?php
                                    include '../DBGourmet/BDFidelidade.php';
                                    $fiel = ConsultarUmFiel($_GET["id"]);
                                    ?>
                                    <input type="hidden" name="update" id="update" value="<?php print_r($fiel[0]); ?>">

                                    <table id="tableform" >
                                        <tr>
                                            <td colspan="2"><h2><center> Alterar Fiel</center></h2></td>
                                        </tr>
                                        <tr>
                                            <td><label>Código: </label></td>
                                            <td><input class="form-control"  value="<?php print_r($fiel[0]); ?>" name="txtCod" disabled="disabled" id="txtCod" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Cliente: </label></td>
                                            <td><input class="form-control" value="<?php print_r($fiel[2]); ?>" name="txtCliente" id="txtCliente" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Data Alteração: </label></td>
                                            <td><input class="form-control" readonly="readonly"  value="<?php echo DataBanco(); ?>" name="txtData" id="txtData" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Email: </label></td>
                                            <td><input class="form-control" value="<?php print_r($fiel[4]); ?>" name="txtEmail" id="txtEmail" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Login: </label></td>
                                            <td><input class="form-control" readonly="readonly" value="<?php print_r($fiel[6]); ?>" name="txtUsuario" id="txtUsuario" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Senha: </label></td>
                                            <td><input class="form-control" value="<?php print_r($fiel[7]); ?>" name="txtSenha" id="txtSenha" type="password">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2"><br />
                                                <br />
                                                <button class="btn btn-info" data-toggle="modal" data-target="#message" type="button" > Alterar Aluno </button>
                                                &nbsp;
                                                <button class="btn btn-default" type="button" onclick="location.href = '../index.php'" > Voltar </button></td>
                                        </tr>
                                    </table>

                                </form>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>

                    <div class="modal fade" id="message" role="dialog">
                        <div class="modal-dialog"> 
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Alteração de Fidelidade</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Você realmente deseja alterar seus dados??</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" id="btnAlterar" onclick="SubmeterForm();" class="btn btn-default" data-dismiss="modal">Alterar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>


    <?php
}

function DataBanco() {
    return date("Y-m-d");
}
