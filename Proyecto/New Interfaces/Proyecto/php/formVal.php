<?php

$correoErr = $lada_movilErr = $movilErr = $lada_fijoErr = $fijoErr = $fechanacimientoErr = $domicilioErr = $area_interesErr = $grado_academico_obtenidoErr = 'Campo obligatorio';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (!empty($_POST["correo"])) {
    $correo = test_input($_POST["correo"]);
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL))
      $correoErr = "Formato de correo inválido"; 
  }
  
  if (!empty($_POST["lada_movil"])) 
    $lada_movil = test_input($_POST["lada_movil"]);
  
  if (!empty($_POST["movil"])){
    $movil = test_input($_POST["movil"]);
    if (!preg_match("/^[0-9]*$/",$movil) or (strlen($movil)!=7))
      $movilErr = "Deben ser 7 dígitos numéricos"; 
  }
  
  $telefono_movil = '+52 ('.$lada_movil.') '.$movil;
  
  if (!empty($_POST["lada_fijo"]))
    $lada_fijo = test_input($_POST["lada_fijo"]);

  if (!empty($_POST["fijo"])){
    $fijo = test_input($_POST["fijo"]);
    if (!preg_match("/^[0-9]*$/",$fijo) or (strlen($fijo)!=7))
      $fijoErr = "Deben ser 7 dígitos numéricos"; 
  }
  
  $telefono_fijo = '+52 ('.$lada_fijo.') '.$fijo;
 
  if (!empty($_POST["fechanacimiento"])) {
    $fechanacimiento = test_input($_POST["fechanacimiento"]);
    $format = 'Y-m-d';
    $d = DateTime::createFromFormat($format, $fechanacimiento);
    if(!($d && $d->format($format) === $fechanacimiento))
      $fechanacimientoErr = "La fecha no está en formato YYYY-MM-DD";
  } 
    
  if (!empty($_POST["domicilio"])) {
    $domicilio = test_input($_POST["domicilio"]);
  }
  
  if (!empty($_POST["area_interes"])) {
    $area_interes = test_input($_POST["area_interes"]);
  }  
  
  if (!empty($_POST["grado_academico_obtenido"])) {
    $grado_academico_obtenido = test_input($_POST["grado_academico_obtenido"]);
  }   

  $grado_academico_estudio = test_input($_POST["grado_academico_estudio"]);
  $semestre_actual = test_input($_POST["semestre_actual"]);
  $area_especialidad = test_input($_POST["area_especialidad"]);
  $universidad = test_input($_POST["universidad"]);
    
  $cargo_actual = test_input($_POST["cargo_actual"]);
  $contratacion = test_input($_POST["contratacion"]);
  $area_ocupacion = test_input($_POST["area_ocupacion"]);
  $ocupacion = test_input($_POST["ocupacion"]);
  
  $cargo_actual2 = test_input($_POST["cargo_actual2"]);
  $contratacion2 = test_input($_POST["contratacion2"]);
  $area_ocupacion2 = test_input($_POST["area_ocupacion2"]);
  $ocupacion2 = test_input($_POST["ocupacion2"]);
    
  $cargo_actual3 = test_input($_POST["cargo_actual3"]);
  $contratacion3 = test_input($_POST["contratacion3"]);
  $area_ocupacion3 = test_input($_POST["area_ocupacion3"]);
  $ocupacion3 = test_input($_POST["ocupacion3"]);
  
  /*
  echo $correo.' '.$movil.' '.$fijo.' '.
  $fechanacimiento.' '.$domicilio.' '.$area_interes.' '.$grado_academico_obtenido.' '.
  $grado_academico_estudio.' '.$semestre_actual.' '.$area_especialidad.' '.$universidad.' '.
  $cargo_actual.' '.$contratacion.' '.$area_ocupacion.' '.$ocupacion.' '.
  $cargo_actual2.' '.$contratacion2.' '.$area_ocupacion2.' '.$ocupacion2.' '.
  $cargo_actual3.' '.$contratacion3.' '.$area_ocupacion3.' '.$ocupacion3;
  */
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>