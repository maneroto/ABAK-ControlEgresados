<?php
session_start();
header("Content-Type: text/plain; charset=iso-8859-1");
require_once('utils.php');
$result = select_administrators();
$response = '<div class="row">
        <div class="card-panel  blue darken-4 white-text">
            <h6 class="center-align">Administradores</h6>
        </div>
    </div>';
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $response.= '<div class="card blue-grey lighten-5">';
            $response.= '<div class="card-content blue-text noHover">';
                $response.= '<span class="row left-align">';
                    $response.= '<img src = "../img/perfil/avatar-2.jpeg" alt="avatar" class="col s1 circle responsive-img">';
                    $response.= '<div class="col">';
                        $response.= "<p>Nombre: ".$row['nombre']."</p>";
                        $response.= "<p>RFC: ".$row['idusuario']."</p>";
                        $response.= "<p>Sexo: ".$row['sexo']."</p>";
                        $response.= "<p>Email: ".$row['email']."</p>";
                        $response.= "<p>Celular: ".$row['telefono']."</p>";
                    $response.= "</div>";
                $response.= "</span>";
            $response.="</div>";
            $response.= '<div class="blue-grey lighten-3">';
                $response.= '
                <button class="btnDelete waves-effect waves-light btn red lighten-1" data-nombre="'.$row['nombre'].'" data-idusuario="'.$row['idusuario'].'">
                    <i class="material-icons left">delete</i> Eliminar administrador
                </button>';
            $response.= '</div>';
        $response.="</div>";
    }
}
else
{
    $response.= '<div class="card blue-grey lighten-5">';
        $response.= '<div class="card-content blue-text noHover">';
            $response.= '<span class="row left-align">';
                $response.= '<div class="col">';
                    $response.= 'No hay administradores en la base de datos';
                $response.="</div>";
            $response.= "</span>";
        $response.="</div>";
    $response.="</div>";
}
echo $response;

?>


