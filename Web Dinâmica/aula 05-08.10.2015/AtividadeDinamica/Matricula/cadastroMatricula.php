<?php
if (!isset($_GET["id"])) {
    ?>

    <html>
        <head>
            <title>Cadastrar Matricula</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../css/estilo.css">
            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="../js/jquery.validate.js" ></script>

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
                        <form id="frmMatricula" name="frmMatricula" action="ValidacaoMatricula.php" method="post">
                            <?php
                            include '../BancoDados/DBCurso.php';
                            include '../BancoDados/DBAluno.php';
                            include '../BancoDados/DBMatricula.php';
                            $cursos = ConsultarCursosAbertos();
                            $alunos = ConsultarAlunosMatricula();
                            $maiorCodigo = MaiorIDMatricula();
                            ?>

                            <table id="tableform">
                                <tr>
                                    <td colspan="2"><h2><center> Efetuar Nova Matrícula</center></h2></td>
                                </tr>
                                <tr>
                                    <td><label>Código da Matricula: </label></td>
                                    <td><input class="form-control" name="txtCod" readonly="readonly" id="txtCod" value="<?php echo ($maiorCodigo[0] + 1); ?>" type="text"></td>
                                </tr>

                                <tr>
                                    <td><label>Aluno: </label></td>
                                    <td><select class="form-control" name="sltAluno" id="sltAluno">
                                            <option value="">Selecionar Aluno...</option>
                                            <?php
                                            for ($i = 0; $i < count($alunos); $i++) {
                                                print_r('<option value="' . $alunos[$i][0] . '">');
                                                print_r($alunos[$i][1]);
                                                echo '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>Cursos em Aberto: </label></td>
                                    <td><select class="form-control" name="sltCurso" id="sltCurso">
                                            <option value="">Selecionar Curso...</option>

                                            <?php
                                            for ($i = 0; $i < count($cursos); $i++) {
                                                print_r('<option value="' . $cursos[$i][0] . '">');
                                                print_r($cursos[$i][1]);
                                                echo '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>Data de Cadastro: </label></td>

                                    <td><input class="form-control" name = "txtDataCadastro" value="<?php echo date("Y-m-d"); ?>" readonly="readonly"  id = "txtDataCadastro" type = "text" placeholder = "dd/MM/YYYY" > </td>
                                </tr>

                                <tr>
                                    <td><label>Status Matrícula: </label></td>
                                    <td><select class="form-control" name="sltStatus" id="sltStatus">
                                            <option value="Fechada">Fechada</option>
                                            <option value="Em Aberto">Em Aberto</option>
                                            <option value="Cancelada">Cancelada</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan= "2" > 
                                        <br />
                                        <br />
                                <center>
                                    <button class= "btn btn-info" type= "submit" > Cadastrar Matricula </button>
                                    &nbsp;
                                    <button class= "btn btn-default" type= "button" onclick= "location.href = '../index.html'" > Voltar </button>
                                </center>    
                                </td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>  
                <div class = "col-md-2" > </div>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    ?>

    <html>
        <head>
            <title>Alterar Matricula</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../css/estilo.css">
            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
            <script type="text/javascript" src="../js/jquery.validate.js" ></script>

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
                        <form id="frmAlterarMatricula" name="frmAlterarMatricula" action="ValidacaoMatricula.php" method="post">
                            <?php
                            include '../BancoDados/DBMatricula.php';
                            $idMat = $_GET["id"];

                            $matricula = ConsultarUmaMatricula($idMat);
                            ?>

                            <table id="tableform">
                                <tr>
                                    <td colspan="2"><h2><center> Alterar Matricula</center></h2></td>
                                </tr>
                                <tr>
                                    <td><label>Código da Matricula: </label></td>
                                    <td><input class="form-control" name="update" readonly="readonly" id="update" value="<?php echo $idMat; ?>" type="text"></td>
                                </tr>

                                <tr>
                                    <td><label>Aluno: </label></td>
                                    <td><select class="form-control" name="sltAluno" id="sltAluno">
                                            <option value="x"><?php echo $matricula[0]; ?></option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>Cursos em Aberto: </label></td>
                                    <td><select class="form-control" name="sltCurso" id="sltCurso">
                                            <option value="x"><?php echo $matricula[1]; ?></option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label>Data de Cadastro: </label></td>

                                    <td><input class="form-control" name = "txtDataCadastro" value="<?php echo $matricula[2]; ?>" readonly="readonly"  id = "txtDataCadastro" type = "text" placeholder = "dd/MM/YYYY" > </td>
                                </tr>

                                <tr>
                                    <td><label>Status Matrícula: </label></td>
                                    <td><select class="form-control" name="sltStatus" id="sltStatus">
                                            <option value="Fechada"<?php echo Onselected("Fechada", $matricula[3]); ?>>Fechada</option>
                                            <option value="Em Aberto"<?php echo Onselected("Em Aberto", $matricula[3]); ?>>Em Aberto</option>
                                            <option value="Cancelada"<?php echo Onselected("Cancelada", $matricula[3]); ?>>Cancelada</option>                                        
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan= "2" > 
                                        <br />
                                        <br />
                                <center>
                                    <button class= "btn btn-info" type= "submit" > Cadastrar Matricula </button>
                                    &nbsp;
                                    <button class= "btn btn-default" type= "button" onclick= "location.href = '../index.html'" > Voltar </button>
                                </center>    
                                </td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div> 
                <div class = "col-md-4" > </div>
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
