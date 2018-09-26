<?php

		require_once('criaConexaoBD.php');

		function insereUsuario($dadosNovoUsuario)
		{
			$bd = criaConexaoBd();

			$sql = $bd->prepare(
			"INSERT INTO cadastro (nome, email, senha, alertasEmail, cpf, escola, estado, cidade,)
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



?>
