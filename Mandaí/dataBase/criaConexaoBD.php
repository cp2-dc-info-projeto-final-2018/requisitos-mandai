<?php


	function criaConexaoBd()

	{
		$bd = new PDO('mysql:host=localhost;dbname=cadastromandai;charset=utf8',
					'cadastroMandai',
					'mandai303');

		$bd ->setAttribute(PDO::ATTR_ERRMODE,
							PDO::ERRMODE_EXCEPTION);

		return $bd;
	}

?>
