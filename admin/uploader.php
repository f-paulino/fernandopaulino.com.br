
<?php
if(isset($_POST['submit']))
	{
	     $thumbnail = rand(1000,100000)."-".$_FILES['thumbnail']['name'];
	     $pic_loc = $_FILES['thumbnail']['tmp_name'];
	     $folder="../img/uploaded/works/";
	     if(move_uploaded_file($pic_loc,$folder.$thumbnail))
	     {
	        echo '<script>alert("Imagem enviada");</script>';
	     }
	     else
	     {
	        echo '<script>alert("Erro ao enviar a imagem");</script>';
	     }
	 }
?>
eai