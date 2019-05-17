<?php

require_once("utils.php");
$registrados = 0;
$duplicados = 0;
$faltantes = 0;
$fileName = $_FILES["alumnosFile"]["tmp_name"];

if ($_FILES["alumnosFile"]["size"] > 0) {
    
    $file = fopen($fileName, "r");
    $grupo = test_input($_POST['grupoAlumnos']);
    while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        if (val_student($column[0]) === 0) 
        {
            if (register_student($column[0], $column[1], $grupo, $column[2], $column[3], $column[4]))
            {
                $registrados+=1;
            }
            else
            {
                $faltantes += 1;
            }
        } else 
        {
            $duplicados += 1;
        }
    }
}
if ($registrados > 0) echo "Se han logrado registrar a ". $registrados." alumnos.\n";
if ($duplicados > 0) echo "Se han encontrado a ".$duplicados." alumnos duplicados.\n";
if ($faltantes > 0) echo "No se han registrado a ".$faltantes." alumnos a causa de un error en el formato.";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}    
    
?>