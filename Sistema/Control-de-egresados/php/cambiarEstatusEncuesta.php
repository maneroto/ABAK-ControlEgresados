<?php

    require("utils.php");
        
    if (isset($_POST['idencuesta'])) {
        
        if (surveyIsActive($_POST['idencuesta'])) {
            closeSurvey($_POST['idencuesta']); 
        } else {
            openSurvey($_POST['idencuesta']);
        }  
        
    } else echo "no tiene id";
    
?>