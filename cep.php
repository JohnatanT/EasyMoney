<?php
session_start();

use EscapeWork\Frete\Correios\PrecoPrazo;
use EscapeWork\Frete\Correios\Data;
use EscapeWork\Frete\FreteException;

require_once 'vendor/autoload.php';

$cep = $_POST['cep'];
$cep = strval($cep);

$frete = new PrecoPrazo();
$frete->setCodigoServico(Data::SEDEX)               
      ->setCepOrigem('20081902')   # apenas numeros, sem hifen(-)
      ->setCepDestino($cep) # apenas numeros, sem hifen(-)
      ->setComprimento(30)              # obrigatorio
      ->setAltura(30)                   # obrigatorio
      ->setLargura(30)                  # obrigatorio
      ->setDiametro(30)                 # obrigatorio
      ->setPeso(0.5);                   # obrigatorio

try {
    $result = $frete->calculate();

    //echo $result['cServico']['Valor'];
    //echo $result['cServico']['PrazoEntrega'];

    $_SESSION['valorCep'] = $result['cServico']['Valor'];
    $_SESSION['PrazoEntrega'] = $result['cServico']['PrazoEntrega'];
    //var_dump($result); // debugge o resultado!
    
    echo json_encode($result);
}
catch (FreteException $e) {
    // trate o erro adequadamente (e não escrevendo na tela)
    echo $e->getMessage();
    echo $e->getCode(); // este código é o código de erro dos correios
                        // pode ser usado pra dar mensagens como CEP inválido para o cliente
}