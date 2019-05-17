     <div class="boxContainer">
            <h5 class="center">Olvidé mi contraseña</h5>
            <form id="recoverForm" method="post" action="<?php echo $httpProtocol.$host.$url.'php/recoverPass'?>">
                <div class = "row">
                    <div class="input-field col s12 center">
                      <i class="small material-icons prefix outline">person</i>
                      <input id="idusuario" type="text" name="idusuario" required maxlength="13">
                      <label for="idusuario">RFC</label>
                      <span id="span_idusuario" class="error"></span>
                    </div>
                </div>
                <div class = "row">
                    <div class="input-field col s12 center">
                      <i class="small material-icons prefix outline">email</i>
                      <input id="correo" type="email" name="correo" required maxlength="100">
                      <label for="correo">Correo eléctronico</label>
                      <span id="span_correo" class="error"></span>
                    </div>
                </div>
                <div class = "row">
                    <div class="input-field col s12 center">
                        <button type="submit" class="btn waves-effect waves-light col s12">Recuperar</button>
                    </div>
                </div>
                <div class = "row">
                    <p class="input-field col s12 right-text">
                        <a href="<?php echo $httpProtocol.$host.$url.'index'?>">
                            Iniciar sesión
                        </a>
                    </p>
                </div>
            </form>
        </div>
        
        <?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/recoverPassword.js"></script>'; ?>