<?php

$bd = new PDO('mysql:host=localhost;dbname=cadastromandai;charset=utf8',
		'cadastroMandai',
		'mandai303');

		$bd -> setAttribute(PDO::ATTR_ERRMODE,
							PDO::ERRMODE_EXCEPTION);

	 $sql = 'CREATE TABLE cadastro (
			nome VARCHAR(50) NOT NULL,
			email VARCHAR (50),
			senha VARCHAR (50),
			alertasEmail INT,
      cpf VARCHAR (11),
      escola VARCHAR (50),
      estado VARCHAR (50),
      cidade VARCHAR (50)
	 )';

?>
