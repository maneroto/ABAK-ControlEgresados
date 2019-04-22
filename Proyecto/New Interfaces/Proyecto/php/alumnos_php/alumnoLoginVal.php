<?php
    session_start();
    require_once("../utils.php");

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
    }
    $_SESSION['idusuario'] = $username;
    $login = retrieve_login($username, $password);
    
    if ($login != 0)
    {
        $_SESSION = $login;
        header('Location:../views/alumnos/form.php');
        exit();
    }
    else
    {
        $_SESSION['errorMessage'] = "Usuario o contraseña inválido";
        header('Location:../views/alumnos/index.php');
    }
?>