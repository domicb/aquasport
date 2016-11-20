<!-- Page Content -->
<div class="col-md-9">

    <div class="thumbnail">
        <img class="img-responsive" src="<?= base_url() ?>uploads/<?= $articulo['ruta'] ?>" alt="">
        <div class="caption-full">
            <h4 class="pull-right"><?= $articulo['autor'] ?>&COPY;</h4>
            <h4><a href="#"><?= $articulo['titulo'] ?></a>
            </h4> 
            <p><?= $articulo['cuerpo'] ?></p>
            <?php if ($articulo['enlace'] != ''): ?>
                <iframe src="<?= $articulo['enlace'] ?>" width="560" height="315" frameborder="0" allowfullscreen ></iframe><br>
            <?php endif; ?><p>Si quieres saber más sobre este articulo puedes dejarnos un post en nuestro foro con tu consulta
                <strong><a href="http://www.pesacng.info/index.php/foropesca/">Descubre el foro</a>
                </strong>www.pescacng.info/foropesca/</p>
            <p>
                	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your like button code -->
	<div class="fb-like" 
		data-href="<?= base_url() ?>index.php/Articulo/mostrar/<?= $articulo['id'] ?>" 
		data-layout="standard" 
		data-action="like" 
		data-show-faces="true">
	</div>
                <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

            <!-- Your share button code -->
            <div class="fb-share-button" 
                 data-href="<?= base_url() ?>index.php/Articulo/mostrar/<?= $articulo['id'] ?>" 
                 data-layout="button_count">
            </div>
            </p>
        </div>
    </div>
    <!--<div class="well">
        <div class="text-right">
            <a class="btn btn-success">Escribe un comentario</a>
        </div> AQUI PODREMOS HACER QUE LA GENTE PONGA UN COMENTARIO A LA ENTRADA-->
    <hr>
    <!--  <div class="row">
          <div class="col-md-12">
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
              Anonymous
              <span class="pull-right">10 days ago</span>
              <p>This product was great in terms of quality. I would definitely buy another!</p>
          </div>    
    </div>
      <hr>
  </div>-->

</div>

</div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <center>  <p>Copyright © Domi C. 2016</p></center>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

</body>

</html>