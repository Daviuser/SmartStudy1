<?php

if(isset($_POST['submit'])&&!empty($_POST['email'])&& !empty($_POST['senha'])) 
{
include_once('conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";
$result = $conexao->query($sql);

if(mysqli_num_rows($result)< 1)
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}
else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location: home.php');

    $logado = $_SESSION['email'];
}
}


?>