<?php
    session_start();
    $idusuario = $_SESSION['idusuario'];
    
    require_once("../utils.php");
    
    if (isset($_POST["correo"]) && isset($_POST["correo"]) != "" &&
    isset($_POST["lada_movil"]) && isset($_POST["lada_movil"]) != "" &&
    isset($_POST["movil"]) && isset($_POST["movil"]) != "" &&
    isset($_POST["lada_fijo"]) && isset($_POST["lada_fijo"]) != "" &&
    isset($_POST["fijo"]) && isset($_POST["fijo"]) != "" &&
    isset($_POST["fechanacimiento"]) && isset($_POST["fechanacimiento"]) != "" &&
    isset($_POST["domicilio"]) && isset($_POST["domicilio"]) != "" &&
    isset($_POST["area_interes"]) && isset($_POST["area_interes"]) != "" &&
    isset($_POST["grado_academico_obtenido"]) && isset($_POST["grado_academico_obtenido"]) != "")
    {
        $correo = test_input($_POST['correo']);
        $lada_movil = test_input($_POST['lada_movil']);
        $movil = test_input($_POST['movil']);
        $lada_fijo = test_input($_POST['lada_fijo']);
        $fijo = test_input($_POST['fijo']);
        $fechanacimiento = test_input($_POST['fechanacimiento']);
        $domicilio = test_input($_POST['domicilio']);
        $area_interes = test_input($_POST['area_interes']);
        $grado_academico_obtenido = test_input($_POST['grado_academico_obtenido']);

        if(strlen($correo) > 0 && strlen($lada_movil) > 0 && strlen($movil) > 0 && strlen($lada_fijo) > 0 && strlen($fijo) > 0 &&
        strlen($fechanacimiento) > 0 && strlen($domicilio) > 0 && strlen($area_interes) > 0 && strlen($grado_academico_obtenido) > 0)
        {   
            $telefono_movil = '52'.$lada_movil.$movil;
            $telefono_fijo = '52'.$lada_fijo.$fijo;
            if (register_survey($idusuario, $correo, $telefono_movil, $telefono_fijo, $fechanacimiento, $domicilio, $area_interes, $grado_academico_obtenido))
            {
                echo "Gracias por participar en la encuesta del CBTis 145";
            }
            else
            {
                echo "Ups!, algo salio mal, por favor vuelve a intentarlo";
            }
        }
    }

    if (isset($_POST["nombre1"]) && isset($_POST["nombre1"]) != "" &&
    isset($_POST["descripcion1"]) && isset($_POST["descripcion1"]) != "" &&
    isset($_POST["area_ocupacion1"]) && isset($_POST["area_ocupacion1"]) != "" &&
    isset($_POST["lugar_ocupacion1"]) && isset($_POST["lugar_ocupacion1"]) != ""){
        $nombre1 = test_input($_POST['nombre1']);
        $descripcion1 = test_input($_POST['descripcion1']);
        $area_ocupacion1 = test_input($_POST['area_ocupacion1']);
        $lugar_ocupacion1 = test_input($_POST['lugar_ocupacion1']);
        $estatus = 'UNIVERSIDAD';
        if(strlen($nombre1) > 0 && strlen($descripcion1) > 0 && strlen($area_ocupacion1) > 0 && strlen($lugar_ocupacion1) > 0){
            register_ocupation($idusuario, $estatus, $nombre1, $descripcion1, $area_ocupacion1, $lugar_ocupacion1);
        }
    }
    
    if (isset($_POST["nombre2"]) && isset($_POST["nombre2"]) != "" &&
    isset($_POST["descripcion2"]) && isset($_POST["descripcion2"]) != "" &&
    isset($_POST["area_ocupacion2"]) && isset($_POST["area_ocupacion2"]) != "" &&
    isset($_POST["lugar_ocupacion2"]) && isset($_POST["lugar_ocupacion2"]) != ""){
        $nombre2 = test_input($_POST['nombre2']);
        $descripcion2 = test_input($_POST['descripcion2']);
        $area_ocupacion2 = test_input($_POST['area_ocupacion2']);
        $lugar_ocupacion2 = test_input($_POST['lugar_ocupacion2']);
        $estatus = 'PRACTICAS';
        if(strlen($nombre2) > 0 && strlen($descripcion2) > 0 && strlen($area_ocupacion2) > 0 && strlen($lugar_ocupacion2) > 0){
            register_ocupation($idusuario, $estatus, $nombre2, $descripcion2, $area_ocupacion2, $lugar_ocupacion2);
        }
    }
    
    if (isset($_POST["nombre3"]) && isset($_POST["nombre3"]) != "" &&
    isset($_POST["descripcion3"]) && isset($_POST["descripcion3"]) != "" &&
    isset($_POST["area_ocupacion3"]) && isset($_POST["area_ocupacion3"]) != "" &&
    isset($_POST["lugar_ocupacion3"]) && isset($_POST["lugar_ocupacion3"]) != ""){
        $nombre3 = test_input($_POST['nombre3']);
        $descripcion3 = test_input($_POST['descripcion3']);
        $area_ocupacion3 = test_input($_POST['area_ocupacion3']);
        $lugar_ocupacion3 = test_input($_POST['lugar_ocupacion3']);
        $estatus = 'TRABAJANDO';
        if(strlen($nombre3) > 0 && strlen($descripcion3) > 0 && strlen($area_ocupacion3) > 0 && strlen($lugar_ocupacion3) > 0){
            register_ocupation($idusuario, $estatus, $nombre3, $descripcion3, $area_ocupacion3, $lugar_ocupacion3);
        }
    }
    
    if (isset($_POST["nombre4"]) && isset($_POST["nombre4"]) != "" &&
    isset($_POST["descripcion4"]) && isset($_POST["descripcion4"]) != "" &&
    isset($_POST["area_ocupacion4"]) && isset($_POST["area_ocupacion4"]) != "" &&
    isset($_POST["lugar_ocupacion4"]) && isset($_POST["lugar_ocupacion4"]) != ""){
        $nombre4 = test_input($_POST['nombre4']);
        $descripcion4 = test_input($_POST['descripcion4']);
        $area_ocupacion4 = test_input($_POST['area_ocupacion4']);
        $lugar_ocupacion4 = test_input($_POST['lugar_ocupacion4']);
        $estatus = 'TRABAJANDO';
        if(strlen($nombre4) > 0 && strlen($descripcion4) > 0 && strlen($area_ocupacion4) > 0 && strlen($lugar_ocupacion4) > 0){
            register_ocupation($idusuario, $estatus, $nombre4, $descripcion4, $area_ocupacion4, $lugar_ocupacion4);
        }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }    
    
?>