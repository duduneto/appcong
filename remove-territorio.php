<?php require_once("banco-territorio.php"); ?>
<?php require_once("conecta.php"); ?>
<?php
$id = $_POST['id'];
  $territorio = retornaNumTer($conexao,$id);
  removeTerritorio($conexao,$id);
  
  setcookie("cookieNumTer",$territorio);
  header("Location:mostrar-territorio.php");
  die();
?>
