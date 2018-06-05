<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Editar artigo</title>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>
<link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

<script src="../js/jquery-2.2.3.min.js"></script>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">

<!-- [OPEN] ** Google Framework ** -->
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-red.min.css" />
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!--<link rel="stylesheet" href="google/material.cyan-light_blue.min.css" /> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>

<!-- Custom Fonts -->
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
<style type="text/css">input, select{border-radius:0px!important;border:1px solid #222!important;height:44px!important;}</style>  
</head>
<body>

<div id="all" class="container">
	<div id="uploader"></div>

	<?php include('menu.php');?>

	<h3>Editar artigo</h3>


	<?php


	$savedimg = $_GET['savedimg'];

	if(isset($_POST['submit']))
	{
	     $postImg = rand(1000,100000)."-".$_FILES['postImg']['name'];
	     $pic_loc = $_FILES['postImg']['tmp_name'];
	     $folder="../img/uploaded/articles/";
	     if(move_uploaded_file($pic_loc,$folder.$postImg))
	     {
	        ?><script>alert('Imagem enviada');</script><?php
	     }
	     else
	     {
	        $postImg = $_GET['savedimg'];
	     }

		$_POST = array_map( 'stripslashes', $_POST );


		//collect form data
		extract($_POST);


		if($postImg ==''){
			$postImg = $_GET['savedimg'];
		}

		//very basic validation
		if($postID ==''){
			$error[] = 'ID inválido.';
		}

		if($postTitle ==''){
			$error[] = 'Faltou o título!';
		}else{
			$postUrlTitle = str_replace(" ", "-", $postTitle);
			$postUrlTitle = strtolower($postUrlTitle);

			$postUrlTitle = strtr(utf8_decode($postUrlTitle),
               				utf8_decode('.()!:&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'-----e-sozsozyyuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
 
		}

		if($postDesc ==''){
			$error[] = 'Cadê a descrição??';
		}

		if($postCont ==''){
			$error[] = 'O artigo não tem texto?';
		}

		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('UPDATE blog_posts SET postTitle = :postTitle, postUrlTitle = :postUrlTitle, postImg = :postImg, postCat = :postCat, postSubCat = :postSubCat, postDesc = :postDesc, postCont = :postCont WHERE postID = :postID') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postUrlTitle' => $postUrlTitle,
					':postImg' => $postImg,
					':postCat' => $postCat,
					':postSubCat' => $postSubCat,
					':postDesc' => $postDesc,
					':postCont' => $postCont,
					':postID' => $postID
				));


				$postUrlCat = strtr(utf8_decode($postCat),
                            utf8_decode('&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
				$postUrlCat = str_replace(" ", "-", $postUrlCat);

				//redirect to index page
				header('Location: index.php?action=updated');
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

			$stmt = $db->prepare('SELECT postID, postTitle, postImg, postCat, postSubCat, postDesc, postCont FROM blog_posts WHERE postID = :postID') ;
			$stmt->execute(array(':postID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>

	<form action='' method='post' class='row' enctype="multipart/form-data" >
		
		<div class="form-group col-md-4">
			<label>Categoria</label>
			<select class="form-control" name="postCat">
				<option value="<?php echo $row['postCat'];?>"><?php echo $row['postCat'];?></option>
				<option value="Desenvolvimento pessoal">Desenvolvimento pessoal</option>
				<option value="Design">Design</option>
				<option value="Desenvolvimento web">Desenvolvimento web</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Subcategoria</label>
			<select class="form-control" name="postSubCat">
				<option value="<?php echo $row['postSubCat'];?>"><?php echo $row['postSubCat'];?></option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Imagem principal do artigo</label>
			<input class="form-control" type='file' name='postImg' id="upload-input">
		</div>

		<input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

		<div class="form-group col-md-12">
			<label>Título</label><br />
			<input class="form-control" type='text' name='postTitle' value="<?php echo $row['postTitle'];?>">
		</div>

		<div class="form-group col-md-12">
			<label>Descrição</label>
			<input class="form-control" name='postDesc' value="<?php echo $row['postDesc'];?>">
		</div>

		<div class="form-group col-md-12">
			<label>Conteudo</label><br />
			<textarea class="form-control" name='postCont' cols='60' rows='10'><?php echo $row['postCont'];?></textarea>
		</div>

		<div class="form-group col-md-12">
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type='submit' name='submit'>Salvar</button>
		</div>

	</form>

</div>

</body>
</html>	
