<?php

		require_once('criaConexaoBD.php');

function insereUsuario($dadosNovoUsuario)
{
	$db = criaConexaoBD();


	$sql = $db->prepare(
	"INSERT INTO cadastro (nome, email, senha, matricula, tipo)
	VALUES (:nome, :email, :senha, :matricula, :tipo);");

	$sql->bindValue(':nome', $dadosNovoUsuario['nome']);
	$sql->bindValue(':email', $dadosNovoUsuario['email']);
	$sql->bindValue(':senha', $dadosNovoUsuario['senha']);
	$sql->bindValue(':tipo', $dadosNovoUsuario['tipo']);
	$sql->bindValue(':matricula', $dadosNovoUsuario['matricula']);

	$sql->execute();

	if($dadosNovoUsuario['tipo'] == 2)
		{
			$sql = $db -> prepare(
				"INSERT INTO professor (matricula_professor, idDisciplina)
					VALUES (:matricula_professor, :idDisciplina);");

					$sql -> bindValue(':matricula_professor', $dadosNovoUsuario['matricula']);
					$sql -> bindValue(':idDisciplina', $dadosNovoUsuario['disciplina']);
					$sql -> execute();
		}

}

function BuscaUsuarioPorEmail($email)
{
$bd = criaConexaoBD();

$sql = $bd->prepare('SELECT nome, email, senha, matricula, tipo, idDisciplina 
	                   FROM cadastro LEFT JOIN professor ON cadastro.matricula = professor.matricula_professor
										 WHERE email = :email');

$sql->bindValue(':email', $email);

$sql->execute();

return $sql->fetch();
}

?>
