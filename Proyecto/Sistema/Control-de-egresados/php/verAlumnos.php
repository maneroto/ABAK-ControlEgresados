<?php
	require_once("utils.php");
    $resultado = select_students();
    while($data = mysqli_fetch_assoc($resultado)){
        $arreglo["data"][] = array_map("utf8_encode", $data);
    }
    echo json_encode($arreglo);
    mysqli_free_result($resultado);
?>