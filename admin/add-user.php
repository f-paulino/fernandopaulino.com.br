<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  	<meta charset="utf-8">
 	<title>Novo usuário</title>

  	<link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">

	<!-- [OPEN] ** Google Framework ** -->
	<link rel="stylesheet" href="../css/google/material.min.css">

	<!--<link rel="stylesheet" href="google/material.cyan-light_blue.min.css" /> -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>

	<!-- Custom Fonts -->
	<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
	</head>
<body>

<div id="all" class="container">

	<?php include('menu.php');?>

	<h3>Novo usuário</h3>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($username ==''){
			$error[] = 'Please enter the username.';
		}

		if($password ==''){
			$error[] = 'Please enter the password.';
		}

		if($passwordConfirm ==''){
			$error[] = 'Please confirm the password.';
		}

		if($password != $passwordConfirm){
			$error[] = 'Passwords do not match.';
		}

		if($email ==''){
			$error[] = 'Please enter the email address.';
		}

		if(!isset($error)){

			$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO blog_members (username,password,email) VALUES (:username, :password, :email)') ;
				$stmt->execute(array(
					':username' => $username,
					':password' => $hashedpassword,
					':email' => $email
				));

				//redirect to index page
				header('Location: users.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>

	<div class="row">
		<form action='' method='post' class="col-md-6">

			<div class="form-group">
				<label>Username</label><br />
				<input class="form-control" type='text' name='username' value='<?php if(isset($error)){ echo $_POST['username'];}?>'>
			</div>

			<div class="form-group">
				<label>Password</label><br />
				<input class="form-control" type='password' name='password' value='<?php if(isset($error)){ echo $_POST['password'];}?>'>
			</div>

			<div class="form-group">
				<label>Confirm Password</label><br />
				<input class="form-control" type='password' name='passwordConfirm' value='<?php if(isset($error)){ echo $_POST['passwordConfirm'];}?>'>
			</div>

			<div class="form-group">
				<label>Email</label><br />
				<input class="form-control" type='text' name='email' value='<?php if(isset($error)){ echo $_POST['email'];}?>'>
			</div>
			
			<div class="form-group">
				<input type='submit' name='submit' value='Add User' class="btn btn-primary">
			</div>

		</form>
	</div>

</div>
