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
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Consultas CBTis 145
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="A'BAK TEAM">
        <meta Name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" type="images/ico" href="<?php echo $httpProtocol.$host.$url.'img/favicon/favicon.ico'?>">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.5.95/css/materialdesignicons.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/consultasTables.css'?>" type="text/css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" />
        
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/main.css'?>" type="text/css" />
        
        <!-- Esto lo estoy usando para pruebas :) -->
       
        </head>
        <body>