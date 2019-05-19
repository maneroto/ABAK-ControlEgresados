<?php
session_start();
header("Content-Type: text/plain; charset=iso-8859-1");
require_once('utils.php');
if(isset($_SESSION['idusuario']))
{
   $row = select_profile($_SESSION['idusuario']);
   echo substr($row["telefono"],-7);
}
?>

