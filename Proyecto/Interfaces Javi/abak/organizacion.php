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

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" Name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Organizacion</h5>
                <ol class="breadcrumbs">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li class="active">Organizacion</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Personas que forman parte del sistema del CBTis 145</p>
            <div class="divider"></div>
            <!--Buttons for adding-->
            <div class="row right-align">
                <br>
            <!--Finish Buttons for adding-->
            <!--encuesta frame-->
            <div class="col s12 m6 l12">
                <div id="card-stats">
                    <div class="row">
                        <div class="col s12 m6 l12">
                            <div class="card">
                                <div class="card-content blue darken-4 white-text">
                                    <h6 class="left-align">Director</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="card-alert" class="card cyan lighten-5">
                  <div class="card-content cyan-text">
                    <p class="single-alert left-align">
                      <img src="images/avatar-2.jpeg" alt="avatar" class="alert-circle responsive-img  profile-image"/>
                      <span>Alonso Oropeza</span>
                    </p>
                  </div>
                </div>

                <div id="card-stats">
                    <div class="row">
                        <div class="col s12 m6 l12">
                            <div class="card">
                                <div class="card-content blue darken-4 white-text">
                                    <h6 class="left-align">Administradores</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="card-alert" class="card cyan lighten-5">
                  <div class="card-content cyan-text">
                    <p class="single-alert left-align">
                      <img src="images/avatar-2.jpeg" alt="avatar" class="alert-circle responsive-img  profile-image"/>
                      <span>Eder Balderas</span>
                    </p>
                  </div>
                  <div class="light-blue lighten-3">
                    <a class="btn-flat waves-effect light-blue white-text"><i class="mdi-action-settings left"></i> Cambiar privilegios</a>
                  </div>
                </div>
                <div id="card-alert" class="card cyan lighten-5">
                  <div class="card-content cyan-text">
                    <p class="single-alert left-align">
                      <img src="images/avatar.jpg" alt="avatar" class="alert-circle responsive-img  profile-image"/>
                      <span>Juan Perez</span>
                    </p>
                  </div>
                  <div class="light-blue lighten-3">
                    <a class="btn-flat waves-effect light-blue white-text"><i class="mdi-action-settings left"></i> Cambiar privilegios</a>
                  </div>
                </div>
                <div id="card-alert" class="card cyan lighten-5">
                  <div class="card-content cyan-text">
                    <p class="single-alert left-align">
                      <img src="images/avatar.jpg" alt="avatar" class="alert-circle responsive-img  profile-image"/>
                      <span>Name completo</span>
                    </p>
                  </div>
                  <div class="light-blue lighten-3">
                    <a class="btn-flat waves-effect light-blue white-text"><i class="mdi-action-settings left"></i> Cambiar privilegios</a>
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
