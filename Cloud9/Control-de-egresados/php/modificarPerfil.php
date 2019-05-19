<?php

    session_start();
    $idusuario = $_SESSION['idusuario'];
    
    require_once("utils.php");
    
    if (isset($_POST["nombre"]) && isset($_POST["nombre"]) != "" &&
    isset($_POST["apaterno"]) && isset($_POST["apaterno"]) != "" &&
    isset($_POST["amaterno"]) && isset($_POST["amaterno"]) != "" &&
    isset($_POST["correo"]) && isset($_POST["correo"]) != "" &&
    isset($_POST["lada_movil"]) && isset($_POST["lada_movil"]) != "" &&
    isset($_POST["movil"]) && isset($_POST["movil"]) != "")
    {
        $nombre = test_input($_POST['nombre']);
        $apaterno = test_input($_POST['apaterno']);
        $amaterno = test_input($_POST['amaterno']);
        $correo = test_input($_POST['correo']);
        $lada_movil = test_input($_POST['lada_movil']);
        $movil = test_input($_POST['movil']);

        if(strlen($idusuario) > 0 && strlen($nombre) > 0 && strlen($apaterno) > 0 && strlen($amaterno) > 0 
        && strlen($correo) > 0 && strlen($lada_movil) > 0 && strlen($movil) > 0)
        {
            $telefono_movil = '52'.$lada_movil.$movil;
            if (modify_profile($idusuario, $nombre, $apaterno, $amaterno, $correo, $telefono_movil))
            {
                echo "Éxito al modificar perfil";
            }
            else
            {
                echo "Falla al modificar perfil";
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