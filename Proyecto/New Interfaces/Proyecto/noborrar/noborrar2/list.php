<?php

	include ("connectDb.php");

	$query ="SELECT A.idusuario, U.nombre, U.apaterno, U.amaterno, U.sexo, U.email, U.telefono, G.especialidad FROM Alumno A, Usuario U, Grupo G WHERE A.idusuario = U.idusuario AND A.idgrupo = G.idgrupo ORDER BY U.idusuario DESC";
	$resultado = mysqli_query($conexion, $query);
    
    if(!$resultado){
        die("Error");
    }else{
        while($data = mysqli_fetch_assoc($resultado)){
            $arreglo["data"][] = array_map("utf8_encode", $data);
        }
        echo json_encode($arreglo);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
