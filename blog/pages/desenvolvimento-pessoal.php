<style type="text/css">#mn1 li i{color:#f7773e!important;}</style>

<div class="col-md-9 col-md-offset-3" id="conteudo">
    <div class="col-md-12">
        <div class="row" id="topo-categoria">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <h2><i class="material-icons orange">&#xE892;</i>&nbsp; Desenvolvimento Pessoal </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
                $start=0;
                $limit=10;

                if(isset($_GET['part'])) {
                    $pag=$_GET['part'];
                    $start=($pag-1)*$limit;
                }

                try {
                    $stmt = $db->query("SELECT postID, postTitle, postImg, postUrlTitle, postCat, postSubCat, postDesc, postDate FROM blog_posts WHERE postCat like 'Desenvolvimento pessoal' ORDER BY postID DESC limit $start, $limit");

                    while($row = $stmt->fetch()){
                        $postUrlCat = strtr(utf8_decode($row['postCat']), utf8_decode('&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
                        $postUrlCat = str_replace(" ", "-", $postUrlCat);

                        echo '
                            <div class="col-md-5 col-md-offset-1 unidade-artigo">
                                <div class="row thumbnail-artigo">
                                    <a href="artigo&categoria='.$postUrlCat.'&titulo='.$row['postUrlTitle'].'"><img src="img/uploaded/articles/'.$row['postImg'].'"></a>
                                </div>

                                <a href="artigo&categoria='.$postUrlCat.'&titulo='.$row['postUrlTitle'].'"><h3>'.$row['postTitle'].'</h3></a>
                                <p>'; echo substr($row['postDesc'], 0, 120); echo'</p>

                                <!--<span class="tags blue-tags"><b>#</b>Design Gráfico&nbsp; <b>#</b>Tendência</span>-->
                            </div>';

                    }

                } 
                catch(PDOException $e) {
                    echo $e->getMessage();
                }
            ?>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <nav aria-label="Page navigation">    
                    <?php
                        $stmt = $db->query("SELECT * FROM blog_posts");
                        $cont = $stmt->rowCount();
                        $total= ceil($cont/$limit);

                        if(isset($pag)){
                            echo "<ul class='pagination'>";
                            for($i=1;$i<=$total;$i++){
                                if($i==$pag) { echo "<li class='active'><a>".$i."</a></li>"; }
                                else { echo "<li><a href='desenvolvimento-pessoal&part=".$i."'>".$i."</a></li>"; }
                            }
                            echo "</ul>";
                        }
                    ?>
                    </nav>
                </div>
            </div>
        </div>

    </div>
