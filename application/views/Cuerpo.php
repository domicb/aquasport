
        <div class="col-md-9">
            <div class="row carousel-holder">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="<?= base_url() ?>assets/ESLOGAN.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="<?= base_url() ?>assets/ESLOGAN2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">   
    <?php $contador = 0;
    foreach ($articulos as $key => $articulo): $contador ++;?> 
        <div class="col-sm-4 col-lg-3 col-md-3"><!-- COMIENZO PANEL -->
            <div class="thumbnail">
                <img src="<?= base_url() ?>uploads/<?= $articulo['ruta'] ?>" alt="<?= $articulo['titulo'] ?>">
                <div class="caption">
                    <h4 class="pull-right"><?= $articulo['autor'] ?> &copy;</h4>
                    <h4><a href="<?=base_url()?>index.php/Articulo/mostrar/<?=$articulo['id']?>"><?= $articulo['titulo'] ?></a>
                    </h4>
                    <p><?= substr($articulo['descripcion'], 0, 500) ?></p>
                </div>
                <div class="ratings">
                    <p><small>Escrito en 
                        <?=$articulo['fecha']?></small></p>
                    <!-- AQUI PODRíAMOS AÑADIR UN BOTON DE FACEBOOK O TWTER
                    <p class="pull-right">15 reviews</p>-->
                </div>
            </div>   
        </div><!--CIERRE PANEL -->
    <?php endforeach; ?>  
</div>
<div class="row text-center"> <?php echo $this->pagination->create_links() ?> </div>
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