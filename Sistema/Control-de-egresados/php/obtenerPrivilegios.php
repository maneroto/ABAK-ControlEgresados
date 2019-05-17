<?php
  require_once('utils.php');
$result = select_admin_permissions();
$admin_permissions = array();
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result))
  {
      $admin_permissions[] = $row['idpermiso'];
  }
}
$result = select_all_permissions();
$response = '';
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        if(in_array($row['idpermiso'], $admin_permissions))
          $response.= '<option selected value="'.$row['idpermiso'].'">'.$row['idpermiso'].'</option>';
        else
          $response.= '<option value="'.$row['idpermiso'].'">'.$row['idpermiso'].'</option>';
    }
}
echo $response;

?> 
    