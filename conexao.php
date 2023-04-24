<?php
$servidor = "localhost";
$usuario = "u182528050_p5g7";
$senha = "H8m*~YFKIs";
$dbname = "clientes";

$conexao= mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
    die ("houve um erro".mysqli_connect_error());
}


?>