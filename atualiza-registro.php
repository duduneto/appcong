<?php require_once("conecta.php"); ?>
<?php require_once("banco-territorio.php"); ?>
<?php
$territorio = $_POST['numeroTerritorio'];
$data_inicio = $_POST['inicioData'];
$data_fim = $_POST['fimData'];
$obs = $_POST['obsTerritorio'];
$dirigente = $_POST['dirigente'];
$userId = $_POST['userId'];
atualizaUltimoRegistro($conexao,$territorio,$data_fim,$dirigente);
atualizaRegistro($conexao,$territorio,$data_inicio,$data_fim,$obs,$dirigente,$userId);
$_SESSION['numero-territorio'] = $territorio;
header("Location:mostrar-territorio.php");
die();
?>
