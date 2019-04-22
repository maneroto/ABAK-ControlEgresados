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
              <a class="waves-effect waves-light  btn"><i class="mdi-communication-email left"></i>Contactar alumnos</a>
            </div><br>

            <div class="row">
              <div class="col s12 m4 l3">
              </div>
              <div class="col s12 m8 l12">
                  <?php include "db.html"; ?>
              </div>
            </div><br>

              <div class="col s12 m8 l2">
                <a class="waves-effect waves-light  btn"><i class="mdi-action-delete left"></i>Eliminar consulta</a>
              </div>

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
  <script>
      $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example thead tr').clone(true).appendTo( '#example thead' );
        $('#example thead tr:eq(1) th').each( function (i) {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Buscar por '+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );

        var table = $('#example').DataTable( {
            orderCellsTop: true,
            fixedHeader: true
        } );
      } );
  </script>
</body>

</html>
