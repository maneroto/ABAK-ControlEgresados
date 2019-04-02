<section class="container">
        
      <form method="post">
        <p class="caption">Editar mi perfil</p>
        <div class="divider"></div>
        <div class="input-field col s2 center-align">
        </div>
         <br><br>
        <div class="center-align">
          <img class="circle" src="<?php echo $httpProtocol.$host.$url.'img/perfil/avatar-2.jpeg'?>" height="200vmax">
          <div class="file-field input-field">
            <div class="btn">
              <span>Cambiar foto</span>
              <input type="file" accept=".jpg, .jpeg, .png">
            </div>
            <div class="file-path-wrapper">
              <input id="foto"  class="file-path validate" type="text">
              <label for="foto">Sube aqui tu foto de perfil</label>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s4">
            <i class="small material-icons prefix">person</i>
            <input id="Name" type="text" class="validate" value="">
            <label for="Name">Nombre</label>
          </div>
          <div class="input-field col s4">
            <input id="lName1" type="text" class="validate">
            <label for="lName1">Apellido Paterno</label>
          </div>
          <div class="input-field col s4">
            <input id="lName2" type="text" class="validate">
            <label for="lName2">Apellido Materno</label>
          </div>
        </div>
        
        <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">phone</i>
              <input disabled value="+52" id="disabled" type="text">
              <label for="disabled">Lada nacional</label>
            </div>
            <div class="input-field col s4">
              <span class="error"><?php echo $lada_fijoErr;?></span>
                <select name="lada_fijo" style="width: 100%">
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
                  <option value="755">755</option>
                </select>
            </div>
            <div class="input-field col s4">
              <input id="fijo" type="text" name="fijo" value="<?php echo $fijo;?>" maxlength="7" required>
              <label for="fijo">Teléfono (7 digitos)</label>
              <span class="error"><?php echo $fijoErr;?></span>
            </div>
        </div>
        
        <div class="row">
          <div class="input-field col s4">
            <i class="small material-icons prefix">email</i>
            <input id="email" type="email" class="validate">
            <label for="email">Correo electronico</label>
          </div>
        </div>

        <p class="caption">Cambio de contrasena</p>
        <div class="divider"></div>

        <div class="row">
          <div class="input-field col s4">
            <i class="small material-icons prefix">lock</i>
            <input id="password" type="password" class="validate">
            <label for="password">Contrasena actual</label>
          </div>
          <div class="input-field col s4">
            <input id="newPassword" type="password" class="validate">
            <label for="newPassword">Contrasena nueva</label>
          </div>
          <div class="input-field col s4">
            <input id="confirmPassword" type="password" class="validate">
            <label for="confirmPassword">Confirmar contrasena nueva</label>
            <span id="passConfirm"></span>
          </div>
        </div>
        <br>
        <div class="input-field col s2 center-align">
          <button class="waves-effect waves-light btn modal-trigger green" href="#modal1" type="submit">Guardar cambios</button> <br><br><br>
          <div id="modal1" class="modal">
            <div class="modal-content">
              <p>
                Estas seguro de que quieres guardar los cambios? 
              </p>
            </div>
            <div class="modal-footer">
              <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancelar</a>
              <a href="perfil.php" class="waves-effect waves-green btn-flat modal-action modal-close">Aceptar</a>
            </div>
          </div>
        </div>


      </form>
</section>
