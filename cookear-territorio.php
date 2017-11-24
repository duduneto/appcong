<?php

$territorio = $_POST['numero-territorio'];
setcookie("cookieNumTer",$territorio);
header("Location:mostrar-territorio.php");
die();

?>
