<?php

		require_once('criaConexaoBD.php');

		function insereUsuario($dadosNovoUsuario)
		{
			$db = criaConexaoBd();


			$sql = $db->prepare(
			"INSERT INTO cadastro (nome, email, senha, alertasEmail, cpf, escola, estado, cidade)
			VALUES (:nome, :email, :senha, :alertasEmail, :cpf, :escola, :estado, :cidade);");

			$sql->bindValue(':nome', $dadosNovoUsuario['nome']);
			$sql->bindValue(':email', $dadosNovoUsuario['email']);
			$sql->bindValue(':senha', $dadosNovoUsuario['senha']);
			$sql->bindValue(':alertasEmail', $dadosNovoUsuario['alertasEmail']);
			$sql->bindValue(':cpf', $dadosNovoUsuario['cpf']);
			$sql->bindValue(':escola', $dadosNovoUsuario['escola']);
      $sql->bindValue(':estado', $dadosNovoUsuario['estado']);
      $sql->bindValue(':cidade', $dadosNovoUsuario['cidade']);

			$sql->execute();
		}

		function BuscaEmail(string $email)
  {

    $db = criaConexaoBD();

    $sql = $db->prepare(
      "SELECT * FROM cadastro WHERE email = :email;"

    );

    	$sql->bindValue(':email', $email );


    	$sql -> execute();

      return $sql -> fetch();


  }
  function BuscaSenha($email)
  {
    $db = criaConexaoBD();

    $sql = $db->prepare(
      "SELECT senha FROM cadastro WHERE email = :email;"

    );

    	$sql->bindValue(':email', $email );


    	$sql -> execute();

      return $sql -> fetch();
  }
  function BuscaNome($email)
  {
    $db = criaConexaoBD();

    $sql = $db->prepare(
      "SELECT nome FROM cadastro WHERE email = :email;"

    );

    	$sql->bindValue(':email', $email );


    	$sql -> execute();

      return $sql -> fetch();
  }



?>
