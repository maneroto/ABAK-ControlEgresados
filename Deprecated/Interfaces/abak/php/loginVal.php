<?php
    session_start();
    require_once("utils.php");

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
    }
    $login = retrieveLogin($username, $password);
    /*
    $login = [];
    $login['nombre'] = $_POST['username'];
    if($login['nombre'] == 'mane'){ $login['idrol'] = '0';}
    else $login['idrol'] = '1';*/
    if ($login != 0)
    {
        $_SESSION = $login;
        echo "Login";
        exit();
    }
    else
    {
        echo "Usuario o contraseña inválido";
    }
?>