<?php
session_start();
header("Content-Type: text/plain; charset=iso-8859-1");
require_once('utils.php');
if(isset($_SESSION['idusuario']))
{
   $row = select_profile($_SESSION['idusuario']);
   $lada = substr($row["telefono"],2);
   if(strlen($lada) == 10)
      echo substr($lada,0,3);
   else echo substr($lada,0,2);

}
?>

