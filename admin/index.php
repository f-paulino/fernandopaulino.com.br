<?php
//include config
require_once('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['delpost'])){ 

	$stmt = $db->prepare('DELETE FROM trabalhos WHERE postID = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost']));

	header('Location: index.php?action=deleted');
	exit;
} 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Administrador</title>
<script language="JavaScript" type="text/javascript">
function delpost(id, title)
{
  if (confirm("Are you sure you want to delete '" + title + "'"))
  {
  	window.location.href = 'index.php?delpost=' + id;
  }
}
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
</head>
<body>
	<div id="all" class="container">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>Post '.$_GET['action'].'.</h3>'; 
	} 
	?>

	<table class="mdl-data-table mdl-js-data-table" style="width:100%;">
	<tr>
		<th class="mdl-data-table__cell--non-numeric">Título</th>
		<th>Data</th>
		<th style="text-align: right;">Ações</th>
	</tr>
	<?php
		try {

			$stmt = $db->query('SELECT postID, titulo, thumbnail, data FROM trabalhos ORDER BY postID DESC');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td class="mdl-data-table__cell--non-numeric">&nbsp;&nbsp;&nbsp;'.$row['titulo'].'</td>';
				echo '<td>'.date("d/m/Y", strtotime($row['data'])).'&nbsp; às &nbsp;'.date("H:i:s", strtotime($row['data'])).'</td>';
				?>

				<td style="text-align: right;">
					<a href="edit-post.php?id=<?php echo $row['postID'];?>&savedimg=<?php echo $row['thumbnail'];?>"><i class="material-icons">&#xE22B;</i></a>&nbsp;&nbsp;&nbsp;<a href="javascript:delpost('<?php echo $row['postID'];?>','<?php echo $row['titulo'];?>')"><i class="material-icons">&#xE872;</i></a>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>
	<br>
	<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
	<a href='add-post.php'><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Nova postagem</button></a>
	<br><br><br><br><br><br>

</div>
</body>
</html>
