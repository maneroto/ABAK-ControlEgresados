<?php
    session_start();
    header("Content-Type: text/plain; charset=iso-8859-1");
    require_once("utils.php");

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
    }
    $_SESSION['idusuario'] = $username;
    
    $real_password = get_password($username);
    if (password_verify($password, $real_password))
    
    $login = retrieve_login($username, $real_password);

    if ($login != 0)
    {
        $_SESSION = $login;
        $_SESSION['permisos'] = select_permissions($_SESSION['idrol']);
        header('Location:../views/inicio');
        exit();
    }
    else
    {
        $_SESSION['errorMessage'] = "Usuario o contraseña inválido";
        header('Location:../index');
    }
?>