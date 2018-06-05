<?php

$site_name = 'Fernando Paulino - Freelance Web Designer & Social Media';
$author = 'Fernando Paulino';
$og_locale = 'pt_BR';
$og_type = 'website';
$og_imgtype = 'image/png';
$fbpage_id = '635593833311882';
$twitter_creator = '@paulinando';
$twitter_card = 'summary';
$twitter_title = 'Fernando Paulino';
$twitter_description = 'Fernando Paulino - Freelance Web Designer & Social Media';

if(!isset($_GET['url'])){
   $title = 'Fernando Paulino - Freelance Web Designer & Social Media';
   $meta_url = 'https://fernandopaulino.com.br';
   $meta_description = 'Freelancer Web designer e Social Media - Criação e repaginação de sites, gerenciamento de redes sociais';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'oi'){

   $title = 'Fernando Paulino - Freelance Web Designer & Social Media';
   $meta_url = 'https://fernandopaulino.com.br';
   $meta_description = 'Web Designer e Social Media Freelancer. Criação e repaginação de sites, gerenciamento de redes sociais e redação.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'informacoes'){

   $title = 'Informações de Fernando Paulino';
   $meta_url = 'https://fernandopaulino.com.br/informacoes';
   $meta_description = 'Nada mais coerente para me auto-descrever do que mostrando o que considero importante e busco usar como minhas bases. Separei alguns dos que considero os pilares de um bom trabalho.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'portfolio'){

   $title = 'Trabalhos de Fernando Paulino';
   $meta_url = 'http_build_str(query)://fernandopaulino.com.br/portfolio';
   $meta_description = 'Veja aqui os principais trabalhos de Fernandp Paulino. Web Design, Front-End, Marketing Digial, Redes Sociais e Redação.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'trabalho'){

   $stmt = $db->prepare('SELECT postID, categoria, subcategoria, titulo, thumbnail, url, descricao, conteudo, data FROM trabalhos WHERE url = :url');
   $stmt->execute(array(':url' => $_GET['titulo']));
   $row = $stmt->fetch();

   //if post does not exists redirect user.
   if($row['url'] == ''){
     header('Location: 404');
     exit;
   }

   $titulo = $row['titulo'];
   $categoria = $row['categoria'];
   $subcategoria = $row['subcategoria'];
   $thumbnail = $row['thumbnail'];
   $url = $row['thumbnail'];
   $descricao = $row['descricao'];
   $data = $row['data'];


   $site_name = 'Confira';
   $fbpage_id = '';

   $title = $titulo. " - Fernando Paulino";
   $meta_title = $titulo;

   $meta_url = $url;
   $meta_description = $descricao;
   $og_image = 'img/uploaded/articles/'.$thumbnail;


   // META TAGS [o]
   $title = $row['titulo'];
   $meta_url = 'https://fernandopaulino.com.br/trabalho&assunto='.$row['categoria'].'&titulo='.$row['url'];
   $meta_description = $row['descricao'];
   $og_image = 'https://fernandopaulino.com.br/img/uploaded/works/'.$row['thumbnail']; 
   $robots_index = 'index';

}else {

   $title = 'Fernando Paulino - Freelance Web Designer & Social Media';
   $meta_url = 'https://fernandopaulino.com.br';
   $meta_description = 'Web Designer e Social Media Freelancer. Criação e repaginação de sites e gerenciamento de redes sociais.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';

   }

?>