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
    <form  id="registrarGrupo" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row">
        <div class="input-field col s6">
            <select id="nombreg" name="nombreg">
              <option value="" disabled selected>Nombre de grupo</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
            </select>
            <label>Nombre de grupo</label>
            <span id="span_nombreg" class="error">Campo obligatorio</span>
        </div>
        <div class="input-field col s6">
            <select id="especialidad" name="especialidad">
              <option value="" disabled selected>Especialidad</option>
              <option value="PROGRAMACION">Programación</option>
              <option value="CONTABILIDAD">Contabilidad</option>
              <option value="ARQUITECTURA">Arquitectura</option>
              <option value="ELECTROMECANICA">Electromecánica</option>
            </select>
            <label>Especialidad</label>
            <span id="span_especialidad" class="error">Campo obligatorio</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
            <select id="turno" name="turno">
              <option value="" disabled selected>Turno</option>
              <option value="M">M</option>
              <option value="V">V</option>
            </select>
            <label>Especialidad</label>
            <span id="span_turno" class="error">Campo obligatorio</span>
        </div>
        <div class="input-field col s4">
            <select id="semestre" name="semestre">
              <option value="" disabled selected>Semestre</option>
              <option value="1">Primero</option>
              <option value="2">Segundo</option>
              <option value="3">Tercero</option>
              <option value="4">Cuarto</option>
              <option value="5">Quinto</option>
              <option value="6">Sexto</option>
            </select>
            <label>Semestre</label>
            <span id="span_semestre" class="error">Campo obligatorio</span>
        </div>
        <div class="input-field col s4">
            <select id="generacion" name="generacion">
              <option value="" disabled selected>Generación</option>
            </select>
            <label>Generación</label>
            <span id="span_generacion" class="error">Campo obligatorio</span>
        </div>
      </div>
      <div class="row">
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
            <label for="description">Archivo a subir</label>
          </div>
        </div>
      </div>
      <div class="row">
        <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Registrar grupo</button>
      </div>
    </form>
  </div>
  
  <div id="add_person" class="center-align">
    <div class="row">
      <form id="registrarAlumno" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row">
          <div class="input-field col s4">
            <i class="material-icons prefix">label</i>
            <input id="nocontrol" type="text" name="nocontrol" maxlength="14" required>
            <label for="nocontrol">Número de control</label>
            <span id="span_nocontrol" class="error">Campo obligatorio</span>
          </div>
          <div class="input-field col s4">
              <select id="sexo" name="sexo">
                <option value="" disabled selected>Sexo</option>
                <option value="MASCULINO">Masculino</option>
                <option value="FEMENINO">Femenino</option>
              </select>
              <label>Sexo</label>
              <span id="span_sexo" class="error">Campo obligatorio</span>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l4">
            <i class="material-icons prefix">person</i>
            <input id="nombre" type="text" name="nombre" maxlength="50" required>
            <label for="nombre">Nombre</label>
            <span id="span_nombre" class="error">Campo obligatorio</span>
          </div>
          <div class="input-field col s12 l4">
            <input id="apaterno" type="text" name="apaterno" maxlength="50" required>
            <label for="apaterno">Apellido paterno</label>
            <span id="span_apaterno" class="error">Campo obligatorio</span>
          </div>  
          <div class="input-field col s12 l4">
            <input id="amaterno" type="text" name="amaterno" maxlength="50" required>
            <label for="amaterno">Apellido materno</label>
            <span id="span_amaterno" class="error">Campo obligatorio</span>
          </div>
        </div>
        <div class="row">
            <button class="waves-effect waves-light btn left" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Registrar alumno</button>
        </div>
      </form>
    </div>
  </div>
</section>