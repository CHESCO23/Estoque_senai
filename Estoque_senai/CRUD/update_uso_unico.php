<?php
    require('../conn.php');
echo '<pre>';
print_r($_POST);
    echo'</pre>';

    $id=$_POST['id'];
    $prod_name =$_POST ['prod_name'];
    $quantidade = $_POST['quantidade'];
    $num_serie = $_POST['num_serie']; 
    
    
    if (empty($prod_name) ||empty($quantidade) ||empty($num_serie)){
        print "<script>alert('erro')</script>";
        print "<script>window.location.href='../cadastro_uso_unico.php'</script>";
    }else{
        $update_prod = $pdo->prepare("UPDATE uso_unico set 
        nome = :prod_name, 
        quantidade = :quantidade,
        num_serie = :num_serie 
         WHERE id = :id" );
        
    

    $update_prod->execute(array(
        ':prod_name' => $prod_name,
        ':quantidade' => $quantidade,
        ':num_serie' => $num_serie,
        ':id'=>$id
    ));
    echo "<script>alert('Salvo com sucesso')</script>";
    echo "<script>window.location.href='../tabela_uso_unico.php'</script>";


   
    }

?>