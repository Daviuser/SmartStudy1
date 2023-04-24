<?php
$servidor = "http://auth-db728.hstgr.io/";
$usuario = "u182528050_p5g7";
$senha = "H8m*~YFKIs";
$dbname = "u182528050_gti7p5";

$conexao= mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
    die ("houve um erro".mysqli_connect_error());
}


?>