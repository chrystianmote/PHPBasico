<?php

include 'lib/XMLFunctions.php';

if (isset($_POST["idNoticia"])) {

    $id = $_POST["idNoticia"];
    if (file_exists("arquivo.xml")) {
        $elementoXML = simplexml_load_file("arquivo.xml");
        $noticias = $elementoXML->children();
//percorre todos os elementos filho do arquivo (children)
        for ($i = 0; $i < count($noticias); $i++) {
            if ($id == $noticias[$i]->idNoticia) {
                $noticias[$i]->titulo = $_POST["txtTitulo"];
                $noticias[$i]->autor = $_POST["txtAutor"];
                $noticias[$i]->data = $_POST["txtData"];
                $noticias[$i]->conteudo = $_POST["txtConteudo"];

                $elementoXML->attributes()->dataÚltimaAtualização = date("d-m-Y");
                $elementoXML->attributes()->horaÚltimaAtualização = date("H:i:s");

                $elementoXML->saveXML("arquivo.xml");
                break;
            }
        }
        ?>
        <script>
            var resposta = window.confirm("Notícia Alterada com Sucesso! Deseja Voltar as Notícias?");
            if (resposta) {
                location.href = "lerArquivoXML.php";
            }
        </script>
        <?php

    }
} else {
    $idFinal = 0;
    if (file_exists("arquivo.xml")) {
        $xml = simplexml_load_file("arquivo.xml");
        $noticias = $xml->children();
        $idFinal = $noticias[count($noticias) - 1]->idNoticia;
        $xml->attributes()->dataÚltimaAtualização = date("d-m-Y");
        $xml->attributes()->horaÚltimaAtualização = date("H:i:s");
    } else {
        $xml = criarBaseXML("arquivo.xml", "Notícias");
    }

    $noticia = $xml->addChild("noticia");
    $noticia->addChild("idNoticia", ($idFinal + 1));
    $noticia->addChild("titulo", $_POST["txtTitulo"]);
    $noticia->addChild("data", $_POST["txtData"]);
    $noticia->addChild("autor", $_POST["txtAutor"]);
    $noticia->addChild("conteudo", $_POST["txtConteudo"]);

    $xml->saveXML("arquivo.xml");
    ?>
    <script>
        var resposta = window.confirm("Notícia Cadastrada com Sucesso! Deseja Voltar as Notícias?");
        if (resposta) {
            location.href = "lerArquivoXML.php";
        }
    </script>
    <?php

}


