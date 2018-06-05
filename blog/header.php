<!DOCTYPE html>
<html lang="pt-br">
<?php $shareurl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='shortcut icon' type='image/x-icon' href='https://fernandopaulino.com.br/img/icon/favicon.ico' />

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/google/material.css" rel="stylesheet">

    <!-- Fontes e ícones -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <!-- Custom CSS -->
    <link href="css/personal.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">

    <!-- TTL, MTTGS & ETC [O] -->
    <?php include('otimize.php'); ?>
    <title><?php echo $title; ?></title>
    
    <link rel="canonical" href="<?php echo $meta_url; ?>" />
    <meta name="title" content="<?php echo $title; ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>" />
    <meta name="author" content="<?php echo $author; ?>" />
    <meta name="robots" content="<?php echo $robots_index; ?>" />
    <meta name="format-detection" content="telephone=no">

    <meta property="og:type" content="<?php echo $og_type; ?>">
    <meta property="og:site_name" contentp="<?php echo $site_name; ?>">
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:url" content="<?php echo $meta_url; ?>" />
    <meta property="og:image" content="<?php echo $og_image; ?>" />
    <meta property="og:image:type" content="<?php echo $og_imgtype; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>" />
    <meta property="og:locale" content="<?php echo $og_locale; ?>" />

    <meta property="fb:page_id" content="<?php echo $fbpage_id; ?>" />
    
    <meta name="twitter:creator" content="<?php echo $twitter_creator; ?>" />
    <meta name="twitter:card" content="<?php echo $twitter_card; ?>" />
    <meta name="twitter:title" content="<?php echo $twitter_title; ?>" />
    <meta name="twitter:description" content="<?php echo $twitter_description; ?>"/>
    <!-- TTL, MTTGS & ETC [C] -->
</head>

<body>
<div id="all" class="container-fluid">
    <div class="row">
        <nav id="menu-mob" class="row hidden-lg hidden-md">
            <div class="col-xs-6">
                <a href="./"><img id="logo-mob" src="img/fernando-paulino.png"></a>
            </div>

            <div class="col-xs-6">
                <button id="mob-menu_btn" class="pull-right mdl-button mdl-js-button mdl-button--icon"><i class="material-icons">more_vert</i></button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="mob-menu_btn">
                  <a href="ultimos-artigos"><li class="mdl-menu__item"><i class="material-icons">&#xE192;</i>&nbsp; Ultimos artigos</li></a>
                  <a href="desenvolvimento-pessoal"><li class="mdl-menu__item"><i class="material-icons">&#xE893;</i>&nbsp; Desenvolvimento pessoal</li></a>
                  <a href="design"><li class="mdl-menu__item"><i class="material-icons">&#xE893;</i>&nbsp; Design</li></a>
                  <a href="desenvolvimento-web"><li class="mdl-menu__item"><i class="material-icons">&#xE893;</i>&nbsp; Desenvolvimento web</li></a>
                  <a href="http://fernandopaulino.com.br"><li class="mdl-menu__item"><i class="material-icons">&#xE5C4;</i>&nbsp; Ir para o site</li></a>
                </ul>
            </div>
        </nav>

        <nav id="sidebar" class="col-md-3 hidden-sm hidden-xs">
            <div class="row">
                <div class="col-md-2">
                    <ul>
                        <a href="ultimos-artigos" title="Últimos artigos"><li><i class="material-icons">&#xE871;</i></li></a>
                    </ul>

                    <ul>
                        <a title="Medium" href="https://medium.com/@fernando.paulino" target="_blank"><li><i class="fa fa-medium" aria-hidden="true"></i></li></a>
                        <a title="Twitter" href="https://twitter.com/paulinando" target="_blank"><li><i class="fa fa-twitter" aria-hidden="true"></i></li></a>
                        <a title="Pinterest" href="https://pinterest.com/almeidappaulino" target="_blank"><li><i class="fa fa-pinterest" aria-hidden="true"></i></li></a>
                    </ul>
                </div>

                <div class="col-md-10">
                    <a href="./"><img src="img/minha-cara.png" id="minha-cara"></a>
                    <a href="./"><img src="img/fernando-paulino.png" id="assinatura"></a>

                    <ul id="menu-principal">
                        <a id="mn1" href="desenvolvimento-pessoal&part=1"><li> Desenvolvimento Pessoal &nbsp;<i class="material-icons">&#xE893;</i></li></a>
                        <a id="mn2" href="design&part=1"><li> Design &nbsp;<i class="material-icons">&#xE893;</i></li></a>
                        <a id="mn3" href="desenvolvimento-web&part=1"><li> Desenvolvimento Web &nbsp;<i class="material-icons">&#xE893;</i></li></a>
                        <a id="mn4" href="https://fernandopaulino.com.br"><li> Ir para o site </li></a>
                    </ul>
                </div>
            </div>
        </nav>



