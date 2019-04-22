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
                <h5 class="breadcrumbs-title">Reportes</h5>
                <ol class="breadcrumbs">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li class="active">Reportes</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Reportes basados en consultas guardadas</p>
            <div class="divider"></div>
            <!--Buttons for adding-->
            <div class="row right-align">
                <div class="col s12 m4 l3">
                </div>
                <div class="col s12 m8 l9">
                  <a class="waves-effect waves-light  btn"><i class="mdi-file-cloud-download left"></i>descargar como zip</a>
                </div>
                <br>
                <br>
                <br>
            <!--Finish Buttons for adding-->
            <!--encuesta frame-->
            <div id="card-stats">
              <div class="row">
                  <div class="col s12 m6 l3">
                      <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                              <a href=""><img src="images/reportes1.jpg" alt="alumnos-img"></a>
                          </div>
                          <div class="card-content  blue darken-4 white-text">
                              <p class="card-stats-title"><i class="mdi-action-history"></i></p>
                              <h4 class="card-stats-number">Agosto-Diciembre 2018</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col s12 m6 l3">
                      <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                              <a href=""><img src="images/reportes1.jpg" alt="grupos-img"></a>
                          </div>
                          <div class="card-content  blue darken-4 white-text">
                              <p class="card-stats-title"><i class="mdi-action-history"></i></p>
                              <h4 class="card-stats-number">Febrero - Junio 2018</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col s12 m6 l3">
                      <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                              <a href=""><img src="images/reportes1.jpg" alt="encuesta-img"></a>
                          </div>
                          <div class="card-content  blue darken-4 white-text">
                              <p class="card-stats-title"><i class="mdi-action-history"></i></p>
                              <h4 class="card-stats-number">Agosto-Diciembre 2019</h4>
                          </div>
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
