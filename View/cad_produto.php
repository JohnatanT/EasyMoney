<?php 
    require_once '../database/conexao.php';    
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro do Produto - EasyMoney</title>
    
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

    <div class="container" id="texto-cadProd">
        <h2>Cadastro de Produtos <i class="fas fa-list-ol"></i></h2>
        <p>Cadastre abaixo um novo produto para que ele possa ser vendido! Além de cadastrar o produto você pode adicionar um desconto já cadastrado, isso fará com que o produto tenha o preço subtraido do desconto pelo periodo de tempo estabelecido.</p>
    </div>

    <div class="container">
        <div class="row cadProd">
            <form  method="POST" action="../Controller/ProdutoController.php" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nomeProduto">Nome do Produto</label>
                        <input type="text" class="form-control"  name="nomeProduto" id="nomeProduto">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="descProduto">Descrição do Produto</label>
                        <input type="text" class="form-control"  name="descProduto" id="descProduto">
                    </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="valorProduto">Valor do Produto</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                            <input type="text" placeholder="Digite o valor"  name="valorProduto" class="money form-control" id="valorProduto" aria-label="Valor (em reais)">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="fotoProduto">Foto do Produto</label>
                        <input type="file" class="form-control-file"  name="fotoProduto" id="fotoProduto">
                    </div>
                </div>
                <div class="col-md-12">
                <h3>Deseja aplicar um desconto? Escolha um!</h3>
                    <select name="desconto" id-"descontoSelect" class="form-control">
                    <option value="0">Sem Desconto</option>
                    <?php
                        $con = conexao();
                        $query = "SELECT * from descontos";
                        $stmt = $con->prepare($query);
                        $stmt->execute();
                        //$row = $stmt->fetch(PDO::FETCH_OBJ);
                        //var_dump($row);
                        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
 
                    ?>
                        
                        <option value="<?php echo $row->id; ?>">Nome:  <?php echo $row->nome; ?> | Prazo: <?php echo $row->dataFim ?> | Valor: R$ <?php echo $row->valor; ?> </option>
                    <?php 
                        }
                    ?>
                    </select>
                </div>
                <button type="submit" id="cadProduto"  class="btn btn-outline-danger">Cadastrar</button>
            </form>
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
