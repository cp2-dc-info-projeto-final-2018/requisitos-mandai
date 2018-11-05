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
				'cpf' => FILTER_DEFAULT,
				'escola'=> FILTER_DEFAULT,
				'matricula'=>FILTER_DEFAULT,
				'cidade' => FILTER_DEFAULT,
				'estado' => FILTER_DEFAULT,
				'tipo' => FILTER_DEFAULT
			]
		);

		$nome = $validar['nome'];
		$senha = $validar['senha'];
		$confirmaSenha = $validar['confirmaSenha'];
		$email = $validar['email'];
		$cpf = $validar ['cpf'];
		$escola = $validar ['escola'];
		$matricula = $validar['matricula'];
		$estado = $validar ['estado'];
		$tipo = $validar['tipo'];
		$cpf = $validar['cpf'];

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

	else if (BuscaEmail($email) != false)
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

if($confirmaSenha == false)
{
	$erros[] = "Insira a confirmação de senha";
}

else if ( strlen($confirmaSenha) < 6 || strlen($confirmaSenha) > 12 )
{
	$erros[] = "O número de caracteres da confirmação de senha deve estar entre 6 e 12";
}

if($senha != $confirmaSenha)
{
	$erros[] = "Senhas diferentes";
}

$validar['senha'] = password_hash("md5", PASSWORD_DEFAULT);

//escola
$escola = $validar['escola'];
if($escola == false)
{
	$erros[] = "Escola inválida";
}

//Cidade
$cidade = $validar['cidade'];
if($cidade== false)
{
	$erros[] = "cidade inválida";
}
else if( strlen($cidade) > 50 )
{
	$erros[] = "A quantidade de caracteres é inválida";
}

//estado
$estado = $validar['estado'];
if($estado == false)
{
	$erros[] = "estado inválido";
}
else if( strlen($estado)>50)
{
	$erros[] = "A quantidade de caracteres é inválida";
}

//cpf
$cpf = $validar['cpf'];
if($cpf == false)
{
	$erros[] = "CPF inválido";
}
else if( strlen($cpf) != 11)
{
	$erros[] = "A quantidade de caracteres deve ser exatamente 11";
}

//tipo
$tipo = $validar['tipo'];
if ($tipo == false)
{
	$erros[] = "Selecione a opção";
}

//matricula
    $matricula = $validar['matricula'];
		if($matricula == false)
		{
			$erros[] = "matrícula inválida";
		}
		else if (strlen($matricula) > 9 || strlen($matricula) < 7)
		{
				$erros[] = "quantidade de caracteres inválida";
		}


	if (empty( $erros ))
	{ insereUsuario ($validar);	}

?>


<?php foreach($erros as $msg) { ?>
			<li><?= $msg ?></li>

		<?php } ?>

<?php

		if ($erros == null)
	{
		session_start();
		$_SESSION['erroLogin'] = $erros;
		header('location: telacadastro.php');
  }
	else if ($erros != null)
	{
		session_start();
		$_SESSION['emailUsuarioLogado'] = $email;
		header('location: ../index.php');
	}
?>
