<?php
    session_start();
    $httpProtocol = "https://";
    $host = $_SERVER['SERVER_NAME'];
    $url = "/Control-de-egresados/";
    if(!isset($_SESSION['idrol']))
	{
		header('location: '.$httpProtocol.$host.$url.'alumnos/index');
		exit;
	}
	$js = '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/materialize.min.js"></script>
        <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/offline-js/offline.min.js"></script>
        <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/init.js"></script>
        <script type="text/javascript">
    Offline.options = {
      // to check the connection status immediatly on page load.
      checkOnLoad: false,
    
      // to monitor AJAX requests to check connection.
      interceptRequests: true,
    
      // to automatically retest periodically when the connection is down (set to false to disable).
      reconnect: {
        // delay time in seconds to wait before rechecking.
        initialDelay: 3,
    
        // wait time in seconds between retries.
        delay: 10
      },
    
      // to store and attempt to remake requests which failed while the connection was down.
      requests: true
    };
  </script>';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Control de Egresados CBTis 145
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta Name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="author" content="A'BAK TEAM">
        <link rel="shortcut icon" type="images/ico" href="<?php echo $httpProtocol.$host.$url.'img/favicon/favicon.ico'?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/materialize.min.css'?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/main.css'?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/offline-js/offline-theme-default.css'?>" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/offline-js/0.7.19/themes/offline-language-spanish.min.css" type="text/css" /> 
    </head>
    <body>
    <noscript>
        <style type="text/css">#preloader {display:none;}</style>
        <div class="popup">
            <div class="popup-card">
            <h1>Parece que no tienes javascript, haz clic <a href="https://www.enable-javascript.com/">aquí</a> para conocer cómo activarlo</h1>
            <meta http-equiv="refresh" content="1">
            </div>
        </div>
    </noscript>