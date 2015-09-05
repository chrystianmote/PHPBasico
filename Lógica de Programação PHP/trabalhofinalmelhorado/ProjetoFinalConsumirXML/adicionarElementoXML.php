<?php
if (isset($_GET["id"])) {
    $idNoticia = $_GET["id"];
    include 'lib/XMLFunctions.php';
    $arr = lerBaseXML("arquivo.xml");
    for ($i = 0; $i < count($arr); $i++) {
        if ($idNoticia == $arr[$i]->idNoticia) {
            $noticiaAchada = $arr[$i];
            break;
        }
    }
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <title> Alterando Notícia  </title>
        </head>
        <body>
            <form action="escreveArquivoXML.php" method="POST">
                <div class="container"  >
                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Título:
                            </p>
                            <div class="input-group">
                                <input type="text"  size="100" name="txtTitulo" 
                                       class="form-control" value="<?php echo $noticiaAchada->titulo; ?>">
                                <input type="hidden" name="idNoticia" value="<?php echo $noticiaAchada->idNoticia; ?>">
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Data:
                            </p>
                            <div class="input-group">
                                <input type="datetime" name="txtData"  
                                       class="form-control" value="<?php echo $noticiaAchada->data; ?>">
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Autor:
                            </p>
                            <div class="input-group">
                                <input type="text" size="100" name="txtAutor" 
                                       class="form-control" value="<?php echo $noticiaAchada->autor; ?> ">
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Conteúdo:
                            </p>
                            <div class="input-group">
                                <textarea name="txtConteudo" class="form-control" cols="102"rows="10"> <?php echo $noticiaAchada->conteudo ?> </textarea>
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div style=" margin-top: 20px" class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <center>
                                <span class="input-group-btn">
                                    <button class="btn btn-success" 
                                            type="submit">Alterar Notícia</button> 
                                </span>
                            </center>
                        </div>
                        <div class="col-md-4"></div>
                        <!--                <div class="col-md-3"></div>-->
                    </div>
                </div><!-- /.row -->
            </div>
        </form>
    </body>
    </html>
    <?php
} else {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <title> Adicionando Nova Notícia  </title>
        </head>
        <body>
            <form action="escreveArquivoXML.php" method="POST">
                <div class="container"  >
                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Título:
                            </p>
                            <div class="input-group">
                                <input type="text"  size="100" name="txtTitulo" 
                                       class="form-control">
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Data:
                            </p>
                            <div class="input-group">
                                <input type="datetime" name="txtData"  
                                       class="form-control" >
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Autor:
                            </p>
                            <div class="input-group">
                                <input type="text" size="100" name="txtAutor" 
                                       class="form-control">
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <p style=" margin-top: 30px">
                                Conteúdo:
                            </p>
                            <div class="input-group">
                                <textarea name="txtConteudo" class="form-control" cols="102"rows="10"></textarea>
                            </div><!-- /input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div style=" margin-top: 20px" class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <center>
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">Adicionar Notícia</button> 
                                </span>
                            </center>
                        </div>
                        <div class="col-md-4"></div>
                        <!--                <div class="col-md-3"></div>-->
                    </div>
                </div><!-- /.row -->
            </div>
        </form>
    </body>
    </html>

    <?php
}
