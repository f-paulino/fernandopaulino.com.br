<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Novo artigo</title>
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

	<?php include('menu.php');?>

	<h3>Novo artigo</h3>

	<?php


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
	        ?><script>alert('Erro ao enviar a imagem');</script><?php
	     }




		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($postTitle ==''){
			$error[] = 'Faltou o título!.';
		}else{
			$postUrlTitle = str_replace(" ", "-", $postTitle);
			$postUrlTitle = strtolower($postUrlTitle);

			$postUrlTitle = strtr(utf8_decode($postUrlTitle),
               				utf8_decode('()!:&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'----e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
 
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
				$stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postUrlTitle,postImg,postCat,postSubCat,postDesc,postCont,postDate) VALUES (:postTitle, :postUrlTitle, :postImg, :postCat, :postSubCat, :postDesc, :postCont, :postDate)') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postUrlTitle' => $postUrlTitle,
					':postImg' => $postImg,
					':postCat' => $postCat,
					':postSubCat' => $postSubCat,
					':postDesc' => $postDesc,
					':postCont' => $postCont,
					':postDate' => date('Y/m/d H:i:s')
				));

				$postUrlCat = strtr(utf8_decode($postCat),
                            utf8_decode('&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
				$postUrlCat = str_replace(" ", "-", $postUrlCat);

				$f=fopen("../sitemap.txt","a+",0);
				$linha="http://confira.companyconferi.com.br/noticia&categoria=".$postUrlCat."&title=".$postUrlTitle."\n";
				fwrite($f,$linha,strlen($linha));
				fclose($f);


				//redirect to index page
				header('Location: index.php?action=added');
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

	<br><br>
	<form action='' method='post' enctype="multipart/form-data" class="row">

		<div class="form-group col-md-4">
			<label>Categoria</label>
			<select name="postCat" class="form-control">
				<option value="Desenvolvimento pessoal">Desenvolvimento pessoal</option>
				<option value="Design">Design</option>
				<option value="Desenvolvimento web">Desenvolvimento web</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Subcategoria</label>
			<select name="postSubCat" class="form-control">
				<option value="Notícias">Padrão</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Imagem principal do artigo</label>
			<input type='file' name='postImg' class="form-control"></p>
		</div>

		<div class="form-group col-md-12">
			<label>Título</label>
			<input type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>' class="form-control"></p>
		</div>

		<div class="form-group col-md-12">
			<label>Descrição</label>
			<input class="form-control" name='postDesc' value="<?php if(isset($error)){ echo $_POST['postDesc'];}?>">
		</div>

		<br><br>
		<div class="form-group col-md-12">
			<label>Conteúdo</label>
			<textarea class="form-control" name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea>
		</div>

		<div class="form-group col-md-12">
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type='submit' name='submit'>Salvar</button>
		</div>
		

	</form>
<br><br><br><br>
</div>
