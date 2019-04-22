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
                                            Mis grupos
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>