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

</style>


<head>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Acervo Mandaí</title>

</head>

<body background="fundo.jpg">

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
          <li><a href="../materia/matematica.php">Matemática</a></li>
          <li><a href="../materia/portugues.php">Português</a></li>
          <li><a href="../materia/fisica.php">Física</a></li>
					<li><a href="../materia/historia.php">História</a></li>
          <li><a href="../materia/geografia.php">Geografia</a></li>
          <li><a href="../materia/filosofia.php">Filosofia</a></li>
					<li><a href="../materia/sociologia.php">Sociologia</a></li>
          <li><a href="../materia/biologia.php">Biologia</a></li>
          <li><a href="../materia/ingles.php">Inglês</a></li>
					<li><a href="../materia/quimica.php">Química</a></li>
					<li><a href="../materia/desenho.php">Desenho</a></li>
					<li><a href="../materia/musica.php">Música/Arte</a></li>
					<li><a href="../materia/educacaofisica.php">Educação Física</a></li>
					<li><a href="../materia/lp.php">Linguagem de Programação</a></li>
					<li><a href="../materia/icc.php">Introdução a Ciência da Computação</a></li>
					<li><a href="../materia/bd.php">Banco de Dados</a></li>
					<li><a href="../materia/engenharia.php">Engenharia de Software</a></li>
        </ul>
      </li>
      <li><a href="../quemsomos.php">Quem somos</a></li>
      <li><a href="../faleconosco.php">Fale Conosco</a></li>
			<li><a class="nav-link" href="Controladores/sair.php">Sair</a></li>

    </ul>
  </div>
</nav>



<div id="principal">
	<div id="telacadastro">
							<form method="POST" action="dataBase/phpcadastro.php" novalidate>
								<fieldset>

						<div class="form-group">
						  <label class="col-md-4 control-label" for="nome">Nome</label>
						  <div class="col-md-5">
						  <input id="nome" name="nome" minlength="3" maxlength="50" type="text" placeholder="Nome do usuário" class="form-control input-md" required="">
						  </div>
						</div>


							<div class="form-group">
							<label class="col-md-4 control-label" for="email">Email</label>
							<div class="col-md-5">
								<input id="email" name="email" value="..." type="email" placeholder="E-Mail" class="form-control input-md" required="">
							</div>
						</div>


								<div class="form-group">
									<label class="col-md-4 control-label" for="senha">Senha</label>
									<div class="col-md-5">
							 <input minlength="6" maxlength="12" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
						 </div>
					</div>

								<div class="form-group">
							<label class="col-md-4 control-label" for="confirmaSenha">Confirmar Senha</label>
							<div class="col-md-5">
							<input minlength="6" maxlength="12" name="confirmaSenha" type="password" placeholder="Confirmar senha" class="form-control input-md" required="">
						</div>
				</div>

							<div class="form-group">
							<label class="col-md-4 control-label" for="cpf">CPF</label>
							<div class="col-md-5">
							<input  minlength="11" maxlength="11" name="cpf" type="text" placeholder="CPF" class="form-control input-md" required="">
						</div>
				</div>

							<div class="form-group">
							<label class="col-md-4 control-label" for="escola">Digite sua escola</label>
							<div class="col-md-5">
							<input   minlength="3" maxlength="50" name="escola" type="text" placeholder="Escola" class="form-control input-md" required="">
						</div>
				</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="estado">Digite seu estado</label>
							<div class="col-md-5">
							<input minlength="3" maxlength="50" name="estado" type="text" placeholder="Estado" class="form-control input-md" required="">
						</div>
				</div>

							<div class="form-group">
							<label class="col-md-4 control-label" for="cidade">Digite sua cidade</label>
							<div class="col-md-5">
							<input minlength="3" maxlength="50" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">
						</div>
				</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

				<div id="selecao">
							<!--Seleção Professor ou Aluno !-->

							<h2> Você é professor,aluno ou aluno CP2? <h2>
						<label class="checkbox">
							<input type="radio"  name="opção" value="Professor"> Eu sou professor<br>
						</label>
						<label class="checkbox">
							<input type="radio"  name="opção" value="aluno"> Eu sou aluno<br>
						</label>
						<label class="checkbox">
							<label><input name="alertasEmail" type="checkbox"/>Receber alertas por e-mail.</label><br/><br>
						</label>
						<label class="checkbox">
							<label><input name="aceitaTermos" type="checkbox"/>Li e concordo com os termos de uso e com a política de privacidade.</label><br/><br>
						</label>

							<input type="submit" value="Cadastrar" class="submit"/>
						</fieldset>
						</form>

				</div>

		</div>
</div>

<footer id="rodape">
	<p id="textorodape"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...<article> </p>
</footer>

</body>


</html>
