<!DOCTYPE html>
<html lang="en">
    <head>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3495975343321117",
                enable_page_level_ads: true
            });
        </script>
        <meta charset="UTF-8">
        <link rel="shortcut icon" tipe="img/x-icon" href="<?= base_url() ?>assets/pesca.png" />
        <title>  Pesca info  </title>
        <meta name="description" content="Foro pesca, pesca online, como pescar">
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
                            <a id="btnlogo" href="<?= base_url() ?>"> <img src="<?= base_url() ?>assets/casa.png">
                                Bienvenido</a>
                        </li>

                        <li>
                            <a id="btnsecciones"> <img src="<?= base_url() ?>assets/grafico-de-sectores.png">
                                Secciones</a>
                        </li>
                        <li>
                            <a id="btngaleria"><img src="<?= base_url() ?>assets/galeria.png">
                                Galeria</a>
                        </li>    
                        <li>
                            <a id="btneltiempo"><img src="<?= base_url() ?>assets/sol.png">
                                El Tiempo</a>
                        </li>                                                                 
                        <li>
                            <a id="btnabout"> <img src="<?= base_url() ?>assets/social.png">
                                Quienes somos</a>
                        </li>
                        <li>
                            <a id="btnsabermas"> <img src="<?= base_url() ?>assets/portafolios-con-lapiz.png">
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
        <span id="aqui">
            <!-- AQUI VA EL CUERPO CON PHP -->
            <?php
            if (isset($cuerpo)) {
                echo $cuerpo;
            } else {
                echo 'array vacio';}
            ?>
        </span>
    </body>
</html>