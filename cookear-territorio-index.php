<?php

$territorio = $_GET['numter'];
setcookie("cookieNumTer",$territorio);
header("Location:mostrar-territorio.php");
die();

?>
