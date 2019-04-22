<section class="container">
  <p class="caption">Panel de registros</p>
  <hr>
  <br>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6">
          <a href="#add_group"><i class="material-icons prefix">group-add</i> Nuevo grupo </a>
        </li>
        <li class="tab col s6">
          <a href="#add_person"><i class="material-icons prefix">person-add</i> Nuevo alumno </a>
        </li>
      </ul>
    </div>
  </div>
    
  <div id="add_group" class="center-align">
      <div class="row">
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="file-field input-field">
              <div class="card col s12 m12 l12">
                <div class="card-image waves-effect waves-block waves-light">
                  <img src="<?php echo $httpProtocol.$host.$url.'img/registros/subir_grupo.png'?>">
                  <input type="file" accept=".csv" multiple>
                </div>
              </div>
              <div class="file-path-wrapper">
                <input type="file" accept=".csv" multiple>
                <input id="description" class="file-path validate" type="text">
                <label for="description">Archivo(s) a subir</label>
              </div>
            </div>
        </form>
      </div>
      <div class="row">
        <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Subir grupo(s)</button>
      </div>
  </div>
  
  <div id="add_person" class="center-align">
    
    <ul class="collapsible">
    <li>
      <div class="collapsible-header waves-effect waves-light white-text">
        <i class="material-icons left">insert_drive_file</i>
        Opcion 1: Subir varios alumnos con un archivo
      </div>
      <div class="collapsible-body">
            <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="file-field input-field">
                  <div class="card col s12 m12 l12">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img src="<?php echo $httpProtocol.$host.$url.'img/registros/subir_alumno.png'?>">
                      <input type="file" accept=".csv">
                    </div>
                  </div>
                  <div class="file-path-wrapper">
                    <input type="file" accept=".csv">
                    <input id="description" class="file-path validate" type="text">
                    <label for="description">Archivo a subir</label>
                  </div>
                </div>
            </form>
            <div class="row">
                <button class="waves-effect waves-light btn left" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Subir alumno(s)</button>
            </div>
      </div>
    </li>
    <li class="active">
      <div class="collapsible-header waves-effect waves-light white-text">
        <i class="material-icons left">format_align_left</i>
        Opcion 2: Introducir alumno individualmente
      </div>
      <div class="collapsible-body">
        <?php include("../sections/_formaRegistroAlumno.php")?>
      </div>
    </li>
  </ul>
  </div>

</section>