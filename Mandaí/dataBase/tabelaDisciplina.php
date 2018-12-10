<?php
require_once('criaConexaoBD.php');

function InsereDisciplina($dadosDisciplina)
{
	$bd = criaConexaoBD();

	$sql = $bd->prepare('INSERT INTO disciplina ( nome)
	                     VALUES (:nome)');

	$sql->bindValue(':nome', $dadosDisciplina['nome']);

	$sql->execute();
}

function insereRegencia(string $matriculaProfessor, int $idDisciplina)
{
    $sql = $db -> prepare(
      "INSERT INTO regencia (idProfessor, idDisciplina)
        VALUES (:idProfessor, :idDisciplina);");

        $sql -> bindValue(':idProfessor', $matriculaProfessor);
        $sql -> bindValue(':idDisciplina', $idDisciplina);
        $sql -> execute();
}

function buscaDisciplinas()
{
	$bd = criaConexaoBD();

	$sql = $bd -> prepare ('SELECT * FROM disciplina');
	$sql -> execute();

	return $sql -> fetchAll();
	
}

?>
