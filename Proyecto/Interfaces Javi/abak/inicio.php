<!DOCTYPE html>
<html lang="es">

  <?php include 'common/header.html'; ?>
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <?php include 'common/sidenav.html'; ?>
      <!-- START CONTENT -->
      <section id="content">
        <!--start container-->
        <div class="container">
          <div class="section">
            <!--First Cards Row-->
            <div id="card-stats">
                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="consultas.php"><img src="images/alumnos.jpg" alt="alumnos-img"></a>
                            </div>
                            <div class="card-content  blue darken-4 white-text">
                                <p class="card-stats-title"><i class="mdi-action-accessibility"></i></p>
                                <h4 class="card-stats-number">Consultas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="registros.php"><img src="images/grupos.jpg" alt="grupos-img"></a>
                            </div>
                            <div class="card-content  blue darken-4 white-text">
                                <p class="card-stats-title"><i class="mdi-action-account-child"></i></p>
                                <h4 class="card-stats-number">Registros</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="encuestas.php"><img src="images/survey.jpg" alt="encuesta-img"></a>
                            </div>
                            <div class="card-content  blue darken-4 white-text">
                                <p class="card-stats-title"><i class="mdi-action-assignment"></i></p>
                                <h4 class="card-stats-number">Encuestas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a href="reportes.php"><img src="images/reportes.jpg" alt="reportes-img"></a>
                                </div>
                                <div class="card-content  blue darken-4 white-text">
                                    <p class="card-stats-title"><i class="mdi-action-assessment"></i></p>
                                    <h4 class="card-stats-number">Reportes</h4>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!--Second Cards Row-->
                <div id="card-stats">
                        <div class="row">
                                <div class="col s12 m6 l3">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <a href="organizacion.php"><img src="images/organizacion.jpg" alt="blog-img"></a>
                                            </div>
                                            <div class="card-content  blue darken-4 white-text">
                                                <p class="card-stats-title"><i class="mdi-social-group"></i></p>
                                                <h4 class="card-stats-number">Organizacion</h4>
                                            </div>
                                        </div>
                                </div>
                                <div class="col s12 m6 l3">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <a href="perfil.php"><img src="images/perfil.jpg" alt="blog-img"></a>
                                            </div>
                                            <div class="card-content  blue darken-4 white-text">
                                                <p class="card-stats-title"><i class="mdi-action-account-circle"></i></p>
                                                <h4 class="card-stats-number">Perfil</h4>
                                            </div>
                                        </div>
                                </div>
                    </div>
        </div>
        <!-- Floating Action Button -->
        <!-- Floating Action Button -->
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->
  </div>
  <!-- END MAIN -->
  <?php include 'common/footer.html'; ?>
</body>

</html>
