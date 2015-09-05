<?php

include 'lib/XMLFunctions.php';

$xml = criarBaseXML("arquivo2.xml", "Notícias");

$noticia = $xml->addChild("noticia");
$titulo = $noticia->addChild("titulo", "Exemplo de um título");
$data = $noticia->addChild("data", "13/08/2015");
$autor = $noticia->addChild("autor", "Daniel");
$conteudo = $noticia->addChild("conteudo", "asd asdkça sdas çldas kçasd çasld as das ");

$xml->saveXML("arquivo2.xml");

$noticia = $xml->addChild("noticia");
$titulo = $noticia->addChild("titulo", "Exemplo de um título 2");
$data = $noticia->addChild("data", "14/08/2015");
$autor = $noticia->addChild("autor", "Fulano");
$conteudo = $noticia->addChild("conteudo", "asd asdkça sdas çldas kçasd çasld as das ");

$xml->saveXML("arquivo2.xml");



echo "<pre>";
print_r($xml);
echo "</pre>";

