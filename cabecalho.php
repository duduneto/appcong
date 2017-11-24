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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Território</title>
    <link rel="icon" href="favicon.png">
    <link href="css/loja.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/jquery.modal.min.css">--><!--SE USAR O QUERY.MODAL vai dar conflito com o Modal do BootStrap-->
    <link rel="stylesheet" href="/css/territorio.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Controle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="lista-territorio.php">Territórios <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="">
      <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
  </div>
</nav>

  <!--
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
    -->
    </div>
    <div class="container">
      <div class="principal">
