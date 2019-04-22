<?php
    session_start();
    $httpProtocol = "https://";
    $host = $_SERVER['SERVER_NAME'];
    $url = "/DAW%20REPO/ABAK-ControlEgresados/Proyecto/New%20Interfaces/Proyecto/";
    if(isset($_GET['logout']) && $_GET['logout'] == true)
    {
    	session_destroy();
    	header("location:index.php");
    	exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Encuesta CBTis 145
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="A'BAK TEAM">
        <meta Name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" type="images/ico" href="<?php echo $httpProtocol.$host.$url.'img/favicon/favicon.ico'?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/materialize.min.css'?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/indexAlumnos.css'?>" type="text/css" />
    </head>
    <body class="blue">
        <?php include '../../sections/_preloader.php'; ?>
        <section class="row login">
            <div class="col s12 14 offset-14">
                <form id="loginform" method="post">
                    <div class="card">
                        <div class="card-action blue darken-4 white-text center-align"> 
                        <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/cbtis-logo.png'?>"></img>
                        </div>
                        <div class="card-content">
                            <div class="form-field">
                                <label for="user">Usuario</label>
                                <input type="text" id="username" name="username">
                            </div><br>
            
                            <div class="form-field">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password">
                            </div><br>
            
                            <div class="form-field">
                                <label>
                                <input type="checkbox" class="filled-in" checked="checked" />
                                <span>Recuérdame</span>
                                </label>
                            </div><br>
            
                            <div class="form-field center-align">
                                <button type="submit" class="btn-large blue darken-4 waves-effect waves-light">Acceder</button>
                            </div><br>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/jquery-3.3.1.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/materialize.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/alumnos_js/indexInit.js'?>"></script>
    </body>
</html>