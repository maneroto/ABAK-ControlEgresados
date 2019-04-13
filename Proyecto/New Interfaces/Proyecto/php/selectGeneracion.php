<?php

require_once("utils.php");

update_Gen();

$result = select_generacion();

if(mysqli_num_rows($result) > 0)
{    
    $response = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $response .= '<option value="'.$row['idgeneracion'].'">'.$row['generacion'].'</option>';
    }
    echo $response;
}

?>