<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Editar usuário</title>

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

	<h3>Editar usuário</h3>


	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($username ==''){
			$error[] = 'Defina um nome de usuário.';
		}

		if( strlen($password) > 0){

			if($password ==''){
				$error[] = 'Você precisa ter uma senha...';
			}

			if($passwordConfirm ==''){
				$error[] = 'Pôe a senha de novo.';
			}

			if($password != $passwordConfirm){
				$error[] = 'Uma senha está diferente da outra!';
			}

		}
		

		if($email ==''){
			$error[] = 'Informe um e-mail.';
		}

		if(!isset($error)){

			try {

				if(isset($password)){

					$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

					//update into database
					$stmt = $db->prepare('UPDATE blog_members SET username = :username, password = :password, email = :email WHERE memberID = :memberID') ;
					$stmt->execute(array(
						':username' => $username,
						':password' => $hashedpassword,
						':email' => $email,
						':memberID' => $memberID
					));


				} else {

					//update database
					$stmt = $db->prepare('UPDATE blog_members SET username = :username, email = :email WHERE memberID = :memberID') ;
					$stmt->execute(array(
						':username' => $username,
						':email' => $email,
						':memberID' => $memberID
					));

				}
				

				//redirect to index page
				header('Location: users.php?action=updated');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	?>


	<?php
	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo $error.'<br />';
		}
	}

		try {

			$stmt = $db->prepare('SELECT memberID, username, email FROM blog_members WHERE memberID = :memberID') ;
			$stmt->execute(array(':memberID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>

	<div class="row">
	<form action='' method='post' class="col-md-6">
		<input type='hidden' name='memberID' value='<?php echo $row['memberID'];?>'>

		<div class="form-group">
			<label>Username</label><br />
			<input class="form-control" type='text' name='username' value='<?php echo $row['username'];?>'>
		</div>

		<div class="form-group">
			<label>Password (only to change)</label><br />
			<input class="form-control" type='password' name='password' value=''>
		</div>

		<div class="form-group">
			<label>Confirm Password</label><br />
			<input class="form-control" type='password' name='passwordConfirm' value=''>
		</div>

		<div class="form-group">
			<label>Email</label><br />
			<input class="form-control" type='text' name='email' value='<?php echo $row['email'];?>'>
		</div>

		<div class="form-group">
			<input type='submit' name='submit' value='Update User' class="btn btn-primary">
		</div>

	</form>
	</div>

</div>

</body>
</html>	
