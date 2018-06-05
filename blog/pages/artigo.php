<div class="col-md-9 col-md-offset-3" id="conteudo">
    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8" id="corpo-artigo">
            <h1><?php echo $row['postTitle'] ?></h1>
            <span id="article-time"><?php echo date("d/m/Y", strtotime($row['postDate'])).'&nbsp; às &nbsp;'.date("H:i:s", strtotime($row['postDate'])); ?><!--às 18:30--></span>
            <img src="img/uploaded/articles/<?php echo $row['postImg'] ?>" alt="<?php echo $row['postTitle'] ?>" title="<?php echo $row['postTitle'] ?>" id="article_big-img">

            <div class="text-artigo">
                <?php echo $row['postCont'] ?>
            </div>
            <br><br><br>

            <div class="row">
                <div class="col-md-12">
                    <div id="disqus_thread"></div>
                </div>
            </div>

            <script>
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://fernando-paulino-blog.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <br><br>


            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h4>Artigos relacionados</h4>
                    <br>
                </div>
            </div>

            <?php
                $cat = $row['postCat'];
                $subcat = $row['postSubCat'];
                try {

                    $stmt = $db->query("SELECT postID, postTitle, postUrlTitle, postImg, postCat, postSubCat, postDesc, postDate FROM blog_posts WHERE postSubCat = '$subcat' AND postCat = '$cat' ORDER BY rand() DESC limit 2");
                while($row = $stmt->fetch()){

                $postUrlCat = strtr(utf8_decode($row['postCat']),
                            utf8_decode('&%ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),'e-sozsoziuuaaaaaaaceeeeiiiidnoooooouuuuesaaaaaaaceeeeiiiionoooooouuuuee');
                $postUrlCat = str_replace(" ", "-", $postUrlCat);
                
                echo'
            <div class="col-md-6 unidade-artigo-rel">
                <div class="col-md-11">
                    <div class="row">
                        <div class="thumbnail-artigo">
                            <a href="artigo&categoria='.$postUrlCat.'&titulo='.$row['postUrlTitle'].'"><img src="img/uploaded/articles/'.$row['postImg'].'"></a>
                        </div>
                        <div class="col-md-12">
                        <a href="artigo"><h3>'.$row['postTitle'].'</h3></a>
                        <p>'; echo substr($row['postDesc'], 0, 120); echo'</p>
                        </div>
                        <!--<span class="tags blue-tags"><b>#</b>Design Gráfico&nbsp; <b>#</b>Tendência</span>-->
                    </div>
                </div>
            </div>';
                }

                } catch(PDOException $e)  {echo $e->getMessage();}
            ?>
        </div>

        <div class="col-md-2">
        </div>
    </div>
</div>