<?php
    require('../conn.php');

   if( isset($_GET['id'])){
        $id = $_GET['id'];
        echo "<script>alert('emprestimo excluida com sucesso')</script>";
        echo "<script>window.location.href='../tabela_chaves.php'</script>";
         $del_prod = $pdo->prepare('DELETE FROM emprestimos WHERE id=:id');
   $del_prod->execute(array(':id'=>$id));
   }else{
        header("Location: ../cadastro_emprestimo.php");
   }

  
  
?>