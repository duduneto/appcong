<?php require_once('banco-usuario.php'); ?>

<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nome = $_POST['nomeDoUsuario'];
$adm = $_POST['adm'];
cadastraUsuario($conexao,$usuario,$senha,$nome,$adm);
header("Location:index.php");
die();

?>
