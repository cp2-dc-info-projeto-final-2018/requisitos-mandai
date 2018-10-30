<?php
	require_once('../dataBase/tabelaCadastro.php');

	$erro = null;

	$request = array_map('trim', $_REQUEST);
	$request = filter_var_array(
	               $request,
	               [ 'email' => FILTER_VALIDATE_EMAIL,
	                 'senha' => FILTER_DEFAULT ]
	           );

	$email = $request['email'];
	$senha = $request['senha'];

	if ($email == false)
	{
		$erro = "E-Mail não informado";
	}
		else if ($senha == false)
	{
		$erro = "Senha não informada";
	}

		$emailUsuario = BuscaEmail($email);
		$senhaUsuario = BuscaSenha($senha);

		if ($request['email'] != $emailUsuario)
		{
			$erro = "Nenhum usuário cadastrado com o e-mail informado";
		}

	  else if ($request['senha'] != $senha)
		{
			$erro = "A senha está incorreta";
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
