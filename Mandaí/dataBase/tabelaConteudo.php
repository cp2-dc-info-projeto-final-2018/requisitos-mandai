<?php

		require_once('criaConexaoBD.php');
		require_once('tabelaCadastro.php');

		function insereConteudo($novoConteudo)
		{
			$idProfessor = insereUsuario($dadosNovoProfessor);
    //  $idDisciplina = insereDisciplina($novaDisciplina);

			$db = criaConexaoBd();

			$sql = $db->prepare(
			"INSERT INTO conteudo (material, id_professor, id_disciplina)
			VALUES (:material, :id_professor, :id_disciplina);");

			$sql->bindValue(':material', $novoConteudo['material']);
			$sql->bindValue(':id_professor', $idProfessor);
    //  $sql->bindValue(':id_disciplina',$id);

			$sql->execute();

			//Na criação do controlador chamar apenas a função insereProfessor
		}
