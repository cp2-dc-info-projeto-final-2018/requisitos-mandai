<!DOCTYPE >
<html metacharset='utf8'>

<style>
html,	body {
background-attachment: fixed;
padding: 0px;
margin: auto 0;
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

	#telacadastro{
		width: auto;
		height: 1100px;
		margin: 70px;
		text-align: left;
		padding-top: 100px;

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

<nav id="menu">
	<ul>
		<li><a href="#">Principal</a></li>
		<li><a href="#">Matérias</a></li>
		<li><a href="#">Videos-Aulas</a></li>
		<li><a href="#">Quem somos</a></li>
		<li><a href="#">Fale Conosco</a></li>
		<li id="cadastro"><a href="#">Entrar</a></li>
		<li><a href="#">Cadastrar</a></li>
	</ul>
</nav>

<div id="principal">
	<div id="telacadastro">
							<form method="POST" action="phpcadastro.php" novalidate>
								<fieldset>
						<label for="nome">Digite seu nome:</label>
						<input   minlength="3" maxlength="50" name="nome" type="text" placeholder="Nome" required/><br><br>

							<label for="email">Email:</label>
								<input name="email" value="..." type="email" placeholder="E-Mail" required/><br><br>

							 <label for="senha">Crie sua senha:</label>
							 <input minlength="6" maxlength="12" name="senha" type="password" placeholder="Senha"/><br><br>

							<label for="csenha">Confirme a senha:</label>
							<input minlength="6" maxlength="12" name="confirmaSenha" type="password" placeholder="Confirmar senha"/><br><br>

							<label for="cpf">CPF:</label>
							<input  minlength="11" maxlength="11" name="CPF" type="text" placeholder="CPF" required/><br><br>

							<label for="escola">Digite sua escola:</label>
							<input   minlength="3" maxlength="50" name="escola" type="text" placeholder="Escola" required/><br><br>

							<label for="estado">Estado: </label>
							<input minlength="3" maxlength="50" name="estado" type="text" placeholder="Estado" required/><br><br>

							<label for="ccampus">Cidade/Campus: </label>
							<input minlength="3" maxlength="50" name="cidade" type="text" placeholder="Cidade" required/><br><br>



							<!--Seleção Professor ou Aluno !-->

							<h2> Você é professor,aluno ou aluno CP2? <h2>
						<label class="checkbox">
							<input type="radio"  name="opção" value="Professor"> Eu sou professor<br>
						</label>
						<label class="checkbox">
							<input type="radio"  name="opção" value="aluno"> Eu sou aluno<br>
						</label>
						<label class="checkbox">
							<input type="radio"  name="opção" value="alunoCP2"> Eu sou aluno CP2<br><br>
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

<footer id="rodape">
	<p id="textorodape"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...<article> </p>
</footer>

</body>


</html>
