  <div id="add_person">
    <div class="row">
      <form id="registrarAlumno" method="post">
        <div class="row">
          <div class="input-field col s4">
            <i class="material-icons prefix">label</i>
            <input id="nocontrol" type="text" name="nocontrol" maxlength="14" required>
            <label for="nocontrol">Número de control</label>
            <span id="span_nocontrol" class="error">Campo obligatorio</span>
          </div>
          <div class="input-field col s4">
              <select id="sexo" name="sexo" required>
                <option value="" disabled selected>Sexo</option>
                <option value="MASCULINO">Masculino</option>
                <option value="FEMENINO">Femenino</option>
              </select>
              <label>Sexo</label>
              <span id="span_sexo" class="error">Campo obligatorio</span>
          </div>
          <div class="input-field col s4">
            <select id="grupo" name="grupo" required>
              <option value="" disabled selected>Grupo</option>
            </select>
            <label>Grupo</label>
            <span id="span_grupo" class="error">Campo obligatorio</span>
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
          <div class="center-align">
            <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Registrar alumno</button>
         </div> 
        </div>
      </form>
    </div>
  </div>