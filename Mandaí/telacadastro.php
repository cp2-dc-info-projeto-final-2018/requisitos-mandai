<!DOCTYPE >
<html metacharset='utf8'>

<style>
html,	body {
background-attachment: fixed;
margin: 0;
padding: 0;
height: 100%;
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
	height: 700px;
	margin: 70px;
	border-radius: 10px;
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
	width: 100%;
	height: 150px;
	position: absolute;
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

#telacadastro {
	background-color: red;
	top: 50%;
	transform: translateY(4%);
	height: 650px;
	width: 1238px;
	margin: 100px;
	border-radius: 10px;

}

#formulario{
	width: 50%;
  margin: 0 auto;

}

label, .tabelainput  {
	text-align:left;
	       width:200px;
	       display:block;
	       float:left;
	      	clear:right;
	       		font-size:18;
    				margin:5px;
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
							<form id="formulario" method="POST" action="controlador/cadastraUsuario/cadastrousuario.php" novalidate>


						<label>Digite seu nome:</label>	<input class="tabelainput"   minlength="3" maxlength="50" name="nome" type="text" placeholder="Nome" required/><br><br>

							 <label>Email:</label> <input class="tabelainput" name="email" value="..." type="email" placeholder="E-Mail" required/><br><br>

							<label>Crie sua senha:</label><input class="tabelainput" minlength="6" maxlength="12" name="senha" type="password" placeholder="Senha"/><br><br>

							<label>Confirme a senha:</label> <input class="tabelainput" minlength="6" maxlength="12" name="confirmaSenha" type="password" placeholder="Confirmar senha"/><br><br>

							<label>CPF:</label> <input class="tabelainput"  minlength="11" maxlength="11" name="CPF" type="text" placeholder="CPF" required/><br><br>

							<label>Digite sua escola:</label> <input class="tabelainput"   minlength="3" maxlength="50" name="escola" type="text" placeholder="Escola" required/><br><br>

							<label>Estado:</label> <input class="tabelainput" minlength="3" maxlength="50" name="estado" type="text" placeholder="Estado" required/><br><br>

							<label>Cidade/Campus:</label> <input class="tabelainput" minlength="3" maxlength="50" name="cidade" type="text" placeholder="Cidade/Campus" required/><br><br>


							<!--Seleção Professor ou Aluno !-->

							<h2> Você é professor, aluno ou aluno Cp2? <h2>
							<input class="tabelasegundaparte" type="radio"  name="opção" value="Professor"> Eu sou professor<br>

							<input class="tabelasegundaparte" type="radio"  name="opção" value="aluno"> Eu sou aluno<br>

							<input class="tabelasegundaparte" type="radio"  name="opção" value="alunoCP2"> Eu sou aluno Cp2<br><br>

							<label class="labeltabela"><input class="tabelasegundaparte" name="alertasEmail" type="checkbox"/>Receber alertas por e-mail.</label><br/><br>

							<label class="labeltabela"><input class="tabelasegundaparte" name="aceitaTermos" type="checkbox"/>Li e concordo com os termos de uso e com a política de privacidade.</label><br/><br>

							<br><input class="tabelasegundaparte" type="submit" value="Cadastrar"/>
						</form>
		</div>
</div>

<footer id="rodape">
	<p id="textorodape"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...<article> </p>
</footer>

</body>


</html>
