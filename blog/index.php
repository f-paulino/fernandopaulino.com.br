<?php require('../admin/includes/config.php'); ?>
<?php include('header.php'); ?>

<?php
    $p  = (isset($_GET['url'])) ? $_GET['url'] : "";
        if (empty($p)) {
        $pagina = 'ultimos-artigos';
    } else {
        $pagina = $p;
    }           
        if (file_exists('pages/'.$pagina.'.php')){
        include("pages/$pagina.php");
    } else {
        require "pages/ops.php";
    }
?>

<?php include('footer.php'); ?>        
<!-- ONLY TESTING -->