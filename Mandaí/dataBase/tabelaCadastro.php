<?php

		require_once('criaConexaoBD.php');

function insereUsuario($dadosNovoUsuario)
{
	$db = criaConexaoBD();


	$sql = $db->prepare(
	"INSERT INTO cadastro (nome, email, senha, cpf, escola, matricula, estado, cidade, tipo)
	VALUES (:nome, :email, :senha, :cpf, :escola, :matricula, :estado, :cidade, :tipo);");

	$sql->bindValue(':nome', $dadosNovoUsuario['nome']);
	$sql->bindValue(':email', $dadosNovoUsuario['email']);
	$sql->bindValue(':senha', $dadosNovoUsuario['senha']);
	$sql->bindValue(':cpf', $dadosNovoUsuario['cpf']);
	$sql->bindValue(':escola', $dadosNovoUsuario['escola']);
	$sql->bindValue(':estado', $dadosNovoUsuario['estado']);
	$sql->bindValue(':cidade', $dadosNovoUsuario['cidade']);
	$sql->bindValue(':tipo', $dadosNovoUsuario['tipo']);
	$sql->bindValue(':matricula', $dadosNovoUsuario['matricula']);

	$sql->execute();

	if($dadosNovoUsuario['tipo'] == 2)
		{
			$sql = $db -> prepare(
				"INSERT INTO professor (matricula_professor)
					VALUES (:matricula_professor);");

					$sql -> bindValue(':matricula_professor', $dadosNovoUsuario['matricula']);
					$sql -> execute();
		}

}

function BuscaUsuarioPorEmail($email)
{
$bd = criaConexaoBD();

$sql = $bd->prepare('SELECT nome, email, senha, cpf, escola, matricula, estado, cidade, tipo FROM cadastro WHERE email = :email');

$sql->bindValue(':email', $email);

$sql->execute();

return $sql->fetch();
}

?>
