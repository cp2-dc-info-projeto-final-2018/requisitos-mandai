<?php
	require_once('../../cadastro/tabelaUsuario.php');

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
	else
	{
		$usuário = BuscaEmail($email);
		if ($usuário == false)
		{
			$erro = "Nenhum usuário cadastrado com o e-mail informado";
		}
	  else if ($senha  == $usuário['senha'])
		//(password_verify($senha, BuscaSenha($senha)) == false)
		{
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
