<?php
    require_once('../dataBase/tabelaConteudo.php');
    require_once('../dataBase/tabelaCadastro.php');

    $erro= null;
    session_start();
    $email = $_SESSION['emailUsuarioLogado'];
    if (array_key_exists('emailUsuarioLogado', $_SESSION))
    {
    	$resultados = BuscaUsuarioPorEmail($email);
    	$matriculaProfessor = $resultados['matricula'];
    }
    else
    {
    	$_SESSION['erroLogin'] = 'Identifique-se para poder carregar um arquivo.';
    	header('Location: ../index.php');
    	exit();
    }

    $request = array_map('trim', $_REQUEST);
    $request = filter_var_array($request, ['idConteudo' => FILTER_VALIDATE_INT]);

    $idPublicacao = $request['idConteudo'];
    if($idPublicacao == false)
    {
    	$erro = 'Id da tarefa inválido ou não informado.';
    }

    if ($erro == null)
    {
        $resultado = BuscaCaminhoCompleto($matriculaProfessor, $idPublicacao);
        $arq = $resultado['arquivo'];
        unlink("../$arq");
        RemovePublicacao($matriculaProfessor, $idPublicacao);
    }
    else
    {
    	$_SESSION['erroRemocao'] = $erro;
    }

    header('Location: ../index.php');
?>
