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
   $title = 'Fernando Paulino - Blog';
   $meta_url = 'https://fernandopaulino.com.br/blog/';
   $meta_description = 'Freelancer Web designer e Social Media - Criação e repaginação de sites, gerenciamento de redes sociais e redação.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'ultimos-artigos'){

   $title = 'Fernando Paulino - Blog';
   $meta_url = 'https://fernandopaulino.com.br/blog/ultimos-artigos';
   $meta_description = 'Freelancer Web designer e Social Media - Criação e repaginação de sites, gerenciamento de redes sociais e redação.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'desenvolvimento-pessoal'){

   $title = 'Desenvolvimento Pessoal - Blog Fernando Paulino';
   $meta_url = 'https://fernandopaulino.com.br/blog/desenvolvimento-pessoal';
   $meta_description = 'Artigos sobre o que aprendi até agora sobre ser uma pessoa melhor.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'design'){

   $title = 'Design - Blog Fernando Paulino';
   $meta_url = 'https://fernandopaulino.com.br/blog/design';
   $meta_description = 'O design esta mais presente do que qualquer um imagina. Aqui publico alguns arquivos sobre detalhes deste assunto sutil que merecem ser observados e comentados';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'desenvolvimento-web'){

   $title = 'Desenvolvimento Web - Blog Fernando Paulino';
   $meta_url = 'https://fernandopaulino.com.br/blog/desenvolvimento-web';
   $meta_description = 'Artigos sobre curiosidades, novidades e muitas outras coisas interessantes sobre este mercado que faz com que a internet mude todos os dias.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';


}else if($_GET['url'] == 'artigo'){

   $stmt = $db->prepare('SELECT postID, postCat, postSubCat, postTitle, postImg, postUrlTitle, postDesc, postCont, postDate FROM blog_posts WHERE postUrlTitle = :postUrlTitle');
   $stmt->execute(array(':postUrlTitle' => $_GET['titulo']));
   $row = $stmt->fetch();

   //if post does not exists redirect user.
   if($row['postUrlTitle'] == ''){
     header('Location: 404');
     exit;
   }

   $postTitle = $row['postTitle'];
   $postCat = $row['postCat'];
   $postSubCat = $row['postSubCat'];
   $postImg = $row['postImg'];
   $postUrl = $shareurl;
   $postDesc = $row['postDesc'];
   $postDate = $row['postDate'];


   $site_name = 'Confira';
   $fbpage_id = '';

   $title = $postTitle. " - Confira";
   $meta_title = $postTitle;

   $meta_url = $shareurl;
   $meta_description = $postDesc;
   $og_image = 'img/uploaded/articles/'.$postImg;


   // META TAGS [o]
   $title = $row['postTitle'];
   $meta_url = 'https://fernandopaulino.com.br/blog/artigo&assunto='.$row['postCat'].'&titulo='.$row['postTitle'];
   $meta_description = $row['postDesc'];
   $og_image = 'https://fernandopaulino.com.br/blog/img/uploaded/'.$row['postImg']; 
   $robots_index = 'index';

}else {

   $title = 'Fernando Paulino - Freelance Web Designer & Social Media';
   $meta_url = 'https://fernandopaulino.com.br';
   $meta_description = 'Web Designer e Social Media Freelancer. Criação e repaginação de sites, gerenciamento de redes sociais e redação.';
   $og_image = 'https://fernandopaulino.com.br/img/share/oi.png'; 
   $robots_index = 'index';

   }

?>