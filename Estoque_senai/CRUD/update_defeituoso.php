<?php
    require('../conn.php');
echo '<pre>';
print_r($_POST);
    echo'</pre>';
    $id=$_POST['id'];
   
$prod_name =$_POST ['prod_name'];
$num_serie = $_POST['num_serie']; 
$defeito = $_POST['defeito'];

if (empty($prod_name) || empty($num_serie)||empty($defeito)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../cadastro_defeituoso.php'</script>";
    }else{
        $update_prod = $pdo->prepare("UPDATE defeituoso set 
        nome = :prod_name, 
        num_serie= :num_serie, 
        defeito = :defeito WHERE id = :id" );
        
    

    $update_prod->execute(array(
        ':prod_name' => $prod_name,
        ':num_serie' => $num_serie,
        ':defeito' => $defeito,
        ':id'=>$id
    ));
    echo "<script>alert('Salvo com sucesso')</script>";
    echo "<script>window.location.href='../tabela_defeituoso.php'</script>";


   
    }

?>