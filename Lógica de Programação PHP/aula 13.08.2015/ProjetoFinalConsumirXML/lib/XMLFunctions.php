<?php

date_default_timezone_set("Brazil/East");

/**
 * Cria um arquivo XML e retorna seu conteúdo
 * @param string $nomeDoArquivo nome do arquivo composto por URL (endereço) + nome do arquivo
 * @param string $nomeDaBase nome que representa, simbolicamente, o dados que o arquivo XML possui
 * @return xml retorna o conteúdo do arquivo XML criado
 */
function criarBaseXML($nomeDoArquivo, $nomeDaBase) {
    /**
     * cabeçalho do arquivo XML seguido da tag raiz do arquivo;
     * exemplo:
     * <?xml version='1.0' encoding='utf-8' ?>
     * <informações></informações>
     * */
    //cria um conteúdo XML e salva na variável $xml
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?>'
            . '<dados></dados>');
    //adicionando atributos ao cabeçalho do arquivo XML
    $xml->addAttribute('nomeDaBase', $nomeDaBase);
    $xml->addAttribute('dataÚltimaAtualização', date("d-m-Y"));
    $xml->addAttribute('horaÚltimaAtualização', date("H:i:s"));

    //salva o conteúdo XML em um arquivo, caso não exista, o arquivo é criado
    $xml->saveXML($nomeDoArquivo);

    //retorna o conteúdo XML
    return $xml;
}

/**
 * Lê um arquivo XML e salva o seu conteúdo dentro de um array
 * @param string $nomeDoArquivo nome do arquivo composto por URL (endereço) + nome do arquivo
 * @return xml retorna uma array com todos os elementos filhos do arquivo XML, cada elemento é uma posição do array 
 */
function lerBaseXML($nomeDoArquivo) {
    if (file_exists($nomeDoArquivo)) {
        $xml = simplexml_load_file($nomeDoArquivo);

        //se o arquivo não tem nenhum elemento salvo
        if ($xml->count() == 0) {
            return 0;
        } else {
            //se o arquivo possui elementos
            $arr = array();
            //percorre todos os elementos filho do arquivo (children)
            foreach ($xml->children() as $valor) {
                //e armazena em $arr
                $arr[] = $valor;
            }
            //retorna o array $arr preenchido
            return $arr;
        }
    } else {
        //Mata o processamento enviando uma mensagem de erro
        die("<h3>Arquivo Inexistente</h3>");
    }
}

function alterarXML($nomeDoArquivo, $nomeDaBase) {
    /**
     * cabeçalho do arquivo XML seguido da tag raiz do arquivo;
     * exemplo:
     * <?xml version='1.0' encoding='utf-8' ?>
     * <informações></informações>
     * */
    //cria um conteúdo XML e salva na variável $xml
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?>'
            . '<dados></dados>');
    //adicionando atributos ao cabeçalho do arquivo XML
    $xml->addAttribute('nomeDaBase', $nomeDaBase);
    $xml->addAttribute('dataÚltimaAtualização', date("d-m-Y"));
    $xml->addAttribute('horaÚltimaAtualização', date("H:i:s"));
    
    return $xml;
}
