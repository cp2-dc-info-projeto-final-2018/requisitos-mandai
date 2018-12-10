<?php

function InsereConteudo(string $matriculaProfessor, string $arquivo, int $idDisciplina, string $nome)
{
	$bd = criaConexaoBD();

	$sql = $bd->prepare('INSERT INTO conteudo (nome, arquivo, matricula_professor, idDisciplina)
	                     VALUES (:nome, :arquivo, :matricula_professor, :idDisciplina)');

	$sql->bindValue(':arquivo', $arquivo);
	$sql->bindValue(':nome', $nome);
	$sql->bindValue(':matricula_professor', $matriculaProfessor);
	$sql->bindValue(':idDisciplina', $idDisciplina);

	var_dump ($matriculaProfessor);
	$sql->execute();
}

function BuscaPublicacao()
{
	$bd = criaConexaoBD();

	$sql = $bd->prepare('SELECT nome, arquivo, matricula_professor, cod_conteudo, idDisciplina FROM conteudo');

	$sql->execute();

	return $sql->fetchAll();
}

function BuscaCaminhoCompleto(int $matriculaProfessor, int $idConteudo)
{
	$bd = criaConexaoBD();

	$sql = $bd->prepare('SELECT arquivo FROM conteudo
	                     WHERE matricula_professor = :matricula_professor
											 AND cod_conteudo = :cod_conteudo');

	$sql->bindValue(':matricula_professor', $matriculaProfessor);
	$sql->bindValue(':cod_conteudo', $idConteudo);

	$sql->execute();

	return $sql->fetch();
}

function RemovePublicacao($matriculaProfessor, $idConteudo){
	$bd = criaConexaoBD();

	$sql = $bd->prepare('DELETE FROM conteudo
											 WHERE matricula_professor = :matricula_professor
											 AND cod_conteudo = :cod_conteudo');

	$sql->bindValue(':matricula_professor', $matriculaProfessor);
	$sql->bindValue(':cod_conteudo', $idConteudo);

	$sql->execute();
}

?>
