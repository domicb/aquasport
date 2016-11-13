 <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <p class="lead"><a href="http://www.pescacng.info/foropesca">Entra al foro</a></p>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Videos</a>
                        <a href="#" class="list-group-item">Articulos</a>
                         <a href="#" class="list-group-item">Noticias</a>
                         <a href="#" class="list-group-item">Recetas</a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row carousel-holder">

                        <div class="col-md-12">
                              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="slide-image" src="<?=base_url()?>assets/3ancho.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="slide-image" src="<?=base_url()?>assets/4ancho.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="slide-image" src="<?=base_url()?>assets/5ancho.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
             
    <?php $contador = 0; foreach ($articulos as $key => $articulo):  $contador ++;?>   
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="<?=base_url()?>uploads/<?= $articulo['ruta']?>" alt="Licencia de pesca">
                        <div class="caption">
                            <h4 class="pull-right"><?= $articulo['autor'] ?> &copy;</h4>
                            <h4><a href="#"><?= $articulo['titulo'] ?></a>
                            </h4>
                            <p><?= substr($articulo['cuerpo'], 0, 2000) ?></p>
                        </div>
                        <div class="ratings">
                        <p><?php if($articulo['enlace']!=''): ?>
                             <a href="<?=$articulo['enlace']?>"target="_blank">Sigue leyendo... </a></p>
                            <?php endif;?>
                          <!-- AQUI PODRíAMOS AÑADIR UN BOTON DE FACEBOOK O TWTER
                          <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>-->
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <div class="row text-center">
    <?php echo $this->pagination->create_links() ?></div>
</div>
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
                <center><p>Copyright © Domi C. 2016</p></center>
            </div>
        </div>
    </footer>

</div>

</html>