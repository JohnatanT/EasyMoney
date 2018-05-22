<?php

require_once '../Model/Desconto.class.php';

$srv = new Desconto();

$nome = $_POST['nomeDesconto'];
    if(is_string($nome)):
        echo 'É do tipo String.';
    else:
        echo 'Não é do tipo String.';
    endif;

$valorDesconto = $_POST['valorDesconto'];
$valorDesconto = intval($valorDesconto);
    if(is_integer($valorDesconto)):
        echo 'É do tipo Integer.';
    else:
        echo 'Não é do tipo Integer.';
    endif;

$dataDesconto = $_POST['dataDesconto'];

//Insere os dados do Desconto
if($srv->insert($nome,$dataDesconto,$valorDesconto)):
    header("Location: ../View/desconto.php"); /* Redirect browser */
    exit(); 
endif;