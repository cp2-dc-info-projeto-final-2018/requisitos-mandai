<?php
session_start();
if(array_key_exists('erroLogin', $_SESSION))
{
$erros = $_SESSION['erroLogin'];
unset($_SESSION['erroLogin']);
}
else {
  $erros = null;
}

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="deion" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Mandaí</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">
</head>




<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Cadastro</h2>
                </div>
                <div class="card-body">

                  <?php if ($erros != null) { ?>
                    <ul>
                    <?php foreach($erros as $msg) { ?>
                          <li><?= $msg ?></li>
                    <?php } ?>
                    </ul>
                  <?php } ?>

                    <form action="Controladores/phpcadastro.php">

                        <div class="form-row">
                            <div class="name">Nome Completo</div>
                            <div class="value">
                                <div class="input-group">
                                            <input class="input--style-5" type="text" name="nome">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                                        <div class="name">Email</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="email" name="email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="name">Senha</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="password" name="senha">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="name">Confirmar Senha</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="password" name="confirmaSenha">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="name">Escola</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="escola">
                                            </div>
                                        </div>
                                    </div>

                        <div class="form-row">
                            <div class="name">Cidade</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cidade">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Estado</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="estado">
                                </div>
                            </div>
                        </div>

						<div class="form-row">
                            <div class="name">CPF</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cpf">
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">

                                            <input class="buttonn" name="tipo" type="radio" value="1"> Sou Aluno<br>
                                            <input class="buttonn" name="tipo" type="radio" value="2"> Sou Professor<br>


                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

												<div class="form-row">
                            <div class="name">Matrícula</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="matricula">
                                </div>
                            </div>
                        </div>
                            <button class="btn btn--radius-2 btn--red" type="submit"> Cadastrar </button>
                        </div>

                     </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <src="vendor1/jquery/jquery.min.js"></>
    <!-- Vendor JS-->
    <src="vendor1/select2/select2.min.js"></>
    <src="vendor1/datepicker/moment.min.js"></>
    <src="vendor1/datepicker/daterangepicker.js"></>

    <!-- Main JS-->
    <src="js1/global.js"></>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
