  <div id="add_group">
    <form  id="registrarGrupo" method="post">
      <div class="row">
        <div class="input-field col s6">
            <select id="nombreg" name="nombreg" required>
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
            <select id="especialidad" name="especialidad" required>
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
            <select id="turno" name="turno" required>
              <option value="" disabled selected>Turno</option>
              <option value="M">M</option>
              <option value="V">V</option>
            </select>
            <label>Especialidad</label>
            <span id="span_turno" class="error">Campo obligatorio</span>
        </div>
        <div class="input-field col s4">
            <select id="semestre" name="semestre" required>
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
            <select id="generacion" name="generacion" required> 
              <option value="" disabled selected>Generación</option>
            </select>
            <label>Generación</label>
            <span id="span_generacion" class="error">Campo obligatorio</span>
        </div>
      </div>
      <div class="row">
        <div class="center-align">
        <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Registrar grupo</button>
        </div>
      </div>
    </form>
  </div>