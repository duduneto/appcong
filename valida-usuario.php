<?php require_once('banco-usuario.php'); ?>
<?php require_once('conecta.php'); ?>
<?php require_once('logica-usuario.php'); ?>

<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario = buscaUsuario($conexao,$usuario,$senha);
if ($usuario == null) {
  loginError();
  header("Location:form-login.php");
  die();
}else{
  logaUsuario($usuario['idlogin']);
  header("Location:index.php");
  die();

}


?>
