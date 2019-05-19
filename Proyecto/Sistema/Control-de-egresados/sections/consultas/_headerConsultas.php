<?php
    session_start();
    $httpProtocol = "https://";
    $host = $_SERVER['SERVER_NAME'];
    $url = "/DAW%20REPO/ABAK-ControlEgresados/Proyecto/New%20Interfaces/Proyecto/";
    if(!isset($_SESSION['idrol']) || $_SESSION['idrol']=='ALUMNO')
	{
		header('location: '.$httpProtocol.$host.$url.'index.php');
		exit;
	}
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
        
        <!-- Favicon -->
        
        <link rel="shortcut icon" type="images/ico" href="<?php echo $httpProtocol.$host.$url.'img/favicon/favicon.ico'?>">
        
        <!-- Material Design Icons -->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.5.95/css/materialdesignicons.min.css">
        
        <!-- Materialize -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/consultasTables.css'?>" type="text/css" />
        
        <!-- Material Design -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
	    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">
        
        <!-- Main CSS -->
        
        <link rel="stylesheet" href="<?php echo $httpProtocol.$host.$url.'css/main.css'?>" type="text/css" />
        

       
        </head>
<body>