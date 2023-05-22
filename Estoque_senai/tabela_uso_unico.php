
<?php
    require("protect.php");
    require("conn.php");

    $tabela = $pdo->prepare("SELECT id, nome, num_serie,quantidade
    FROM uso_unico;");
    $tabela->execute();
    $rowTabela = $tabela->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela de uso único</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Tabela de uso único</h1>
            <br>  
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID PRODUTO</th>
            <th scope="col">NOME PRODUTO</th>
            <th scope="col">QUANTIDADE</th>
            <th scope="col">NÚMERO DE SÉRIE/PATRIMONIO</th>
            <th scope="col">EDITAR PRODUTO</th>
            <th scope="col">EXCLUIR PRODUTO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($rowTabela as $linha){
                echo '<tr>';
                echo "<th scope='row'>".$linha['id']."</th>";
                echo "<td>".$linha['nome']."</td>";
                echo "<td>".$linha['num_serie']."</td>";
                echo "<td>".$linha['quantidade']."</td>";
                echo '<td><a href=edit_uso_unico.php?id='.$linha['id'].' class="btn btn-warning">Editar</a></td>';
                echo '<td><a href=CRUD\del_uso_unico.php?id='.$linha['id'].' class="btn btn-danger">Dar baixa</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>
        <a href="cadastro_uso_unico.php" class="btn btn-primary">CADASTRAR USO UNICO </a>
        <a href="sub_menu.php" type="button" class="btn btn-primary float-end">Voltar</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>