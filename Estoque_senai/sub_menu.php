<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
        <title>Cadastro de ferramentas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="menu.css" />
    </head>
    <body class="fundo">
    <div class="navbar_superior">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    
                </li>
                
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                
                </ul>
                <form action="index.php" method="post">
                <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit">Sair</button>
                </form>
                </form>
                <form action="menu.php">
                <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit">Voltar</button>
                </form>
            </form>
            </div>
            </div>
        </nav>
    </div>    
    
        <div class="container">
                <div class="menu">  
            <h1 style="text-align: center;">ESTOQUE</h1>
                </div>

            <form action="tabela_produto.php" method="post">
               
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                    <button class="custom-btn btn-5"><span>TABELA PRODUTO</span></button>
                    </div>
                </div>
            </form>
            <form action="tabela_chaves.php" method="post">
               
               <div class="form-group offset-md-3">
                   <div class="col-md-6">
                   <button class="custom-btn btn-5"><span>TABELA CHAVES</span></button>
                   </div>
               </div>
           </form>
           <form action="tabela_defeituoso.php" method="post">
               
               <div class="form-group offset-md-3">
                   <div class="col-md-6">
                   <button class="custom-btn btn-5"><span>TABELA DEFEITOS</span></button>
                   </div>
               </div>
           </form>
           <form action="tabela_emprestimos.php" method="post">
               
               <div class="form-group offset-md-3">
                   <div class="col-md-6">
                   <button class="custom-btn btn-5"><span>TABELA EMPRESTIMOS</span></button>
                   </div>
               </div>
           </form>
           <form action="tabela_uso_unico.php" method="post">
               
               <div class="form-group offset-md-3">
                   <div class="col-md-6">
                   <button class="custom-btn btn-5"><span>TABELA USO ÚNICO</span></button>
                   </div>
               </div>
          
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  


    </body>
</html>