<?php

		require_once('criaConexaoBD.php');

		function insereUsuario($dadosNovoUsuario)
		{
			$db = criaConexaoBd();


			$sql = $db->prepare(
			"INSERT INTO cadastro (nome, email, senha, cpf, escola, matricula, estado, cidade)
			VALUES (:nome, :email, :senha, :cpf, :escola, :matricula, :estado, :cidade);");

			$sql->bindValue(':nome', $dadosNovoUsuario['nome']);
			$sql->bindValue(':email', $dadosNovoUsuario['email']);
			$sql->bindValue(':senha', $dadosNovoUsuario['senha']);
			$sql->bindValue(':cpf', $dadosNovoUsuario['cpf']);
			$sql->bindValue(':escola', $dadosNovoUsuario['escola']);
			$sql->bindValue(':matricula', $dadosNovoUsuario['matricula']);
      $sql->bindValue(':estado', $dadosNovoUsuario['estado']);
      $sql->bindValue(':cidade', $dadosNovoUsuario['cidade']);

			$sql->execute();

			return $db->lastInsertId();

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

  function BuscaSenha($senha)
  {

    $db = criaConexaoBD();

    $sql = $db->prepare(

      "SELECT senha FROM cadastro WHERE senha = :senha;"

    );

    	$sql->bindValue(':senha', $senha );


    	$sql -> execute();

      return $sql -> fetch();

  }



?>
