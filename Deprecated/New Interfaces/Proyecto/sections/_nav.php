<nav>
    <div class="nav-wrapper">
      <a href="<?php echo $httpProtocol.$host.$url.'views/inicio.php'?>" class="brand-logo">
          <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/cbtis-logo.png'?>"></img>
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo $httpProtocol.$host.$url.'views/inicio.php'?>">Inicio</a></li>
        <li><a href="<?php echo $httpProtocol.$host.$url.'views/consultas.php'?>">Alumnos</a></li>
        <li><a href="<?php echo $httpProtocol.$host.$url.'views/grupos.php'?>">Grupos</a></li>
        <li><a href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>">Registros</a></li>
        <li><a href="<?php echo $httpProtocol.$host.$url.'views/encuestas.php'?>">Encuestas</a></li>
        <li><a href="<?php echo $httpProtocol.$host.$url.'views/organizacion.php'?>">Organizacion</a></li>
        <li><a href="<?php echo $httpProtocol.$host.$url.'views/perfil.php'?>">Mi perfil</a></li>
        <li>
            <a class="waves-effect waves-light btn red lighten-1" href="<?php echo $httpProtocol.$host.$url.'index.php?logout=true';?>">
                Cerrar sesión <i class="material-icons right">power_settings_new</i>
            </a>
        </li>
      </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="<?php echo $httpProtocol.$host.$url.'views/inicio.php'?>"><i class="small material-icons">home</i>Inicio</a></li>
    <li><a href="<?php echo $httpProtocol.$host.$url.'views/consultas.php'?>"><i class="small material-icons">person</i>Alumnos</a></li>
    <li><a href="<?php echo $httpProtocol.$host.$url.'views/grupos.php'?>"><i class="small material-icons">group</i>Grupos</a></li>
    <li><a href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>"><i class="small material-icons">add</i>Registros</a></li>
    <li><a href="<?php echo $httpProtocol.$host.$url.'views/encuestas.php'?>"><i class="small material-icons">assignment</i>Encuestas</a></li>
    <li><a href="<?php echo $httpProtocol.$host.$url.'views/organizacion.php'?>"><i class="small material-icons">group_work</i>Organizacion</a></li>
    <li><a href="<?php echo $httpProtocol.$host.$url.'views/perfil.php'?>"><i class="material-icons">account_circle</i>Mi perfil</a></li>
    <li>
        <a class="waves-effect waves-light btn red lighten-1" href="<?php echo $httpProtocol.$host.$url.'index.php?logout=true';?>">
            Cerrar sesión <i class="material-icons right">power_settings_new</i>
        </a>
    </li>
</ul>