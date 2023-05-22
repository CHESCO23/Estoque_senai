<?php
    include("conn.php");
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $usuario = $pdo->prepare('SELECT * FROM login where usuario=:login 
    AND senha=:senha');
    $usuario->execute(array(':login'=>$login,':senha'=>$senha));

    $rowTabela = $usuario->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Usuario e/ou senha invalidos!!!');
        </script>";
        echo "<script>window.location.href='index.php'</script>";
        
    }else{
       
    $sessao = $rowTabela[0];

    if(!isset($_SESSION)) {
    session_start();
    }
    $_SESSION['id'] = $sessao['id'];
    $_SESSION['login'] = $sessao['login'];

    header("Location: menu.php");
    }

?>