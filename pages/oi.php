<img src="<?php echo $og_image; ?>" style="display:none;" alt="Fernando Paulino - Freelance Web Designer">

<div class="container-fuid" id="conteudo">
	<div class="container" id="oi">
		<div class="row">
			<section id="cartao-de-visita" class="col-md-12">
				<h1> Fernando Paulino </h1>
				<h2> Front-end Dev & Social Media </h2>

				<center>
					<span><i class="material-icons">&#xE0BE;</i>&nbsp; contato@fernandopaulino.com.br</span>
					<span><i class="material-icons">&#xE0CF;</i>&nbsp; +55 11 943 611 942
					</span>
				</center>
				<center>
					<a href="https://fernandopaulino.com.br/blog">
						<button class="mdl-button mdl-js-button mdl-button--primary std_orange-btn"><i class="material-icons">&#xE54B;</i> Leia meu blog</button>
					</a>
				</center>
			</section>
		</div>

		<div id="tags">Web Designer, Desenvolvedor Front-End, Social Media, Marketing Digital, Redação Publicitária</div>

		<section id="ultimos-trabalhos" class="row">
			<div class="col-md-1 hidden-xs hidden-sm">
			</div>

			<div class="col-md-10 col-xs-11">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<h2><i class="material-icons">&#xE8B5;</i> Últimos trabalhos </h2>
						</div>
					</div>
					<?php
                $start=0;
                $limit=3;

                if(isset($_GET['part'])) {
                    $pag=$_GET['part'];
                    $start=($pag-1)*$limit;
                }

                try {
                    $stmt = $db->query("SELECT postID, titulo, thumbnail, url, categoria, subcategoria, descricao, data FROM trabalhos ORDER BY postID DESC limit $start, $limit");

                    while($row = $stmt->fetch()){
                        $url_categoria = strtr(utf8_decode($row['categoria']), utf8_decode('&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
                        $url_categoria = str_replace(" ", "-", $url_categoria);

                        echo '
                        	<a href="trabalho&categoria='.$url_categoria.'&titulo='.$row['url'].'">
								<div class="col-md-4 um-trabalho tag_'.$url_categoria.'">
									<div class="row">
										<div class="col-md-11 col-xs-11">
											<div class="thumb-trabalho">
												<img src="img/uploaded/works/'.$row['thumbnail'].'">
											</div>

											<h3>'.$row['titulo'].'</h3>
											<p>'; echo substr($row['descricao'], 0, 120); echo'</p>

											<span><b>#'.$row['categoria'].'</b></span>
										</div>
									</div>
								</div>
							</a>
						';
                    }

                } 
                catch(PDOException $e) {
                    echo $e->getMessage();
                }
            ?>
					<a href="portfolio">
						<button id="mais-trabalhos" class="mdl-button mdl-js-button mdl-button--primary std_orange-btn">Ver mais</button>
					</a>
				</div>
			</div>
		</section>

	</div>
</div>