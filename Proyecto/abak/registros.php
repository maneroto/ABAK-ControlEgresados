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
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Registro de Alumnos</h5>
                <ol class="breadcrumbs">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li class="active">Registros</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="divider"></div>
          <!--jsgrid-->

            <!--Static Data-->
            <!--Basic Scenario-->
            <!--OData Service-->
            <!--Sorting-->
            <!--Loading Data by Page-->
            <!--Custom View-->
            <!--Buttons for adding-->
            <br>
            <div class="row">
                <div class="col s12 m8 l9">
                  <a class="waves-effect waves-light  btn"><i class="mdi-social-person-add left"></i>Nuevo alumno</a>
                  <a class="waves-effect waves-light  btn"><i class="mdi-social-group-add left"></i>Nuevo grupo</a>
                </div>
            </div><br>

            <!--Finish Buttons for adding-->
            <div class="row">
              <div class="col s12 m4 l3">
              </div>
              <div class="col s12 m8 l9">
                  <div id="jsGrid-custom"></div>
              </div>
            </div>

            <div class="divider"></div>
            <!--Custom Row Renderer-->
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
