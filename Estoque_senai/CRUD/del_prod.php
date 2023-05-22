<?php
    require('../conn.php');

   if( isset($_GET['id'])){
        $id = $_GET['id'];
        echo "<script>alert('produto excluida com sucesso')</script>";
        echo "<script>window.location.href='../tabela_chaves.php'</script>";
        $del_prod = $pdo->prepare('DELETE FROM produtos WHERE id=:id');
   $del_prod->execute(array(':id'=>$id));
   }else{
        header("Location: ../cadastrar_prod.php");
   }

   
   
?>