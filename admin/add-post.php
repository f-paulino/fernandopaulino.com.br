<?php //include config
require_once('includes/config.php');

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
	     $thumbnail = rand(1000,100000)."-".$_FILES['thumbnail']['name'];
	     $pic_loc = $_FILES['thumbnail']['tmp_name'];
	     $folder="../img/uploaded/works/";
	     if(move_uploaded_file($pic_loc,$folder.$thumbnail))
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
		if($titulo ==''){
			$error[] = 'Faltou o título!.';
		}else{
			$url = str_replace(" ", "-", $titulo);
			$url = strtolower($url);

			$url = strtr(utf8_decode($url),
               				utf8_decode('()!:&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'----e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
 
		}

		if($descricao ==''){
			$error[] = 'Cadê a descrição??';
		}

		if($conteudo ==''){
			$error[] = 'O artigo não tem texto?';
		}

		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO trabalhos (titulo,url,thumbnail,categoria,subcategoria,descricao,conteudo,data) VALUES (:titulo, :url, :thumbnail, :categoria, :subcategoria, :descricao, :conteudo, :data)') ;
				$stmt->execute(array(
					':titulo' => $titulo,
					':url' => $url,
					':thumbnail' => $thumbnail,
					':categoria' => $categoria,
					':subcategoria' => $subcategoria,
					':descricao' => $descricao,
					':conteudo' => $conteudo,
					':data' => date('Y/m/d H:i:s')
				));

				$url_categoria = strtr(utf8_decode($categoria),
                            utf8_decode('&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
				$url_categoria = str_replace(" ", "-", $url_categoria);

				$f=fopen("../sitemap.txt","a+",0);
				$linha="http://fernandopaulino.com.br/trabalho&categoria=".$url_categoria."&title=".$url."\n";
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
			<select name="categoria" class="form-control">
				<option value="Marca">Marca</option>
				<option value="Redes sociais">Redes Sociais</option>
				<option value="Design gráfico">Design Gráfico</option>
				<option value="Web design">Web Design</option>
				<option value="Desenvolvimento">Desenvolvimento</option>
				<option value="Redação">Redação</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Subcategoria</label>
			<select name="subcategoria" class="form-control">
				<option value="Job">Job</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Thumbnail</label>
			<input type='file' name='thumbnail' class="form-control"></p>
		</div>

		<div class="form-group col-md-12">
			<label>Título</label>
			<input type='text' name='titulo' value='<?php if(isset($error)){ echo $_POST['titulo'];}?>' class="form-control"></p>
		</div>

		<div class="form-group col-md-12">
			<label>Descrição breve</label>
			<input class="form-control" name='descricao' value="<?php if(isset($error)){ echo $_POST['descricao'];}?>">
		</div>

		<br><br>
		<div class="form-group col-md-12">
			<label>Conteúdo</label>
			<textarea class="form-control" name='conteudo' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['conteudo'];}?></textarea>
		</div>

		<div class="form-group col-md-12">
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type='submit' name='submit'>Salvar</button>
		</div>
		

	</form>
<br><br><br><br>
</div>
