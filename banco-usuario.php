<?php require_once('conecta.php'); ?>

<?php
// O md5 é para criptografar a senha para não ser lida pelo header da página

function buscaUsuario($conexao,$usuario,$senha){
  $usuarioNew = mysqli_real_escape_string($conexao,$usuario);
  $senhaMd5 = md5($senha);
  $query = "SELECT * FROM usuarios WHERE idlogin = '{$usuarioNew}' AND senha = '{$senhaMd5}'";
  $resultado = mysqli_query($conexao,$query);
  $usuario = mysqli_fetch_array($resultado);
  // Na linha 11 colocamos os valores retornados em um array
  return $usuario;
}


function cadastraUsuario($conexao,$usuario,$senha,$nome){
  $senhaMd5 = md5($senha);
  $query = "INSERT INTO usuarios (nome,idlogin,senha) VALUES ('{$nome}','{$usuario}','{$senhaMd5}')";
  return mysqli_query($conexao,$query);
}
?>
