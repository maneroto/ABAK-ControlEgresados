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

            <!--Finish Buttons for adding-->
            <div class="row">
              <div class="col s12 m8 l12">
                <div class="row" ng-if="showTabs">
                <div class="col s12">
                    <ul class="tabs" tabs>
                        <li class="tab col s3"><a href="#test1"><i class="mdi-social-group-add prefix"></i> Nuevo Grupo</a></li>
                        <li class="tab col s3"><a class="active" href="#test2"><i class="mdi-social-person-add prefix"></i> Nuevo Alumno</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <div class="row section">
                      <div class="col s12 m8 l12">
                        <p>Introduce aqui tu archivo con los datos del grupo</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <i class="mdi-social-group prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Carrera</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="mdi-action-schedule prefix"></i>
                        <input id="icon_prefix2" type="text" class="validate">
                        <label for="icon_prefix2">Ciclo escolar</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col s12 m8 l12">
                        <input type="file" id="input-file-events" class="dropify-event" data-default-file=""/>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action"><i class="mdi-file-cloud-upload left"></i>Subir</button>
                      </div>
                    </div>
                </div>

                <div id="test2" class="col s12">
                  <div class="row">
                    <div class="col s12 m8 l12">
                        <p>Introduce aqui los datos del alumno</p>
                        <div class="row">
                          <div class="config-panel  col s12">
                          </div>
                        </div>
                        <br/>
                        <div id="jsGrid-custom"></div>
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="input-field col s12">
                      <button class="btn cyan waves-effect waves-light right" type="submit" name="action"><i class="mdi-file-cloud-upload left"></i>Subir</button>
                    </div>
                  </div>
                </div>

            </div>
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
  <script type="text/javascript">
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('.dropify-event').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Enserio quieres remover el archivo \"" + element.filename + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('Archivo removido');
            });
        });
    </script>

</body>

</html>
