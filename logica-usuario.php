<?php require_once('banco-usuario.php'); ?>
<?php require_once('conecta.php'); ?>
<?php
session_start();

function loginError(){
  header("Location:form-login.php?login=false");
  die();
  // return setcookie("login-error",true);
}
// Cria uma sessão que tem como nome 'usuario-logado' e seu valor é nome do usuario
// que foi inserido no formulario de login
function logaUsuario($usuario){
  $_SESSION['usuario_logado']=$usuario;
  setcookie("login-error",false);
}
// usuarioLogado é usado para o verificaUsuario
function usuarioLogado(){
  return isset($_SESSION['usuario_logado']);
}

function verificaUsuario(){
  if (!usuarioLogado()){
    loginError();
    }
}

function logout(){
  return session_destroy();
}

function setSessionAdm($valorAdm){
  $_SESSION['userAdm']=$valorAdm;
}

?>
