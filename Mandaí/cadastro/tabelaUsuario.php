<?php

		require_once('criaConexaoBD.php');

		function insereUsuario($dadosNovoUsuario)
		{
			$bd = criaConexaoBd();

			$sql = $bd->prepare(
			"INSERT INTO cadastro (nome, email, senha, alertasEmail, CPF, escola, estado, cidade)
			VALUES (:nome, :email, :senha, :alertaEmail, :CPF, :escola, :estado, :cidade);");

			if ($cadastro['alertasEmail'] == null)

				{
					$usuario['alertasEmail'] = false;
				}

			$sql->bindValue(':nome', $dadosNovoUsuario['nome']);
			$sql->bindValue(':email', $dadosNovoUsuario['email']);
			$sql->bindValue(':senha', $dadosNovoUsuario['senha']);
			$sql->bindValue(':alertaEmail', $dadosNovoUsuario['alertaEmail']);
			$sql->bindValue(':CPF', $dadosNovoUsuario['CPF']);
			$sql->bindValue(':escola', $dadosNovoUsuario['escola']);
      $sql->bindValue(':estado', $dadosNovoUsuario['estado']);
      $sql->bindValue(':cidade', $dadosNovoUsuario['cidade']);

			$sql->execute();
		}



?>
