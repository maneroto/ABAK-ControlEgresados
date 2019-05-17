<?php

    require_once("utils.php");
    
    if (isset($_POST["nombreg"]) && isset($_POST["nombreg"]) != "" &&
    isset($_POST["especialidad"]) && isset($_POST["especialidad"]) != "" &&
    isset($_POST["turno"]) && isset($_POST["turno"]) != "" &&
    isset($_POST["semestre"]) && isset($_POST["semestre"]) != "" &&
    isset($_POST["generacion"]) && isset($_POST["generacion"]) != "")
    {
        $nombreg = test_input($_POST['nombreg']);
        $especialidad = test_input($_POST['especialidad']);
        $turno = test_input($_POST['turno']);
        $semestre = test_input($_POST['semestre']);
        $generacion = test_input($_POST['generacion']);

        if(strlen($nombreg) > 0 && strlen($especialidad) > 0 && strlen($turno) > 0 && strlen($semestre) > 0 && strlen($generacion) > 0)
        {
            if(val_group($nombreg, $especialidad, $turno, $semestre, $generacion) === 0)
            {
                if (register_group($nombreg, $especialidad, $turno, $semestre, $generacion))
                {
                    echo "Éxito al registrar grupo";
                }
                else
                {
                    echo "Falla al registrar grupo";
                }
            }
            else 
            {
                echo "Este grupo ya esta registrado en la base de datos";
            }
        }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }    
    
?>