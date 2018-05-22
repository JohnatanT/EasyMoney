<?php 

//Arquivo de Testes para Conexão

require_once 'conexao.php';

$con =  conexao();

$query = "SELECT p.nome AS NomeProduto, p.descricao AS Descricao, p.preco AS PrecoOriginal, f.tipo AS TipoFoto, d.valor AS ValorDesconto, d.dataFim AS DataFinal 
FROM produto AS P INNER JOIN descontos AS d ON p.id_desconto = d.id 
INNER JOIN fotos as f ON p.id_foto = f.id";
$stmt = $con->prepare($query);
$stmt->execute();

/*
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo $row->id . "<br/>";
    echo $row->valor . "<br/>";
    echo $row->nome . "<br/>";
    echo $row->dataFim . "<br/>";

}  
*/ 
$row = $stmt->fetch(PDO::FETCH_OBJ);
var_dump($row);

/* SELECT p.nome AS NomeProduto, p.descricao AS Descricao, p.preco AS PrecoOriginal, f.tipo AS TipoFoto, d.valor AS ValorDesconto, d.dataFim AS DataFinal 
    FROM produto AS P INNER JOIN descontos AS d ON p.id_desconto = d.id 
    INNER JOIN fotos as f ON p.id_foto = f.id; 

*/

