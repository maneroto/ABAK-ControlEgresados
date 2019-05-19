<?php
    require_once('utils.php');
    
    //obtener los estatus de cada encuesta
    $active = surveysThatAreActive();
    $response = "<script>";
    
    if(mysqli_num_rows($active) > 0)
    {
        while($row = mysqli_fetch_assoc($active))
        {
            $response .=" $('#".$row['idencuesta']."').prop('checked', true); "; 
        }
    }
    
    //obtener los porcentajes de respuesta a las encuestas por semestre
    $x = surveyResponses(4);     $x *= 100;  $x1 = studentsIn(4);      $x /= (($x1==0)?1:$x1);
    $y = surveyResponses(6);     $y *= 100;  $y1 = studentsIn(6);      $y /= (($y1==0)?1:$y1);
    $z = surveyResponses(NULL);  $z *= 100;  $z1 = studentsIn(NULL);   $z /= (($z1==0)?1:$z1);
    
    $response .= " $('#porcentaje4').html($x).append('%');
                   $('#porcentaje6').html($y).append('%');
                   $('#porcentajee').html($z).append('%');
                 ";
    
    $response.="</script>";
    echo $response;
?>