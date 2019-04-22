<?php

    require_once("utils.php");
    
    if (isset($_POST["grupos"]) && isset($_POST["grupos"]) != "")
    {
        $grupo = test_input($_POST['grupos']);
        $conn = connect();
        echo $_FILES['file']['name'];
        
        if(strlen($grupo) > 0 && strlen($file) > 0)
        {/*
            if (register_students($grupo, $file))
            {
                echo "Éxito al registrar alumnos";
            }
            else
            {
                echo "Falla al registrar alumnos";
            }*/
        }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }    
    
?>