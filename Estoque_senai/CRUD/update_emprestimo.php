<?php
    require('../conn.php');


    $id=$_POST['id'];
    $prod_name =$_POST ['prod_name'];
    $quantidade=$_POST['quantidade'];
    $num_serie= $_POST['num_serie']; 
    $responsavel= $_POST['responsavel'];

if (empty($prod_name) || empty($quantidade) || empty($num_serie)||empty($responsavel)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../cadastrar_emprestimo.php'</script>";
    }else{
        $update_prod = $pdo->prepare("UPDATE emprestimos set 
        nome = :prod_name,
        quantidade = :quantidade,
        num_serie = :num_serie, 
        responsavel=:responsavel WHERE id = :id" );
        
    

    $update_prod->execute(array(
        ':prod_name' => $prod_name,
        ':quantidade' => $quantidade,
        ':num_serie' => $num_serie,
        ':responsavel'=>$responsavel,
        ':id'=>$id
    ));
    echo "<script>alert('Salvo com sucesso')</script>";
    echo "<script>window.location.href='../tabela_emprestimos.php'</script>";

   
    }

?>