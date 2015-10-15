
<html>
    <head>
        <meta charset="UTF-8">
        <title>Le Gourmet: A Melhor Gastronomia da Região!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>  


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
                                        <div style="margin-top:-10px" ><img src="img/logo.png" width="100" height="100" /></div>
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
                                            <li><a href="Pedido/cadastroPedido.php">Fazer Pedido</a></li>
                                            <li><a href="Pedido/listarPedido.php">Listar Pedidos</a></li>
                                            <li><a href="Pedido/listaAlterarPedido.php">Alterar Pedido</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Sobre o Le Gourmet</a></li>
                                        </ul>
                                    </li>

                                    <!-- segundo item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Menu</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Menu/listarMenu.php">Nosso Menu</a></li>
                                            <li><a href="Menu/listarMenu.php#lanches">Lanches</a></li>
                                            <li><a href="Menu/listarMenu.php#bebidas">Bebidas</a></li>
                                            <li><a href="Menu/listarMenu.php#pratos">Pratos</a></li>
                                            <li><a href="Menu/listarMenu.php#sobremesas">Sobremesas</a></li>
                                        </ul>
                                    </li>

                                    <!-- terceiro item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Fidelidade</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Fidelidade/cadastroFidelidade.php">Se Cadastrar</a></li>
                                            <li><a href="Fidelidade/listaAlterarFidelidade.php">Alterar Dados</a></li>
                                        </ul>
                                    </li>

                                    <!-- quarto item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Sistema</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Curso/cadastroCurso.php">Abrir Novo Menu</a></li>
                                            <li><a href="Curso/listarCursosAbertos.php">Adicionar Atendente</a></li>
                                            <li><a href="Curso/listaAlterarCurso.php">Gerar Relatório</a></li>
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


        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>

    </body>
</html>
