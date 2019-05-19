<?php
session_start();
header("Content-Type: text/plain; charset=iso-8859-1");
require_once('utils.php');
if(isset($_SESSION['idusuario']))
{
   $row = select_profile($_SESSION['idusuario']);
   $response = "";
   $response.= "<h1>Nombre: ".$row['nombre']." ".$row['apaterno']." ".$row['amaterno']."</h1>";
   $response.= "<hr>";
   $response.= "<p>RFC: ".$row['idusuario']."</p>";
   $response.= "<p>Sexo: ".$row['sexo']."</p>";
   $response.= "<p>Email: ".$row['email']."</p>";
   $response.= "<p>Celular: ".$row['telefono']."</p>";
   $response .= '<br><button class="waves-effect waves-light btn activator">Editar perfil</button>';
   echo $response;
}
?>

