<?php


	function criaConexaoBd()

	{
		$bd = new PDO('mysql:host=localhost;dbname=instacp2;charset=utf8',
					'cadastromandai',
					'mandai303');

		$bd ->setAttribute(PDO::ATTR_ERRMODE,
							PDO::ERRMODE_EXCEPTION);

		return $bd;
	}

?>
