<?php

require_once '../Model/Produto.class.php';
require_once '../Model/Imagem.class.php';

$nome = $_POST['nomeProduto'];
$desc = $_POST['descProduto'];
$valor = $_POST['valorProduto'];


$nomeDaImagem = $_FILES['fotoProduto']['name'];
$tipoDaImagem = $_FILES['fotoProduto']['type'];
$bitesDaImagem = $_FILES['fotoProduto']['tmp_name'];

$p = new Produto();
$i = new Imagem();

//Insere os dados da Imagem e retorna o Id dela para relacionar com a tabela de Imagens
$idImg = $i->insert($nomeDaImagem,$bitesDaImagem,$tipoDaImagem);

//Verifica se a pessoa quis cadastrar um desconto
if(!empty($_POST['desconto']) && $_POST['desconto'] != 0):
    $desconto = $_POST['desconto'];
    $p->insertComDesconto($nome,$valor,$desc,$idImg,$desconto);
    header("Location: ../View/index.php"); /* Redirect browser */
    exit(); 
else:
    $p->insertSemDesconto($nome,$valor,$desc,$idImg);
    header("Location: ../View/index.php"); /* Redirect browser */
    exit(); 
endif;
