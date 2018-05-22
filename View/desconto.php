<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro de Desconto - EasyMoney</title>
    
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

    <div class="container">
        <h2>Cadastre seu desconto <i class="fas fa-gift"></i></h2>
        <p>Ao criar um desconto você pode aplica-lo na hora de criar um produto, esse desconto irá permanecer com o produto até o fim do seu prazo.</p>
        <p>Logo após o fim do desconto o produto ficará com seu preço original.</p>
    </div>

    <div class="container cadDesc">
        <form method="POST" action="../Controller/DescontoController.php">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nomeDesconto">Nome do Desconto (promoção)</label>
                    <input type="text" name="nomeDesconto" placeholder="Digite o nome" class="form-control" id="nomeDesconto">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="valorDesconto">Valor do Desconto (promoção)</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                        <input type="text" placeholder="Digite o valor" name="valorDesconto" class="money form-control" id="valorDesconto" aria-label="Valor (em reais)">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="dataDesconto">Data de fim do Desconto (promoção)</label>
                    <input type="date" class="form-control" id="dataDesconto" name="dataDesconto">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-danger">Cadastrar</button>
        </form>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- JQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
    <script src="../publicjs/bootstrap.min.js"></script>
    <script src="../public/js/script.js"></script>
  </body>
</html>
