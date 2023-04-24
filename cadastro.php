<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$confirma_senha = mysqli_real_escape_string($conexao, trim(md5($_POST['confirma_senha'])));




$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', '$confirma_senha' NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>