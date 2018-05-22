<?php

require_once '../database/conexao.php';

class Imagem
{
    private $foto;
    private $tipo;
    private $nomeImg;

    //Insere os dados da imagem
    public function insert($nome,$foto,$tipo)
    {
        $con = conexao();
        $query = "INSERT INTO fotos(foto,tipo,nome) VALUES(:foto,:tipo,:nome)";  
        $stmt = $con->prepare($query);
        $stmt->bindValue(':foto',$foto);
        $stmt->bindValue(':tipo',$tipo);
        $stmt->bindValue(':nome',$nome);
        $stmt->execute();
        //returno id adicionado
        return $con->lastInsertId();
    }


}