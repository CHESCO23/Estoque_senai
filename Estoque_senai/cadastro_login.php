<?php
include('conn.php');
if ((isset($_POST["acao"]))) {
    $email = $_POST["email"];
	$senha = $_POST["senha"];

	$sql = "INSERT INTO login(usuario,senha) VALUES ('{$email}','{$senha}')";
    $res = $pdo->query($sql);


	if (empty($_POST) or (empty($_POST["email"])) or (empty($_POST["senha"]))) {
		echo "Campos vazios";
	}else{
		print "<script>alert('cadastrado com sucesso!')</script>";
		print "<script>window.location.href='index.php'</script>";
		$email = $_POST["email"];
		$senha = md5($_POST["senha"]);
	
		$sql = "INSERT INTO usuarios(usuario,senha) VALUES ('{$email}','{$senha}')";
		$res = $pdo->query($sql);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="cad.css">
<title>login</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
	<form method="POST">
		<h2>Cadastro</h2>
		<label for="email">E-mail:</label>
		<input type="email" id="login" name="email" required>
		<br>
		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required>
		<br>
		<label for="confirma_senha">Confirmar senha:</label>
		<input type="password" id="confirma_senha" name="confirma_senha" required>
		<br>
		<button name="acao" type="submit">Cadastrar</button>
	</form>
	<form action="index.php">
	<button name="acao" type="submit">Voltar</button>
	</form>
</body>
</html>
