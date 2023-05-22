<?php
require('../conn.php');

$prod_name =$_POST ['prod_name'];
$quantidade = $_POST['quantidade'];
$num_serie = $_POST['num_serie']; 


if (empty($prod_name) ||empty($quantidade) ||empty($num_serie)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../cadastro_uso_unico.php'</script>";
}else{
    $cad_uso_unico = $pdo->prepare("INSERT INTO uso_unico(nome,quantidade,num_serie)
    VALUES(:prod_name,:quantidade,:num_serie)");
    $cad_uso_unico->execute(array(
        ':prod_name' => $prod_name,
        ':quantidade' =>$quantidade,
        ':num_serie' => $num_serie
       
    ));
    print "<script>alert('Salvo com sucesso')</script>";
    print "<script>window.location.href='../menu.php'</script>";
	exit();
}