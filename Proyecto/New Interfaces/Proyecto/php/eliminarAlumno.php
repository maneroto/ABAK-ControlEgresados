<?php
    require_once("utils.php");
    
    if (isset($_POST["nocontrol"]) && isset($_POST["nocontrol"]) != "")
    {
        $nocontrol = htmlspecialchars($_POST['nocontrol']);

        if(strlen($nocontrol) > 0)
        {
            if (eliminarAlumno($nocontrol))
            {
                echo "Éxito al eliminar alumno";
            }
            else
            {
                echo "Falla al eliminar alumno";
            }
        }
    }
?>