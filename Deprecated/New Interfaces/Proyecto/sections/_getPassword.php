     <div class="boxContainer">
            <h5 class="center">Olvidé mi contraseña</h5>
            <form id="loginForm">
                <div class = "row">
                    <div class="input-field col s12 center">
                        <i class="small material-icons prefix outline">email</i>
                        <input type="text" name="username"/>
                        <label for="username">Correo de respaldo</label>
                    </div>
                </div>
                <div class = "row">
                    <div class="input-field col s12 center">
                        <i class="small material-icons prefix outline">phone</i>
                        <input type="text" name="password"/>
                        <label for="password">Teléfono</label>
                    </div>
                </div>
                <div class = "row">
                    <div class="input-field col s12 center">
                        <button type="submit" class="btn waves-effect waves-light col s12">Recuperar</button>
                    </div>
                </div>
                <div class = "row">
                    <p class="input-field col s12 right-text">
                        <a href="<?php echo $httpProtocol.$host.$url.'index.php'?>">
                            Iniciar sesión
                        </a>
                    </p>
                </div>
            </form>
        </div>