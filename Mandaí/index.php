<?php
require_once('dataBase/tabelaCadastro.php');
require_once('dataBase/TabelaConteudo.php');

	session_start();
	$email = $_SESSION['emailUsuarioLogado'];

	if (array_key_exists('emailUsuarioLogado', $_SESSION) == false)
	{
		$_SESSION['erroLogin'] = "Identifique-se para acessar o site";

		header('location: login.php');
		exit();
	}

	 // $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
?>

<!DOCTYPE HTML>
<html metacharset='utf8'>
<style type="text/css">

	body {
background-attachment: fixed;
	}

	#topo {
	background-color: black;
	width: full;
	height: 200px;
	background: linear-gradient(#4169E1, #4682B4);
	  }

	  #tracado {
	background-color: white;
	width: full;
	height: 5px;

	  }

	#principal {

background-color: #cbdce2;
	width: auto;
	height: 1400px;
	margin: 70px;
	}

#cadastro {
	margin-left: 850px;
}

#rodape {
	background: linear-gradient(#4169E1, #4682B4);
	width: auto;
	height: 150px;
}

#textorodape {
	position: relative;
	top: 50%;
	transform: translateY(-50%);
	text-align: center;
}

#logo {
	position: relative;
	top: 50%;
	transform: translateY(-50%);
	width: 150px;
	height: 150px;
	left: 43%;
}

.feedPrincipal {
width: 300px;
height: 300px;
margin: 80px;
}

.nav-link {
 padding: 500px;
 margin-left: 1000px;
}

.container-fluid {
background-color:  black;
}

</style>


<head>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Acervo Mandaí</title>

</head>
<body>

<div id="topo">
	<img src="logo.png" id="logo"> </img>

</div>

<div id="tracado">
</div>


  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Mandaí</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Início</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Matérias<span class="caret"></span></a>

				<ul class="dropdown-menu">

					<?php
						$array = array (
							'1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9', '10', '11', '12', '13', '14', '15', '16', '17'
						);
						foreach ($array as $disciplina) {
							 echo $disciplina;
						}

					<li><a href="index.php?disciplina=<?=$disciplina['id']?>">Matemática <?= $disciplina['nome']?></a></li>
          <li><a href="materia/portugues.php">Português</a></li>
          <li><a href="materia/fisica.php">Física</a></li>
					<li><a href="materia/historia.php">História</a></li>
          <li><a href="materia/geografia.php">Geografia</a></li>
          <li><a href="materia/filosofia.php">Filosofia</a></li>
					<li><a href="materia/sociologia.php">Sociologia</a></li>
          <li><a href="materia/biologia.php">Biologia</a></li>
          <li><a href="materia/ingles.php">Inglês</a></li>
					<li><a href="materia/quimica.php">Química</a></li>
					<li><a href="materia/desenho.php">Desenho</a></li>
					<li><a href="materia/musica.php">Música/Arte</a></li>
					<li><a href="materia/educacaofisica.php">Educação Física</a></li>
					<li><a href="materia/lp.php">Linguagem de Programação</a></li>
					<li><a href="materia/icc.php">Introdução a Ciência da Computação</a></li>
					<li><a href="materia/bd.php">Banco de Dados</a></li>
					<li><a href="materia/engenharia.php">Engenharia de Software</a></li>
        </ul>
      </li>
			<li><a class="nav-link" href="Controladores/sair.php">Sair</a></li>

    </ul>
  </div>
</nav>

<br><br>
<?php
	$usuarioConectado = BuscaUsuarioPorEmail($email);
	if($usuarioConectado['tipo'] == 2){
?>
<form action="Controladores/upload.php" enctype="multipart/form-data" method="POST">

<b>Selecione o aquirvo:</b> <input name="arquivo" size="20" type="file"/>
<b>Insira o nome do aquirvo:</b> <input name="nome" type="text"/>
<input type="submit" value="Enviar" />

</form>
<?php } ?>

</body>


<div id="principal">
	<?php

				$usuarioConectado = BuscaUsuarioPorEmail($email);
				$matriculaUsuarioConectado = $usuarioConectado['matricula'];
				$publicacoes = BuscaPublicacao();

				foreach ($publicacoes as $p)
				{ ?>
					<img src="<?= $p['arquivo']?>">
					<p><?= $p['nome']?></p>

					<?php
					if ($usuarioConectado['matricula'] == $p['matricula_professor'])
						{ ?> <a href="Controladores/removeUpload.php?idConteudo=<?= $p['cod_conteudo'] ?>"> Remover</a> <?php } ?>


	 <?php } ?>

</div>

<footer id="rodape">
	<p id="textorodape"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...<article> </p>
</footer>

</body>


</html>
