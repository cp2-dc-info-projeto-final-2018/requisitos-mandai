<?php
require_once("../../Tabela/tabelausuario.php");
$erros = [];

		$request = array_map('trim', $_REQUEST);


		$request = filter_var_array(
			$request,
			[
				'nome' => FILTER_DEFAULT,
				'email' => FILTER_VALIDATE_EMAIL,
				'senha' => FILTER_DEFAULT,
				'confirmaSenha' => FILTER_DEFAULT,
				'alertasEmail' => FILTER_VALIDATE_BOOLEAN,
				'aceitaTermos' => FILTER_VALIDATE_BOOLEAN,
        'CPF' => FILTER_DEFAULT,
        'Escola'=> FILTER_DEFAULT,
        'Cidade' => FILTER_DEFAULT,
        'Estado' => FILTER_DEFAULT,
			]
		);
		$cpf = $request['CPF'];
    if($cpf == false)
    {
      $erros[] = "CPF inválido";
    }
    else if( strlen($cpf) != 11)
    {
      $erros[] = "A quantidade de caracteres deve ser exatamente 11";
    }

    $escola = $request['Escola'];
    if($escola == false)
    {
      $erros[] = "Escola inválida";
    }

    $cidade = $request['Cidade'];
    if($cidade== false)
    {
      $erros[] = "cidade inválida";
    }
    else if( strlen($cidade) > 50 )
    {
      $erros[] = "A quantidade de caracteres é inválida";
    }

    $estado = $request['estado'];
    if($estado == false)
    {
      $erros[] = "estado inválido";
    }
    else if( strlen($estado)>50)
    {
      $erros[] = "A quantidade de caracteres é inválida";
    }



		$nome = $request['nome'];
	if($nome == false)
	{
		$erros[] = "O nome informado não é válido";
	}
 else if( strlen($nome) < 3 || strlen($nome) > 35)
{
	$erros[] = "A quantidade de caracteres do nome deve estar entre 3 e 35";
}


	$senha = $request['senha'];

	if($senha == false)
	{
		$erros[] = "Insira uma senha";
	}

	else if ( strlen($senha) < 6 || strlen($senha) > 12 )
	{
		$erros[] = "A quantidade de caracteres da senha deve estar entre 6 e 12";
	}

	$confsenha = $request['confirmaSenha'];

	if($confsenha == false)
	{
		$erros[] = "Insira a confirmação de senha";
	}

	else if ( strlen($confsenha) < 6 || strlen($confsenha) > 12 )
	{
		$erros[] = "O número de caracteres da confirmação de senha deve estar entre 6 e 12";
	}


	$termos = $request['aceitaTermos'];

	if($termos == false)
	{
		$erros[] = "Aceite os termos de uso";
	}



	if($senha != $confsenha)
	{
		$erros[] = "Senhas diferentes";
	}


	if(buscausuario($request['email'])>0){
			$erros[] = "Email já existe" ;
	}

	if (empty($erros) == true) {
	insereusuario($request);

	}


?>



<?php foreach($erros as $msg) { ?>
			<li><?= $msg ?></li>

		<?php } ?>
