# Host: 50.116.87.235  (Version 5.6.32-78.1)
# Date: 2017-10-23 22:55:33
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "blog_members"
#

CREATE TABLE `blog_members` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "blog_members"
#

INSERT INTO `blog_members` VALUES (1,'Demo','$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2','demo@demo.com'),(4,'paulino','$2y$10$P2NB/UzjhkmQsqhEYPMpU.9ERDKPQHBcYMB2vF7p.o8VfamLjtYUe','fernando-paulino@outlook.com');

#
# Structure for table "blog_posts"
#

CREATE TABLE `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `postCat` varchar(255) DEFAULT NULL COMMENT 'Categoria',
  `postSubCat` varchar(255) DEFAULT NULL COMMENT 'Subactegoria',
  `postTitle` varchar(255) DEFAULT NULL COMMENT 'Título',
  `postUrlTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT 'url da Postagem',
  `postImg` varchar(255) DEFAULT NULL COMMENT 'Imagem da Postagem',
  `postDesc` text COMMENT 'Descrição',
  `postCont` text COMMENT 'Conteúdo',
  `postDate` datetime DEFAULT NULL COMMENT 'Data e Hora',
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

#
# Data for table "blog_posts"
#

INSERT INTO `blog_posts` VALUES (61,'Desenvolvimento pessoal','NotÃ­cias','Nossa! A curiosidade!','nossa--a-curiosidade-','93927-1-ioLq9o-3dhiwqgIXMShVSw.png','Instintivamente nÃ³s temos esse desejo, esse â€œporque nÃ£o?â€ instalado dentro da gente, uma vontade que, mesmo sem uma necessidade prevista, acabamos matando. ','<p>Ouvindo uma m&uacute;sica muito interessante e divertida de Tom Z&eacute; (<em>ou&ccedil;a no fim do artigo</em>) me dei conta de uma grande verdade que a pr&oacute;pria diz: &Eacute; mesmo, a curiosidade, que salva a humanidade. S&eacute;rio, j&aacute; parou pra pensar?</p>\r\n<p><br />Instintivamente n&oacute;s temos esse desejo, esse &ldquo;porque n&atilde;o?&rdquo; instalado dentro da gente, uma vontade que, mesmo sem uma necessidade prevista, acabamos matando. Gra&ccedil;as a isso somos muito diferentes do que eramos muito ou at&eacute; mesmo pouco tempo atr&aacute;s. N&oacute;s queremos saber o resultado do &ldquo;e se&hellip;&rdquo; a qualquer custo e talvez por isso, muitas vezes na nossa hist&oacute;ria foi dita a import&acirc;ncia de n&atilde;o deixar morrer nossa crian&ccedil;a interior.</p>\r\n<p><br />Volte no tempo, lembre-se a&iacute;, n&atilde;o h&aacute; per&iacute;odo em sua vida em que a curiosidade mais protagonizou a sua rotina do que sua inf&acirc;ncia. Cada detalhe, cada barulho, cada ser ou coisa diferente e&hellip; <strong>Nossa!</strong></p>\r\n<p><br />&Eacute; claro, desde nossa &lsquo;pequeninisse&rsquo; at&eacute; hoje j&aacute; sabemos de cor muita coisa desse mundo, j&aacute; n&atilde;o vemos tanta coisa que&hellip; Nossa! Mas nesse &ldquo;j&aacute; sei, j&aacute; v&iacute;&hellip;&rdquo; de todos os dias esquecemos dos detalhes, das sub-novidades presentes em tudo que j&aacute; conhecemos, ou que s&atilde;o escondidas por elas. Sem querer e presos dentro do nosso confort&aacute;vel piloto autom&aacute;tico n&oacute;s fazemos cara de paisagem pra todas as coisas incr&iacute;veis que continuam acontecendo em segundo plano.</p>\r\n<p><br />Mesmo dentre todo esse mundo autom&aacute;tico e desgastante, te desafio a lembrar-se de ser curioso por um simples motivo: <strong>&ldquo;Depois que a gente v&ecirc; n&atilde;o d&aacute; pra desver&rdquo;</strong>, disse nosso brother Einstein. Porque quando voc&ecirc; d&aacute; permiss&atilde;o a curiosidade, mesmo em situa&ccedil;&otilde;es banais, voc&ecirc; est&aacute; colocando coisa nova na sua cabe&ccedil;a, voc&ecirc; v&ecirc; que as coisas s&atilde;o mais do que voc&ecirc; pensava, at&eacute; resolver prestar aten&ccedil;&atilde;o. Acredite, isso muda tudo.</p>\r\n<p><br />Tente. Quando voc&ecirc; estiver naquele longo momento de scroll infinito em seu Facebook, por exemplo, tente trocar isso por uma despretensiosa oberva&ccedil;&atilde;o de qualquer coisa que esteja a sua volta, preste aten&ccedil;&atilde;o nos detalhes que voc&ecirc; sabe que n&atilde;o costuma olhar, ou&ccedil;a os sons que voc&ecirc; ignora, sinta os cheiros que voc&ecirc; deixa passar, observe trejeitos nas pessoas que est&atilde;o com voc&ecirc; que voc&ecirc; n&atilde;o havia reparado at&eacute; ent&atilde;o. S&atilde;o muitas coisas.</p>\r\n<p><br />Eu poderia fazer uma imensa lista do que perdemos por n&atilde;o sermos mais curiosos, mas como a quest&atilde;o aqui &eacute; a curiosidade em si, obviamente, &eacute; melhor que descubra, o belo mundo que deixou em segundo plano, sozinho. Quem sabe, e &eacute; bem prov&aacute;vel, coisas grandiosas saiam de seus momentos curiosos.</p>\r\n<p><br /><em>Como prometido no come&ccedil;o, ou&ccedil;a a m&uacute;sica:</em></p>\r\n<p><em><iframe src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/171422785&amp;color=ff5500\" width=\"100%\" height=\"166\" frameborder=\"no\" scrolling=\"no\"></iframe></em></p>','2017-05-26 22:42:05'),(62,'Desenvolvimento pessoal','NotÃ­cias','Sobre abraÃ§ar o mundo (ou todos eles).','sobre-abracar-o-mundo--ou-todos-eles-.','49838-1-_gjf5FkfIhcDLKEXPHlIWA.png','AlguÃ©m jÃ¡ disse a vocÃª que estÃ¡ querendo â€œabraÃ§ar o mundoâ€? Bem, se nÃ£o, nÃ£o significa que nÃ£o estÃ¡, atÃ© porque, sinto lhe informar, a maior partes das pessoas fazem isso. Mesmo que vocÃª nÃ£o tenha percebido, provavelmente vocÃª fez isso hoje, o dia todo.','<p>Algu&eacute;m j&aacute; disse a voc&ecirc; que est&aacute; querendo &ldquo;<strong>abra&ccedil;ar o mundo</strong>&rdquo;? Bem, se n&atilde;o, n&atilde;o significa que n&atilde;o est&aacute;, at&eacute; porque, sinto lhe informar, a maior partes das pessoas fazem isso. O Pior: <strong>durante toda a vida</strong>. Mesmo que voc&ecirc; n&atilde;o tenha percebido, provavelmente voc&ecirc; fez isso hoje, o dia todo.</p>\r\n<p><br />Para que fique mais explicado, podemos dizer que em nossa vidas acabamos abra&ccedil;ando v&aacute;rios mundos todo dia, dizendo v&aacute;rios &ldquo;OKs&rdquo; para muita coisa que vem at&eacute; n&oacute;s, e n&oacute;s sabemos que a maior parte desses &ldquo;OKs&rdquo; n&atilde;o s&atilde;o l&aacute; muito confort&aacute;veis para n&oacute;s, simplesmente porque <strong>n&atilde;o queremos diz&ecirc;-los de verdade.</strong></p>\r\n<p><br />Talvez seja algo intuitivo de n&oacute;s humanos mortais e fan&aacute;ticos por nossa sobreviv&ecirc;ncia a qualquer custo, querer abra&ccedil;ar todas as oportunidades, todas as tenta&ccedil;&otilde;es e todas a possibilidades ao mesmo tempo, mas no fundo voc&ecirc; sabe que isso n&atilde;o te ajuda em nada.</p>\r\n<p><br />Personalidades importantes na hist&oacute;ria da humanidade mostram claramente o que estou dizendo. Ou voc&ecirc; acha que eles eram, simplesmente, pessoas incr&iacute;veis que eram excelentes em tudo? Acredite se quiser (<em>e massageie sua auto-estima</em>), provavelmente <strong>h&aacute; muita coisa que voc&ecirc; faz melhor do que Steve Jobs faria</strong>. Isso porque pessoas que fizeram hist&oacute;ria por algo simplesmente dedicavam-se por uma causa. <strong>Uma causa.</strong></p>\r\n<p><br />Claro que voc&ecirc; j&aacute; teve aqueles dias em que, num pico de auto confian&ccedil;a, se sentiu capaz de realizar tudo com perfei&ccedil;&atilde;o, mas acredite, se voc&ecirc; tentar ser fant&aacute;stico em tudo, voc&ecirc; no m&aacute;ximo vai conseguir ser mais ou menos em varias coisas que far&atilde;o pouca diferen&ccedil;a neste mundo. A l&oacute;gica &eacute; como querer regar dez mil plantas com um pequeno balde d&rsquo;&aacute;gua. Provavelmente voc&ecirc; imagina o que aconteceria com esta grande planta&ccedil;&atilde;o, n&atilde;o &eacute; mesmo? J&aacute; um vaso, seria regado por v&aacute;rios dias de forma mais que suficiente, formando uma bela e saud&aacute;vel flor (<em>ou qualquer outra coisa que voc&ecirc; tenha imaginado plantada neste vaso&hellip;</em>).</p>\r\n<p><br />Calma, n&atilde;o estou aqui dizendo para voc&ecirc; viver por uma causa e se esquecer de todas as outras habilidades que voc&ecirc; pode treinar e coisas que voc&ecirc; pode fazer durante sua curta e longa vida. Quero que tudo isso que foi dito at&eacute; agora fique guardado em uma caixinha mental chamada <strong>prioridade</strong>. No fundo, por mais que acabemos rejeitando por algum motivos, n&oacute;s sabemos o que &eacute; prioridade em nossas vidas, e se convertemos isso em uma miss&atilde;o, saberemos exatamente, mesmo que com alguns trope&ccedil;os, para o que devemos dizer n&atilde;o.</p>\r\n<p><br />Vale lembrar que, ter prioridades cristalinas na ponta do nosso nariz n&atilde;o traz apenas excel&ecirc;ncia na sua amada habilidade, mas tamb&eacute;m tira aquele maldito peso nas costas, aquela ansiedade e sensa&ccedil;&atilde;o de deslocamento em meio a esse furac&atilde;o que se torna a nossa vida quando por medo de perder algo importante, abra&ccedil;amos qualquer coisa que vem em nossa dire&ccedil;&atilde;o. Ou voc&ecirc; nunca passou o resto do dia angustiado por assumir algo que n&atilde;o deveria?</p>\r\n<p><br />Calma de novo, n&atilde;o estou dizendo que <em>&eacute; tudo t&atilde;o f&aacute;cil assim e que depois de ler este texto voc&ecirc; ser&aacute; a pessoa mais feliz e competente do mundo</em>, mas quando cair aquele enorme raio chamado <strong>insight</strong> na sua cabe&ccedil;a, te lembrando para o que voc&ecirc; deve dar sua mais forte aten&ccedil;&atilde;o, <strong>anote!</strong> Guarde! E trate de se lembrar que &eacute; por isso que seu esfor&ccedil;o valer&aacute; apena. Se voc&ecirc; n&atilde;o escolhe para o que e, inclusive, com quem ir&aacute; usar seu precioso tempo de vida, sinto lhe dizer mas voc&ecirc; n&atilde;o passar&aacute; de uma &ldquo;<em>peteca das circunst&acirc;ncias</em>&rdquo; e, com toda racionalidade e genialidade humana que nascemos, n&atilde;o queremos gastar nossas vidas a merc&ecirc; do tempo e das outras pessoas, n&eacute;?</p>','2017-05-26 22:47:15');

#
# Structure for table "emails_capturados"
#

CREATE TABLE `emails_capturados` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `data_hora` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `navegador` varchar(255) DEFAULT NULL,
  `sistema_operacional` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "emails_capturados"
#

INSERT INTO `emails_capturados` VALUES (1,'fernando-paulino@outlook.com','21/02/2017 11:28:06',NULL,NULL,'Chrome','Windows 10'),(2,'fernando-paulino@outlook.com','21/02/2017 11:28:49',NULL,NULL,'Chrome','Windows 10'),(3,'fernando@companyconferi.com.br','21/02/2017 11:30:17',NULL,NULL,'Chrome','Windows 10'),(4,'fernando@companyconferi.com.br','21/02/2017 12:04:32','S&atilde;o Paulo','Guararema','Chrome','Windows 10');
