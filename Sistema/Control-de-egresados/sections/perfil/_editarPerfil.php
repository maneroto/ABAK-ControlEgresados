<?php
    if(isset($_SESSION['errorMessage']))
    {
        echo '<script>alert("'.$_SESSION['errorMessage'].'");</script>';
        unset($_SESSION['errorMessage']);
    }
?>
<section class="container">
        
      <div id="modify_profile">
        <p class="caption">Editar mi perfil</p>
            <form id="modificarPerfil" method="post">
              <div class="row">
                  <div class="input-field col s12 l4">
                    <i class="material-icons prefix">person</i>
                    <input id="nombre" type="text" name="nombre" maxlength="50" required>
                    <label for="nombre">Nombre</label>
                    <span id="span_nombre" class="error"></span>
                  </div>
                  <div class="input-field col s12 l4">
                    <input id="apaterno" type="text" name="apaterno" maxlength="50" required>
                    <label for="apaterno">Apellido paterno</label>
                    <span id="span_apaterno" class="error"></span>
                  </div>  
                  <div class="input-field col s12 l4">
                    <input id="amaterno" type="text" name="amaterno" maxlength="50" required>
                    <label for="amaterno">Apellido materno</label>
                    <span id="span_amaterno" class="error"></span>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="correo" type="email" name="correo" maxlength="100" required>
                  <label for="correo">Correo eléctronico</label>
                  <span id="span_correo" class="error"></span></span>
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
                  <span id="span_lada_movil" class="error"></span>
                </div>
                <div class="input-field col s4">
                  <input id="movil" type="text" name="movil" maxlength="7" required>
                  <label for="movil">Teléfono Móvil</label>
                  <span id="span_movil" class="error"></span>
                </div>
              </div>
              <div class="row">
                  <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Actualizar perfil</button>
              </div>
            </form>
        </div>
        
        <div id="modify_password">
        <p class="caption">Cambiar contraseña</p>
            <form id="cambiarCon" method="post" action="<?php echo $httpProtocol.$host.$url.'php/cambiarCon'?>">
              <div class="row">
                <div class="input-field col s4">
                    <i class="small material-icons prefix">lock</i>
                    <input id="oldPass" type="password" name="oldPass" maxlength="50" required>
                    <label for="oldPass">Contraseña actual</label>
                    <span id="span_oldPass" class="error"></span>
                  </div>  
                  <div class="input-field col s4">
                    <input id="newPass" type="password" name="newPass" maxlength="50" required>
                    <label for="newPass">Nueva contraseña</label>
                    <span id="span_newPass" class="error"></span>
                  </div>  
                  <div class="input-field col s4">
                    <input id="newPassCon" type="password" name="newPassCon" maxlength="50" required>
                    <label for="newPassCon">Confirma nueva contraseña</label>
                    <span id="span_newPassCon" class="error"></span>
                  </div>
              </div>
              <div class="row">
                  <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons left">cloud_upload</i>Actualizar contraseña</button>
              </div>
            </form>
        </div>
        
        
        
        
       


</section>

<?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/modificarPerfil.js"></script>';?> 
<?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/cambiarCon.js"></script>';?> 