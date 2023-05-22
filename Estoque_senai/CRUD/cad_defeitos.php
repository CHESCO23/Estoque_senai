<?php
require('../conn.php');

$prod_name =$_POST ['prod_name'];
$num_serie = $_POST['num_serie']; 
$defeito = $_POST['defeito'];

if (empty($prod_name) || empty($num_serie)||empty($defeito)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../cadastro_chaves.php'</script>";
}else{
    $cad_defeitos = $pdo->prepare("INSERT INTO defeituoso(nome,num_serie,defeito)
    VALUES(:prod_name,:num_serie,:defeito)");
    $cad_defeitos->execute(array(
        ':prod_name' => $prod_name,
        ':num_serie' => $num_serie,
        ':defeito' =>$defeito
    ));
    print "<script>alert('Salvo com sucesso')</script>";
    print "<script>window.location.href='../menu.php'</script>";
	exit();
}