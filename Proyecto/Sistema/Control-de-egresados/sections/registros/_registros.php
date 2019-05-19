<section class="container mainContent">
  <p class="caption">Panel de registros</p>
  <hr>
  <br>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <?php
          if(in_array(array("REGISTRAR GRUPO"),$_SESSION['permisos']))
            echo '
            <li class="tab col s4">
              <a href="#add_group">Registrar un grupo </a>
            </li>';
        ?>
        <?php
          if(in_array(array("REGISTRAR ALUMNO"),$_SESSION['permisos']))
              echo '
              <li class="tab col s4">
                <a href="#add_persons">Registrar varios alumnos</a>
              </li>
              <li class="tab col s4">
                <a href="#add_person">Registrar un alumno</a>
              </li>';
        ?>
      </ul>
    </div>
  </div>
  <?php
    if(in_array(array("REGISTRAR GRUPO"),$_SESSION['permisos']))
      include('_registrarGrupo.php');
  ?>
  <?php
    if(in_array(array("REGISTRAR ALUMNO"),$_SESSION['permisos']))
    {
      include('_registrarAlumnos.php');
      include('_registrarAlumno.php');
    }
  ?>
</section>

<?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/registrosInit.js"></script>'; ?>