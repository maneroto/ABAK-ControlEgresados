<!DOCTYPE html>
<?php
    $host  = $_SERVER['SERVER_NAME'];
?>
<html>
    <head>
        <title>
            Casino DAW-BD
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta charset = "utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo 'https://'.$host.'/lab17/css/style.css'?>" rel = "stylesheet">
    </head>
    <body>
    <?php ?>
    <div class = "navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="<?php echo 'https://'.$host.'/lab17/index.php'?>" class="left brand-logo"><img src="https://cdn.worldvectorlogo.com/logos/casino-supermarket-logo.svg" class = "logo"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo 'https://'.$host.'/lab17/views/null.php'?>">Cuenta</a>
                    <li><a href="<?php echo 'https://'.$host.'/lab17/views/null.php'?>">Información personal</a>
                    <li><a href="<?php echo 'https://'.$host.'/lab17/views/null.php'?>">Transacciones Realizadas</a>
                    <li><a href="<?php echo 'https://'.$host.'/lab17/views/null.php'?>">Nueva Transacción</a>
                    <li><a href="<?php echo 'https://'.$host.'/lab17/index.php'?>">Cerrar sesión</a></li>
                </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
            <li><a href="<?php echo 'https://'.$host.'/lab17/views/login.php'?>">Iniciar sesión</a></li>
        </ul>
    </div>
    <header>
        <div class = "container">
            <h1>
                Casino DAW-BD RBAC
            </h1>
        </div>
    </header>