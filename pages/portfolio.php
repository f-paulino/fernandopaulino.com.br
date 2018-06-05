<img src="<?php echo $og_image; ?>" style="display:none;" alt="Trabalhos de Fernando Paulino">

<div class="container-fuid" id="conteudo">
	<div id="portfolio" class="container">
		<div class="row">
			<div class="col-md-1">
			</div>

			<!-- <nav class="col-md-10">
				<span id="aba_todos" class="botao-ativo"> # Todos </span>
				<span id="aba_web" class=""> Web Design </span>
				<span id="aba_social"> Redes Sociais </span>
				<span id="aba_marketing"> Marketing Digital </span>
				<span id="aba_redacao"> Redação </span>
				<span id="aba_design"> Design Gráfico </span>
			</nav> -->

			<div class="col-md-1">
			</div>
		</div>

		<section id="trabalhos" class="row" >
            <?php
                $start=0;
                $limit=10;

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
								<div class="col-md-3 um-trabalho tag_'.$url_categoria.'">
									<div class="row">
										<div class="col-md-11">
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
		
		</section>
	</div>
</div>