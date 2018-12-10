<?php
require_once('../dataBase/criaConexaoBD.php');
require_once('../dataBase/tabelaCadastro.php');

$erros = [];

		$validar = array_map('trim', $_REQUEST);


		$validar = filter_var_array(
			$validar,
			[
				'nome' => FILTER_DEFAULT,
				'email' => FILTER_VALIDATE_EMAIL,
				'senha' => FILTER_DEFAULT,
				'confirmaSenha' => FILTER_DEFAULT,
				'matricula'=>FILTER_DEFAULT,
				'tipo' => FILTER_VALIDATE_INT,
				'disciplina' => FILTER_VALIDATE_INT
			]
		);

		$nome = $validar['nome'];
		$senha = $validar['senha'];
		$confirmaSenha = $validar['confirmaSenha'];
		$email = $validar['email'];
		$matricula = $validar['matricula'];
		$tipo = $validar['tipo'];
		$disciplina = $validar['disciplina'];

	//nome
		$nome = $validar['nome'];
	if($nome == false)
	{
		$erros[] = "O nome informado não é válido";
	}
 else if( strlen($nome) < 3 || strlen($nome) > 35)
{
	$erros[] = "A quantidade de caracteres do nome deve estar entre 3 e 35";
}

	//email
	$email = $validar['email'];
	if ($email == false)
	{
		$erros[] = "Insira um e-mail válido.";
	}

	else if (BuscaUsuarioPorEmail($email) != false)
	{
	$erros[] = "Já existe um aluno cadastrado com esse e-mail";
	}

//senha
$senha = $validar['senha'];

if($senha == false)
{
	$erros[] = "Insira uma senha";
}

else if ( strlen($senha) < 6 || strlen($senha) > 12 )
{
	$erros[] = "A quantidade de caracteres da senha deve estar entre 6 e 12";
}

$confirmaSenha = $validar['confirmaSenha'];

if ($senha != $validar['confirmaSenha'])
{
	$erros[] = "As senhas não correspondem";
}

$validar['senha'] = password_hash("$senha", PASSWORD_DEFAULT);

//tipo
$tipo = $validar['tipo'];
if ($tipo == false)
{
	$erros[] = "Selecione a opção";
}

//disciplina
if ($tipo == 1)
{
	$disciplina = null;
}
else if ($tipo == 2)
{
	$disciplina = $validar['disciplina'];
}

//matricula
    $matricula = $validar['matricula'];
		if($matricula == false)
		{
			$erros[] = "matrícula inválida";
		}
		else if (strlen($matricula) > 9 || strlen($matricula) < 7)
		{
				$erros[] = "A quantidade de caracteres da matrícula é inválida";
		}


	if (empty( $erros ))
	{ insereUsuario ($validar);	}

?>


<?php foreach($erros as $msg) { ?>
			<li><?= $msg ?></li>

		<?php } ?>


<?php

		if ($erros != null)
	{
		session_start();
		$_SESSION['erroLogin'] = $erros;
		header('location: ../telacadastro.php');
  }
	else if ($erros == null)
	{
		session_start();
		$_SESSION['emailUsuarioLogado'] = $email;
		header('location: ../index.php');
	}

?>
