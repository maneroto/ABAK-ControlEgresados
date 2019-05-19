<section class="container">
      <p class="caption">Personas que forman parte del sistema del CBTis 145</p>
      <hr>
        <br>
        <div class="col s12 m4 l12 right-align">
          
            <div class="row">
                <div class="card-panel  blue darken-4 white-text">
                    <h6 class="center-align">Director</h6>
                </div>
            </div>
          
          <div class="card blue-grey lighten-5">
            <div class="card-content blue-text">
                <span class="row left-align">
                <img src="<?php echo $httpProtocol.$host.$url.'img/perfil/avatar-2.jpeg'?>" alt="avatar" class="col s1 circle responsive-img"/>
                <p>Nombre</p>
              </span>
            </div>
            <div class="blue-grey lighten-3">
              <a class="waves-effect waves-light btn"><i class="material-icons left">settings</i> Cambiar privilegios</a>
            </div>
          </div><br>
          
            <div class="row">
                <div class="card-panel blue darken-4 white-text">
                    <h6 class="center-align">Administradores</h6>
                </div>
            </div>
          
          <div class="card blue-grey lighten-5">
            <div class="card-content blue-text">
                <span class="row left-align">
                <img src="<?php echo $httpProtocol.$host.$url.'img/perfil/avatar-2.jpeg'?>" alt="avatar" class="col s1 circle responsive-img"/>
                <p>Nombre</p>
              </span>
            </div>
            <div class="blue-grey lighten-3">
              <a class="waves-effect waves-light btn"><i class="material-icons left">settings</i> Cambiar privilegios</a>
            </div>
          </div>
          
          <div class="card blue-grey lighten-5">
            <div class="card-content blue-text">
                <span class="row left-align">
                <img src="<?php echo $httpProtocol.$host.$url.'img/perfil/avatar-2.jpeg'?>" alt="avatar" class="col s1 circle responsive-img"/>
                <p>Nombre</p>
              </span>
            </div>
            <div class="blue-grey lighten-3">
              <a class="waves-effect waves-light btn"><i class="material-icons left">settings</i> Cambiar privilegios</a>
            </div>
          </div>
          
          <div class="card blue-grey lighten-5">
            <div class="card-content blue-text">
                <span class="row left-align">
                <img src="<?php echo $httpProtocol.$host.$url.'img/perfil/avatar-2.jpeg'?>" alt="avatar" class="col s1 circle responsive-img"/>
                <p>Nombre</p>
              </span>
            </div>
            <div class="blue-grey lighten-3">
              <a class="waves-effect waves-light btn"><i class="material-icons left">settings</i> Cambiar privilegios</a>
            </div>
          </div>
          
        </div> <br>
        
        <div class="row" <?php if ($_SESSION['idrol'] != "DIRECTOR") echo "style='display:none;'"?>> 
                <div class="card-panel  blue darken-4 white-text">
                    <h6 class="center-align">Registrar administrador</h6>
                </div>
        </div>
        
        <div id="add_person" <?php if ($_SESSION['idrol'] != "DIRECTOR") echo "style='display:none;'"?>>
            <form id="registrarAdmin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
                  <input disabled value="+52" id="disabled" type="text">
                  <label for="disabled">Lada nacional</label>
                </div>
                <div class="input-field col s4">
                    <select id="lada_movil" name="lada_movil" required>
                      <option value="" disabled selected>Lada regional</option>
                      <option value="744">744</option>
                      <option value="449">449</option>
                      <option value="241">241</option>
                      <option value="244">244</option>
                      <option value="981">981</option>
                      <option value="998">998</option>
                      <option value="461">461</option>
                      <option value="625">625</option>
                      <option value="55">55</option>
                      <option value="938">938</option>
                      <option value="639">639</option>
                      <option value="341">341</option>
                      <option value="656">656</option>
                      <option value="753">753</option>
                      <option value="831">831</option>
                      <option value="644">644</option>
                      <option value="481">481</option>
                      <option value="834">834</option>
                      <option value="921">921</option>
                      <option value="312">312</option>
                      <option value="271">271</option>
                      <option value="735">735</option>
                      <option value="777">777</option>
                      <option value="667">667</option>
                      <option value="983">983</option>
                      <option value="614">614</option>
                      <option value="747">747</option>
                      <option value="922">922</option>
                      <option value="618">618</option>
                      <option value="646">646</option>
                      <option value="493">493</option>
                      <option value="33">33</option>
                      <option value="473">473</option>
                      <option value="622">622</option>
                      <option value="662">662</option>
                      <option value="462">462</option>
                      <option value="971">971</option>
                      <option value="228">228</option>
                      <option value="878">878</option>
                      <option value="612">612</option>
                      <option value="352">352</option>
                      <option value="474">474</option>
                      <option value="477">477</option>
                      <option value="728">728</option>
                      <option value="668">668</option>
                      <option value="314">314</option>
                      <option value="868">868</option>
                      <option value="733">733</option>
                      <option value="669">669</option>
                      <option value="999">999</option>
                      <option value="686">686</option>
                      <option value="866">866</option>
                      <option value="81">81</option>
                      <option value="443">443</option>
                      <option value="445">445</option>
                      <option value="642">642</option>
                      <option value="631">631</option>
                      <option value="867">867</option>
                      <option value="951">951</option>
                      <option value="392">392</option>
                      <option value="272">272</option>
                      <option value="771">771</option>
                      <option value="627">627</option>
                      <option value="427">427</option>
                      <option value="782">782</option>
                      <option value="222">222</option>
                      <option value="322">322</option>
                      <option value="442">442</option>
                      <option value="899">899</option>
                      <option value="861">861</option>
                      <option value="353">353</option>
                      <option value="464">464</option>
                      <option value="844">844</option>
                      <option value="624">624</option>
                      <option value="444">444</option>
                      <option value="653">653</option>
                      <option value="594">594</option>
                      <option value="248">248</option>
                      <option value="415">415</option>
                      <option value="775">775</option>
                      <option value="833">833</option>
                      <option value="962">962</option>
                      <option value="762">762</option>
                      <option value="238">238</option>
                      <option value="378">378</option>
                      <option value="773">773</option>
                      <option value="311">311</option>
                      <option value="595">595</option>
                      <option value="664">664</option>
                      <option value="246">246</option>
                      <option value="722">722</option>
                      <option value="871">871</option>
                      <option value="783">783</option>
                      <option value="961">961</option>
                      <option value="452">452</option>
                      <option value="229">229</option>
                      <option value="993">993</option>
                      <option value="492">492</option>
                      <option value="734">734</option>
                      <option value="351">351</option>
                      <option value="755">755</option>;
                    </select>
                    <label>Lada regional</label>
                    <span id="span_lada_movil" class="error">Campo obligatorio</span>
                  </div>
                <div class="input-field col s4">
                  <input id="movil" type="text" name="movil" maxlength="7" required>
                  <label for="movil">Teléfono Móvil</label>
                  <span id="span_movil" class="error">Campo obligatorio</span>
                </div>
              </div>
              <div class="row">
                  <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Registrar administrador</button>
              </div>
            </form>
        </div>
          
</section>