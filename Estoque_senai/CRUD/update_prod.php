<?php
    require('../conn.php');
echo '<pre>';
print_r($_POST);
    echo'</pre>';

    $id=$_POST['id'];
    $prod_name =$_POST ['prod_name'];
    $num_serie = $_POST['num_serie']; 
    $quantidade = $_POST['quantidade'];
    $localizacao = $_POST['localizacao'];


    if (empty($prod_name) || empty($num_serie)||empty($quantidade)||empty($localizacao)){
        print "<script>alert('erro')</script>";
        print "<script>window.location.href='../cadastrar_produto.php'</script>";
    }else{
        $update_prod = $pdo->prepare("UPDATE produtos set 
        nome = :prod_name, 
        patrimonio_codigo = :num_serie, 
        quantidade = :quantidade, localizacao=:localizacao WHERE id = :id" );
        
    

    $update_prod->execute(array(
        ':prod_name' => $prod_name,
        ':num_serie' => $num_serie,
        ':quantidade' => $quantidade,
        ':localizacao'=>$localizacao,
        ':id'=>$id
    ));
    echo "<script>alert('Salvo com sucesso')</script>";
    echo "<script>window.location.href='../tabela_produto.php'</script>";

   
    }

?>