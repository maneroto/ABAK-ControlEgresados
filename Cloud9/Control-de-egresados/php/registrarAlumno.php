<?php

    require_once("utils.php");
    
    if (isset($_POST["nocontrol"]) && isset($_POST["nocontrol"]) != "" &&
    isset($_POST["sexo"]) && isset($_POST["sexo"]) != "" &&
    isset($_POST["grupo"]) && isset($_POST["grupo"]) != "" &&
    isset($_POST["nombre"]) && isset($_POST["nombre"]) != "" &&
    isset($_POST["apaterno"]) && isset($_POST["apaterno"]) != "" &&
    isset($_POST["amaterno"]) && isset($_POST["amaterno"]) != "")
    {
        $nocontrol = test_input($_POST['nocontrol']);
        $sexo = test_input($_POST['sexo']);
        $grupo = test_input($_POST['grupo']);
        $nombre = test_input($_POST['nombre']);
        $apaterno = test_input($_POST['apaterno']);
        $amaterno = test_input($_POST['amaterno']);

        if(strlen($nocontrol) > 0 && strlen($sexo) > 0 && strlen($grupo) > 0 && strlen($nombre) > 0 && strlen($apaterno) > 0 && strlen($amaterno) > 0)
        {
            if(val_student($nocontrol) === 0){
                if (register_student($nocontrol, $sexo, $grupo, $nombre, $apaterno, $amaterno))
                {
                    echo "Éxito al registrar alumno";
                }
                else
                {
                    echo "Falla al registrar alumno";
                }
            }
            else 
            {
                echo "Este alumno ya esta registrado en la base de datos";
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