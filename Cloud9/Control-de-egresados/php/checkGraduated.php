<?php
require_once("utils.php");
session_start();
$idusuario = $_SESSION['idusuario'];
$semestre = getSemestre($idusuario);

?>