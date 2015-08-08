<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Achar datas:
        </title>
        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="GeraData.php" method="POST">
            <div class="col-md-4" ></div>
            <div class="col-md-4" style="margin-top: 20px; margin-bottom: 20px">
                Digite o Dia: <input class="input-group form-control"  size="20" type="text" name="txtDia">
                Digite o Mês: <input class="input-group form-control"  size="20" type="text" name="txtMes">
                Digite o Ano: <input class="input-group form-control"  size="20" type="text" name="txtAno">
                <div class="row" style="margin-top: 5px">
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <input class="btn btn-default" type="submit" value="Enviar">
                    </div>
                    <div class="col-md-5"></div>
                </div>

            </div>
            <div></div>


        </form> 


        <?php
        // put your code here
        ?>
    </body>
</html>
