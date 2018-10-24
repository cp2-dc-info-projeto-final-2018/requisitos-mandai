<?php

		require_once('criaConexaoBD.php');
		require_once('tabelaCadastro.php');

		function insereDisciplina($novaDisciplina)
		{
			$idProfessor = insereUsuario($dadosNovoProfessor);

			$db = criaConexaoBd();

			$sql = $db->prepare(
			"INSERT INTO id_disciplina (nome, id_professor)
			VALUES (:nome, :id_professor);");

			$sql->bindValue(':nome', $novaDisciplina['nome']);
			$sql->bindValue(':id_professor', $idProfessor);

			$sql->execute();
			//Na criação do controlador chamar apenas a função insereProfessor
		}
