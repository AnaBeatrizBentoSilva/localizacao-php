<?php
function get_endereco($cep)
{
    // Formatar CEP removendo caracteres não numéricos
    $cep = preg_replace("/[^0-9]/", "", $cep);

    // Construir a URL do webservice ViaCEP
    $url = "http://viacep.com.br/ws/$cep/xml/";

    // Carregar o arquivo XML resultante da consulta ao webservice
    $xml = simplexml_load_file($url);

    // Retornar o objeto XML com as informações do endereço
    return $xml;
}

// Obter o endereço com base no CEP enviado via método POST
$endereco = get_endereco($_POST["txtCEP"]);

// Exibir as informações do endereço
echo "Rua: $endereco->logradouro";
echo "<br>";
echo "Complemento: $endereco->complemento";
echo "<br>";
echo "Bairro: $endereco->bairro";
echo "<br>";
echo "Cidade: $endereco->localidade";
echo "<br>";
echo "Estado: $endereco->uf";
echo "<br>";
echo "<br>";
?>

