<?php require_once('banco-usuario.php'); ?>
<?php require_once('conecta.php'); ?>
<?php
session_start();

function loginError(){
  return setcookie("login-error",true);
}

function logaUsuario($usuario){
  $_SESSION['usuario_logado']=$usuario;
  setcookie("login-error",false);
}

function usuarioLogado(){
  return isset($_SESSION['usuario_logado']);
}

function verificaUsuario(){
  if (!usuarioLogado()){
    loginError();
    header("Location:form-login.php");
    die();

  }
}

function logout(){
  return session_destroy();
}


?>
