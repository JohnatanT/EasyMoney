<?php
require_once '../database/conexao.php';

class Produto
{
    private $nome;
    private $preco;
    private $desc;
    private $id_foto;
    private $id_desconto;

    //Insere os dados do produto com desconto
    public function insertComDesconto($nome,$preco,$desc,$id_foto,$id_desconto)
    {
        $con = conexao();
        $query = "INSERT INTO produto(nome,preco,descricao,id_foto,id_desconto) VALUES(:nome,:preco,:descr,:id_foto,:id_desconto)";
        $stmt = $con->prepare($query);
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':preco',$preco);
        $stmt->bindValue(':descr',$desc);
        $stmt->bindValue(':id_foto',$id_foto);
        $stmt->bindValue(':id_desconto',$id_desconto);
        $stmt->execute();
    }

    //Insere os dados do produto sem desconto
    public function insertSemDesconto($nome,$preco,$desc,$id_foto,$id_desconto)
    {
        $con = conexao();
        $query = "INSERT INTO produto(nome,preco,descricao,id_foto,id_desconto) VALUES(:nome,:preco,:descr,:id_foto,:id_desconto)";
        $stmt = $con->prepare($query);
        $stmt->bindValue(':nome',$nome);
        $stmt->bindValue(':preco',$preco);
        $stmt->bindValue(':descr',$desc);
        $stmt->bindValue(':id_foto',$id_foto);
        $stmt->bindValue(':id_desconto',$id_desconto);
        $stmt->execute();

    }

}