<?php
    session_start();
    $idusuario = $_SESSION['idusuario'];
    
    require_once("utils.php");
    
    if (isset($_POST["oldPass"]) && isset($_POST["oldPass"]) != "" &&
    isset($_POST["newPass"]) && isset($_POST["newPass"]) != "" &&
    isset($_POST["newPassCon"]) && isset($_POST["newPassCon"]) != "" )
    {
        $oldPass = test_input($_POST['oldPass']);
        $newPass = test_input($_POST['newPass']);
        $newPassCon = test_input($_POST['newPassCon']);
        
        $real_password = get_password($idusuario);
        if (!password_verify($oldPass, $real_password)){
            header('Location: '.$httpProtocol.$host.$url.'../views/perfil');
            $_SESSION['errorMessage'] = "Esta no es tu contraseña actual";
        }else{

        if(strlen($idusuario) > 0 && strlen($newPass) > 0 && strlen($newPassCon) > 0)
        {
            if($newPass != $newPassCon) {
                header('Location: '.$httpProtocol.$host.$url.'../views/perfil');
                $_SESSION['errorMessage'] = "Las contraseñas no coinciden";
            }
            
            if (modify_pass($idusuario, password_hash($newPassCon,PASSWORD_DEFAULT)))
            {
                header('Location: '.$httpProtocol.$host.$url.'../views/perfil');
                $_SESSION['errorMessage'] = "Éxito al modificar contraseña";
            }
            else
            {
                header('Location: '.$httpProtocol.$host.$url.'../views/perfil');
                $_SESSION['errorMessage'] = "Falla al modificar contraseña";
            }
        }
        }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }    
    
?>