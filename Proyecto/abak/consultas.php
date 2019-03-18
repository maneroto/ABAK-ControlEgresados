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
                <h5 class="breadcrumbs-title">Consulta de Alumnos</h5>
                <ol class="breadcrumbs">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="#" class="active">Consultas</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Consultar información de los alumnos</p>
            <div class="divider"></div><br>
            <div class="col s12 m8 l2">
              <a class="waves-effect waves-light  btn"><i class="mdi-content-save left"></i>Guardar consulta</a>
            </div><br>

            <!--DataTables example-->
            <?php include 'db.html'; ?>

          </div>
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
