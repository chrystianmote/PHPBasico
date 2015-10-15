<html>
    <head>
        <title>Cadastrar Matricula</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery.validate.js" ></script>

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
                <h2> Efetuar Nova Matrícula</h2>
                <form id="frmMatricula" name="frmMatricula" action="ValidacaoMatricula.php" method="post">
                    <?php
                    include './BancoDados/DBUtil.php';
                    $cursos = ConsultarCursosAbertos();
                    $alunos = ConsultarAlunos();
                    ?>

                    <table width="500px">
                        <tr>
                            <td><label>Código da Matricula: </label></td>
                            <td><input name="txtCod" id="txtCod" type="text"></td>
                        </tr>

                        <tr>
                            <td><label>Aluno: </label></td>
                            <td><select name="sltAluno" id="sltAluno">
                                    <option value="">Selecionar Aluno...</option>
                                    <?php
                                    for ($i = 0; $i < count($alunos); $i++) {
                                            print_r('<option value="'.$alunos[$i][0].'">');
                                            print_r($alunos[$i][1]);
                                            echo '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><label>Cursos em Aberto: </label></td>
                            <td><select name="sltCurso" id="sltCurso">
                                    <option value="">Selecionar Curso...</option>
                                    
                                    <?php
                                    for ($i = 0; $i < count($cursos); $i++) {
                                            print_r('<option value="'.$cursos[$i][0].'">');
                                            print_r($cursos[$i][1]);
                                            echo '</option>';
                                    }
                                    ?>
                                    
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><label>Data de Cadastro: </label></td>

                            <td><input name = "txtDataCadastro" value="<?php echo date("Y-m-d"); ?>" readonly="readonly"  id = "txtDataCadastro" type = "text" placeholder = "dd/MM/YYYY" > </td>
                        </tr>

                        <tr>
                            <td><label>Status Matrícula: </label></td>
                            <td><select name="sltStatus" id="sltStatus">
                                    <option value="Fechada">Fechada</option>
                                    <option value="Em Aberto">Em Aberto</option>
                                    <option value="Cancelada">Cancelada</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td colspan= "2" > <br />
                                <br />
                                <button class= "btn btn-info" type= "submit" > Cadastrar Matricula </button>
                                &nbsp;
                                <button class= "btn btn-default" type= "reset" > Limpar </button>
                                &nbsp;
                                <button class= "btn btn-default" type= "button" onclick= "location.href = 'index.html'" > Voltar </button>
                            </td>
                        </tr>
                    </table>
                </form>
                <div class = "col-md-4" > </div>
            </div>
        </div>
    </div>
</body>
</html>



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

