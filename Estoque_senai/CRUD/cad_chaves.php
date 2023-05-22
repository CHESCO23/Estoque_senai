<?php
require('../conn.php');

$bloco_name =$_POST ['bloco_name'];
$num_sala = $_POST['num_sala']; 
$responsavel = $_POST['responsavel'];

if (empty($bloco_name) || empty($num_sala)||empty($responsavel)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../cadastro_chaves.php'</script>";
}else{
    $cad_chaves = $pdo->prepare("INSERT INTO chaves(nome,num_sala,responsavel)
    VALUES(:bloco_name,:num_sala,:responsavel)");
    $cad_chaves->execute(array(
        ':bloco_name' => $bloco_name,
        ':num_sala' => $num_sala,
        ':responsavel' =>$responsavel
    ));
    print "<script>alert('Salvo com sucesso')</script>";
    print "<script>window.location.href='../menu.php'</script>";
	exit();
}