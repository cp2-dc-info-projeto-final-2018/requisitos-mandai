<?php
	session_start();
	if (array_key_exists('erroLogin', $_SESSION))
	{
	$erro = $_SESSION['erroLogin'];
	unset($_SESSION['erroLogin']);
  }
	else
	{
		$erro = null;
	}

	if (array_key_exists('emailUsuarioLogado', $_SESSION) == true)
	{
		header('location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Acervo Mandaí - Identificar-se</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<nav class="navbar navbar-dark bg-dark">
				<h1 class="navbar-brand">Acervo Mandaí</h1>
			</nav>

		<h1>Bem-vindo ao Acervo Mandaí</h1>
		<p>Por favor, identifique-se:</p>

		<?php if ($erro != null) { ?>
			<div class"alert alert-warning">
					<p>Erro: <?= $erro ?> </p>
			</div>
		<?php } ?>

		<form method="POST" action="Controladores/entrar.php">
			<div class="form-group">
				<label>E-mail: <input name="email" type="email" required placeholder="jpsilva@example.net" class="form-control"/></label>
			</div>
			<div class="form-group">
				<label>Senha: <input name="senha" type="password" required minlength="6" maxlength="12" placeholder="******" class="form-control"/></label>
			</div>
			<input type="submit" value="Entrar"/>

		</form>

		<form method="POST" action="dataBase/telacadastro.php">

					<br>
				Não possui conta?
			<br>
						<input type="submit" value="Cadastre-se"/>

	</form>

	</div>
</body>
</html>
