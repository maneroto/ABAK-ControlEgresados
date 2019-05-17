<?php
    session_start();
    header("Content-Type: text/plain; charset=iso-8859-1");
    require("../utils.php");

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $login = retrieve_login($username, $password);
    if ($login != 0)
    {
        $_SESSION = $login;
        $_SESSION['permisos'] = select_permissions($_SESSION['idrol']);
        $idusuario = $_SESSION['idusuario'];
        
        if(canAnswerSurvey($idusuario))
            header('Location:../../alumnos/form.php');
        else  
            header('Location:../../alumnos/nodisp.php');
    } else {
        $_SESSION['errorMessage'] = "Usuario o contraseña inválido";
        header('Location:../../alumnos/index.php');
    }
?>