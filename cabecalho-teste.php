<?php
error_reporting(E_ALL ^ E_NOTICE);

?>
<?php require_once("conecta.php"); ?>
<?php require_once("banco-territorio.php"); ?>
<?php require_once("banco-usuario.php"); ?>
<?php require_once("logica-usuario.php"); ?>
<?php require_once("mostra-alerta.php"); ?>
<?php
verificaUsuario();

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Controle Território</title>
    <link rel="icon" href="favicon.png">
    <link href="css/loja.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.modal.min.css">
    <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

  </head>
  <body>
    <div class="" >
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" role="navigation" >

        <a class="navbar-brand" href="index.php">Controle de Territorio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item active"><a class="nav-link" href="adicionar-geral.php"></a></li>
            <li class="nav-item active"><a class="nav-link" href="lista-territorio.php">Lista Territorios</a></li>
            <li class="nav-item active"><a href="login-formulario.php" class="nav-link"></a></li>
          </ul>
        </div>
        <div class="">
          <a href="logout.php" class="btn btn-secondary">Logout</a>
        </div>
        </form>
      </nav>

    </div>
    <div class="container">
      <div class="principal">
