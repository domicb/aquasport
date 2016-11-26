<!DOCTYPE html>
<html lang="en">
    <head>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3495975343321117",
                enable_page_level_ads: true
            });
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-86909092-1', 'auto');
          ga('send', 'pageview');
        </script>
        <meta charset="UTF-8">
        <link rel="shortcut icon" tipe="img/x-icon" href="<?= base_url() ?>assets/pesca.png" />
        <title>  Articulos pesca | pescacng.info </title>
        <meta name="description" content="Foro pesca, pesca, articulos de pesca">
        <!-- NOS HEMOS DECANTADO POR UTILIZAR EL CDN DE BOOSTRAP -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- CDN MATERIALIZE -->
        <!-- Compiled and minified CSS -->
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <style type="text/css">
            .titulo{
                color:#012DFF;
                line-height: 1.2;}
            #titulo{
                color:#1F618D;
                font-style:"century ghotic";}
            .p{
                color:#0066E8;}
            #cris{
                background-color:#1F618D;
                font-size:18px;}   

            html, body, #map_canvas {                
                height: 100%;}
            </style>
        </head>
        <body>
            <!-- BARRA DE NAVEGACIÓN SUPERIOR -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="cris" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Utilizamos la clase navbar-collapse es decir una lista que se despliega 1 a 1 en dispositivos pequeños -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a id="btnlogo" href="<?= base_url() ?>index.php/Landing"> <img src="<?= base_url() ?>assets/casa.png">
                                Bienvenido</a>
                        </li>

                        <li>
                            <a id="btnsecciones" href="<?= base_url() ?>index.php/Landing/"> <img src="<?= base_url() ?>assets/grafico-de-sectores.png">
                                Secciones</a>
                        </li>
                        <li>
                            <a id="btngaleria" href="<?= base_url() ?>index.php/Landing/"><img src="<?= base_url() ?>assets/galeria.png">
                                Galeria</a>
                        </li>    
                        <li>
                            <a id="btneltiempo" href="<?= base_url() ?>index.php/Landing/"><img src="<?= base_url() ?>assets/sol.png">
                                El Tiempo</a>
                        </li>                                                                 
                        <li>
                            <a id="btnabout" href="<?= base_url() ?>index.php/Landing/"> <img src="<?= base_url() ?>assets/social.png">
                                Quienes somos</a>
                        </li>
                        <li>
                            <a id="btnsabermas" href="<?= base_url() ?>index.php/Landing/"> <img src="<?= base_url() ?>assets/portafolios-con-lapiz.png">
                                Saber mas!</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=1827996470779055";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <br><hr><br>
        <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <p class="lead"><a href="http://www.pescacng.info/foropesca">Ver contenido en el foro</a></p>
            <div class="list-group">
                <a href="https://www.youtube.com/channel/UCCKepeCXkZ1l6S3UsLVN_xw" class="list-group-item"><h4 class="list-group-item-heading">Videos</h4>
                    <p class="list-group-item-text">Descubre nuestro catálogo de vídeos y tutoriales</p></a>
                    <a href="<?=base_url()?>index.php/Articulos" class="list-group-item"><h4 class="list-group-item-heading">Articulos</h4>
                    <p class="list-group-item-text">Consulta los artículos y noticias </p></a>
                <a href="https://www.google.es/imgres?imgurl=http%3A%2F%2Fdde.ieepo.oaxaca.gob.mx%2Fwp-content%2Fuploads%2F2016%2F01%2FWeb-en-Construccion.png&imgrefurl=http%3A%2F%2Fdde.ieepo.oaxaca.gob.mx%2F%3Fattachment_id%3D377&docid=-rVJdu3z2XeGRM&tbnid=FdrJcXQMah_DuM%3A&vet=1&w=1280&h=800&bih=708&biw=1517&ved=0ahUKEwj64fiLjrbQAhVJvBoKHUGGCwIQMwg3KAAwAA&iact=mrc&uact=8" class="list-group-item">
                    <h4 class="list-group-item-heading">Recetas</h4><p class="list-group-item list-group-item-danger">En construcción </p></a>
            </div>
        </div>
        <span id="aqui">
            <!-- AQUI VA EL CUERPO CON PHP -->
            <?php
            if (isset($cuerpo)) {
                echo $cuerpo;
            } else {
                echo 'array vacio';}
            ?>
        </span>
    </div>
</div>
    </body>
</html>