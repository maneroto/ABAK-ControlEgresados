<?php
session_start();
header("Content-Type: text/plain; charset=utf-8");
require_once('utils.php');
    if (isset($_POST["idusuario"]) && isset($_POST["idusuario"]) != "" 
    && isset($_POST["correo"]) && isset($_POST["correo"]) != "" )
    {
        $idusuario = test_input($_POST['idusuario']);
        $correo = test_input($_POST['correo']);
        if(strlen($idusuario) > 0 && strlen($correo) > 0)
        {
            $storedMail = recover_mail($idusuario);
            if($storedMail == $correo){
                $password = get_password($idusuario);
                $newPassCon = randomPassword();
                modify_pass($idusuario, password_hash($newPassCon,PASSWORD_DEFAULT));
                $subject = "Control de egresados Cbtis145 | Recuperación de contraseña";
                $contenido .= "<html>";         
                $contenido .= "<head>";
                $contenido .= "</head>";
                $contenido .= "<body style='background:#f7f7f7; text-align:center;'>";
                $contenido .= "<table width='600' align='center' cellpadding='10' style='font-family:Arial;border-collapse:collapse;background:#fff; margin: 0 auto;'>";
                $contenido .= "<tr>";
                $contenido .= "<td colspan='2' style='text-align:center;border-bottom: 1px solid #DEDEDE;'><img src='https://www.cbtis145.com/Control-de-egresados/img/logo.png' alt='Recuperación de contraseña' width='185' /></td>";
                $contenido .= "</tr>";  
                $contenido .= "<tr>";
                $contenido .= "<td colspan='2' style='color:#fff;font-size:20px;background:#0d47a1;text-align=center'>Recuperación de contraseña</td>";
                $contenido .= "</tr>";
                $contenido .= "<tr>";
                $contenido .= "<td style='color:#444;border:1px solid #ddd;'>Enviado desde: </td><td style='color:#444;border:1px solid #ddd;'> Control de egresados Cbtis 145 </td>";
                $contenido .= "</tr>";  
                $contenido .= "<tr>";
                $contenido .= "<td style='color:#444;border:1px solid #ddd;'>Usuario: </td><td style='color:#444;border:1px solid #ddd;'>".$idusuario."</td>";
                $contenido .= "</tr>";
                $contenido .= "<tr>";
                $contenido .= "<td style='color:#444;border:1px solid #ddd;'>Tu contraseña es: </td><td style='color:#444;border:1px solid #ddd;'>".$newPassCon."</td>";
                $contenido .= "</tr>";
                $contenido .= "<tr>";
                $contenido .= "<td colspan='2' style='color:#fff;font-size:20px;background:#0d47a1;text-align=center'>Por seguridad, te recomendamos que actualices tu contraseña</td>";
                $contenido .= "</tr>";
                $contenido .= "</table>";   
                $contenido .= "</body>";    
                $contenido .= "</html>";

                require_once('mailer/class.phpmailer.php');
                require_once('mailer/class.smtp.php');
                $mail = new PHPMailer();
;
                $mail->From = "noreply@cbtis145.com";
                $mail->FromName = "Control de egresados Cbtis145";
                $mail->AddAddress($correo);
                $mail->AddBCC("a01703442@itesm.mx");
                $mail->AddBCC("a01703424@itesm.mx");
                $mail->Subject = $subject;
                $mail->Body = $contenido;
                $mail->MsgHTML($contenido);
                $mail->CharSet = 'UTF-8';
            
                if($mail->Send())
                {
                    $_SESSION['errorMessage'] = "Correo enviado exitosamente a ".$correo;
                    header('Location:../views/recuperarContrasena');
                }
                else{
                    $_SESSION['errorMessage'] = "No se ha podido enviar el correo";
                    header('Location:../views/recuperarContrasena');
                }   
            }else{
                $_SESSION['errorMessage'] = "Este no es el correo asociado a esta cuenta";
                header('Location:../views/recuperarContrasena');
            }
        }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
?>