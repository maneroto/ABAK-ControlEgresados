            <div class = "container">
                <div class = "card-stats">
                    <div class="row">
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <a href="<?php echo $httpProtocol.$host.$url.'views/consultas.php'?>">
                                    <div class="card-image waves-effect waves-block waves-light">
                                            <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/alumnos.jpg'?>">
                                    </div>
                                    <div class="card-content  blue darken-4 white-text center-align">
                                            <p class="card-stats-title">
                                                <i class="small material-icons">accessibility</i>
                                            </p>
                                            <h4 class="card-stats-number">
                                                Consultas
                                            </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <a href="<?php echo $httpProtocol.$host.$url.'views/registros.php'?>">
                                    <div class="card-image waves-effect waves-block waves-light">
                                            <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/grupos.jpg'?>">
                                    </div>
                                    <div class="card-content  blue darken-4 white-text center-align">
                                        <p class="card-stats-title">
                                            <i class="small material-icons">group</i>
                                        </p>
                                        <h4 class="card-stats-number">
                                            Registros
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <a href="<?php echo $httpProtocol.$host.$url.'views/encuestas.php'?>">
                                    <div class="card-image waves-effect waves-block waves-light">
                                            <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/survey.jpg'?>">
                                    </div>
                                    <div class="card-content  blue darken-4 white-text center-align">
                                        <p class="card-stats-title">
                                            <i class="small material-icons">assignment</i>
                                        </p>
                                        <h4 class="card-stats-number">
                                            Encuestas
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m6 l3" <?php if ($_SESSION['idrol'] != "DIRECTOR") echo "style='display:none;'"?>>
                            <div class="card">
                                <a href="<?php echo $httpProtocol.$host.$url.'views/reportes.php'?>">
                                    <div class="card-image waves-effect waves-block waves-light">
                                            <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/reportes.jpg'?>">
                                    </div>
                                    <div class="card-content  blue darken-4 white-text center-align">
                                        <p class="card-stats-title">
                                            <i class="small material-icons">insert_chart</i>
                                        </p>
                                        <h4 class="card-stats-number">
                                            Reportes
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <a href="<?php echo $httpProtocol.$host.$url.'views/organizacion.php'?>">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/organizacion.jpg'?>">
                                    </div>
                                    <div class="card-content  blue darken-4 white-text center-align">
                                        <p class="card-stats-title">
                                            <i class="small material-icons">group_work</i>
                                        </p>
                                        <h4 class="card-stats-number">
                                            Organización
                                        </h4>
                                    </div>
                                </A>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card">
                                <a href="<?php echo $httpProtocol.$host.$url.'views/perfil.php'?>">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img src="<?php echo $httpProtocol.$host.$url.'img/inicio/perfil.jpg'?>">
                                    </div>
                                    <div class="card-content  blue darken-4 white-text center-align">
                                        <p class="card-stats-title">
                                            <i class="small material-icons">account_circle</i>
                                        </p>
                                        <h4 class="card-stats-number">
                                            Perfil
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>