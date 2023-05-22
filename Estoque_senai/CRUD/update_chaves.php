<?php
    require('../conn.php');

    $id=$_POST['id'];
    
    $bloco_name =$_POST ['bloco_name'];
    $num_sala = $_POST['num_sala']; 
    $responsavel = $_POST['responsavel'];


    if (empty($bloco_name) || empty($num_sala)||empty($responsavel)){
      echo("não pode ser vazio");
    }else{
        $update_chaves = $pdo->prepare("UPDATE chaves set 
        nome = :bloco_name, 
        num_sala = :num_sala, 
        responsavel = :responsavel WHERE id = :id" );
        
    

    $update_chaves->execute(array(
        ':bloco_name' => $bloco_name,
        ':num_sala' => $num_sala,
        ':responsavel' => $responsavel,
        ':id'=>$id
    ));
    echo "<script>alert('Salvo com sucesso')</script>";
    echo "<script>window.location.href='../tabela_chaves.php'</script>";


   
    }

?>