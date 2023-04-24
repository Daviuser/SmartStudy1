<?php
if(isset($_POST['submit']))
{

	#print_r($_POST['nome']);
	#print_r($_POST['email']);
	#print_r($_POST['senha']);
	
include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];

$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, senha, confirma_senha) 
VALUES ('$nome', '$email', '$senha', '$confirma_senha')");

header('location: login.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="login/index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="login/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="login/img/bv2.svg">
		</div>
		<div class="login-content">
			<form action="form.php" method="POST">
				<img src="login/img/undraw_pic_profile_re_7g2h.svg">
				<h2 class="title">Faça seu Cadastro</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nome</h5>
           		   		<input type="text" class="input" name="nome">
           		   </div>
           		</div>
                   
                <div class="input-div one">
                    <div class="i">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="div">
                            <h5>E-mail</h5>
                            <input type="text" class="input" name="email" >
                    </div>
                 </div>
                


           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" class="input" name="senha">
            	   </div>
            	</div>
                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5> Confime a Senha</h5>
                         <input type="password" class="input" name="confirma_senha">
                 </div>
              </div>
            	<a href="login.php">Quer Fazer Login?</a>
            	<input type="submit" name="submit" class="btn" value="Entrar">
				
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login/js2/main.js"></script>
</body>
</html>
