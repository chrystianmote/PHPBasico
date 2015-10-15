
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
        <script type="text/javascript">
            $(document).ready({function(){
            $('#voltar').click(function (event) {

                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 600);
            });
            });
        </script>

    </head>


    <body id="topo">
        <header>
            <nav class="navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="navbar-header ">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                <center>
                                    <a class="navbar-brand" href="../index.php">
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
                                            <li><a href="../Pedido/cadastroPedido.php" >Fazer Pedido</a></li>
                                            <li><a href="../Pedido/listarPedido.php">Listar Pedidos</a></li>
                                            <li><a href="../Pedido/listaAlterarPedido.php">Alterar Pedido</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Sobre o Le Gourmet</a></li>
                                        </ul>
                                    </li>

                                    <!-- segundo item do nav bar-->
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Menu</strong><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="listarMenu.php">Nosso Menu</a></li>
                                            <li><a href="#lanches">Lanches</a></li>
                                            <li><a href="#bebidas">Bebidas</a></li>
                                            <li><a href="#pratos">Pratos</a></li>
                                            <li><a href="#sobremesas">Sobremesas</a></li>
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
                                            <li><a href="../Curso/cadastroCurso.php">Abrir Novo Menu</a></li>
                                            <li><a href="../Curso/listarCursosAbertos.php">Adicionar Atendente</a></li>
                                            <li><a href="../Curso/listaAlterarCurso.php">Gerar Relatório</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="navbar-right">
                                            <button style="margin-top: 10px;" data-toggle="modal" data-target="#message" type="button" class="btn btn-default"> <strong>Login </strong><span class="glyphicon glyphicon-log-in"></span></button>
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
                <section>
                    <div id="lanches">
                        <p>
                        <h3> LANCHES </h3>
                        </p>
                    </div>
                </section>
                <div class="col-md-4">
                    <div id="categoria">
                        <center>
                            <a class="btn btn-danger" href="#" target="">
                                <img src="../img/hamb.png" alt=""/>
                                <p>
                                <h2> Hamburger de Carne</h2>
                                </p>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="categoria">
                        <center>
                            <a class="btn btn-danger" href="#" target="">
                                <img src="../img/hamb2.png" alt=""/>
                                <p>
                                <h2> Hamburger de Frango</h2>
                                </p>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="categoria">
                        <center>
                            <a class="btn btn-danger" href="#" target="">
                                <img src="../img/batatas.png" alt=""/>
                                <p>
                                <h2> Acompanhamentos</h2>
                                </p>
                            </a>
                        </center>
                    </div>
                </div>   
            </div>

            <div class="row espaco">

                <div class="col-md-5"></div>
                <div class="col-md-2"> 
                    <center> 
                        <a id="voltar" class="btn btn-warning" href="#topo"><img src="../img/topo.png" alt=""/></a> 
                    </center> 
                </div>
                <div class="col-md-5"></div>
            </div>

            <div class="row">
                <div id="imgBebidas">
                    <div id="bebidas">
                        <p>
                        <h3> BEBIDAS </h3>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div id="categoria">
                            <center>
                                <a class="btn btn-danger" href="#" target="">
                                    <img src="../img/bebida1.png" alt=""/>
                                    <p>
                                    <h2> Sucos</h2>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="categoria">
                            <center>
                                <a class="btn btn-danger" href="#" target="">
                                    <img src="../img/bebida2.png" alt=""/>
                                    <p>
                                    <h2> Água Tônica</h2>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="categoria">
                            <center>
                                <a class="btn btn-danger" href="#" target="">
                                    <img src="../img/bebida3.png" alt=""/>
                                    <p>
                                    <h2> Refrigerantes</h2>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>   
                </div>
            </div>


            <div class="row espaco2">

                <div class="col-md-5"></div>
                <div class="col-md-2"> 
                    <center> 
                        <a id="voltar" class="btn btn-warning" href="#topo"><img src="../img/topo.png" alt=""/></a> 
                    </center> 
                </div>
                <div class="col-md-5"></div>
            </div>

            <div class="row">
                <div id="imgPratos">
                    <div id="pratos">
                        <h3> PRATOS </h3>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="categoria">
                                    <center>
                                        <a class="btn btn-danger" href="#" target="">
                                            <img src="../img/prato1.png" alt=""/>
                                            <p>
                                            <h2> Linguiça Toscana</h2>
                                            </p>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="categoria">
                                    <center>
                                        <a class="btn btn-danger" href="#" target="">
                                            <img src="../img/prato2.png" alt=""/>
                                            <p>
                                            <h2> Frango Compact</h2>
                                            </p>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="categoria">
                                    <center>
                                        <a class="btn btn-danger" href="#" target="">
                                            <img src="../img/prato3.png" alt=""/>
                                            <p>
                                            <h2>Frango Brasil</h2>
                                            </p>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="categoria">
                                    <center>
                                        <a class="btn btn-danger" href="#" target="">
                                            <img src="../img/prato4.png" alt=""/>
                                            <p>
                                            <h2> Costela Bovina</h2>
                                            </p>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="categoria">
                            <center>
                                <a class="btn btn-danger" href="#" target="">
                                    <img src="../img/salada.png" alt=""/>
                                    <p>
                                    <h2> Salada Leve</h2>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row espaco2">

                <div class="col-md-5"></div>
                <div class="col-md-2"> 
                    <center> 
                        <a id="voltar" class="btn btn-warning" href="#topo"><img src="../img/topo.png" alt=""/></a> 
                    </center> 
                </div>
                <div class="col-md-5"></div>
            </div>


            <div class="row">
                <div id="imgSobremesas">
                    <div id="sobremesas">
                        <p>
                        <h3> SOBREMESAS </h3>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div id="categoria">
                            <center>
                                <a class="btn btn-danger" href="#" target="">
                                    <img src="../img/sobremesa1.png" alt=""/>
                                    <p>
                                    <h2> Mix </h2>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="categoria">
                            <center>
                                <a class="btn btn-danger" href="#" target="">
                                    <img src="../img/sobremesa2.png" alt=""/>
                                    <p>
                                    <h2> Mega Sundae</h2>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="categoria">
                            <center>
                                <a class="btn btn-danger" href="#" target="">
                                    <img src="../img/sobremesa3.png" alt=""/>
                                    <p>
                                    <h2> Casquinhas</h2>
                                    </p>
                                </a>
                            </center>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </body>
</html>

