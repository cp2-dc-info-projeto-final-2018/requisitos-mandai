<?php

	session_start();
	$email = $_SESSION['emailUsuarioLogado'];

	if (array_key_exists('emailUsuarioLogado', $_SESSION) == false)
	{
		$_SESSION['erroLogin'] = "Identifique-se para acessar o site";

		header('location: login.php');
		exit();
	}

	$fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
?>

<!DOCTYPE HTML>
<html metacharset='utf8'>
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

</style>


<head>
  <title>Acervo Mandaí</title>

</head>
<body background="fundo.jpg">

<div id="topo">
	<img src="logo.png" id="logo"> </img>>

</div>

<a class="nav-link" href="Controladores/sair.php">Sair</a>

<div id="tracado">
</div>



<div id="principal">

</div>

<footer id="rodape">
	<p id="textorodape"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...<article> </p>
</footer>

</body>


</html>
