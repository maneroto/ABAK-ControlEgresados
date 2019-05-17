  <div id="add_persons">
    <form id="registrarAlumnos" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <select id="grupoAlumnos" name="grupoAlumnos" required>
            <option value="" disabled selected>Grupo</option>
          </select>
          <label>Grupo</label>
          <span id="span_grupos" class="error">Campo obligatorio</span>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn">
            <span>Subir</span>
            <input type="file" name="alumnosFile" accept=".csv" required id = "alumnosFile">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" id="archivo">
            <span id="span_archivo" class="error">Selecciona un archivo .csv que cumpla el formato especificado <br>
            (No.Control, Sexo, Nombre(s), Apellido paterno, Apellido materno)</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="center-align">
        <button class="waves-effect waves-light btn" type="submit" name="import"><i class="material-icons left">cloud_upload</i>Registrar alumnos</button>
        </div>      
      </div>
    </form>
  </div>