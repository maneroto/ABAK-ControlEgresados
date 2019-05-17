<?php
    $httpProtocol = "https://";
    $host = $_SERVER['SERVER_NAME'];
    $url = "/Control-de-egresados/";
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
    </head>
    <body class="blue darken-2">
        <section class="valign-wrapper" style="width:100%;height:100%;position: absolute;">
          <div class="row">
            <div class="col s6 offset-s3">
              <div class="card white">
                <div class="card-content center-align">
                  <span class="card-title"><strong>Parece que la encuesta no esta disponible en estos momentos :(</strong></span>
                  <a href="index.php" class="btn blue darken-4 waves-effect waves-light">Regresar</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/jquery-3.3.1.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo $httpProtocol.$host.$url.'js/materialize.min.js'?>"></script>
    </body>
</html>