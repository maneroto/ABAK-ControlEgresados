<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["correo"])) {
    $correoErr = "Se requiere correo";
  } else {
    $correo = test_input($_POST["correo"]);
    // check if e-mail address is well-formed
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      $correoErr = "Formato de correo inválido"; 
    }
  }
  
  if (empty($_POST["lada_movil"])) {
    $lada_movilErr = "Se requiere lada regional";
  }
  $lada_movil = test_input($_POST["lada_movil"]);

  $movil = test_input($_POST["movil"]);
  // check if name only contains letters and whitespace
  if (!preg_match("/^[0-9]*$/",$movil) or (strlen($movil)!=7)) {
    $movilErr = "Deben ser 7 dígitos numéricos"; 
  }
  
  $telefono_movil = '+52 ('.$lada_movil.') '.$movil;
  
  if (empty($_POST["lada_fijo"])) {
    $lada_fijoErr = "Se requiere lada regional";
  }
  $lada_fijo = test_input($_POST["lada_fijo"]);

  $fijo = test_input($_POST["fijo"]);
  // check if name only contains letters and whitespace
  if (!preg_match("/^[0-9]*$/",$fijo) or (strlen($movil)!=7)) {
    $fijoErr = "Deben ser 7 dígitos numéricos"; 
  }
  
  $telefono_fijo = '+52 ('.$lada_fijo.') '.$fijo;
 
  if (empty($_POST["fechanacimiento"])) {
    $fechanacimientoErr = "Se requiere fecha de nacimiento";
  } else {
    $fechanacimiento = test_input($_POST["fechanacimiento"]);
    $date = $fechanacimiento;
    $format = 'Y-m-d';
    $d = DateTime::createFromFormat($format, $date);
    if(!($d && $d->format($format) === $date)){
      $fechanacimientoErr = "La fecha no está en formato YYYY-MM-DD";
    }
  } 
    
  if (empty($_POST["domicilio"])) {
    $domicilioErr = "Se requiere domicilio";
  } else {
    $domicilio = test_input($_POST["domicilio"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9A-Z ]*$/",$domicilio)) {
      $domicilioErr = "Solo se aceptan números y mayúsculas sin acentos"; 
    }
  }
  
  if (empty($_POST["area_interes"])) {
    $area_interesErr = "Se requiere area de interes";
  } else {
    $area_interes = test_input($_POST["area_interes"]);
  }  
  
  if (empty($_POST["grado_academico_obtenido"])) {
    $grado_academico_obtenidoErr = "Se requiere grado academico obtenido";
  } else {
    $grado_academico_obtenido = test_input($_POST["grado_academico_obtenido"]);
  }   

  $grado_academico_estudio = test_input($_POST["grado_academico_estudio"]);
  $semestre_actual = test_input($_POST["semestre_actual"]);
  $area_especialidad = test_input($_POST["area_especialidad"]);
  $universidad = test_input($_POST["universidad"]);
  if (!preg_match("/^[0-9A-Z ]*$/",$universidad)) {
    $universidadErr = "Solo se aceptan números y mayúsculas sin acentos"; 
  }  
    
  $cargo_actual = test_input($_POST["cargo_actual"]);
  $contratacion = test_input($_POST["contratacion"]);
  $area_ocupacion = test_input($_POST["area_ocupacion"]);
  $ocupacion = test_input($_POST["ocupacion"]);
  if (!preg_match("/^[0-9A-Z ]*$/",$ocupacion)) {
    $ocupacionErr = "Solo se aceptan números y mayúsculas sin acentos"; 
  }    
  
  $cargo_actual2 = test_input($_POST["cargo_actual2"]);
  $contratacion2 = test_input($_POST["contratacion2"]);
  $area_ocupacion2 = test_input($_POST["area_ocupacion2"]);
  $ocupacion2 = test_input($_POST["ocupacion2"]);
  if (!preg_match("/^[0-9A-Z ]*$/",$ocupacion2)) {
    $ocupacion2Err = "Solo se aceptan números y mayúsculas sin acentos"; 
  }    
    
  $cargo_actual3 = test_input($_POST["cargo_actual3"]);
  $contratacion3 = test_input($_POST["contratacion3"]);
  $area_ocupacion3 = test_input($_POST["area_ocupacion3"]);
  $ocupacion3 = test_input($_POST["ocupacion3"]);
  if (!preg_match("/^[0-9A-Z ]*$/",$ocupacion3)) {
    $ocupacion3Err = "Solo se aceptan números y mayúsculas sin acentos"; 
  } 
  
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