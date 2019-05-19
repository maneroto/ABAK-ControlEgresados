<?php

require_once("utils.php");

$result = select_group();

if(mysqli_num_rows($result) > 0)
{    
    $response = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $response .= '<option value="'.$row['idgrupo'].'">'.$row['grupo'].'</option>';
    }
    echo $response;
}

?>