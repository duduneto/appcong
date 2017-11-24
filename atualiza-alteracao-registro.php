<?php require_once("conecta.php"); ?>
<?php require_once("banco-territorio.php"); ?>
<?php
$id = $_POST['id'];
$territorio = $_POST['numeroTerritorio'];
$numTer = $_POST['numTer'];
$data_inicio = $_POST['inicioData'];
$data_fim = $_POST['fimData'];
$obs = $_POST['obsTerritorio'];
$dirigente = $_POST['dirigente'];
atualizaUltimoRegistro($conexao,$numTer,$data_fim,$dirigente);
atualizaAlteracaoRegistro($conexao,$data_fim,$obs,$id);
$_SESSION['numero-territorio'] = $territorio;
header("Location:mostrar-territorio.php");
die();
?>
