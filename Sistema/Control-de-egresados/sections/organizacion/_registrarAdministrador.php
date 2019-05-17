        <div id="registrarAdmin" class="col s12">
            <form id="registrarAdministrador" method="post">
              <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">label</i>
                    <input id="idusuario" type="text" name="idusuario" maxlength="13" required>
                    <label for="idusuario">RFC</label>
                    <span id="span_idusuario" class="error">Campo obligatorio</span>
                  </div>
                  <div class="input-field col s6">
                      <select id="sexo" name="sexo" required>
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
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="correo" type="email" name="correo" required maxlength="100">
                  <label for="correo">Correo eléctronico</label>
                  <span id="span_correo" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">smartphone</i>
                  <input disabled value="52" id="disabled" type="text">
                  <label for="disabled">Lada nacional</label>
                </div>
                <div class="input-field col s4">
                  <input id="lada_movil" type="text" name="lada_movil" maxlength="3" required>
                  <label for="lada_movil">Lada regional</label>
                  <span id="span_lada_movil" class="error">Campo obligatorio</span>
                </div>
                <div class="input-field col s4">
                  <input id="movil" type="text" name="movil" maxlength="7" required>
                  <label for="movil">Teléfono Móvil</label>
                  <span id="span_movil" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                <div class="center-align">
                  <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Registrar administrador</button>
                </div>
              </div>
            </form>
        </div>
        <?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/registrarAdministrador.js"></script>'; ?>