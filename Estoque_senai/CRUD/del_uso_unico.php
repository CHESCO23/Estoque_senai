<?php
    require('../conn.php');

   if( isset($_GET['id'])){
        $id = $_GET['id'];
        echo "<script>alert('item excluida com sucesso')</script>";
        echo "<script>window.location.href='../tabela_chaves.php'</script>";
        $del_prod = $pdo->prepare('DELETE FROM uso_unico WHERE id=:id');
   $del_prod->execute(array(':id'=>$id));
   }else{
        header("Location: ../cadastro_uso_unico.php");
   }

   
   
?>