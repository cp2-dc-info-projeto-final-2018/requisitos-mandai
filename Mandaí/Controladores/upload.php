<?php

require_once('../dataBase/TabelaConteudo.php');
require_once('../dataBase/tabelaCadastro.php');
$erro = null;

session_start();
$email = $_SESSION['emailUsuarioLogado'];
if (array_key_exists('emailUsuarioLogado', $_SESSION))
{
	$resultados = BuscaUsuarioPorEmail($email);
	$idUsuarioConectado = $resultados['id'];
}
else
{
	$_SESSION['erroLogin'] = 'Identifique-se para poder carregar um arquivo.';
	header('Location: ../index.php');
	exit();
}

$request = array_map('trim', $_REQUEST);
$request = filter_var_array($request, [ 'descricao' => FILTER_DEFAULT ]);

$descricao = $request['descricao'];

if(array_key_exists('arq', $_FILES) == false)
{
	$erro = "Arquivo não carregado.";
}
else
{
	$arq = $_FILES['arq'];

	$pastaDestino = "Carregamentos/Usuario_$idUsuarioConectado";
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

if($descricao == false)
{
	$descricao = "";
}

if ($erro == null)
{
	EntregaPublicacao($idUsuarioConectado, $caminhoCompleto, new DateTime(), $descricao);
	header('Location: ../index.php');
	exit();
}
else
{
	$_SESSION['erroCarregamento'] = $erro;
}

?>
