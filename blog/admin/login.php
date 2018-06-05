<?php
//include config
require_once('../includes/config.php');

//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Login</title>

<link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">

<!-- [OPEN] ** Google Framework ** -->
<!-- <link rel="stylesheet" href="../css/google/material.min.css"> -->

<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-red.min.css" />
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>

<!-- Custom Fonts -->
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">  

</head>
<body>

<div id="all" class="container">
	<div class="col-md-4">
	</div>

	<div class="col-md-4">

		<br><br><br><br>

		<center><img src="../img/minha-cara.png"></center>
		<br><br>

		<center>
		<form action="" method="post">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input name="username" class="mdl-textfield__input" type="text" id="username">
				<label class="mdl-textfield__label" for="username">Usuário</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input name="password" class="mdl-textfield__input" type="password" id="password">
				<label class="mdl-textfield__label" for="password">Senha</label>
			</div>

			<div class="form-group">
				<center>
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="submit">Entrar</button>
				</center>
			</div>
		</form>
		</center>

		<?php

	//process login form if submitted
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if($user->login($username,$password)){ 

			//logged in return to index page
			header('Location: index.php');
			exit;
		

		} else {
			$message = '<p class="error"><center>Wrong username or password</center></p>';
		}

	}//end if submit

	if(isset($message)){ echo $message; }
	?>
	</div>


	<div class="col-md-4">
	</div>
</div>
</body>
</html>
