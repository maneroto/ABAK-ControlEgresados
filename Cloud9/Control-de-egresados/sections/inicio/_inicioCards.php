            <div class = "container mainContent">
                <div class = "card-stats">
                    <div class="row"> <br>
                        <?php
                            if(in_array(array("CONSULTAR ALUMNO"),$_SESSION['permisos']))
                                include('_alumnos.php');
                        ?>
                        <?php
                            if(in_array(array("CONSULTAR GRUPO"),$_SESSION['permisos']))
                                include('_grupos.php');
                        ?>
                        <?php
                            if(in_array(array("REGISTRAR ALUMNO"),$_SESSION['permisos'])||in_array(array("REGISTRAR GRUPO"),$_SESSION['permisos']))
                                include('_registros.php');
                        ?>
                        <?php
                            if(in_array(array("CONSULTAR ENCUESTA"),$_SESSION['permisos']))
                                include('_encuestas.php');
                        ?>
                        <?php
                            if(in_array(array("CONSULTAR ORGANIZACION"),$_SESSION['permisos']))
                                include('_organizacion.php');
                        ?>
                        <?php
                            if(in_array(array("CONSULTAR CUENTA"),$_SESSION['permisos']))
                                include('_perfil.php');
                        ?>
                    </div>
                </div>
            </div>
            
            <?php $js .= '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/inicioInit.js"></script>'; ?>