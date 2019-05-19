<?php
    require_once('utils.php');
    
    //obtener el correo de quienes no han contestado la encuesta
    $mail = getStudentsIdsAndMails();
    $response = "";
    
    if(mysqli_num_rows($mail) > 0)
    {
        $response = "<a class='btn waves-effect waves-light blue darken-4' href='mailto:";
        
        while($row = mysqli_fetch_assoc($mail))
        {
            if (canAnswerSurvey($row['idusuario']))
                $response .= "".$row['email'].";"; 
        }
        
        $response .= "?Subject=Participa%20en%20la%20encuesta%20del%20CBTis%20145'>recordar encuesta a alumnos</a>";
    }
    
    echo $response;
?>