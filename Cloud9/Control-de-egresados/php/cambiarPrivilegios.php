<?php
header("Content-Type: text/plain; charset=iso-8859-1");
    require_once("utils.php");
    
    $privilegios = [];
    if(isset($_POST["privilegios"]))
    { 
        foreach ($_POST['privilegios'] as $privilegio)  
            $privilegios[] = $privilegio;
    }

    $result = select_admin_permissions();
    $admin_permissions = [];
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $admin_permissions[] = $row['idpermiso'];
        }
    }
    
    if($privilegios === $admin_permissions){
        echo "No hubo cambios en los privilegios";
    }else{
    
        foreach($admin_permissions as $permiso){
            if(!in_array($permiso, $privilegios)){
                if(delete_permission($permiso))
                    echo "Permisos actualizados";
                else echo "Error al actualizar permisos";
            }
        }
           
        foreach($privilegios as $permiso){
            if(!in_array($permiso, $admin_permissions)){
                if(add_permission($permiso))
                    echo "Permisos actualizados";
                else echo "Error al actualizar permisos";
            }
        }  
    
    }

?>