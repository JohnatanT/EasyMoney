<?php
require_once '../database/conexao.php';

class Desconto
{
    private $nome;
    private $dataFim;
    private $valor;

    //Insere os dados do desconto
    public function insert($nome,$dataFim,$valor)
    {
        $con =  conexao();
        $query = "INSERT INTO descontos(valor,dataFim,nome) VALUES (:valor,:dataFim,:nome)";
        $stmt = $con->prepare($query);
        $stmt->bindValue(':valor',$valor);
        $stmt->bindValue(':dataFim',$dataFim);
        $stmt->bindValue(':nome',$nome);
        if($stmt->execute()): 
            return true;
        else:
            return false;
        endif;

    }

}