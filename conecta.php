<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "territorio";
$conexao = new mysqli($host, $user, $senha, $banco);
        if($conex -> connect_errno){
          die('Falha na conexão: ' . $conex->connect_error);
        }else print("Conectado.")
 ?>
