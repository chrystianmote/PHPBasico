<?php
include './BancoDados/DBUtil.php';
?>
<html>
    <head>
        <title>Bem vindo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    
        <style type="text/css">
            
            *{
                font-size: 100%;
            }
            
        </style>
    
    
    </head>
    
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $aluno = ConsultarAlunos();
                    ?>
                    <table cellspacing="0" class="table table-striped">
                        <tr style="color:#FFF; background-color: #5bc0de;" >
                            <th>Código</th>
                            <th>Nome do Aluno</th>
                            <th>Endereço</th>
                            <th>Cidade</th>
                            <th>UF</th>
                            <th>CEP</th>
                            <th>Telefone</th>
                            <th>Data Nasc</th>
                            <th>Responsável</th>
                            <th>Status</th>
                        </tr>                      
                        <?php
                        if (count($aluno) != 0) {
                            for ($i = 0; $i < count($aluno); $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < count($aluno[0]); $j++) {
                                    echo "<td>";
                                    print_r($aluno[$i][$j]);
                                    echo "</td>";
                                }
                                echo "</tr>";
                            }
                        }
                        ?> 
                        <tr>
                            <td colspan="10">
                        <center>
                            <button class="btn btn-info" onclick="location.href = 'index.html'" > Voltar</button>
                        </center>
                        </td>                            
                        </tr>  
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
