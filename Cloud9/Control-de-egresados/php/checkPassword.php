<?php
require_once("utils.php");
session_start();
$idusuario = $_SESSION['idusuario'];
echo get_password($idusuario);

?>