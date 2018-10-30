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
<html lang="en">
<head>
	<title>Mandaí</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--================LOGO DA GUIA===============================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<?php if ($erro != null) { ?>
			<div class"alert alert-warning">
					<p>Erro: <?= $erro ?> </p>
			</div>
		<?php } ?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="Controladores/entrar.php" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Bem vindo ao Mandaí
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Entrar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Ainda não possui um cadastro?
						</span>

						<a class="txt2" href="telacadastro.php">
							Registre-se
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<src="vendor/jquery/jquery-3.2.1.min.js"></>
<!--===============================================================================================-->
	<src="vendor/animsition/js/animsition.min.js"></>
<!--===============================================================================================-->
	<src="vendor/bootstrap/js/popper.js"></>
	<src="vendor/bootstrap/js/bootstrap.min.js"></>
<!--===============================================================================================-->
	<src="vendor/select2/select2.min.js"></>
<!--===============================================================================================-->
	<src="vendor/daterangepicker/moment.min.js"></>
	<src="vendor/daterangepicker/daterangepicker.js"></>
<!--===============================================================================================-->
	<src="vendor/countdowntime/countdowntime.js"></>
<!--===============================================================================================-->
	<src="js/main.js"></>

</body>
</html>
