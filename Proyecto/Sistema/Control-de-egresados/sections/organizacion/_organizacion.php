<section class="container mainContent">
  <p class="caption">Personas que forman parte del sistema del CBTis 145</p>
  <hr>
  <br>
  <div class="row">
    <div class="col s12">
  <?php 
    if(in_array(array('CAMBIAR PRIVILEGIOS'), $_SESSION['permisos']) || in_array(array('REGISTRAR ADMINISTRADOR'), $_SESSION['permisos']))
    {
      echo '
        <ul class= "tabs">';
      if(in_array(array('CAMBIAR PRIVILEGIOS'), $_SESSION['permisos']))
      {
        echo '
        <li class="tab col s6"> <a href="#cambiarPrivilegios">Cambiar permisos de los administradores</a></li>';
      }
      if(in_array(array('REGISTRAR ADMINISTRADOR'), $_SESSION['permisos']))
      {
        echo '
        <li class="tab col s6"> <a href="#registrarAdmin">Registrar un administrador</a></li>';
      }
      echo '</ul>';
      if(in_array(array('CAMBIAR PRIVILEGIOS'), $_SESSION['permisos']))
      {
        include('_cambiarPrivilegios.php');
      }
      if(in_array(array('REGISTRAR ADMINISTRADOR'), $_SESSION['permisos']))
      {
        include('_registrarAdministrador.php');
      }
    }
  ?>
      </div>
  </div>
  <div class="col s12 m4 l12 right-align">
    <?php
       if(in_array(array("CONSULTAR ORGANIZACION"),$_SESSION['permisos']))
      {
        include('_directores.php');
        include('_administradores.php');
      }
    ?>
  </div>
</section>

<?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/organizacionInit.js"></script>'; ?>