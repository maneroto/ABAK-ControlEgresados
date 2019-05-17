<?php

require_once("utils.php");
$idusuario = test_input($_POST['idusuario']);
if (delete_admin($idusuario))
{
    echo "Éxito al eliminar administrador";
}
else
{
    echo "Falla al eliminar administrador";
}
function test_input($data) {
    
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
} 
    
    
?>