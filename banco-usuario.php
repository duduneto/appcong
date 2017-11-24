<?php require_once('conecta.php'); ?>

<?php
function buscaUsuario($conexao,$usuario,$senha){
  $usuarioNew = mysqli_real_escape_string($conexao,$usuario);
  $senhaMd5 = md5($senha);
  $query = "SELECT * FROM usuarios WHERE idlogin = '{$usuarioNew}' AND senha = '{$senhaMd5}'";
  $resultado = mysqli_query($conexao,$query);
  $usuario = mysqli_fetch_array($resultado);
  return $usuario;
}

function cadastraUsuario($conexao,$usuario,$senha,$nome){
  $senhaMd5 = md5($senha);
  $query = "INSERT INTO usuarios (nome,idlogin,senha) VALUES ('{$nome}','{$usuario}','{$senhaMd5}')";
  return mysqli_query($conexao,$query);
}
?>
