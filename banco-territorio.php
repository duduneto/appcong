<?php
session_start();
function buscaTerritorio($conexao,$territorio){
  #$query = "SELECT * FROM territorio WHERE numero_territorio={$territorio}";
  $resultadoBusca = mysqli_query($conexao,"SELECT * FROM territorios WHERE numero_territorio={$territorio} ORDER BY data_inicio ASC");
  #while($territorioB = mysqli_fetch_array($resultadoBusca)){
    #$territorioArray = array();
    #array_fill($territorioArray,$territorioB);
  #}
  return $resultadoBusca;
}

function buscaTerritorioData($conexao){
  $query = "SELECT * FROM ultimoreg ORDER BY SUBSTR( datareg, 7, 4), SUBSTR( datareg, 4, 2), SUBSTR( datareg, 1, 2) ASC";
  return  mysqli_query($conexao,$query);
}

function buscaParaAlterar($conexao,$id){
  $query = "SELECT * FROM territorios WHERE id = {$id}";
  $resultado = mysqli_query($conexao,$query);
  return mysqli_fetch_array($resultado);
}


function buscaTerritorioImg($conexao,$territorio){
  $query = "SELECT * FROM diretorioimg WHERE numero_territorio={$territorio}";
  $resultadoImg = mysqli_query($conexao,$query);
  while ($territorioB = mysqli_fetch_assoc($resultadoImg)) {
    $territorioArray = array();
    array_push($territorioArray,$territorioB);
  }
  return $territorioArray;

}

function atualizaRegistro($conexao,$numeroTerritorio,$data_inicio,$data_fim,$obs,$dirigente,$userId){
  $query = "INSERT INTO territorios (numero_territorio, data_inicio, data_fim, obs, dirigente, userId) VALUES ($numeroTerritorio,'{$data_inicio}','{$data_fim}','{$obs}','{$dirigente}',{$userId})";
  return mysqli_query($conexao,$query);

}

function atualizaAlteracaoRegistro($conexao,$data_fim,$obs,$id){
  $query = "UPDATE territorios SET data_fim = '{$data_fim}', obs = '{$obs}' WHERE id = {$id}";
  return mysqli_query($conexao,$query);
}

function atualizaUltimoRegistro($conexao,$numeroTerritorio,$data_fim,$dirigente){
  $query = "UPDATE ultimoreg SET datareg = '{$data_fim}', dirigente = '{$dirigente}' WHERE numero_territorio = {$numeroTerritorio}";
  return mysqli_query($conexao,$query);
}

function removeTerritorio($conexao,$id){
  $query = "DELETE FROM territorios WHERE id = {$id}";
  return mysqli_query($conexao,$query);

}





function retornaNumTer($conexao,$id){
  $query = "SELECT numero_territorio FROM territorios WHERE id = {$id}";
  return mysqli_query($conexao,$query);
}

function cookearCookieNumTer($value){
  setcookie("cookieNumTer",$value);

}

?>
