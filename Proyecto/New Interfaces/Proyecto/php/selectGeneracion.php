<?php

require_once("utils.php");

update_gen();

$result = select_gen();

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