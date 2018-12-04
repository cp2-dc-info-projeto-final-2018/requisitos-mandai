<?php

function EntregaPublicacao(int $idUsuario, string $arquivo, DateTime $data, string $descricao)
{
	$bd = criaConexaoBD();

	$sql = $bd->prepare('INSERT INTO conteudo (nome, arquivo, matricula_professor)
	                     VALUES (:nome, :arquivo, :matricula_professor)');

	$sql->bindValue(':arquivo', $arquivo);
	$sql->bindValue(':nome', $nome);
	$sql->bindValue(':matricula_professor', $matriculaProfessor);

	$sql->execute();
}

function BuscaPublicacao($matriculaProfessor)
{
	$bd = CriaConexãoBd();

	$sql = $bd->prepare('SELECT nome, arquivo, matricula_professor FROM conteudo WHERE matricula_professor = :matricula_professor');

	$sql->bindValue(':matricula_professor', $matriculaProfessor);

	$sql->execute();

	return $sql->fetchAll();
}

function BuscaCaminhoCompleto(int $matriculaProfessor, int $idConteudo)
{
	$bd = CriaConexãoBd();

	$sql = $bd->prepare('SELECT arquivo FROM conteudo
	                     WHERE matricula_professor = :matricula_professor
											 AND cod_conteudo = :cod_conteudo');

	$sql->bindValue(':matricula_professor', $matriculaProfessor);
	$sql->bindValue(':cod_conteudo', $idConteudo);

	$sql->execute();

	return $sql->fetch();
}

function RemovePublicacao($matriculaProfessor, $idConteudo){
	$bd = CriaConexãoBd();

	$sql = $bd->prepare('DELETE FROM conteudo
											 WHERE matricula_professor = :matricula_professor
											 AND cod_conteudo = :cod_conteudo');

	$sql->bindValue(':matricula_professor', $matriculaProfessor);
	$sql->bindValue(':cod_conteudo', $idConteudo);

	$sql->execute();
}

?>
