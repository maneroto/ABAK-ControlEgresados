<div class="boxContainer">
    <img src="<?php echo $httpProtocol.$host.$url.'img/logo.png'?>" id="logo"></img>
    <form id="loginform" method="POST" action="<?php echo $httpProtocol.$host.$url.'php/loginVal'?>">
        <div class = "row">
            <div class="input-field col s12 center">
                <i class="small material-icons prefix outline">person</i>
                <input id="username" type="text" name="username" maxlength="13" />
                <label for="username">RFC</label>
            </div>
        </div>
        <div class = "row">
            <div class="input-field col s12 center">
                <i class="small material-icons prefix outline">lock</i>
                <input id="password" type="password" name="password"/>
                <label for="password">Contraseña</label>
            </div>
        </div>
        <div class = "row">
            <div class="input-field col s12 center">
                <button type="submit" class="btn waves-effect waves-light col s12">Entrar</button>
            </div>
        </div>
        <div class = "row">
            <p class="input-field col s12 right-text">
                <a href="<?php echo $httpProtocol.$host.$url.'views/recuperarContrasena'?>">
                    ¿Olvidaste tu contraseña?
                </a>
            </p>
        </div>
    </form>
</div>