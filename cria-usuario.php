<?php require_once('banco-usuario.php'); ?>

<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nome = $_POST['nomeDoUsuario'];
cadastraUsuario($conexao,$usuario,$senha,$nome);

?>
