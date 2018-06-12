<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' type='image/x-icon' href='img/icon/favicon.ico' />
    <link href="css/styles.css" rel="stylesheet">

    <!-- Fontes e ícones -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <?php include('otimize.php'); ?>
    <title><?= $title; ?></title>
    <link rel="canonical" href="<?= $meta_url; ?>" />
    <meta name="title" content="<?= $title; ?>" />
    <meta name="description" content="<?= $meta_description; ?>" />
    <meta name="author" content="<?= $author; ?>" />
    <meta name="robots" content="<?= $robots_index; ?>" />
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="<?= $og_type; ?>">
    <meta property="og:site_name" contentp="<?= $site_name; ?>">
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:url" content="<?= $meta_url; ?>" />
    <meta property="og:image" content="<?= $og_image; ?>" />
    <meta property="og:image:type" content="<?= $og_imgtype; ?>">
    <meta property="og:description" content="<?= $meta_description; ?>" />
    <meta property="og:locale" content="<?= $og_locale; ?>" />
    <meta property="fb:page_id" content="<?= $fbpage_id; ?>" />
    <meta name="twitter:creator" content="<?= $twitter_creator; ?>" />
    <meta name="twitter:card" content="<?= $twitter_card; ?>" />
    <meta name="twitter:title" content="<?= $twitter_title; ?>" />
    <meta name="twitter:description" content="<?= $twitter_description; ?>"/>
    <meta name="p:domain_verify" content="b17cd4c343894468bcddd3eb402b3bf6"/>
</head>
<body>
<div id="all">
    <header class="container-fluid">
        <div id="links-mobile" class="container-fluid hidden-md hidden-lg">
            <div class="row">
                <div class="col-xs-6">
                    <a href="https://trampos.co/fernandopaulino" target="_blank"><img src="img/icon/maozinha.png" alt="Perfil no Trampos.co" align="left"></a>

                    <a href="https://www.behance.net/fernandopaulino" target="_blank">
                    <img src="img/icon/behance.png" alt="Portfólio no Behance" align="left"></a>
                </div>

                <div class="col-xs-6">
                    <a href="https://twitter.com/paulinando" target="_blank"><img src="img/icon/twitter.png" alt="Twitter de Fernando Paulino" align="right"></a>

                    <a href="https://pinterest.com/almeidappaulino/" target="_blank"><img src="img/icon/pinterest.png" alt="Pinterest de Fernando Paulino" align="right"></a>
                </div>
            </div>
        </div>

        <div class="container">
            <nav class="row">
                <div class="col-md-3 col-xs-4">
                    <a href="portfolio">
                        <img src="img/icon/maletinha.png" alt="Portfólio" align="left" class="hidden-sm hidden-xs">
                        Trabalhos
                    </a>
                </div>

                <div class="col-md-2 hidden-sm hidden-xs" id="links1">
                    <a href="https://trampos.co/fernandopaulino" target="_blank"><img src="img/icon/maozinha.png" alt="Perfil no Trampos.co" align="right"></a>

                    <a href="https://www.behance.net/fernandopaulino" target="_blank">

                    <img src="img/icon/behance.png" alt="Portfólio no Behance" align="right"></a>
                </div>

                <div class="col-md-2 col-xs-4">
                    <center>
                        <a href="./"><img src="img/minha-cara.png" alt="Foto de Fernando Paulino" id="minha-cara" draggable="false" /></a>
                    </center>
                </div>

                <div class="col-md-2 hidden-sm hidden-xs" id="links2">
                    <a href="https://twitter.com/paulinando" target="_blank"><img src="img/icon/twitter.png" alt="Twitter de Fernando Paulino" align="left"></a>

                    <a href="https://pinterest.com/almeidappaulino/" target="_blank"><img src="img/icon/pinterest.png" alt="Pinterest de Fernando Paulino" align="left"></a>
                </div>

                <div class="col-md-3 col-xs-4">
                    <a href="informacoes">
                        <span class="hidden-lg hidden-md">Informações </span>
                        <span class="hidden-xs hidden-sm">sobre mim</span>
                        <img src="img/icon/cracha.png" alt="Crachá" align="right" draggable="false" class="hidden-xs hidden-sm"/>
                    </a>
                </div>
            </nav>

            <div class="row">
                <div class="col-md-5">
                </div>

                <div class="col-md-2">
                    <center>
                        <img id="assinatura" src="img/fernando-paulino.png">
                    </center>
                </div>

                <div class="col-md-5">
                </div>
            </div>
        </iv>
    </header>

