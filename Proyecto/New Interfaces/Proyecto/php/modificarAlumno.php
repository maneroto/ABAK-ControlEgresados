<?php
    require_once("utils.php");
    
    if (isset($_POST["nocontrol"]) && isset($_POST["nocontrol"]) != "" &&
    isset($_POST["sexo"]) && isset($_POST["sexo"]) != "" &&
    isset($_POST["nombre"]) && isset($_POST["nombre"]) != "" &&
    isset($_POST["apaterno"]) && isset($_POST["apaterno"]) != "" &&
    isset($_POST["amaterno"]) && isset($_POST["amaterno"]) != "")
    {
        $nocontrol = htmlspecialchars($_POST['nocontrol']);
        $sexo = htmlspecialchars($_POST['sexo']);
        $nombre = htmlspecialchars($_POST['nombre']);
        $apaterno = htmlspecialchars($_POST['apaterno']);
        $amaterno = htmlspecialchars($_POST['amaterno']);

        if(strlen($nocontrol) > 0 && strlen($sexo) > 0 && strlen($nombre) > 0 && strlen($apaterno) > 0 && strlen($amaterno) > 0)
        {
            if (modificarAlumno($nocontrol, $sexo, $nombre, $apaterno, $amaterno))
            {
                echo "Éxito al modificar alumno";
            }
            else
            {
                echo "Falla al modificar alumno";
            }
        }
    }
?>