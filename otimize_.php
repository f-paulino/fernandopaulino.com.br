<?php
$site_name = 'Fernando Paulino - Front-end dev & Social Media';
$author = 'Fernando Paulino';
$og_locale = 'pt_BR';
$og_type = 'website';
$og_imgtype = 'image/png';
$fbpage_id = '635593833311882';
$twitter_creator = '@paulinando';
$twitter_card = 'summary';
$twitter_title = 'Fernando Paulino';
$twitter_description = 'Fernando Paulino - Front-end dev & Social Media';

if(!isset($_GET['url'])){
   $title = 'Fernando Paulino - Front-end dev & Social Media';
   $meta_url = 'http://fernandopaulino.com.br';
   $meta_description = 'Web Designer e Social Media Freelancer. Criação e repaginação de sites, gerenciamento de redes sociais e redação.';
   $og_image = 'http://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'oi'){

   $title = 'Fernando Paulino - Front-end dev & Social Media';
   $meta_url = 'http://fernandopaulino.com.br';
   $meta_description = 'Web Designer e Social Media Freelancer. Criação e repaginação de sites, gerenciamento de redes sociais e redação.';
   $og_image = 'http://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'informacoes'){

   $title = 'Informações de Fernando Paulino';
   $meta_url = 'http://fernandopaulino.com.br/informacoes';
   $meta_description = 'Nada mais coerente para me auto-descrever do que mostrando o que considero importante e busco usar como minhas bases. Separei alguns dos que considero os pilares de um bom trabalho.';
   $og_image = 'http://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'portfolio'){

   $title = 'Trabalhos de Fernando Paulino';
   $meta_url = 'http://fernandopaulino.com.br/portfolio';
   $meta_description = 'Veja aqui os principais trabalhos de Fernandp Paulino. Web Design, Front-End, Marketing Digial, Redes Sociais e Redação.';
   $og_image = 'http://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'autoescola-shangai'){

   $title = 'Autoescola Shagai - Redes Sociais e Design Gráfico';
   $meta_url = 'http://fernandopaulino.com.br/autoescola-shangai';
   $meta_description = 'Administração e geração de conteúdo para redes sociais da Autoescola Shangai.';
   $og_image = 'http://fernandopaulino.com.br/img/trabalhos/shangai_logo.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'blog-confira'){

   $title = 'Blog Confira - Web Design, Redação, Marketing Digital e Redes Sociais';
   $meta_url = 'http://fernandopaulino.com.br/blog-confira';
   $meta_description = 'Desenvolvimento de interface + Front-End + Redação (publicação de notícias e artigos) para o Blog Confira, o portal de notícias da Company Conferi.';
   $og_image = 'http://fernandopaulino.com.br/img/trabalhos/confira_logo.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'idc-telecom'){

   $title = 'IDC Telecom - Redes Sociais e Design Gráfico';
   $meta_url = 'http://fernandopaulino.com.br/blog-confira';
   $meta_description = 'Administração e geração de conteúdo para redes sociais para a empresa de telecomunicações (Internet, TV e telefonia) IDC Telecom';
   $og_image = 'http://fernandopaulino.com.br/img/trabalhos/idc_logo.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'luka-academia'){

   $title = 'Luka Academia - Redes Sociais e Design Gráfico';
   $meta_url = 'http://fernandopaulino.com.br/luka-academia';
   $meta_description = 'Administração e geração de conteúdo para redes sociais para a Luka Academia';
   $og_image = 'http://fernandopaulino.com.br/img/trabalhos/luka_logo.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'the-lumberjack'){

   $title = 'The Lumberjack - Marketing, Redes Sociais e Design Gráfico';
   $meta_url = 'http://fernandopaulino.com.br/the-lumberjack';
   $meta_description = 'Marca fictícia + Campanha de lançamento da marca "The Lumberjack"';
   $og_image = 'http://fernandopaulino.com.br/img/trabalhos/lumberjack_logo.png'; 
   $robots_index = 'index';

}else {

   $title = 'Fernando Paulino - Front-end dev & Social Media';
   $meta_url = 'http://fernandopaulino.com.br';
   $meta_description = 'Web Designer e Social Media Freelancer. Criação e repaginação de sites, gerenciamento de redes sociais e redação.';
   $og_image = 'http://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'no-index';

   }

?>