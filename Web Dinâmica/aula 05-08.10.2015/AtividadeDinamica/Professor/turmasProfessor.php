<html>
    <head>
        <meta charset="UTF-8">
        <title>Minhas Turmas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="../js/jquery.validate.js" ></script>

        <style type="text/css">
            #espaco{
                height: 20px;
            }


        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div id="divForm">
                        <table id="tableform">
                            <tr>
                                <td colspan="2"><h2><center> Consultar Turmas</center></h2></td>
                            </tr>
                            <tr id="espaco">
                                &nbsp;
                            </tr>
                            <tr>
                                <td><label>Código do Professor: </label></td>
                                <td><input class="form-control" name="txtCod" id="txtCod" type="text"></td>
                            </tr>
                            <tr id="espaco">
                                &nbsp;
                            </tr>
                            <tr>
                                <td><label>Nome: </label></td>
                                <td><input class="form-control" name="txtNome" id="txtNome" type="text"></td>
                            </tr>
                            <tr id="espaco">
                                &nbsp;
                            </tr>
                            <tr>
                                <td colspan="2"><center><a class="btn btn-default" href="#" target="conteudo"> <img src="../img/search.png" alt=""/> </a></center> </td>
                            </tr>
                            <tr id="espaco">
                                &nbsp;
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <iframe width="100%" height="250px" name="conteudo" src="" >
        </div>     
    </body>
</html>
<?php
