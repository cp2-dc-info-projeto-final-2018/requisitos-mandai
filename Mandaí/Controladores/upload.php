<?php

require_once('../dataBase/TabelaConteudo.php');
require_once('../dataBase/tabelaCadastro.php');
$erro = null;

session_start();
$email = $_SESSION['emailUsuarioLogado'];
if (array_key_exists('emailUsuarioLogado', $_SESSION))
{
	$usuarioConectado = BuscaUsuarioPorEmail($email);
	$matriculaProfessor = $usuarioConectado['matricula'];
	/*validar se o usuario é professor */
}
else
{
	$_SESSION['erroLogin'] = 'Identifique-se para poder carregar um arquivo.';
	header('Location: ../index.php');
	exit();
}

$request = array_map('trim', $_REQUEST);
$request = filter_var_array($request, [ 'nome' => FILTER_DEFAULT ]);

$nome = $request['nome'];

if(array_key_exists('arquivo', $_FILES) == false)
{
	$erro = "Arquivo não carregado.";
}
else
{
	$arq = $_FILES['arquivo'];

	$pastaDestino = "Carregamentos/Usuario_$matriculaProfessor";
	mkdir("../$pastaDestino");

	$prefixo = uniqid();

	$nomeOrig = basename($arq['name']);
	$nomeArq = "$prefixo-$nomeOrig";

	$caminhoCompleto = "$pastaDestino/$nomeArq";

	if($arq['error'] != UPLOAD_ERR_OK)
	{
		$erro = "Erro ao carregar o arquivo para o servidor.";
	}
	else if(move_uploaded_file($arq['tmp_name'], "../$caminhoCompleto") == false)
	{
		$erro = "Erro ao salvar o arquivo no servidor.";
	}

}

if($nome == false)
{
	$nome = "";
}

if ($erro == null)
{
	EntregaPublicacao($matriculaProfessor, $caminhoCompleto, new DateTime(), $nome);
	header('Location: ../index.php');
	exit();
}
else
{
	$_SESSION['erroCarregamento'] = $erro;
	/*Direcionar e mensagem de erro*/
	echo $erro;
}

?>
