<img src="img/trabalhos/confira_logo.png" style="display:none;" alt="Blog Confira">

<div class="container-fuid" id="conteudo">
	<div id="portfolio" class="container">
		<section id="trabalho" class="row" >
			<div class="col-md-2">
			</div>

			<div class="col-md-8">
				<h1><?php echo $row['titulo'] ?></h1>
				<h2><?php echo $row['descricao'] ?></h2>

				<div id="competencias-usadas" class="row">
					<span class="mdl-chip mdl-chip--contact">
					    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">#</span>
					    <span class="mdl-chip__text"><?php echo $row['categoria'] ?></span>
					</span>
				</div>

				<div>
					<?php echo $row['conteudo'] ?>
				</div>
				

				<br><br>
				<span id="sobe">
					<a href="#top">
						<i class="material-icons">&#xE316;</i>
					</a>
				</span>
			</div>

			<div class="col-md-2">
			</div>
		</section>
	</div>
</div>