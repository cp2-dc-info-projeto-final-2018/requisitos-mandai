<?php
require_once('dataBase/tabelaCadastro.php');
require_once('dataBase/tabelaConteudo.php');
require_once('dataBase/tabelaDisciplina.php');

$listaDisciplinas = buscaDisciplinas();

	session_start();
	$email = $_SESSION['emailUsuarioLogado'];

	if (array_key_exists('emailUsuarioLogado', $_SESSION) == false)
	{
		$_SESSION['erroLogin'] = "Identifique-se para acessar o site";

		header('location: login.php');
		exit();
	}

		$usuarioConectado = BuscaUsuarioPorEmail($email);
		$matriculaUsuarioConectado = $usuarioConectado['matricula'];


		if(array_key_exists('disciplina', $_REQUEST))
		{
			$publicacoes = buscaConteudoPorDisciplina($_REQUEST['disciplina']);
		}

		else
		{
			$publicacoes = BuscaPublicacao();
		}
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

#upload{
	position: relative;
	margin-left: 70px;
}

#publicacao{
	position: relative;
	border: 1px solid red;
	margin: 20px;
	height: 100px;

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
	<h1 id="logo">Mandaí</h1>
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

					<?php foreach ($listaDisciplinas as $disciplina) { ?>

						<li> <a href="index.php?disciplina=<?=$disciplina['id']?>"> <?= $disciplina['nome']?> </a> </li>
					<?php } ?>
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
	<form action="Controladores/upload.php" enctype="multipart/form-data" method="POST" id="upload">

		<b>Selecione o arquivo:</b> <input name="arquivo" size="20" type="file"/>
		<b>Insira o nome do arquivo:</b> <input name="nome" type="text"/><br>
		
		<br><input type="submit" value="Enviar" />

	</form>





<?php } ?>

</body>


<div id="principal">
	<?php



				foreach ($publicacoes as $p)
				{ ?>

					<div id="publicacao">
					<a href="<?= $p['arquivo']?>">
							<?php
						$allowedTypes = array('png', 'jpg', 'jpeg', 'gif');
						$detectedType = pathinfo($p['arquivo'], PATHINFO_EXTENSION);

						if (in_array($detectedType, $allowedTypes)){ ?>
							<img src="<?= $p['arquivo']?>" height="60px" width="60px">
						<?php } else{ ?>
							<img src="pdf.png" height="60px" width="60px">
						<?php } ?>

						<p><?= $p['nome']?></p>
					</a>
					</div>

<?php
						if ($usuarioConectado['matricula'] == $p['matricula_professor']){ ?>
						 <a href="Controladores/removeUpload.php?idConteudo=<?= $p['cod_conteudo'] ?>"> Remover</a> <?php } ?>

<?php } ?>

<!--<footer id="rodape">
	<p id="textorodape"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...<article> </p>
</footer>
-->
</body>


</html>
