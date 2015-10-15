
<html>
    <head>
        <meta charset="UTF-8">
        <title>Le Gourmet: A Melhor Gastronomia da Região!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link href="../css/custom.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js" ></script>  
        <style>
            body > .container{
                background:#000 0 0;
            }
            #divForm{
                background-image: url('../img/sombra.png');
                background-repeat: repeat;
                width: 550px;
                height: auto;
                margin-bottom: 20px;
            }
            h3{
                font-weight: bold;
                color: #FF0;

            }
            table tr th,table tr td{
                color: #FFF;
            }
        </style>

    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="navbar-header ">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                <center>
                                    <a class="navbar-brand" href="index.php">
                                        <div style="margin-top:-10px" ><img src="../img/logo.png" width="100" height="100" /></div>
                                    </a>
                                </center>
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="collapse navbar-collapse " id="myNavbar">
                                <ul id="linkMenu" class="nav navbar-nav ">

                                    <!-- primeiro item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Pedido</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../Pedido/cadastroPedido.php">Fazer Pedido</a></li>
                                            <li><a href="../Pedido/listarPedido.php">Listar Pedidos</a></li>
                                            <li><a href="../Pedido/listaAlterarPedido.php">Alterar Pedido</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Sobre o Le Gourmet</a></li>
                                        </ul>
                                    </li>

                                    <!-- segundo item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Menu</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../Menu/listarMenu.php">Nosso Menu</a></li>
                                            <li><a href="../Menu/listarMenu.php#lanches">Lanches</a></li>
                                            <li><a href="../Menu/listarMenu.php#bebidas">Bebidas</a></li>
                                            <li><a href="../Menu/listarMenu.php#pratos">Pratos</a></li>
                                            <li><a href="../Menu/listarMenu.php#sobremesas">Sobremesas</a></li>
                                        </ul>
                                    </li>

                                    <!-- terceiro item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Fidelidade</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../Fidelidade/cadastroFidelidade.php">Se Cadastrar</a></li>
                                            <li><a href="../Fidelidade/listaAlterarFidelidade.php">Alterar Dados</a></li>
                                        </ul>
                                    </li>

                                    <!-- quarto item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Sistema</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Abrir Novo Menu</a></li>
                                            <li><a href="">Adicionar Atendente</a></li>
                                            <li><a href="">Gerar Relatório</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="navbar-right">
                                            <button style="margin-top: 10px;" data-toggle="modal" data-target="#message"  type="submit" class="btn btn-default"> <strong>Login </strong><span class="glyphicon glyphicon-log-in"></span></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>
        <div class="modal fade" id="message" role="dialog">
            <div class="modal-dialog"> 
                <!-- Modal content-->
                <button style="padding: 10px;" type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="well">
                    <form id="addMovieForm">
                        <div class="form-group">
                            <label for="username" class="control-label">Login</label>
                            <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Digite seu login">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" required="" title="Digite sua senha">
                            <span class="help-block"></span>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                        <a href="index.php" class="btn btn-default btn-block">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include '../DBGourmet/BDMenu.php';
        ?>

        <div class="container">
            <form name="frmPedido" id="frmPedido" method="POST" action="conferirPedido.php">
                <div class="row">

                    <div class="col-md-6">
                        <table id="divForm" class="table" width="500px">
                            <tr>
                                <td colspan="5"><center><h3>Lanches</h3></center></td>
                            </tr>
                            <tr>
                                <th width="30%">Item</th>
                                <th width="20%">Preço</th>
                                <th width="15%">Tempo</th>
                                <th width="8%">Pontos</th>
                                <th width="27%">Ação</th>
                            </tr>
                            <?php
                            $lanches = ConsultarMenusPorCategoria('Lanches');

                            for ($i = 0; $i < count($lanches); $i++) {
                                echo "<tr>";
                                for ($j = 1; $j < count($lanches[$i]); $j++) {
                                    echo "<td>" . $lanches[$i][$j] . "</td>";
                                }
                                echo "<td>";
                                echo "<input name='quant' id='quant' style=' color:#000; width:45px;' value= '0' min='0' max='10' type='number'> &nbsp; ";
                                echo "<button name=btnBebida" . $lanches[$i][0] . " class='btn btn-warning' type='button' value='" . $lanches[$i][0] . "'>Pedir</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>

                    </div>

                    <div class="col-md-6">
                        <table id="divForm" class="table" width="500px">

                            <tr>
                                <td colspan="5"><center><h3>Bebidas</h3></center></td>
                            </tr>
                            <tr>
                                <th width="30%">Item</th>
                                <th width="20%">Preço</th>
                                <th width="15%">Tempo</th>
                                <th width="8%">Pontos</th>
                                <th width="27%">Ação</th>
                            </tr>
                            <?php
                            $bebidas = ConsultarMenusPorCategoria('Bebidas');

                            for ($i = 0; $i < count($bebidas); $i++) {
                                echo "<tr>";
                                for ($j = 1; $j < count($bebidas[$i]); $j++) {
                                    echo "<td>" . $bebidas[$i][$j] . "</td>";
                                }
                                echo "<td>";
                                echo "<input name='quant' id='quant' style=' color:#000; width:45px;' value= '0' min='0' max='10' type='number'> &nbsp; ";
                                echo "<button name=btnBebida" . $bebidas[$i][0] . " class='btn btn-warning' type='button' value='" . $bebidas[$i][0] . "'>Pedir</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <table id="divForm" class="table" width="500px">

                            <tr>
                                <td colspan="5"><center><h3>Pratos</h3></center></td>
                            </tr>
                            <tr>
                                <th width="30%">Item</th>
                                <th width="20%">Preço</th>
                                <th width="15%">Tempo</th>
                                <th width="8%">Pontos</th>
                                <th width="27%">Ação</th>
                            </tr>
                            <?php
                            $pratos = ConsultarMenusPorCategoria('Pratos');

                            for ($i = 0; $i < count($pratos); $i++) {
                                echo "<tr>";
                                for ($j = 1; $j < count($pratos[$i]); $j++) {
                                    echo "<td>" . $pratos[$i][$j] . "</td>";
                                }
                                echo "<td>";
                                echo "<input name='quant' id='quant' style=' color:#000; width:45px;' value= '0' min='0' max='10' type='number'> &nbsp; ";
                                echo "<button name=btnBebida" . $pratos[$i][0] . " class='btn btn-warning' type='button' value='" . $pratos[$i][0] . "'>Pedir</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table id="divForm" class="table" width="500px">

                            <tr>
                                <td colspan="5"><center><h3>Sobremesas</h3></center></td>
                            </tr>
                            <tr>
                                <th width="30%">Item</th>
                                <th width="20%">Preço</th>
                                <th width="15%">Tempo</th>
                                <th width="8%">Pontos</th>
                                <th width="27%">Ação</th>
                            </tr>
                            <?php
                            $sobremesas = ConsultarMenusPorCategoria('Sobremesas');

                            for ($i = 0; $i < count($sobremesas); $i++) {
                                echo "<tr>";
                                for ($j = 1; $j < count($sobremesas[$i]); $j++) {
                                    echo "<td>" . $sobremesas[$i][$j] . "</td>";
                                }
                                echo "<td>";
                                echo "<input name='quant' id='quant' style=' color:#000; width:45px;' value= '0' min='0' max='10' type='number'> &nbsp; ";
                                echo "<button name=btnBebida" . $sobremesas[$i][0] . " class='btn btn-warning' type='button' value='" . $sobremesas[$i][0] . "'>Pedir</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <button class="btn btn-danger btn-lg" type="submit">Conferir Pedido</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>
