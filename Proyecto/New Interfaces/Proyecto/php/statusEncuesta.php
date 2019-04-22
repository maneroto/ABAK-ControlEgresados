<?php

    require_once("utils.php");
    $apertura = $cierre = $activar ="";
        
    if (isset($_POST["fecha_apertura_4"]) && isset($_POST["fecha_cierre_4"])) {
        $apertura = $_POST["fecha_apertura_4"];
        $cierre = $_POST["fecha_cierre_4"];
        $apertura = htmlspecialchars($apertura);
        $cierre = htmlspecialchars($cierre);
        $activar = trim(htmlspecialchars($_POST['cuarto_switch']));
        $activar = filter_var($remember, FILTER_VALIDATE_BOOLEAN);
        if ($activar){
            activateSurvey($apertura,$cierre);
        } else {
            closeSurvey();
        }
    }
    
?>