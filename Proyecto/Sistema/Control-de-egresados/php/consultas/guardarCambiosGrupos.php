<?php
    include("connectDb.php");
    $idgrupo = $_POST["idgrupo"];
    $nombre = $_POST["nombre"];
    $especialidad = $_POST["especialidad"];
    $turno = $_POST["turno"];
    $semestre = $_POST["semestre"];
    $generacion = $_POST["generacion"];
    $opcion = $_POST["opcion"];
    $info = [];
    switch($opcion){
        case 'modificar':
            modificar($nombre, $especialidad, $turno, $semestre, $generacion, $idgrupo, $conexion);
            break;
        case 'eliminar':
            eliminar($idgrupo, $conexion);
            break;
        case 'egresar':
            egresar($idgrupo, $conexion);
            break;
    }
    function modificar($nombre, $especialidad, $turno, $semestre, $generacion, $idgrupo, $conexion){
        $query = "UPDATE Grupo SET nombre = '$nombre',
                                   especialidad = '$especialidad',
                                   turno = '$turno',
                                   semestre = '$semestre',
                                   idgeneracion = '$generacion'
                                   WHERE idgrupo = $idgrupo";
        $resultado = mysqli_query($conexion, $query);
        verificar_resultado($resultado);
        cerrar($conexion);
    }
    function eliminar($idgrupo, $conexion){
        $query = "CALL eliminarGrupo($idgrupo)";
        $resultado = mysqli_query($conexion, $query);
        verificar_resultado($resultado);
        cerrar($conexion);
    }
    function egresar($idgrupo, $conexion){
        $query = "CALL egresarGrupo($idgrupo)";
        $resultado = mysqli_query($conexion, $query);
        verificar_resultado($resultado);
        cerrar($conexion);
    }
    function verificar_resultado($resultado){
        if(!$resultado){
            $info["respuesta"] = "ERROR";
        }else{
            $info["respuesta"] = "BIEN";
        }
        echo json_encode($info);
    }
    function cerrar($conexion){
        mysqli_close($conexion);
    }
?>