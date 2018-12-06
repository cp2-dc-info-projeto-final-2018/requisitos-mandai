<?php

function EntregaPublicacao(string $matriculaProfessor, string $arquivo, DateTime $data, string $nome)
{
	$bd = criaConexaoBD();

	$sql = $bd->prepare('INSERT INTO conteudo (nome, arquivo, matricula_professor)
	                     VALUES (:nome, :arquivo, :matricula_professor)');

	$sql->bindValue(':arquivo', $arquivo);
	$sql->bindValue(':nome', $nome);
	$sql->bindValue(':matricula_professor', $matriculaProfessor);

	var_dump ($matriculaProfessor);
	$sql->execute();
}

function BuscaPublicacao()
{
	$bd = criaConexaoBD();

	$sql = $bd->prepare('SELECT nome, arquivo, matricula_professor, cod_conteudo FROM conteudo');

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
