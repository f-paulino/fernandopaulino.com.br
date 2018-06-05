<?php include('redirect.php'); ?>
<?php require('admin/includes/config.php'); ?>
<?php include('header.php'); ?>

<?php
    $p  = (isset($_GET['url'])) ? $_GET['url'] : "oi";
        if (empty($p)) {
        $pagina = 'oi';
    } else {
        $pagina = $p;
    }           
        if (file_exists('pages/'.$pagina.'.php')){
        include("pages/$pagina.php");
    } else {
        require "pages/ue.php";
    }
?>

<?php include('footer.php'); ?>        
<!-- ONLY TESTING -->