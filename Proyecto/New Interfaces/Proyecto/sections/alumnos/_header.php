<?php
    session_start();
    $httpProtocol = "https://";
    $host = $_SERVER['SERVER_NAME'];
    $url = "/DAW%20REPO/ABAK-ControlEgresados/Proyecto/New%20Interfaces/Proyecto/";
    /*if(!isset($_SESSION['idrol']))
	{
		header('location: '.$httpProtocol.$host.$url.'index.php');
		exit;
	}*/
	$js = '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/materialize.min.js"></script>
        <script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/surveyInit.js"></script>';
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
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/main.css'?>" type="text/css" />
    </head>
    <body>