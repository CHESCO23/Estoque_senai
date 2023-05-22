<?php
require('../conn.php');

$prod_name =$_POST ['prod_name'];
$quantidade=$_POST['quantidade'];
$num_serie= $_POST['num_serie']; 
$responsavel= $_POST['responsavel'];

if (empty($prod_name) || empty($quantidade) || empty($num_serie)||empty($responsavel)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../cadastro_chaves.php'</script>";
}else{
    $cad_emprestimos = $pdo->prepare("INSERT INTO emprestimos(nome,quantidade,num_serie,responsavel)
    VALUES(:prod_name,:quantidade,:num_serie,:responsavel)");
    $cad_emprestimos->execute(array(
        ':prod_name' => $prod_name,
        ':quantidade'=> $quantidade,
        ':num_serie' => $num_serie,
        ':responsavel'=> $responsavel
    ));
    print "<script>alert('Salvo com sucesso')</script>";
    print "<script>window.location.href='../menu.php'</script>";
	exit();
}