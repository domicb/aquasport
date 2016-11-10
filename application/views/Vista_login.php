<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

     <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-4" id="login">
                <form class="form-signin" role="form" action="<?=base_url()?>index.php/Login/" method="POST">
                    <div class="text-center">
                        <img id="avatar" src="<?=base_url()?>Assets/img/nadie.png" alt="avatar">
                    </div>
                    <input id="txtEmail" type="email" name="username" class="form-control" placeholder="Email">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
    <div id="nebaris">
        <a href="<?=base_url().'index.php/Envio_email'?>">¿No tienes cuenta?</a>   
        <a href="<?=base_url().'index.php/Usuarios_ci/contra'?>">Restablecer contraseña</a>           
        <a href="<?=base_url()?>">Volver a inicio</a>   
    </div>
    <script src="<?=base_url()?>Assets/js/jquery.js"></script>
    <script src="<?=base_url()?>Assets/js/jquery.md5.min.js"></script>
     <script src="<?=base_url()?>Assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>Assets/js/script.js"></script>
</body>

</html>
