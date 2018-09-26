<?php
require_once('tabelaUsuario.php');

$erros = [];

		$validar = array_map('trim', $_REQUEST);


		$validar = filter_var_array(
			$validar,
			[
				'nome' => FILTER_DEFAULT,
				'sobrenome' => FILTER_DEFAULT,
				'email' => FILTER_VALIDATE_EMAIL,
				'senha' => FILTER_DEFAULT,
				'confirmaSenha' => FILTER_DEFAULT,
				'alertasEmail' => FILTER_VALIDATE_BOOLEAN,
				'dataNasc' => FILTER_DEFAULT,
				'aceitaTermos' => FILTER_VALIDATE_BOOLEAN,
				'cpf' => FILTER_DEFAULT,
				'escola'=> FILTER_DEFAULT,
				'cidade' => FILTER_DEFAULT,
				'estado' => FILTER_DEFAULT,
				'visibilidadePublicações' => FILTER_VALIDATE_INT
			]
		);

		$nome = $validar['nome'];
		$sobrenome = $validar['sobrenome'];
		$senha = $validar['senha'];
		$confirmaSenha = $validar['confirmaSenha'];
		$email = $validar['email'];
		$dataNasc = $validar['dataNasc'];
		$cpf = $validar ['cpf'];
		$escola = $validar ['escola'];
		$estado = $validar ['estado'];
		$aceitaTermos = $validar['aceitaTermos'];
		$visibilidade = $validar['visibilidadePublicações'];
		$alertasEmail = $validar['alertasEmail'];

		$cpf = $validar['cpf'];
    if($cpf == false)
    {
      $erros[] = "CPF inválido";
    }
    else if( strlen($cpf) != 11)
    {
      $erros[] = "A quantidade de caracteres deve ser exatamente 11";
    }

    $escola = $validar['escola'];
    if($escola == false)
    {
      $erros[] = "Escola inválida";
    }

    $cidade = $validar['cidade'];
    if($cidade== false)
    {
      $erros[] = "cidade inválida";
    }
    else if( strlen($cidade) > 50 )
    {
      $erros[] = "A quantidade de caracteres é inválida";
    }

    $estado = $validar['estado'];
    if($estado == false)
    {
      $erros[] = "estado inválido";
    }
    else if( strlen($estado)>50)
    {
      $erros[] = "A quantidade de caracteres é inválida";
    }



		$nome = $validar['nome'];
	if($nome == false)
	{
		$erros[] = "O nome informado não é válido";
	}
 else if( strlen($nome) < 3 || strlen($nome) > 35)
{
	$erros[] = "A quantidade de caracteres do nome deve estar entre 3 e 35";
}


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


	$aceitaTermos = $validar['aceitaTermos'];

	if($aceitaTermos == false)
	{
		$erros[] = "Aceite os termos de uso";
	}



	if($senha != $confirmaSenha)
	{
		$erros[] = "Senhas diferentes";
	}

$validar['senha'] = password_hash("md5", PASSWORD_DEFAULT);


	if ($email == false)
	{
		$erros[] = "Insira um e-mail válido.";
	};


?>



<?php foreach($erros as $msg) { ?>
			<li><?= $msg ?></li>

		<?php } ?>
