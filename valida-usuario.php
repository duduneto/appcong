<?php require_once('banco-usuario.php');
require_once('conecta.php');
require_once('logica-usuario.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$usuario = buscaUsuario($conexao,$usuario,$senha);
if ($usuario == null) {
  loginError();
}else{
  logaUsuario($usuario['idlogin']);
  setSessionAdm($usuario['adm']);
  setSessionUserId($usuario['id']);
  header("Location:index.php");
  die();
}?>
