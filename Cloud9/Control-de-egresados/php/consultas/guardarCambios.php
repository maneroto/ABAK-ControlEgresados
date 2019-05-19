<?php
    include("connectDb.php");
    $idusuario = $_POST["idusuario"];
    $nombre = $_POST["nombre"];
    $apaterno = $_POST["apaterno"];
    $amaterno = $_POST["amaterno"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $idgrupo = $_POST["idgrupo"];
    $opcion = $_POST["opcion"];
    $informacion = [];
    switch($opcion){
        case 'modificar':
            modificar($nombre, $apaterno, $amaterno, $email, $telefono, $idgrupo, $idusuario, $conexion);
            break;
        case 'eliminar':
            eliminar($idusuario, $conexion);
            break;
    }
    function modificar($nombre, $apaterno, $amaterno, $email, $telefono, $idgrupo, $idusuario, $conexion){
        $query = "UPDATE Alumno A, Usuario U SET U.nombre = '$nombre',
                                                 U.apaterno = '$apaterno',
                                                 U.amaterno = '$amaterno',
                                                 A.areainteres = '$areainteres',
                                                 U.email = '$email',
                                                 U.telefono = '$telefono',
                                                 A.idgrupo = '$idgrupo'
                                             WHERE U.idusuario = '$idusuario' AND A.idusuario = U.idusuario";
        $resultado = mysqli_query($conexion, $query);
        verificar_resultado($resultado);
        cerrar($conexion);
    }
    function eliminar($idusuario, $conexion){
        $query = "CALL eliminarAlumno($idusuario)";
        $resultado = mysqli_query($conexion, $query);
        verificar_resultado($resultado);
        cerrar($conexion);
    }
    function verificar_resultado($resultado){
        if(!$resultado){
            $informacion["respuesta"] = "ERROR";
        }else{
            $informacion["respuesta"] = "BIEN";
        }
        echo json_encode($informacion);
    }
    function cerrar($conexion){
        mysqli_close($conexion);
    }
?>