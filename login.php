<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login/index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="login/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="login/img/undraw_mobile_development_re_wwsn.svg">
		</div>
		<div class="login-content">
			<form action="test.php" method="post">
				<img src="login/img/undraw_pic_profile_re_7g2h.svg">
				<h2 class="title">Bem-Vindo</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
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
           		    	<input type="password" class="input" name="senha" >
            	   </div>
            	</div>
            	<a href="">Esqueceu sua Senha?</a>
            	<input type="submit" name="submit" class="btn" value="Entrar">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login/js2/main.js"></script>
</body>
</html>