<?php
    require_once '../database/conexao.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Painel de Controle - EasyMoney</title>
    
    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
  <body>

<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Página Principal</a>
  <form class="form-inline">
    <button type="button" class="btn btn-outline-primary"><a href="desconto.php">Cadastrar Desconto <i class="fa fa-barcode"></i></a> </button>
    <button type="button" class="btn btn-outline-success"><a href="cad_produto.php">Cadastrar Produto <i class="fa fa-shopping-cart"></i></a> </button>
  </form>
           
</nav>

    <div class="container-fluid">
        <div class="row topo">
            <div class="container mensagem">
                <h2>Bem vindo ao Sistema de Vendas! </h2>
                <p>Com esse sistema você pode cadastrar produtos, fazer vendas, calcular frete, dar descontos por determinado período e ainda receber por email as vendas realizadas.</p>
                <p>Simples e fácil de utilizar! Não perdendo tempo em aprender a utilizar a ferramenta.</p>
            </div>

            <!-- Ultimos Produtos -->
            <div class="container">
                <h2>Seus Produtos <i class="fa fa-shopping-cart"></i></a></h2>
                <table class="table" id="tb_produtos">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Exibir Produto</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $con = conexao();
                        $query = "SELECT p.nome AS NomeProduto, p.id AS id ,p.descricao AS Descricao, p.preco AS PrecoOriginal, f.tipo AS TipoFoto, f.foto AS foto ,d.valor AS ValorDesconto, d.dataFim AS DataFinal 
                        FROM produto AS P INNER JOIN descontos AS d ON p.id_desconto = d.id 
                        INNER JOIN fotos as f ON p.id_foto = f.id";
                        $stmt = $con->prepare($query);
                        $stmt->execute();
                        //$row = $stmt->fetch(PDO::FETCH_OBJ);
                        //var_dump($row);
                        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    ?>
                            <tr>
                            <th scope="row">1</th>
                                <td><?php echo $row->NomeProduto; ?></td>
                                <td>R$ 
                                <?php 
                                    $prec = $row->PrecoOriginal - $row->ValorDesconto;
                                    echo number_format($prec,2, ',', '.'); 
                                ?>
                                </td>
                                <td><img class="img-responsive" src="../public/img/75x75.png" alt="Imagem do produto" class="rounded"></td>
                                <td><?php echo $row->Descricao; ?></td>
                                <td><a href="produto.php?id=<?php echo $row->id; ?>">Ir <i class="fas fa-chevron-right"></i></a></td>
                            </tr>
                        <?php
                        } 
                    ?>
                        
                    </tbody>
                </table>
            </div>
           
        </div>
        
    </div>
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- JQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/script.js"></script>
  </body>
</html>

    