<?php

	require_once('../dataBase/tabelaCadastro.php');

	$erro = null;

	$validar = array_map('trim', $_REQUEST);
	$validar = filter_var_array(
	               $validar,
	               [ 'email' => FILTER_VALIDATE_EMAIL,
	                 'senha' => FILTER_DEFAULT ]
	           );

	$email = $validar['email'];
	$senha = $validar['senha'];

	if ($email == false)
	{
		$erro = "E-Mail não informado";
	}
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}
	else
	{
		$usuário = BuscaEmail($email);
		if ($usuário == false)
		{
			$erro = "Nenhum usuário cadastrado com o e-mail informado";
		}
	  else if (password_verify($senha, BuscaSenha($senha)) == false){
			$erro = "A senha está incorreta";
		}
	}

	if ($erro != null)
	{
		session_start();
		$_SESSION['erroLogin'] = $erro;
		header('location: ../login.php');
  }
	else
	{
		session_start();
		$_SESSION['emailUsuarioLogado'] = $email;
		header('location: ../index.php');
	}
?>
