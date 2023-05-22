<?php
    require ("conn.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        header("Location: index.php");
    }
    
    $tabela_produto = $pdo->prepare("SELECT * FROM produtos WHERE id=:id");
    $tabela_produto->execute(array(':id'=>$id));
    $rowTable = $tabela_produto->fetchAll();

?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
        <title>Cadastro de produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://fonts.cdnfonts.com/css/bankgothic-lt-bt" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body class="fundo">
    
        <div class="container">
            <h1 style="text-align: center;">Editar produtos</h1>
            <br>
        <footer>
            <form action="CRUD/update_prod.php" method="post">
               

               
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">nome do produto: </label>
                        <input type="text" name="prod_name" id="" class="form-control" placeholder="Digite o nome do produto">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">numero de série/patrimonio: </label>
                        <input type="text" name="num_serie" id="" class="form-control" placeholder="Digite o número de série/patrimonio">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">quantidade: </label>
                        <input type="text" name="quantidade" id="" class="form-control" placeholder="Digite a quantidade">
                        <br>
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">localização: </label>
                        <input type="text" name="localizacao" id="" class="form-control" placeholder="Digite a localização">
                        <br>
                    </div>
                </div>
                <input type="hidden" name='id' value=<?php echo $rowTable[0]['id']?>>
                <div class="form-group offset-md-3">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-success" value="Editar produto">
                    <a href="tabela_produto.php" type="button" class="btn btn-primary float-end">Voltar</a>
                </div> 
               </div>
               
            </form>
        </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  


    </body>
</html>
