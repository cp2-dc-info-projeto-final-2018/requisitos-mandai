<!DOCTYPE >
<html metacharset='utf8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></>
<src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></>
<style type="text/css">

<style>
	body {
background-attachment: fixed;

	}

.form-control {
		box-shadow: none;
		border-radius: 4px;
        border-color: #dfe3e8;
	}
	.form-control:focus {
		border-color: #29c68c;
		box-shadow: 0 0 8px rgba(0,0,0,0.1);
	}
	.navbar-header.col {
		padding: 0 !important;
	}
	.navbar {
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #dfe3e8;
		border-radius: 0;
	}
	.navbar .navbar-brand {
		font-size: 20px;
		padding-left: 0;
		padding-right: 50px;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #29c68c;
	}
	.navbar ul.nav li a {
		color: #999;
	}
	.navbar ul.nav li a:hover, .navbar ul.nav li a:focus {
		color: #29c68c !important;
	}
	.navbar ul.nav li.active > a, .navbar ul.nav li.open > a {
		color: #26bb84 !important;
		background: transparent !important;
	}
    .navbar .form-inline .input-group-addon {
		box-shadow: none;
        border-radius: 2px 0 0 2px;
		background: #f5f5f5;
        border-color: #dfe3e8;
        font-size: 16px;
    }
	.navbar .form-inline i {
		font-size: 16px;
	}
	.navbar .form-inline .btn {
		border-radius: 2px;
		color: #fff;
        border-color: #29c68c;
		background: #29c68c;
		outline: none;
	}
	.navbar .form-inline .btn:hover, .navbar .form-inline .btn:focus {
        border-color: #26bb84;
		background: #26bb84;
    }
	.navbar .search-form {
		display: inline-block;
	}
	.navbar .search-form .btn {
		margin-left: 4px;
	}
	.navbar .search-form .form-control {
		border-radius: 2px;
	}
	.navbar .login-form .input-group {
		margin-right: 4px;
		float: left;
	}
	.navbar .login-form .form-control {
		max-width: 158px;
		border-radius: 0 2px 2px 0;
	}
	.navbar .navbar-right .dropdown-toggle::after {
		display: none;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		padding: 6px 20px;
	}
	.navbar .navbar-right .dropdown-menu {
		width: 505px;
		padding: 20px;
		left: auto;
		right: 0;
        font-size: 14px;
	}
	@media (min-width: 1200px){
		.search-form .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 768px){
		.navbar .navbar-right .dropdown-menu {
			width: 100%;
			background: transparent;
			padding: 10px 20px;
		}
		.navbar .input-group {
			width: 100%;
			margin-bottom: 15px;
		}
		.navbar .input-group .form-control {
			max-width: none;
		}
		.navbar .login-form .btn {
			width: 100%;
		}
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

	#menu ul {		/*Personalização do Menu*/
		list-style-type: none;
	     margin: 0;
	     padding: 0;
	     overflow: hidden;
	     background: linear-gradient(#4169E1, #4682B4);
	}

	#menu li {
	float: left /*Colocar o menu na Horizontal*/
	}
	#menu li a {
		display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;

}

	#menu ul li a:hover {
	background-color: rgb(130, 154, 255);
	color: white;
	border-bottom: 3px solid  rgb(130, 154, 255);
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

.feed {

width: 300px;
height: 300px;
margin: 80px;
}

#selecao{

	z-index: 10;
}


</style>



<head>
  <title>Acervo Mandaí</title>
</head>

<body background="fundo.jpg">

<div id="topo">
	<img src="logo.png" id="logo"> </img>
</div>

<div id="tracado">
</div>

<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="#" class="nav-link">Início</a></li>
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Matérias <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item">Português</a></li>
					<li><a href="#" class="dropdown-item">Matemática</a></li>
					<li><a href="#" class="dropdown-item">História</a></li>
					<li><a href="#" class="dropdown-item">Geografia</a></li>
				</ul>
			</li>
				<li class="nav-item"><a href="#" class="nav-link">O projeto</a></li>
			<li class="nav-item active"><a href="#" class="nav-link">Fale Conosco</a></li>
			<li class="nav-item"><a href="telacadastro.php" class="nav-link">Cadastrar-se</a></li>
		</ul>
		<form class="navbar-form form-inline search-form">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Buscar...">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#"><i class="fa fa-user-o"></i> Login</a>
				<ul class="dropdown-menu">
					<li>
                        <form class="form-inline login-form" action="/examples/actions/confirmation.php" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="text" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
					</li>
				</ul>
			</li>
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
