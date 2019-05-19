<nav>
    <div class="nav-wrapper">
      <a href="<?php echo $httpProtocol.$host.$url.'views/inicio.php'?>" class="brand-logo">
          <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/cbtis-logo.png'?>"></img>
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li id="viewsInicio"><a href="<?php echo $httpProtocol.$host.$url.'views/inicio'?>">Inicio</a></li>
        <?php
        if(in_array(array("CONSULTAR ALUMNO"),$_SESSION['permisos']))
            echo '<li id="viewsAlumnos"><a href="'.$httpProtocol.$host.$url.'views/consultarAlumnos">Alumnos</a></li>';
        ?>
        <?php
        if(in_array(array("CONSULTAR GRUPO"),$_SESSION['permisos']))
            echo '<li id="viewsGrupos"><a href="'.$httpProtocol.$host.$url.'views/consultarGrupos">Grupos</a></li>';
        ?>
        <?php
        if(in_array(array("REGISTRAR ALUMNO"),$_SESSION['permisos'])||in_array(array("REGISTRAR GRUPO"),$_SESSION['permisos']))
            echo '<li id="viewsRegistros"><a href="'.$httpProtocol.$host.$url.'views/registros">Registros</a></li>';
        ?>
        <?php
        if(in_array(array("CONSULTAR ENCUESTA"),$_SESSION['permisos']))
            echo '<li id="viewsEncuestas"><a href="'.$httpProtocol.$host.$url.'views/encuestas">Encuestas</a></li>';
        ?>
        <?php
        if(in_array(array("CONSULTAR ORGANIZACION"),$_SESSION['permisos']))
            echo '<li id="viewsOrganizacion"><a href="'.$httpProtocol.$host.$url.'views/organizacion">Administradores</a></li>';
        ?>
        <?php
        if(in_array(array("CONSULTAR CUENTA"),$_SESSION['permisos']))
            echo '<li id="viewsAPerfil"><a href="'.$httpProtocol.$host.$url.'views/perfil">Mi perfil</a></li>';
        ?>
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
    <?php
    if(in_array(array("CONSULTAR ALUMNO"),$_SESSION['permisos']))
        echo '<li id="viewsAlumnos"><a href="'.$httpProtocol.$host.$url.'views/consultarAlumnos">
            <i class="small material-icons">person</i>Alumnos</a></li>';
    ?>
    <?php
    if(in_array(array("CONSULTAR GRUPO"),$_SESSION['permisos']))
        echo '<li id="viewsGrupos"><a href="'.$httpProtocol.$host.$url.'views/consultarGrupos">
            <i class="small material-icons">group</i>Grupos</a></li>';
    ?>
    <?php
    if(in_array(array("REGISTRAR ALUMNO"),$_SESSION['permisos'])||in_array(array("REGISTRAR GRUPO"),$_SESSION['permisos']))
        echo '<li id="viewsRegistros"><a href="'.$httpProtocol.$host.$url.'views/registros">
            <i class="small material-icons">add</i>Registros</a></li>';
    ?>
    <?php
    if(in_array(array("CONSULTAR ENCUESTA"),$_SESSION['permisos']))
        echo '<li id="viewsEncuestas"><a href="'.$httpProtocol.$host.$url.'views/encuestas">
            <i class="small material-icons">assignment</i>Encuestas</a></li>';
    ?>
    <?php
    if(in_array(array("CONSULTAR ORGANIZACION"),$_SESSION['permisos']))
        echo '<li id="viewsOrganizacion"><a href="'.$httpProtocol.$host.$url.'views/organizacion">
            <i class="small material-icons">group_work</i>Administradores</a></li>';
    ?>
    <?php
    if(in_array(array("CONSULTAR CUENTA"),$_SESSION['permisos']))
        echo '<li id="viewsAPerfil"><a href="'.$httpProtocol.$host.$url.'views/perfil">
            <i class="material-icons">account_circle</i>Mi perfil</a></li>';
    ?>
    <li>
        <a class="waves-effect waves-light btn red lighten-1" href="<?php echo $httpProtocol.$host.$url.'index.php?logout=true';?>">
            Cerrar sesión <i class="material-icons right">power_settings_new</i>
        </a>
    </li>
</ul>