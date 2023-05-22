<?php
require('../conn.php');

$prod_name =$_POST ['prod_name'];
$num_serie = $_POST['num_serie']; 
$quantidade = $_POST['quantidade'];
$localizacao = $_POST['localizacao'];

if (empty($prod_name) || empty($num_serie)||empty($quantidade)||empty($localizacao)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../cadastrar_produto.php'</script>";
}else{
    $cad_produtos = $pdo->prepare("INSERT INTO produtos(nome,patrimonio_codigo,quantidade,localizacao)
    VALUES(:prod_name,:num_serie,:quantidade,:localizacao)");
    $cad_produtos->execute(array(
        ':prod_name' => $prod_name,
        ':num_serie' => $num_serie,
        ':quantidade' => $quantidade,
        ':localizacao' =>$localizacao
    ));
    print "<script>alert('Salvo com sucesso')</script>";
    print "<script>window.location.href='../menu.php'</script>";
	exit();
}