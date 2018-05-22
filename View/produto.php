<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Página do Produto - EasyMoney</title>
    
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
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="../public/img/300x300.png" alt="Imagem do produto" class="rounded">
            </div>
            <div class="col-md-6">
                <h3>Nome do Produto</h3>
                <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto.</p>
                <p><strike>VALOR: R$ 120,00</strike></p> 
                <p>VALOR: R$ 90,00</p>
                <label for="frete">Cacule o frete: </label>
                <input type="text" name="frete" id="frete" placeholder="Digite seu Cep" class="cep form-control">
                <button type="button" id="calcCep" class="btn btn-outline-success">Calcular Frete</button>
                <button type="button" class="btn btn-outline-success">Comprar</button>
                <button type="button" class="btn btn-outline-danger">Excluir Produto</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Informações de Entrega <i class="fas fa-box"></i></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Preço do Frete: R$<?php echo $_SESSION['valorCep']; ?></p>
                        <p>Tempo estimado de entrega: <?php echo $_SESSION['PrazoEntrega']; ?> dias</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                    </div>
                    </div>
                </div>
                </div>


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
