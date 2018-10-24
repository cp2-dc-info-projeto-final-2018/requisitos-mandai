<?php

		require_once('criaConexaoBD.php');
		require_once('tabelaCadastro.php');

		function insereProfessor($dadosNovoProfessor)
		{
			$idProfessor = insereUsuario($dadosNovoProfessor);

			$db = criaConexaoBd();

			$sql = $db->prepare(
			"INSERT INTO professor (matricula, id_professor)
			VALUES (:matricula, :id_professor);");

			$sql->bindValue(':matricula', $dadosNovoProfessor['matricula']);
			$sql->bindValue(':id_professor', $idProfessor);

			$sql->execute();
			//Na criação do controlador chamar apenas a função insereProfessor
		}
