<?php
session_start();
unset($_SESSION['emailUsuarioLogado']);
header('location: ../login.php');

?>
