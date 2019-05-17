<br>
<form class="col s12" method="POST" name="cambiarPrivilegios" id="cambiarPrivilegios">
  <div class="row">
    <div class="input-field col s12">
      <select name = "privilegios[]" id = "privilegios" multiple>
      </select>
      <label>Permisos</label>
    </div>
    <div class="center-align">
      <button class="waves-effect waves-light btn" type="submit" name="action">Cambiar permisos<i class="material-icons left">settings</i></button>
    </div>
  </div>
</form>
<?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/privilegiosInit.js"></script>';?>